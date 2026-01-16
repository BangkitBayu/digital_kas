@php
    $activePage = 'opacity-100 bg-[#ffffff3f] shadow';
    $inactivePage = 'opacity-50';
@endphp
<div>
    <aside
        class=" lg:min-h-screen lg:w-[20vw] lg:left-0 flex lg:flex-col lg:bg-transparent top-0 lg:relative fixed w-full bg-blue-500"
        x-data='{ openNav: false }'>
        <div class="container lg:py-2 lg:px-4 lg:h-15 lg:w-full flex items-center lg:justify-start justify-between p-5">
            <h3 class=" font-bold lg:text-blue-500 lg:text-xl text-2xl text-white">
                {{ env('APP_NAME', 'laravel') }}
            </h3>
            <button
                class="lg:hidden flex flex-col space-y-1 relative cursor-pointer group transform-content ease-in delay-150"
                type="button" @click="openNav = !openNav">
                <span class=" bg-white w-4 h-1 rounded-sm group-hover:-translate-y-0.5"></span>
                <span class=" bg-white w-6 h-1 rounded-sm group-hover:translate-x-0.5"></span>
                <span class=" bg-white w-4 h-1 rounded-sm group-hover:translate-y-0.5"></span>
            </button>
        </div>
        <div id="mobileNav" x-show="openNav"
            class=" lg:hidden absolute bg-blue-500 min-w-screen min-h-screen py-4 flex flex-col justify-between "
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-x-5"
            x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-5">
            <div class=" space-y-6 relative">
                <div class=" flex justify-between items-center px-6">
                    <h3 class=" font-bold lg:text-blue-500 lg:text-xl text-2xl text-white">
                        {{ env('APP_NAME', 'laravel') }}
                    </h3>
                    <button
                        class="lg:hidden flex flex-col space-y-1 relative cursor-pointer group transform-content ease-in delay-150 me-3 -rotate-y-180"
                        type="button" @click="openNav = !openNav">
                        <span class=" bg-white w-4 h-1 rounded-sm group-hover:-translate-y-0.5"></span>
                        <span class=" bg-white w-6 h-1 rounded-sm group-hover:translate-x-0.5"></span>
                        <span class=" bg-white w-4 h-1 rounded-sm group-hover:translate-y-0.5"></span>
                    </button>
                </div>
                <nav>
                    <ul class=" flex flex-col space-y-4">
                        <li class="group relative">
                            <span
                                class='absolute w-2 h-full rounded-e-2xl bg-white left-0 {{ request()->routeIs('dashboard.profile') ? 'block' : 'hidden' }}'></span>
                            <a href="{{ route('dashboard.profile') }}"
                                class=" flex items-center space-x-3 py-3 px-6 group-hover:opacity-100 opacity-50 transition-all ease-in-out delay-150 {{ request()->routeIs('dashboard.profile') ? "$activePage" : $inactivePage }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" class=" stroke-white ">
                                    <g fill="none" stroke="" stroke-width="2">
                                        <path stroke-linejoin="round"
                                            d="M4 18a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2Z" />
                                        <circle cx="12" cy="7" r="3" />
                                    </g>
                                </svg>
                                <p class=" text-white font-medium text-md">Profile</p>
                            </a>
                        </li>
                        <li class=" group ">
                            <span
                                class='absolute w-2 h-12 rounded-e-2xl bg-white left-0 {{ request()->routeIs('dashboard.anggota-kelas') ? 'block' : 'hidden' }}'></span>
                            <a href="{{ route('dashboard.anggota_kelas') }}"
                                class=" flex items-center space-x-3 py-3 px-6 group-hover:opacity-100 opacity-50 transition-all ease-in-out delay-150 {{ request()->routeIs('dashboard.anggota_kelas') ? "$activePage" : $inactivePage }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 16 16">
                                    <path fill="#fff"
                                        d="M7.5 9a2 2 0 0 1 2 2c0 .965-.592 1.73-1.411 2.23C7.27 13.728 6.175 14 5 14s-2.27-.272-3.089-.77C1.091 12.73.5 11.965.5 11a2 2 0 0 1 2-2zm-5 1a1 1 0 0 0-1 1c0 .508.304.992.932 1.375S3.966 13 5 13s1.94-.242 2.568-.625S8.5 11.508 8.5 11a1 1 0 0 0-1-1zm11.652-.992A1.5 1.5 0 0 1 15.5 10.5c0 .771-.47 1.409-1.101 1.83c-.636.424-1.486.67-2.399.67c-.699 0-1.36-.146-1.917-.403c.16-.287.28-.601.35-.943c.423.21.964.346 1.567.346c.743 0 1.394-.202 1.844-.502c.453-.302.656-.665.656-.998a.5.5 0 0 0-.4-.49L14 10h-3.674a3 3 0 0 0-.575-.979A1.5 1.5 0 0 1 9.999 9h4zm-1.92-5.5a2.253 2.253 0 0 1 2.022 2.241l-.012.23A2.253 2.253 0 0 1 12.002 8l-.23-.012a2.25 2.25 0 0 1-2.01-2.01l-.012-.23a2.25 2.25 0 0 1 2.252-2.252zM5 2.5A2.75 2.75 0 1 1 5 8a2.75 2.75 0 0 1 0-5.5m7.002 1.997a1.252 1.252 0 1 0 0 2.504a1.252 1.252 0 0 0 0-2.504M5 3.5A1.75 1.75 0 1 0 5 7a1.75 1.75 0 0 0 0-3.5" />
                                </svg>
                                <p class=" text-white font-medium text-md">Anggota Kelas</p>
                            </a>
                        </li>
                        <li class=" group">
                            <span
                                class='absolute w-2 h-full rounded-e-2xl bg-white left-0 {{ request()->routeIs('dashboard.kelola_kas') ? 'block' : 'hidden' }}'></span>
                            <a href="{{ route('dashboard.kelola_kas') }}"
                                class=" flex items-center space-x-3 py-3 px-6 group-hover:opacity-100 opacity-50 transition-all ease-in-out delay-150 {{ request()->routeIs('dashboard.kelola_kas') ? "$activePage" : $inactivePage }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 16 16">
                                    <path fill="#fff" fill-rule="evenodd"
                                        d="M11.5 14c2.49 0 4.5-1 4.5-2.5V2c0-1-2-2-4.5-2S7 1 7 2v3.5c1.17.49 2.17 1.31 2.88 2.35c.49.096 1.03.149 1.62.149c1.31 0 2.4-.261 3.18-.686a4 4 0 0 0 .323-.198v1.38c0 .235-.187.6-.802.936c-.596.325-1.51.564-2.7.564q-.357 0-.68-.027q.12.493.16 1.01q.253.014.52.014c1.31 0 2.4-.261 3.18-.686a4 4 0 0 0 .323-.198v1.38c0 .236-.149.586-.791.932c-.632.34-1.58.568-2.71.568q-.345 0-.668-.028a6.4 6.4 0 0 1-.309.974q.472.053.976.053zm2.7-7.56c.615-.336.802-.701.802-.936v-1.38q-.155.106-.323.198c-.778.425-1.87.686-3.18.686s-2.4-.261-3.18-.686a4 4 0 0 1-.323-.198v1.38c0 .235.187.6.802.935c.596.325 1.51.564 2.7.564s2.1-.239 2.7-.564zM8 2.5c0-.288.125-.565.358-.734c.127-.092.265-.184.374-.234c.273-.126 1.64-.533 2.77-.533s2.11.227 2.77.533c.124.057.261.146.382.234c.231.167.35.442.35.727v.006c0 .235-.187.6-.802.936c-.596.325-1.51.564-2.7.564s-2.1-.24-2.7-.564C8.187 3.1 8 2.734 8 2.5"
                                        clip-rule="evenodd" />
                                    <path fill="#fff" fill-rule="evenodd"
                                        d="M9 11.5C9 13.99 6.99 16 4.5 16S0 13.99 0 11.5S2.01 7 4.5 7S9 9.01 9 11.5m-1 0C8 13.43 6.43 15 4.5 15S1 13.43 1 11.5S2.57 8 4.5 8S8 9.57 8 11.5"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class=" text-white font-medium text-md">Kelola Kas</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class=" flex flex-col items-center justify-center py-4 px-5 space-y-2" x-data="{ year: new Date().getFullYear() }">
                <a href="{{ route('logout') }}" class=" cursor-pointer w-full px-2">
                    <button
                        class=" rounded-xl bg-red-500 p-2 w-full text-white flex items-center justify-center space-x-2 hover:bg-red-400 transition-transform ease-in delay-150">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                            <g fill="#ffffff">
                                <path d="M20 5H8v4H6V3h16v18H6v-6h2v4h12z" />
                                <path
                                    d="m13.074 16.95l-1.414-1.414L14.196 13H2v-2h12.196L11.66 8.465l1.414-1.415l4.95 4.95z" />
                            </g>
                        </svg>
                        <p>Logout</p>
                    </button>
                </a>
                <p class=" text-white opacity-50 mt-3 text-center text-sm">&copy; <span x-text="year"></span> KasNeda -
                    Solusi
                    digital untuk membantu mengelola keuangan kelas</p>
            </div>
        </div>

        <nav class="container lg:py-2 lg:px-4 lg:block hidden">
            <ul>
                <li class=" hover:bg-blue-200 rounded-md transition-transform ease-in delay-150">
                    <a href="{{ route('dashboard.profile') }}" class=" flex items-center space-x-3 px-3 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                            <path fill="#3b82f6" fill-rule="evenodd"
                                d="M8 7a4 4 0 1 1 8 0a4 4 0 0 1-8 0m0 6a5 5 0 0 0-5 5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3a5 5 0 0 0-5-5z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class=" text-blue-500 font-medium text-sm">Profile</p>
                    </a>
                </li>
                <li class=" hover:bg-blue-200 rounded-md transition-transform ease-in delay-150">
                    <a href="{{ route('dashboard.anggota_kelas') }}" class=" flex items-center space-x-3 px-3 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 16 16">
                            <path fill="#3b82f6"
                                d="M7 14s-1 0-1-1s1-4 5-4s5 3 5 4s-1 1-1 1zm4-6a3 3 0 1 0 0-6a3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5" />
                        </svg>
                        <p class=" text-blue-500 font-medium text-sm">Anggota Kelas</p>
                    </a>
                </li>
                <li class=" hover:bg-blue-200 rounded-md transition-transform ease-in delay-150">
                    <a href="{{ route('dashboard.kelola_kas') }}" class=" flex items-center space-x-3 px-3 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                            <path fill="#3b82f6" d="M13.5 16a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0" />
                            <path fill="#3b82f6"
                                d="m14.347.66l3.18 4.456l2.097-.715L21.538 10h.962v12h-21V10h.51v-.01l.648.006zM9.397 10h10.028l-1.037-3.033l-1.522.487zM7.839 8.417L15.55 5.79l-1.604-2.25zM5.5 12h-2v2a2 2 0 0 0 2-2m10 4a3.5 3.5 0 1 0-7 0a3.5 3.5 0 0 0 7 0m5 4v-2a2 2 0 0 0-2 2zm-2-8a2 2 0 0 0 2 2v-2zm-15 8h2a2 2 0 0 0-2-2z" />
                        </svg>
                        <p class=" text-blue-500 font-medium text-sm">Kelola Kas</p>
                    </a>
                </li>
            </ul>
        </nav>
        <a href="{{ route('logout') }}" class=" lg:py-2 lg:px-4 cursor-pointer hidden">
            <button
                class=" rounded-md bg-red-500 p-2 w-full text-white flex items-center justify-center space-x-2 hover:bg-red-400 transition-transform ease-in delay-150">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                    <g fill="#ffffff">
                        <path d="M20 5H8v4H6V3h16v18H6v-6h2v4h12z" />
                        <path d="m13.074 16.95l-1.414-1.414L14.196 13H2v-2h12.196L11.66 8.465l1.414-1.415l4.95 4.95z" />
                    </g>
                </svg>
                <p>Logout</p>
            </button>
        </a>
    </aside>
</div>
