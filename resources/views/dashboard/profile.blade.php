<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-[#fafafa] flex">
    <x-sidebar-menu></x-sidebar-menu>
    <main class="container lg:w-[80vw] w-full">
        <div class="container bg-white min-h-screen flex flex-col space-y-4 rounded-s-4xl shadow">
            <div class="container border-b border-b-[#d8d8d8da] px-8 py-4">
                <h2 class=" font-semibold text-xl text-primary">Profile {{ $data->kelas }}</h2>
                <p class=" lg:text-md text-sm text-secondary">Hai siswa, pada bagian profile berisi detail akun kelas kamu.</p>
            </div>
            @if (session('success'))
                <div class=" border border-green-500 rounded-sm bg-green-100 text-green-500">
                    <x-alert status="success" message="{{ session('success') }}"></x-alert>
                </div>
            @endif
            @if (session('error'))
                <div class=" border border-red-500 rounded-sm bg-red-100 text-red-500">
                    <x-alert status="error" message="{{ session('error') }}"></x-alert>
                </div>
            @endif
            <div class=" lg:px-8 lg:py-4 px-4 py-2">
                <div class="container border rounded-2xl border-[#d8d8d8da]">
                    <div class="container flex items-center space-x-2 border-b p-4 border-[#d8d8d8da]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                            <path fill="#1f2937" fill-rule="evenodd"
                                d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm10 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1m0 3a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1m0 3a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1m-8-5a3 3 0 1 1 6 0a3 3 0 0 1-6 0m1.942 4a3 3 0 0 0-2.847 2.051l-.044.133l-.004.012c-.042.126-.055.167-.042.195c.006.013.02.023.038.039c.032.025.08.064.146.155A1 1 0 0 0 6 17h6a1 1 0 0 0 .811-.415a.7.7 0 0 1 .146-.155c.019-.016.031-.026.038-.04c.014-.027 0-.068-.042-.194l-.004-.012l-.044-.133A3 3 0 0 0 10.059 14z"
                                clip-rule="evenodd" />
                        </svg>
                        <h3 class=" text-primary">Detail Akun</h3>
                    </div>
                    <form method="POST" class="p-4 flex flex-col space-y-3">
                        @csrf
                        <div class="form-group flex flex-col space-y-1">
                            <label for="kelas" class=" text-md text-primary">Kelas</label>
                            <input type="text" value="{{ $data->kelas }}"
                                class=" w-full border border-[#d8d8d8da] px-3 py-2 rounded-xl focus:outline-blue-500 ease-in delay-100 text-sm text-secondary"
                                name="kelas">
                            @error('kelas')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex flex-col space-y-1">
                            <label for="kelas" class=" text-md text-primary">Jurusan</label>
                            <input type="text" value="{{ $data->jurusan }}"
                                class=" w-full border border-[#d8d8d8da] px-3 py-2 rounded-xl focus:outline-blue-500 ease-in delay-100 text-sm text-secondary"
                                name="jurusan">
                            @error('jurusan')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex flex-col space-y-1">
                            <label for="kelas" class=" text-md text-primary">Asal sekolah</label>
                            <input type="text" value="{{ $data->asal_sekolah }}"
                                class=" w-full border border-[#d8d8d8da] px-3 py-2 rounded-xl focus:outline-blue-500 ease-in delay-100 text-sm text-secondary"
                                name="asal_sekolah">
                            @error('asal_sekolah')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group w-full flex flex-col space-y-1 rounded-s-xl">
                            <label for="password baru" class=" text-md text-primary">Password baru</label>
                            <div x-data="{ showPassword: false }"
                                class=" w-full border border-[#d8d8d8da] rounded-xl focus:outline-blue-500 ease-in delay-100 text-sm text-secondary flex">
                                <input x-bind:type="showPassword ? 'text' : 'password'"
                                    placeholder="Masukkan password baru"
                                    class="px-3 py-2 text-primary text-sm rounded-s-xl border-none outline-none w-full @error('password') border-red-500 @enderror"
                                    name="password_baru">
                                <button class=" bg-blue-500 px-3 py-2 rounded-r-xl" id=" toggle-password" type="button"
                                    @click = "showPassword = !showPassword">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" id=" show-password" x-show="showPassword"
                                        class=" transition-transform delay-150 ease-in-out">
                                        <g fill="none" stroke="#ffffff" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5">
                                            <path d="M3 13c3.6-8 14.4-8 18 0" />
                                            <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                        </g>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        x-show="!showPassword" viewBox="0 0 16 16" id=" hidden-password"
                                        class=" transition-transform delay-150 ease-in-out">
                                        <path fill="#ffffff"
                                            d="m10.12 10.827l4.026 4.027a.5.5 0 0 0 .708-.708l-13-13a.5.5 0 1 0-.708.708l3.23 3.23A6 6 0 0 0 3.2 6.182a6.7 6.7 0 0 0-1.117 1.982c-.021.061-.047.145-.047.145l-.018.062s-.076.497.355.611a.5.5 0 0 0 .611-.355l.001-.003l.008-.025l.035-.109a5.7 5.7 0 0 1 .945-1.674a5 5 0 0 1 1.124-1.014L6.675 7.38a2.5 2.5 0 1 0 3.446 3.446m-.74-.74A1.5 1.5 0 1 1 7.413 8.12zM6.32 4.2l.854.854Q7.564 5 8 5c2.044 0 3.286.912 4.028 1.817a5.7 5.7 0 0 1 .945 1.674q.025.073.035.109l.008.025v.003l.001.001a.5.5 0 0 0 .966-.257v-.003l-.001-.004l-.004-.013a2 2 0 0 0-.06-.187a6.7 6.7 0 0 0-1.117-1.982C11.905 5.089 10.396 4 8.002 4c-.618 0-1.177.072-1.681.199" />
                                    </svg>
                                </button>
                            </div>
                            @error('password_baru')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group w-full flex flex-col space-y-1 rounded-s-xl">
                            <label for="konfirmasi password" class=" text-md text-primary">Konfirmasi password
                                baru</label>
                            <div x-data="{ showPassword: false }"
                                class=" w-full border border-[#d8d8d8da] rounded-xl focus:outline-blue-500 ease-in delay-100 text-sm text-secondary flex">
                                <input x-bind:type="showPassword ? 'text' : 'password'"
                                    placeholder="Konfirmasi password baru"
                                    class="px-3 py-2 text-primary rounded-s-xl text-sm border-none outline-none w-full @error('password') border-red-500 @enderror"
                                    name="konfirmasi_password">
                                <button class=" bg-blue-500 px-3 py-2 rounded-r-xl" id=" toggle-password" type="button"
                                    @click = "showPassword = !showPassword">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" id=" show-password" x-show="showPassword"
                                        class=" transition-transform delay-150 ease-in-out">
                                        <g fill="none" stroke="#ffffff" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5">
                                            <path d="M3 13c3.6-8 14.4-8 18 0" />
                                            <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                        </g>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        x-show="!showPassword" viewBox="0 0 16 16" id=" hidden-password"
                                        class=" transition-transform delay-150 ease-in-out">
                                        <path fill="#ffffff"
                                            d="m10.12 10.827l4.026 4.027a.5.5 0 0 0 .708-.708l-13-13a.5.5 0 1 0-.708.708l3.23 3.23A6 6 0 0 0 3.2 6.182a6.7 6.7 0 0 0-1.117 1.982c-.021.061-.047.145-.047.145l-.018.062s-.076.497.355.611a.5.5 0 0 0 .611-.355l.001-.003l.008-.025l.035-.109a5.7 5.7 0 0 1 .945-1.674a5 5 0 0 1 1.124-1.014L6.675 7.38a2.5 2.5 0 1 0 3.446 3.446m-.74-.74A1.5 1.5 0 1 1 7.413 8.12zM6.32 4.2l.854.854Q7.564 5 8 5c2.044 0 3.286.912 4.028 1.817a5.7 5.7 0 0 1 .945 1.674q.025.073.035.109l.008.025v.003l.001.001a.5.5 0 0 0 .966-.257v-.003l-.001-.004l-.004-.013a2 2 0 0 0-.06-.187a6.7 6.7 0 0 0-1.117-1.982C11.905 5.089 10.396 4 8.002 4c-.618 0-1.177.072-1.681.199" />
                                    </svg>
                                </button>
                            </div>
                            @error('konfirmasi_password')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group w-full flex flex-col space-y-1 rounded-s-xl">
                            <label for="password lama" class=" text-md text-primary">Password</label>
                            <p class=" text-secondary text-sm">Password saat ini diperlukan untuk melakukan
                                perubahan.</p>
                            <div x-data="{ showPassword: false }"
                                class=" w-full border border-[#d8d8d8da] rounded-xl focus:outline-blue-500 ease-in delay-100 text-sm text-secondary flex">
                                <input x-bind:type="showPassword ? 'text' : 'password'" placeholder=""
                                    class="px-3 py-2 text-primary text-sm rounded-s-xl border-none outline-none w-full @error('password') border-red-500 @enderror"
                                    name="password_lama">
                                <button class=" bg-blue-500 px-3 py-2 rounded-r-xl" id=" toggle-password"
                                    type="button" @click = "showPassword = !showPassword">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" id=" show-password" x-show="showPassword"
                                        class=" transition-transform delay-150 ease-in-out">
                                        <g fill="none" stroke="#ffffff" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5">
                                            <path d="M3 13c3.6-8 14.4-8 18 0" />
                                            <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                        </g>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        x-show="!showPassword" viewBox="0 0 16 16" id=" hidden-password"
                                        class=" transition-transform delay-150 ease-in-out">
                                        <path fill="#ffffff"
                                            d="m10.12 10.827l4.026 4.027a.5.5 0 0 0 .708-.708l-13-13a.5.5 0 1 0-.708.708l3.23 3.23A6 6 0 0 0 3.2 6.182a6.7 6.7 0 0 0-1.117 1.982c-.021.061-.047.145-.047.145l-.018.062s-.076.497.355.611a.5.5 0 0 0 .611-.355l.001-.003l.008-.025l.035-.109a5.7 5.7 0 0 1 .945-1.674a5 5 0 0 1 1.124-1.014L6.675 7.38a2.5 2.5 0 1 0 3.446 3.446m-.74-.74A1.5 1.5 0 1 1 7.413 8.12zM6.32 4.2l.854.854Q7.564 5 8 5c2.044 0 3.286.912 4.028 1.817a5.7 5.7 0 0 1 .945 1.674q.025.073.035.109l.008.025v.003l.001.001a.5.5 0 0 0 .966-.257v-.003l-.001-.004l-.004-.013a2 2 0 0 0-.06-.187a6.7 6.7 0 0 0-1.117-1.982C11.905 5.089 10.396 4 8.002 4c-.618 0-1.177.072-1.681.199" />
                                    </svg>
                                </button>
                            </div>
                            @error('password_lama')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                </div>
                <button
                    class=" text-white w-full px-3 py-2 rounded-xl bg-blue-500 hover:bg-blue-400 transition-colors ease-in delay-150 mt-3 cursor-pointer"
                    type="submit">Simpan
                    perubahan</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
