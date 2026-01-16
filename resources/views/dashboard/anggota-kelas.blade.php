<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-[#fafafa] lg:flex">
    <x-sidebar-menu></x-sidebar-menu>
    <main class="container lg:w-[80vw] w-full relative overflow-hidden" x-data>
        <div
            class="container bg-white min-h-screen flex flex-col space-y-4 lg:rounded-s-4xl shadow lg:mt-0 mt-18" x-bind:class="$store.modal.open ? ' blur-sm h-screen w-screen' : ''">
            <div class="container border-b border-b-[#d8d8d8da] px-8 py-4">
                <h2 class=" font-semibold text-xl text-primary">Anggota Kelas {{ $data->kelas }}</h2>
                <p class=" lg:text-md text-sm text-secondary">Hai siswa, pada bagian anggota kelas berisi detail anggota
                    kelas kamu .</p>
            </div>

            <div class="lg:px-8 lg:py-4 px-4 py-2">
                <div class="container border rounded-2xl border-[#d8d8d8da]">
                    <div class="container flex items-center space-x-2 border-b p-4 border-[#d8d8d8da]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 16 16">
                            <path fill="#1f2937"
                                d="M7 14s-1 0-1-1s1-4 5-4s5 3 5 4s-1 1-1 1zm4-6a3 3 0 1 0 0-6a3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5" />
                        </svg>
                        <h3 class=" text-primary">Anggota Kelas</h3>
                    </div>
                    <div class="container flex items-center space-x-2 border-b px-4 py-2 border-[#d8d8d8da]">
                        <button class="flex space-x-2 px-3 py-2 border border-[#d8d8d8da] cursor-pointer rounded-xl"
                            @click="$store.modal.open = true" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path fill="#1f2937"
                                    d="M12.5 4.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0m5 .5a2 2 0 1 1-4 0a2 2 0 0 1 4 0m-13 2a2 2 0 1 0 0-4a2 2 0 0 0 0 4M6 9.25C6 8.56 6.56 8 7.25 8h5.5a1.25 1.25 0 0 1 1.23 1.024a5.5 5.5 0 0 0-3.73 8.968A4 4 0 0 1 6 14zm8.989-.229c1.139.1 2.178.548 3.011 1.236V9.25C18 8.56 17.44 8 16.75 8h-2.129c.2.298.33.646.367 1.021M5 9.25c0-.463.14-.892.379-1.25H3.25C2.56 8 2 8.56 2 9.25V13a3 3 0 0 0 3.404 2.973A5 5 0 0 1 5 14zm14 5.25a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0m-4-2a.5.5 0 0 0-1 0V14h-1.5a.5.5 0 0 0 0 1H14v1.5a.5.5 0 0 0 1 0V15h1.5a.5.5 0 0 0 0-1H15z" />
                            </svg>
                            <p class=" text-primary text-sm">Tambah</p>


                        </button>
                    </div>
                    <div
                        class="container flex items-center space-x-2 border-b p-3 border-[#d8d8d8da] overflow-x-scroll">
                        @if (empty($data->anggota_kelas))
                            <div class="w-full min-h-[20vh] flex justify-center items-center">
                                <p class=" text-sm text-secondary">Belum ada anggota kelas</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <x-modal title="Tambah anggota kelas" textBtn1="Batal" textBtn2="Tambah">
            <form method="POST" class="flex flex-col space-y-2">
                <div class="form-group flex flex-col w-full">
                    <label for="nama" class=" font-semibold text-sm">Nama lengkap</label>
                    <input type="text" placeholder="John Doe"
                        class=" mt-1 w-full border rounded-sm px-3 py-1 focus:outline-blue-500 border-[#d8d8d8da] text-primary text-sm @error('nama') border-red-500 @enderror"
                        name="nama" value="{{ old('nama') }}">
                    @error('nama')
                        <span class=" text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group flex flex-col w-full">
                    <label for="role" class=" font-semibold text-sm">Role</label>
                    <select name="role" id="role"
                        class="mt-1 w-full border rounded-sm px-3 py-1 focus:outline-blue-500 border-[#d8d8d8da] text-primary text-sm">
                        <option>Pilih role</option>
                        <option value="ketuaKelas">Ketua Kelas</option>
                        <option value="wakilKetuaKelas">Wakil Ketua Kelas</option>
                        <option value="sekertaris">Sekertaris</option>
                        <option value="bendahara">Bendahara</option>
                        <option value="anggota">Anggota</option>
                    </select>
                    @error('role')
                        <span class=" text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group flex flex-col w-full">
                    <label for="no_telepon" class=" font-semibold text-sm">No telepon</label>
                    <input type="number" placeholder="081234567890"
                        class=" mt-1 w-full border rounded-sm px-3 py-1 focus:outline-blue-500 border-[#d8d8d8da] text-primary text-sm @error('no_telepon') border-red-500 @enderror"
                        name="no_telepon" value="{{ old('no_telepon') }}">
                    @error('no_telepon')
                        <span class=" text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </form>
        </x-modal>

    </main>
</body>
