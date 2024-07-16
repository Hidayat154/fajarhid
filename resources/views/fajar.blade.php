<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
</head>

<body>





    <nav class="bg-black border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
            <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white text-white">Fajar</span>
            </a>
            <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
                <a href="#"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Login</a>
                <a href="#"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-100 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign
                    up</a>
                <button data-collapse-toggle="mega-menu" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mega-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div id="mega-menu" class="items-center justify-between block w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-blue-600 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-100 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-100"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="mega-menu-dropdown-button"
                            class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-100 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-100 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-100">
                            Company <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="mega-menu-dropdown"
                            class="absolute z-10  grid w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Library
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Resources
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Pro Version
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Newsletter
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Playground
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            License
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Contact Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Support Center
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Terms
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button id="mega-menu-dropdown-button-2" data-dropdown-toggle="mega-menu-dropdown-2"
                            class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-100 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-100 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-100">
                            Team <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="mega-menu-dropdown-2"
                            class="absolute z-10 grid w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700 hidden">


                            <!-- Dropdown menu content -->

                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Library
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Resources
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Pro Version
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Newsletter
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Playground
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            License
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Contact Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Support Center
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Terms
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>

                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-100 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>



    <section class="bg-white dark:bg-gray-900 mx-19 px-10  " dir="rtl">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0  lg:grid-cols-12">
            <div class="place-self-center lg:col-span-7 mx-5" dir="ltr">
                <h1
                    class=" text-gray-900 max-w-2xl mb-1 text-[40px] font-extrabold font-serif tracking-tight leading-none -center dark:text-white" >
                    Tentang Saya</h1><br>
                <p class="max-w-2xl mb-6 font-light text-gray-900 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Saya seorang laki-laki yang berkomitmen dan rajin, saya bersekolah di SMK 3 Kendari saya lebih suka praktek di lab sendiri dari pada praktek sam teman-teman tapi hanya main-main terus (kadang-kadang)</p>
                <div class="flex mx-[100px]  ml-[23px] transform scale-[125%]">
                    <svg class="h-8 w-8 mx-8 text-red-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z" />  <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" /></svg> <p class="mt-[2px] font-serif ml-[-23px] text-red-700 " > You Tube.com</p>

                    <svg class="h-8 w-8 text-blue-700 mx-8"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z" />  <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                    <p class="mt-[2px] font-serif ml-[-28px] text-blue-700">Facebook.com</p>
                    <svg class="h-8 w-8 text-pink-500 mx-8"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" /></svg><p class="mt-[2px] font-serif ml-[-23px] text-pink-700">Instagram</p>
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863.avif"
                    alt="lambang " class="rounded-lg ">
            </div>
        </div>
    </section>


    <!-- drawer component -->
    <div id="drawer-example"
        class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-label">
        <h5 id="drawer-label"
            class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
                class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>Info</h5>
        <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example"
            class="text-gray-400 bg-transparent hover:bg-gray-900 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>

        <p class="mb-6 text-sm text-gray-500 dark:text-gray-400">Supercharge your hiring by taking advantage of our <a
                href="#" class="text-blue-600 underline dark:text-blue-500 hover:no-underline">limited-time
                sale</a> for Flowbite Docs + Job Board. Unlimited access to over 190K top-ranked candidates and the #1
            design job board.</p>
        <div class="grid grid-cols-2 gap-4">
            <a href="#"
                class="px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Learn
                more</a>
            <a href="#"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get
                access <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg></a>
        </div>
    </div>

    <div class="container relative flex flex-col justify-between h-full max-w-6xl my-1 px-10 mx-auto xl:px-0 mt-5">
        <h2 class="mb-1 text-3xl font-extrabold leading-tight text-gray-900">Kemampuan</h2>
        <p class="mb-12 text-lg text-gray-500">Beberapa kemampuan saya</p>
        <div class="w-full">
            <div class="flex flex-col w-full mb-10 sm:flex-row">
                <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                    <div class="relative h-full ml-0 mr-0 sm:mr-10">
                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-indigo-500 rounded-lg"></span>
                        <div class="relative h-full p-5 bg-white border-2 border-indigo-500 rounded-lg">
                            <div class="flex items-center -mt-1">
                                <h3 class="my-2 ml-1  text-lg font-bold text-gray-800">Setting Mikrotik</h3>
                                <svg class="h-8 w-8 mx-3 text-gray-900"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="3" y="13" width="18" height="8" rx="2" />  <line x1="17" y1="17" x2="17" y2="17.01" />  <line x1="13" y1="17" x2="13" y2="17.01" />  <line x1="15" y1="13" x2="15" y2="11" />  <path d="M11.75 8.75a4 4 0 0 1 6.5 0" />  <path d="M8.5 6.5a8 8 0 0 1 13 0" /></svg> <line x1="12" y1="20" x2="12.01" y2="20" /></svg>
                            </div>
                            <p class="mt-3 mb-1 text-xs font-medium text-indigo-500 uppercase">------------</p>
                            <p class="mb-2 text-gray-600">Saya sudah (cukup bisa) setting mikrotik menggunakan kabel LAN </p>
                            <p class="mb-2 text-gray-600">Saya sudah (cukup bisa) setting mikrotik menggunakan kabel tetringan </p>

                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2">
                    <div class="relative h-full ml-0 md:mr-10">
                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-purple-500 rounded-lg"></span>
                        <div class="relative h-full p-5 bg-white border-2 border-purple-500 rounded-lg">
                            <div class="flex items-center -mt-1">
                                <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Desain Grafis</h3>
                                <svg class="h-8 w-8 mx-5 text-gray-900"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                  </svg>
                            </div>
                            <p class="mt-3 mb-1 text-xs font-medium text-purple-500 uppercase">------------</p>
                            <p class="mb-2 text-gray-600">Saya sudah (cukup bisa ) dalam membuat desain poster, baliho, logo </p>
                            <p class="mb-2 text-gray-600">Saya sudah (cukup bisa ) dalam membuat desain presentasi, dan lainnya (hanya sedikit) </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full mb-5 sm:flex-row">
                <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                    <div class="relative h-full ml-0 mr-0 sm:mr-10">
                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-blue-400 rounded-lg"></span>
                        <div class="relative h-full p-5 bg-white border-2 border-blue-400 rounded-lg">
                            <div class="flex items-center -mt-1">
                                <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Terminal</h3>
                                <svg class="h-8 w-8 mx-3 text-gray-900"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                  </svg>
                            </div>
                            <p class="mt-3 mb-1 text-xs font-medium text-blue-400 uppercase">------------</p>
                            <p class="mb-2 text-gray-600">saya cukup bisa dalam menggunakan perintah saya sudah cukup mahir dalam menginstal composer menginstal npm dan saya juga sudah bisa install laravel menggunakan terminal dan pernah membuat proyek native.php dan beberapa perintah docker </p>
                        </div>
                    </div>
                </div>
                <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                    <div class="relative h-full ml-0 mr-0 sm:mr-10">
                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-yellow-400 rounded-lg"></span>
                        <div class="relative h-full p-5 bg-white border-2 border-yellow-400 rounded-lg">
                            <div class="flex items-center -mt-1">
                                <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Mengetik</h3>
                                <svg class="h-8 w-8 mx-3 text-gray-900"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="3" y="4" width="18" height="16" rx="2" />  <line x1="7" y1="8" x2="7" y2="8.01" />  <line x1="12" y1="8" x2="12" y2="8.01" />  <line x1="17" y1="8" x2="17" y2="8.01" />  <line x1="7" y1="12" x2="7" y2="12.01" />  <line x1="12" y1="12" x2="12" y2="12.01" />  <line x1="17" y1="12" x2="17" y2="12.01" />  <line x1="7" y1="16" x2="17" y2="16" /></svg>
                            </div>
                            <p class="mt-3 mb-1 text-xs font-medium text-yellow-400 uppercase">------------</p>
                            <p class="mb-2 text-gray-600">Saya cukup mahir dalam mengetik beberapa halaman walaupun ada beberapa kata-kata yang salah tetapi secara keseluruhan no problame </p>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2">
                    <div class="relative h-full ml-0 md:mr-10">
                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-green-500 rounded-lg"></span>
                        <div class="relative h-full p-5 bg-white border-2 border-green-500 rounded-lg">
                            <div class="flex items-center -mt-1">
                                <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Main HP</h3>
                                <svg class="h-8 w-8 mx-3 text-gray-900"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="5" y="2" width="14" height="20" rx="2" ry="2" />  <line x1="12" y1="18" x2="12.01" y2="18" /></svg>
                            </div>
                            <p class="mt-3 mb-1 text-xs font-medium text-green-500 uppercase">------------</p>
                            <p class="mb-2 text-gray-600">Saya bisa main HP sampai berjam-jam maximal 3 jam hayaa untuk nonton youtube,tiktok,maingame,dan lainnya (dulu) sekarang sudah tidak mi </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-screen flex mx-20 my-4  dark:bg-gray-800  " dir="rtl">
        <div class="w-full mr-2 rtl:mr-0 pt-9 ">

            <!-- To achieve the desired progress, you can update the 'stroke-dasharray' property. -->
            <h4 class="text-3xl   py-8 text-[40px] xl  text-center dark:text-white font-bold ">Tingkat Kemampuan</h4>

            <div class="mb-7 " dir="ltr" >
                <div class="flex justify-between w-full py-1">
                    <span class="text-base text-gray-lite font-semibold dark:text-[#A6A6A6]">Setting Mikrotik</span>
                    <span class="text-base font-semibold text-gray-lite pr-5 dark:text-[#A6A6A6]">70%</span>
                </div>
                <svg class="rc-progress-line" viewBox="0 0 100 1" preserveAspectRatio="none">
                    <path class="rc-progress-line-trail" d="M 0.5,0.5
             L 99.5,0.5" stroke-linecap="round" stroke="#D9D9D9" stroke-width="1" fill-opacity="0"></path>
                    <path class="rc-progress-line-path" d="M 0.5,0.5
             L 99.5,0.5" stroke-linecap="round" stroke="#FF6464" stroke-width="1" fill-opacity="0"
                        style="stroke-dasharray: 70.2px, 100px; stroke-dashoffset: 0px; transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s linear 0s, 0.06s;">
                    </path>
                </svg>
            </div>


            <div class="mb-7" dir="ltr">
                <div class="flex justify-between py-1">
                    <span class="text-base text-gray-lite font-semibold dark:text-[#A6A6A6]">Main HP</span>
                    <span class="text-base font-semibold text-gray-lite pr-5 dark:text-[#A6A6A6]">95%</span>
                </div>
                <svg class="rc-progress-line" viewBox="0 0 100 1" preserveAspectRatio="none">
                    <path class="rc-progress-line-trail" d="M 0.5,0.5
             L 99.5,0.5" stroke-linecap="round" stroke="#D9D9D9" stroke-width="1" fill-opacity="0"></path>
                    <path class="rc-progress-line-path" d="M 0.5,0.5
             L 99.5,0.5" stroke-linecap="round" stroke="#9272D4" stroke-width="1" fill-opacity="0"
                        style="stroke-dasharray: 94.05px, 100px; stroke-dashoffset: 0px; transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s linear 0s, 0.06s;">
                    </path>
                </svg>
            </div>


            <div class="mb-7" dir="ltr">
                <div class="flex justify-between py-1">
                    <span class="text-base text-gray-lite font-semibold dark:text-[#A6A6A6]">Mengetik</span>
                    <span class="text-base font-semibold text-gray-lite pr-5 dark:text-[#A6A6A6]">79%</span>
                </div>
                <svg class="rc-progress-line" viewBox="0 0 100 1" preserveAspectRatio="none">
                    <path class="rc-progress-line-trail" d="M 0.5,0.5
             L 99.5,0.5" stroke-linecap="round" stroke="#D9D9D9" stroke-width="1" fill-opacity="0"></path>
                    <path class="rc-progress-line-path" d="M 0.5,0.5
             L 99.5,0.5" stroke-linecap="round" stroke="#5185D4" stroke-width="1" fill-opacity="0"
                        style="stroke-dasharray: 79.35px, 100px; stroke-dashoffset: 0px; transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s linear 0s, 0.06s;">
                    </path>
                </svg>
            </div>


            <div class="mb-7" dir="ltr">
                <div class="flex justify-between py-1">
                    <span class="text-base text-gray-lite font-semibold dark:text-[#A6A6A6]">Terminal</span>
                    <span class="text-base font-semibold text-gray-lite pr-5 dark:text-[#A6A6A6]">78%</span>
                </div>
                <svg class="rc-progress-line" viewBox="0 0 100 1" preserveAspectRatio="none">
                    <path class="rc-progress-line-trail" d="M 0.5,0.5
             L 99.5,0.5" stroke-linecap="round" stroke="#D9D9D9" stroke-width="1" fill-opacity="0"></path>
                    <path class="rc-progress-line-path" d="M 0.5,0.5
             L 99.5,0.5" stroke-linecap="round" stroke="#CA56F2" stroke-width="1" fill-opacity="0"
                        style="stroke-dasharray: 78.25px, 100px; stroke-dashoffset: 0px; transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s linear 0s, 0.06s;">
                    </path>
                </svg>
            </div>
            <div class="mb-7" dir="ltr">
                <div class="flex justify-between py-1">
                    <span class="text-base text-gray-lite font-semibold dark:text-[#A6A6A6]">Desain Grafis</span>
                    <span class="text-base font-semibold text-gray-lite pr-5 dark:text-[#A6A6A6]">75%</span>
                </div>
                <svg class="rc-progress-line" viewBox="0 0 100 1" preserveAspectRatio="none">
                    <path class="rc-progress-line-trail" d="M 0.5,0.5
             L 99.5,0.5" stroke-linecap="round" stroke="#D9D9D9" stroke-width="1" fill-opacity="0"></path>
                    <path class="rc-progress-line-path" d="M 0.5,0.5
             L 99.5,0.5" stroke-linecap="round" stroke="#FF6464" stroke-width="1" fill-opacity="0"
                        style="stroke-dasharray: 75.2px, 100px; stroke-dashoffset: 0px; transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s linear 0s, 0.06s;">
                    </path>
                </svg>
            </div>


        </div>
    </div>

    <div class="hidden lg:mt-0 mb-[-170px] lg:col-span-5 lg:flex justify-center">
        <img src="web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863.avif"
            alt="lambang " class="rounded-full mt-[-720px] transform scale-[55%]" width="800px" >
    </div>

    <section id="testimonies" class="py-20 bg-white-">
        <div class="max-w-6xl mx-8 md:mx-10 lg:mx-20 xl:mx-auto">


            <div class="transition duration-500 ease-in-out transform scale-100 translate-x-0 translate-y-0 opacity-100">
                <div class="mb-12 space-y-5 md:mb-16 md:text-center">

                    <p class=" text-gray-900 font-sans font-bold text-[60px] md:text-center ">
                       Hal Lain Tentang Saya
                    </p>
                </div>
            </div>


            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2  lg:grid-cols-3 lg:gap-8">


                <ul class="space-y-8 mt-[-30px]">
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div
                                class="absolute transition  rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-200 to-orange-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                                <div
                                    class="relative p-6 space-y-6 leading-none rounded-lg bg-white ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img
                                            src="praktek.jpg"
                                            class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Kanye West">
                                        <div>
                                            <h3 class="text-lg font-semibold text-black">Praktek</h3>

                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-900 text-md">Sa lebih suka praktek dari pada materi soalnya saya cara belajarnya itu 90% prakterk 5% materi 5% </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div
                                class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-200 to-orange-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                                <div
                                    class="relative p-6 space-y-6 leading-none rounded-lg bg-white ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img
                                            src="mengetik.jpg"
                                            class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                        <div>
                                            <h3 class="text-lg font-semibold text-black">Mengetik</h3>

                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-900 text-md">Sa suka ji mengetik, apa lagi mengetik makalh sa bisa ji asalkan da tidak datang ras malas ini </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div
                                class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-200 to-orange-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                                <div
                                    class="relative p-6 space-y-6 leading-none rounded-lg bg-white ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img
                                            src="membersihkan.jpg"
                                            class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Kanye West">
                                        <div>
                                            <h3 class="text-lg font-semibold text-black">Membersihkan</h3>

                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-900 text-md">sa membersihkan cuma menyapu cuci piring dengan bersihkan tempat tidur ku saja </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div
                                class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-200 to-orange-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                                <div
                                    class="relative p-6 space-y-6 leading-none rounded-lg bg-white ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img
                                            src="mapel.jpg"
                                            class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                        <div>
                                            <h3 class="text-lg font-semibold text-black">Mata Pelajaran</h3>

                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-900 text-md">Mapel yang sa suka itu mapelnnya pak Andi dengan mapelnya pak Wahyu yang lain biasa-biasa ji</p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>


                <ul class="hidden space-y-8 sm:block mt-[-30px]">
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div
                                class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-200 to-orange-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                                <div
                                    class="relative p-6 space-y-6 leading-none rounded-lg bg-white ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img
                                            src="makan.jpg"
                                            class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Parag Agrawal">
                                        <div>
                                            <h3 class="text-lg font-semibold text-black">Makanan</h3>

                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-900 text-md">makan sudah jadi kebutuhan mi kalau nda makan lapar ujung ujungnya death, sa suka makan tahu tempe saus asam manis </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div
                                class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-200 to-orange-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                                <div
                                    class="relative p-6 space-y-6 leading-none rounded-lg bg-white ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img
                                            src="kesekolah.jpg"
                                            class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                        <div>
                                            <h3 class="text-lg font-semibold text-black">Kesekolah</h3>

                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-900 text-md">ndada orang tua yang mau anaknya malas kesekolah tapi kalau hari senin kaya malas sekali ini badan da bergerak jadi sa sudah di cap mi jadi langganan pembersih sekolah hari senin</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div
                                class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-200 to-orange-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                                <div
                                    class="relative p-6 space-y-6 leading-none rounded-lg bg-white ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img
                                            src="hp.jpg"
                                            class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Parag Agrawal">
                                        <div>
                                            <h3 class="text-lg font-semibold text-black">Main HP</h3>

                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-900 text-md">ndda orang yang nda suka mian hp, tapi pernah gara-gara HP sa lupa kalau besok ulangan shett</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div
                                class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-200 to-orange-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                                <div
                                    class="relative p-6 space-y-6 leading-none rounded-lg bg-white ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img
                                            src="game.jpg"
                                            class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                        <div>
                                            <h3 class="text-lg font-semibold text-black"> Main Game</h3>

                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-900 text-md">sa suka main game apa lagi game open world itu seru, tapi ada gem moba yang sering main itu game 5V5 pasti tau mi itu, game open world yang sa suka itu game bertahan hidup di laut ada ji di plystore</p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>


                <ul class="hidden space-y-8 lg:block mt-[-30px]">
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div
                                class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-200 to-orange-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                                <div
                                    class="relative p-6 space-y-6 leading-none rounded-lg bg-white -1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img
                                            src="terminal.jpg"
                                            class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Satya Nadella">
                                        <div>
                                            <h3 class="text-lg font-semibold text-black">Terminal</h3>

                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-900 text-md">Saya suka belajar terminal linux, nda tau kenapa hampir tiap hari sa bujka terus terminalku kaya sa suka saja tapi pas sa belajar linux server kaya mulai susah tapi sa tambah semangat</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div
                                class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-200 to-orange-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                                <div
                                    class="relative p-6 space-y-6 leading-none rounded-lg bg-white ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img
                                            src="pasar.jpg"
                                            class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Dan Schulman">
                                        <div>
                                            <h3 class="text-lg font-semibold text-black">Pergi Pasar</h3>

                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-900 text-md">Sa suka antar mamaku ke pasar kalau har minggu beli ikan, tapi yang menjadi prioritas ku kesan itu untuk beli kue roting gula merah dengan taripang </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div
                                class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-200 to-orange-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                                <div
                                    class="relative p-6 space-y-6 leading-none rounded-lg bg-white ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img
                                            src="tidur.jpg"
                                            class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Satya Nadella">
                                        <div>
                                            <h3 class="text-lg font-semibold text-black">Tidur</h3>

                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-900 text-md">sa suka tidur tapi sa nda suka tidur bodo bikin sakit sakit badan aplagi pernah tidur dari jam 7 malam- jam 6 sore  </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div
                                class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-200 to-orange-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                                <div
                                    class="relative p-6 space-y-6 leading-none rounded-lg bg-white  ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img
                                            src="membaca.jpg"
                                            class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Dan Schulman">
                                        <div>
                                            <h3 class="text-lg font-semibold text-black">membaca</h3>

                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-900 text-md">Sa nda terlalu suka membaca, bikin sakit mata apalagi baca ebook 3 jam sudhami langsung KO saya </p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>


            </div>
        </div>
    </section>

    <script src="menu.js">
        // Wait for the DOM content to load before executing the script
            document.addEventListener('DOMContentLoaded', () => {
                // Function to toggle dropdown visibility
                const toggleDropdown = (buttonId, dropdownId) => {
                    const button = document.getElementById(buttonId);
                    const dropdown = document.getElementById(dropdownId);

                    button.addEventListener('click', () => {
                        dropdown.classList.toggle('hidden');
                    });

                    document.addEventListener('click', (event) => {
                        if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                            dropdown.classList.add('hidden');
                        }
                    });
                };

                // Toggle for the first dropdown
                toggleDropdown('mega-menu-dropdown-button', 'mega-menu-dropdown');

                // Toggle for the second dropdown
                toggleDropdown('mega-menu-dropdown-button-2', 'mega-menu-dropdown-2');
            });

    </script>


</body>

</html>
