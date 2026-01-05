<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main>
        <div class=" w-full flex items-center justify-center min-h-screen">
            <div class=" flex flex-col space-y-2 p-3 rounded-md w-full shadow-2xl max-w-90 lg:max-w-95 relative">
                <div class=" flex flex-col w-full text-center">
                    <h1 class=" text-xl font-semibold lg:text-2xl text-primary">Masuk Kembali</h1>
                    <p class=" text-sm truncate-3 text-secondary">Hai siswa, silahkan masuk kembali ke akun kelas kamu.
                    </p>
                </div>
                <form method="POST" class=" w-full p-2 flex-col space-y-3">
                    @csrf

                    @if (session('error'))
                        <div class=" border border-red-500 rounded-sm bg-red-100 text-red-500">
                            <x-alert status="error" message="{{ session('error') }}"></x-alert>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class=" border border-green-500 rounded-sm bg-green-100 text-green-500">
                            <x-alert status="success" message="{{ session('success') }}"></x-alert>
                        </div>
                    @endif
                    <div class="form-group flex flex-col w-full">
                        <label for="kelas"
                            class=" font-semibold text-sm after:ml-0.5 after:text-red-500 after:content-['*']">Kelas</label>
                        <input type="text" placeholder="Ex: X RPL A"
                            class=" mt-1 w-full border rounded-sm px-2 py-1 border-border text-primary text-sm @error('kelas') border-red-500 @enderror"
                            name="kelas" value="{{ old('kelas') }}">
                        @error('kelas')
                            <span class=" text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group w-full flex flex-col space-y-2">
                        <div class=" flex justify-between w-full">
                            <label for="password"
                                class=" font-semibold text-sm after:ml-0.5 after:text-red-500 after:content-['*']">Password</label>
                            <a href="{{ route('reset-password') }}"
                                class=" text-sm text-blue-500 font-normal hover:underline">Lupa password?</a>
                        </div>
                        <div x-data="{ showPassword: false }"
                            class=" w-full border rounded-sm px-2 py-1 border-border flex justify-between space-x-2">
                            <input x-bind:type="showPassword ? 'text' : 'password'" placeholder="Masukkan password"
                                class=" text-primary text-sm border-none outline-none w-full @error('password') border-red-500 @enderror"
                                name="password" value="{{ old('password') }}">
                            <button class="" id=" toggle-password" type="button""
                                @click = "showPassword = !showPassword">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" id=" show-password" x-show="showPassword"
                                    class=" transition-transform delay-150 ease-in-out">
                                    <g fill="none" stroke="#727272db" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5">
                                        <path d="M3 13c3.6-8 14.4-8 18 0" />
                                        <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                    </g>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    x-show="!showPassword" viewBox="0 0 16 16" id=" hidden-password"
                                    class=" transition-transform delay-150 ease-in-out">
                                    <path fill="#727272db"
                                        d="m10.12 10.827l4.026 4.027a.5.5 0 0 0 .708-.708l-13-13a.5.5 0 1 0-.708.708l3.23 3.23A6 6 0 0 0 3.2 6.182a6.7 6.7 0 0 0-1.117 1.982c-.021.061-.047.145-.047.145l-.018.062s-.076.497.355.611a.5.5 0 0 0 .611-.355l.001-.003l.008-.025l.035-.109a5.7 5.7 0 0 1 .945-1.674a5 5 0 0 1 1.124-1.014L6.675 7.38a2.5 2.5 0 1 0 3.446 3.446m-.74-.74A1.5 1.5 0 1 1 7.413 8.12zM6.32 4.2l.854.854Q7.564 5 8 5c2.044 0 3.286.912 4.028 1.817a5.7 5.7 0 0 1 .945 1.674q.025.073.035.109l.008.025v.003l.001.001a.5.5 0 0 0 .966-.257v-.003l-.001-.004l-.004-.013a2 2 0 0 0-.06-.187a6.7 6.7 0 0 0-1.117-1.982C11.905 5.089 10.396 4 8.002 4c-.618 0-1.177.072-1.681.199" />
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <span class=" text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <button
                        class=" w-full p-2 bg-blue-500 rounded-sm text-sm text-blue-100 cursor-pointer">Login</button>

                    <p class=" text-sm font-normal text-center text-secondary mt-2">Jika belum memiliki akun, silahkan
                        <a href="{{ route('register') }}" class=" text-blue-500 hover:underline">Register.</a>
                    </p>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
