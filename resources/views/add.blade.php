<x-app-layout>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

<body>
    <div>
        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
            type="button"
            class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
            </svg>
        </button>

        <div id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-[#00B4FE] dark:bg-gray-800">
                <div class="flex items-center justify-center ps-2.5 mb-5 w-full">
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Planify</span>
                </div>
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="/dashboard"
                            class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-white hover:text-[#00B4FE] rounded-lg hover:bg-white">
                            <svg class="flex-shrink-0 w-5 h-5 mr-4" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/projects"
                            class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-white hover:text-[#00B4FE] rounded-lg hover:bg-white">
                            <svg class="flex-shrink-0 w-5 h-5 mr-4" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            Project
                        </a>
                    </li>
                </ul>

                <div class="px-4 mt-6">
                    <hr class="border-gray-200" />
                </div>
            </div>
        </div>

        <div class="p-4 sm:ml-64">
            <nav class="bg-white border-gray-200 dark:bg-gray-900 z-20 top-0 start-0 border-b  dark:border-gray-600">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
                    <span class="self-center text-2xl whitespace-nowrap dark:text-white text font-bold">Buat Project
                        baru</span>
                    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                        <button type="button"
                            class="text-white bg-[#00B4FE] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                            Project</button>
                        <button data-collapse-toggle="navbar-cta" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="navbar-cta" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>

            <div class="min-h-screen bg-white flex">
                <div class="h-screen w-full p-2">
                    <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">
                        <div class="p-2">
                            <h2 class="text-lg font-poppins font-bold"><span>Buat Project</span></h2>
                        </div>
                        <div class="flex">
                            <a href="{{ route('projects.index') }}">
                                <button
                                    class="bg-white hover:bg-[#00B4FE] text-black hover:text-white transition ease-linear py-1 px-3 border rounded-xl font-poppins font-semibold text-md">
                                    <i class="fa-solid fa-caret-left"></i>
                                    Kembali
                                </button>
                            </a>
                        </div>
                        
                        <form action="/projects/add" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="relative flex flex-col shadow-lg mb-6 rounded-lg p-4">
                                <div class="block bg-transparent w-full overflow-x-auto">
                                    <div class="flex w-full">
                                        <div class="mt-3 w-1/2">
                                            <div class="w-full flex border-solid border rounded-lg">
                                                <div class="w-4/12 bg-gray-200 p-2 rounded-l-lg">
                                                    <span class="text-md font-poppins font-semibold text-black">Nama</span>
                                                </div>
                                                <div class="w-8/12 p-2 rounded-l-lg">
                                                    <input class="h-full w-full outline-none font-poppins"
                                                        type="text" name="name">
                                                </div>
                                            </div>

                                            <div class="w-full flex border-solid border rounded-lg mt-2">
                                                <div class="w-6/12 bg-gray-200 p-2 rounded-l-lg">
                                                    <span class="text-md font-poppins font-semibold text-black">Tanggal</span>
                                                </div>
                                                <input class="h-full w-full outline-none font-poppins" type="date" name="date">
                                            </div>
                                        </div>
                                        <div class="ml-2 mt-1 w-1/2">
                                            <div class="w-full flex border-solid border rounded-lg mt-2">
                                                <div class="w-4/12 bg-gray-200 p-2 rounded-l-lg">
                                                    <span class="text-md font-poppins font-semibold text-black">Deskripsi</span>
                                                </div>
                                                <div class="w-8/12 p-2 rounded-l-lg">
                                                    <input class="h-full w-full outline-none font-poppins"
                                                        type="text" name="desc">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full mt-3 flex items-end justify-end">
                                        <a href="/projects">
                                            <button
                                                class="bg-white hover:bg-[#00B4FE] text-black hover:text-white transition ease-linear py-2 px-3 border  rounded-xl font-poppins font-semibold text-md"
                                                type="submit">
                                                Tambah
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    flatpickr("#start", {
        dateFormat: "D-m-y",
    });

    flatpickr("#end", {
        dateFormat: "D-m-y",
    });
</script>

</x-app-layout>
