<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    public function postRegister(Request $request): RedirectResponse
    {
        $request->validate([
            'kelas' => 'required',
            'jurusan' => 'required',
            'asal_sekolah' => 'required',
            'password' => 'required|min:8',
            'konfirmasi_password' => 'required|same:password'
        ], [
            'kelas.required' => "Kelas wajib diisi.",
            'jurusan.required' => "Jurusan wajib diisi.",
            'asal_sekolah.required' => "Asal sekolah wajib diisi.",
            'password.required' => "Password wajib diisi.",
            'password.min' => "Password minimal 8 karakter.",
            'konfirmasi_password.required' => "Konfirmasi password wajib diisi.",
            'konfirmasi_password.same' => "Password tidak cocok.",

        ]);


        $payload = $request->only(['kelas', 'jurusan', 'asal_sekolah', 'password']);

        try {
            Kelas::create([
                'kelas' => $payload['kelas'],
                'jurusan' => $payload['jurusan'],
                'asal_sekolah' => $payload['asal_sekolah'],
                'password' => bcrypt($payload['password'])
            ]);
            return redirect('/auth/login')->with([
                'success' => true,
                'message' => 'Registrasi berhasil, silahkan login.'
            ]);
        } catch (Exception $e) {
            return redirect('/auth/register')->with([
                'success' => false,
                'message' => 'Registrasi gagal, silahkan coba lagi.'
            ]);
        }
    }

    public function postLogin(Request $request): RedirectResponse
    {
        $payload = $request->validate([
            'kelas' => 'required',
            'password' => 'required'
        ], [
            'kelas.required' => "Kelas wajib diisi.",
            'password.required' => "Password wajib diisi.",
        ]);

        $credentials = [
            "kelas" => $payload['kelas'],
            "password" => $payload['password']
        ];

        if (!Auth::guard('kelas')->attempt($credentials)) {
            return redirect('/auth/register')->with('error', 'Maaf, Akun tidak ditemukan, silahkan daftar terlebih dahulu!.');
        }

        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }

    public function resetPassword(Request $request): RedirectResponse
    {
        $request->validate([
            'kelas' => 'required',
            'password' => 'required|min:8',
            'konfirmasi_password' => 'required|same:password'
        ], [
            'kelas.required' => "Kelas wajib diisi.",
            'password.required' => "Password wajib diisi.",
            'password.min' => "Password minimal 8 karakter.",
            'konfirmasi_password.required' => "Konfirmasi password wajib diisi.",
            'konfirmasi_password.same' => "Password tidak cocok.",
        ]);

        $payload = $request->only(['kelas', 'password']);
        $classAccount = Kelas::where('kelas', $payload['kelas'])->first();
        if (!$classAccount) {
            return redirect('/auth/register')->with('error', 'Maaf, Reset password gagal karena akun tidak ditemukan.Silahkan daftar terlebih dahulu!');
        }

        try {
            $classAccount->password = Hash::make($payload['password']);
            $classAccount->save();

            return redirect('/auth/login')->with('success', "Reset password berhasil, Silahkan login!");
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', "Maaf, terjadi kesalahan saat menyimpan password. Silahkan coba lagi!");
        }
    }
}
