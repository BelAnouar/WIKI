<?php

if (!isset($_SESSION["user"])) {
    redirectTo("/login");
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <div class="flex w-full  h-screen font-sans text-gray-900 bg-white  overflow-x-auto">
        <aside class="flex relative flex-col py-4 px-6 w-64 border-r border-gray-200 ">
            <button class=" absolute -right-2.5 flex justify-center items-center bg-gray-100 rounded-full border border-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

            </button>
            <a href="dashboard">

                <svg class="w-28" viewBox="0 0 328 87.3" class="looka-1j8o68f">
                    <defs id="SvgjsDefs1544"></defs>
                    <g id="SvgjsG1545" featurekey="symbolContainer" transform="matrix(0.9,0,0,0.9,0,0)" fill="#315c84">
                        <rect xmlns="http://www.w3.org/2000/svg" width="120" height="97" rx="10" ry="10"></rect>
                    </g>
                    <g id="SvgjsG1546" featurekey="monogramFeature-0" transform="matrix(1.3567325674765414,0,0,1.3567325674765414,9.92962859404561,-8.983908778283915)" fill="#fcfcfc">
                        <path d="M46.706 17.808 c0.2199 -1.2184 15.9 6.4914 15.239 7.1742 c-3.3031 4.8304 -6.1344 10.284 -8.6298 16.036 c-2.4971 5.7557 -4.6759 11.804 -6.7872 17.928 c-0.48176 1.3264 -5.5111 0.39727 -5.6108 -1.0703 c0.00064452 -0.018457 0.0019336 -0.036914 0.0025781 -0.055371 c-0.07371 -0.069258 -0.13916 -0.14614 -0.18364 -0.24146 c-2.0161 -5.382 -3.9933 -10.75 -6.168 -15.961 c-0.66546 -1.5889 -1.3525 -3.1645 -2.0612 -4.7191 c-0.79956 1.7033 -1.5896 3.4187 -2.3669 5.1494 l-6.729 15.235 c0.00064452 0.18369 0.0044531 0.36803 0.0044531 0.55172 c-0.019688 1.4065 -5.0878 2.0961 -5.6521 0.82626 c-1.8044 -5.9134 -3.9457 -11.684 -6.3954 -17.238 c-2.4539 -5.5473 -5.2289 -10.889 -8.349 -15.788 c-0.64194 -0.70548 15.311 -7.8306 15.466 -6.6702 c1.805 6.5454 2.9866 13.051 3.7741 19.529 c0.2161 1.8069 0.3985 3.6113 0.5536 5.4132 l0.9159 -4.02 c0.66672 -2.8467 1.3583 -5.6998 2.1229 -8.5668 c0.76902 -2.869 1.5959 -5.7456 2.6414 -8.6838 c0.10998 -0.42838 1.8292 0.1265 3.7518 0.96612 c2.0313 -0.96162 3.9297 -1.6487 4.0524 -1.2019 c2.1781 5.778 3.5617 11.523 4.7413 17.237 c0.27644 1.3589 0.53701 2.7164 0.7887 4.0721 c0.16904 -1.8616 0.36229 -3.7295 0.59361 -5.607 c0.82752 -6.6756 2.1038 -13.475 4.2857 -20.295 z"></path>
                    </g>
                    <g id="SvgjsG1547" featurekey="nameFeature-0" transform="matrix(2.820953942232127,0,0,2.820953942232127,127.09730097991519,-34.781206474772844)" fill="#111111">
                        <path d="M27.8 15.52 l5.84 0 l-4.52 24.48 l-8.88 0 l-3.2 -14.28 l-3.4 14.28 l-9.36 0 l-3.96 -24.48 l6.12 0 l2.76 18.32 l3.6 -14.28 l8.52 0 l3.44 14.28 z M34.606 15.52 l6 0 l0 24.48 l-6 0 l0 -24.48 z M43.532000000000004 15.52 l6 0 l0 11.48 l7.88 -11.48 l7.44 0 l-8.56 12.24 l8.88 12.24 l-7.36 0 l-8.28 -11.52 l0 11.52 l-6 0 l0 -24.48 z M65.218 15.52 l6 0 l0 24.48 l-6 0 l0 -24.48 z"></path>
                    </g>
                </svg>
            </a>

            <ul class="flex flex-col gap-y-3.5 pt-12">
                <li>
                    <a href="/dashboard" class="flex gap-x-3 items-center group">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600 fill-current group-hover:text-blue-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>


                        <span class="inline-block text-lg leading-6 text-gray-700 group-hover:text-gray-800 group-hover:font-semibold"> Home</span>
                    </a>
                </li>
                <li>
                    <a href="/category" class="flex gap-x-3 gap-y-5 items-center group">


                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600 fill-current group-hover:text-blue-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                        </svg>



                        <span class="inline-block text-lg leading-6 text-gray-700 group-hover:text-gray-800 group-hover:font-semibold"> Gestion categories</span>
                    </a>
                </li>
                <li> <a href="/tag" class="flex gap-x-3 items-center group">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600 fill-current group-hover:text-blue-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                        </svg>



                        <span class="inline-block text-lg leading-6 text-gray-700 group-hover:text-gray-800 group-hover:font-semibold"> Gestion Tags</span>
                    </a>
                </li>
                <li> <a href="/archive" class="flex gap-x-3 items-center group">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600 fill-current group-hover:text-blue-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>



                        <span class="inline-block text-lg leading-6 text-gray-700 group-hover:text-gray-800 group-hover:font-semibold"> Archive Wiki</span>
                    </a>
                </li>
            </ul>
        </aside>

        <main class="flex flex-col flex-1 ">
            <header class=" py-4 bg-white shadow-md ">
                <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                    <!-- Mobile hamburger -->
                    <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="toggleSideMenu" aria-label="Menu">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Search input -->
                    <div class="flex justify-center flex-1 lg:mr-32">
                        <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                            <div class="absolute inset-y-0 flex items-center pl-2">
                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input class="w-full pl-8 py-2 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md  focus:border border-black  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" placeholder="Search for projects" aria-label="Search" />
                        </div>
                    </div>
                    <ul class="flex items-center flex-shrink-0 space-x-6">
                        <!-- Theme toggler -->
                        <li class="flex">
                            <button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme" aria-label="Toggle color mode">
                                <template x-if="!dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                    </svg>
                                </template>
                                <template x-if="dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                                    </svg>
                                </template>
                            </button>
                        </li>

                        <!-- Profile menu -->
                        <li class="relative">

                            <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                                <img class="object-cover w-8 h-8 rounded-full" src="                c" alt="" aria-hidden="true" />
                            </button>
                            <template x-if="isProfileMenuOpen">
                                <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu" class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700" aria-label="submenu">
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                            </svg>
                                            <span>Log out</span>
                                        </a>
                                    </li>
                                </ul>
                            </template>
                        </li>
                    </ul>
                </div>
            </header>