<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="overflow-x-hidden bg-white">
        <header class="py-4 md:py-6" x-data="{ expanded: false }">
            <nav
                class="bg-white shadow dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">Welcome to Planify</span>
                    </a>
                    @if (Route::has('login'))
                        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse lg:space-x-3">
                            
                            @auth
                                <a href="{{ url('/dashboard') }}" class="hidden lg:inline-flex items-center justify-center px-5 py-2.5 text-base transition-all duration-200 hover:bg-[#00B4FE] hover:text-white focus:text-white focus:bg-[#00B4FE] font-semibold text-white bg-black rounded-full"
                                role="button">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="hidden lg:inline-flex items-center justify-center px-5 py-2.5 text-base transition-all duration-200 hover:bg-[#00B4FE] hover:text-white focus:text-white focus:bg-[#00B4FE] font-semibold text-white bg-black rounded-full"
                                role="button">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="hidden lg:inline-flex items-center justify-center px-5 py-2.5 text-base transition-all duration-200 hover:bg-[#00B4FE] hover:text-white focus:text-white focus:bg-[#00B4FE] font-semibold text-white bg-black rounded-full"
                                role="button">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </nav>
        </header>

        <section class="bg-white bg-opacity-30 py-10 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <h1 class="mt-4 text-4xl font-bold text-black lg:mt-8 sm:text-6xl xl:text-6xl">Simple to-do list
                            maker that meets your team's need</h1>
                        <p class="mt-4 text-base text-black lg:mt-8 sm:text-xl">Plan, organize, and collaborate on any
                            project with task management that can be customized for every need.</p>
                    </div>

                    <div>
                        <img class="w-full" src="/images/illustrasi.jpg" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 bg-white sm:py-16 lg:py-20">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl xl:text-5xl font-pj">Project
                        Management Doesn't Have To Be Hard</h2>
                </div>

                <div
                    class="grid grid-cols-1 mt-10 text-center sm:mt-16 sm:grid-cols-2 sm:gap-x-12 gap-y-12 md:grid-cols-3 md:gap-0 xl:mt-24">
                    <div class="md:p-8 lg:p-14">
                        <svg class="mx-auto" width="46" height="46" viewBox="0 0 46 46" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M45 29V23C45 10.85 35.15 1 23 1C10.85 1 1 10.85 1 23V29" stroke="#161616"
                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M13 29H1V41C1 43.209 2.791 45 5 45H13V29Z" fill="#D4D4D8" stroke="#161616"
                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M45 29H33V45H41C43.209 45 45 43.209 45 41V29Z" fill="#D4D4D8" stroke="#161616"
                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <h3 class="mt-12 text-xl font-bold text-gray-900 font-pj">Support</h3>
                        <p class="mt-5 text-base text-gray-600 font-pj">Lorem ipsum dolor sit amet, consectetur adipis
                            elit. Sit enim nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.</p>
                    </div>

                    <div class="md:p-8 lg:p-14 md:border-l md:border-gray-200">
                        <svg class="mx-auto" width="46" height="46" viewBox="0 0 46 46" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M27 27H19V45H27V27Z" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9 37H1V45H9V37Z" fill="#D4D4D8" stroke="#161616" stroke-width="2"
                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M45 17H37V45H45V17Z" fill="#D4D4D8" stroke="#161616" stroke-width="2"
                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5 17L15 7L23 15L37 1" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M28 1H37V10" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3 class="mt-12 text-xl font-bold text-gray-900 font-pj">Sales</h3>
                        <p class="mt-5 text-base text-gray-600 font-pj">Lorem ipsum dolor sit amet, consectetur adipis
                            elit. Sit enim nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.</p>
                    </div>

                    <div class="md:p-8 lg:p-14 md:border-l md:border-gray-200">
                        <svg class="mx-auto" width="42" height="42" viewBox="0 0 42 42" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M41 1H1V41H41V1Z" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18 7H7V20H18V7Z" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18 26H7V35H18V26Z" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M35 7H24V35H35V7Z" fill="#D4D4D8" stroke="#161616" stroke-width="2"
                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3 class="mt-12 text-xl font-bold text-gray-900 font-pj">Onboarding</h3>
                        <p class="mt-5 text-base text-gray-600 font-pj">Lorem ipsum dolor sit amet, consectetur adipis
                            elit. Sit enim nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-10 bg-[#00B4FE] sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold leading-tight text-white sm:text-4xl lg:text-5xl">Project Management
                        Shouldn't Take You Away From Your Business.</h2>
                    <p class="max-w-lg mx-auto mt-4 text-base leading-relaxed text-white">Freedcamp helps you stay on
                        track, on deadline, and save time on project management. We help you…</p>
                </div>

                <div class="relative mt-12 lg:mt-20">
                    <div class="relative grid grid-cols-1 text-center gap-y-12 md:grid-cols-3 gap-x-12">
                        <div>
                            <div
                                class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                                <span class="text-xl font-semibold text-gray-700"> 1 </span>
                            </div>
                            <h3 class="mt-6 text-xl font-semibold leading-tight text-white md:mt-10">to-dos</h3>
                            <p class="mt-4 text-base text-white">Amet minim mollit non deserunt ullamco est sit aliqua
                                dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        </div>

                        <div>
                            <div
                                class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                                <span class="text-xl font-semibold text-gray-700"> 2 </span>
                            </div>
                            <h3 class="mt-6 text-xl font-semibold leading-tight text-white md:mt-10">project</h3>
                            <p class="mt-4 text-base text-white">Amet minim mollit non deserunt ullamco est sit aliqua
                                dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        </div>

                        <div>
                            <div
                                class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                                <span class="text-xl font-semibold text-gray-700"> 3 </span>
                            </div>
                            <h3 class="mt-6 text-xl font-semibold leading-tight text-white md:mt-10">task</h3>
                            <p class="mt-4 text-base text-white">Amet minim mollit non deserunt ullamco est sit aliqua
                                dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-12 bg-white sm:pt-16">
            <div class="pb-12 bg-white">
                <div class="relative">
                    <div class="absolute inset-0 h-2/3 bg-white"></div>
                    <div class="relative mx-auto">
                        <div class="lg:max-w-6xl lg:mx-auto">
                            <img class="transform scale-110"
                                src="https://cdn.rareblocks.xyz/collection/clarity/images/hero/2/illustration.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-white dark:bg-gray-900 border">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="link ke project" class="flex items-center">
                            <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white ">Planify</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources
                            </h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                                </li>
                                <li>
                                    <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us
                            </h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://github.com/themesberg/flowbite"
                                        class="hover:underline ">Github</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a
                            href="link ke project" class="hover:underline">Planify™</a> </span>
                    <div class="flex mt-4 sm:justify-center sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">GitHub account</span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>