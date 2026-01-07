<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function editProfile(Request $request)
    {
        $request->validate([
            "kelas" => "required",
            "jurusan" => "required",
            "asal_sekolah" => "required",
            "password_baru" => "required|min:8",
            "konfirmasi_password" => "required|same:password_baru",
            "password_lama" => "required"
        ], [
            'kelas.required' => "Kelas tidak boleh kosong.",
            'jurusan.required' => "Jurusan tidak boleh kosong.",
            'asal_sekolah.required' => "Asal sekolah tidak boleh kosong.",
            'konfirmasi_password.required' => "Konfirmasi password tidak boleh kosong.",
            'konfirmasi_password.same' => "Password tidak cocok.",
            'password_baru.required' => "Password tidak boleh kosong.",
            'password_baru.min' => "Password minimal 8 karakter.",
            'password_lama.required' => "Password tidak boleh kosong.",
        ]);

        $payload = $request->only(["kelas", "jurusan", "asal_sekolah", "password_baru", "password_lama"]);

        $classData = Kelas::where('kelas', $payload['kelas'])->first();

        if (Hash::check($payload["password_lama"], $classData->password)) {
            try {
                $classData->password = Hash::make($payload["password_baru"]);
                $classData->save();

                return redirect()->back()->with("success", "Yay, profile akun kelas kamu berhasil diperbaharui.");
            } catch (\Throwable $th) {
                return redirect()->back()->with("error", "Maaf, terjadi kesalahan saat menyimpan perubahan. Silahkan coba lagi!");
            }
        } else {
            return redirect()->back()->with("error", "Maaf, password yang kamu masukkan tidak cocok. Silahkan coba lagi!");
        }
    }
}
