<div>
    <aside class=" lg:min-h-screen lg:w-[20vw] lg:left-0 lg:flex flex-col hidden">
        <div class="container lg:py-2 lg:px-4 lg:h-15 lg:w-full flex items-center justify-start">
            <h3 class=" font-bold text-blue-500 text-xl">DigitalKas</h3>
        </div>
        <nav class="container lg:py-2 lg:px-4">
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
        <a href="{{ route('logout') }}" class=" lg:py-2 lg:px-4 cursor-pointer">
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
