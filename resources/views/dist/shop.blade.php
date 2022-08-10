<x-guest-layout>



    <!-- ========== { HEADER }==========  -->
    <header>
        <!-- Navbar -->
        <nav x-data="{ open: false }"
            class="nav-top flex flex-nowrap lg:flex-start items-center z-20 top-0 left-0 right-0 bg-indigo-600 bg-gradient-to-r from-indigo-800 via-indigo-700 to-green-500 dark:from-gray-800 dark:via-gray-700 dark:to-green-700 overflow-y-auto max-h-screen lg:overflow-visible lg:max-h-full">
            <div class="container mx-auto px-4 xl:max-w-6xl ">
                <!-- mobile navigation -->
                <div class="flex flex-row justify-between py-3 lg:hidden">
                    <!-- logo -->
                    <a class="flex items-center py-2 mr-4 text-xl" href="index.html">
                        <h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden">
                            <!-- <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="{{ ('/img/logo.png"> -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 ltr:mr-2 rtl:ml-2 -mt-1"
                                viewBox="0 0 300.000000 300.000000">
                                <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)"
                                    fill="currentColor" stroke="none">
                                    <path class="text-pink-500"
                                        d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                  -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                  -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                  5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                  58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                  465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z" />
                                    <path class="text-indigo-500"
                                        d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                  0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                  -687 428 -110 29 -111 28 -153 -37z" />
                                    <path class="text-indigo-500"
                                        d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                  l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                  62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                  -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                  -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                  217 -10 16 -14 14 -45 -18z" />
                                </g>
                            </svg><span class="text-gray-200">Taildash</span>
                        </h2>
                    </a>

                    <!-- navbar toggler -->
                    <div class="right-0 flex items-center">
                        <!-- Mobile menu button-->
                        <button id="navbartoggle" type="button"
                            class="inline-flex items-center justify-center text-gray-200 focus:outline-none focus:ring-0"
                            aria-controls="mobile-menu" @click="open = !open" aria-expanded="false"
                            x-bind:aria-expanded="open.toString()">
                            <span class="sr-only">Mobile menu</span>
                            <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed"
                                class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>

                            <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed"
                                class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="lg:hidden fixed w-full h-full inset-0 z-40" id="mobile-menu" x-description="Mobile menu"
                    x-show="open" style="display: none;">
                    <!-- bg open -->
                    <span class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>

                    <!-- Mobile navbar -->
                    <nav id="mobile-nav"
                        class="flex flex-col ltr:right-0 rtl:left-0 w-64 fixed top-0 py-4 bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-400 h-full overflow-auto z-40"
                        x-show="open" @click.away="open=false" x-description="Mobile menu" role="menu"
                        aria-orientation="vertical" aria-labelledby="navbartoggle"
                        x-transition:enter="transform transition-transform duration-300"
                        x-transition:enter-start="ltr:translate-x-full rtl:-translate-x-full"
                        x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition-transform duration-300"
                        x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="ltr:translate-x-full rtl:-translate-x-full">
                        <div class="mb-auto">
                            <!--logo-->
                            <div class="mh-18 text-center px-12 mb-8">
                                <a href="landing.html#" class="flex relative">
                                    <h2 class="text-2xl font-semibold text-gray-200 max-h-9">
                                        <!-- <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="{{ ('/img/logo.png"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="inline-block w-7 h-7 ltr:mr-2 rtl:ml-2 -mt-1"
                                            viewBox="0 0 300.000000 300.000000">
                                            <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)"
                                                fill="currentColor" stroke="none">
                                                <path class="text-pink-500"
                                                    d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                      -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                      -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                      5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                      58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                      465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z" />
                                                <path class="text-indigo-500"
                                                    d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                      0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                      -687 428 -110 29 -111 28 -153 -37z" />
                                                <path class="text-indigo-500"
                                                    d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                      l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                      62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                      -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                      -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                      217 -10 16 -14 14 -45 -18z" />
                                            </g>
                                        </svg><span class="text-gray-700 dark:text-gray-200">Taildash</span>
                                    </h2>
                                </a>
                            </div>

                            <!--navigation-->
                            <div class="mb-4">
                                <nav class="relative flex flex-wrap items-center justify-between">
                                    <ul id="side-menu" class="w-full float-none flex flex-col">
                                        <li class="relative">
                                            <a href="landing.html#"
                                                class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Home</a>
                                        </li>
                                        <li class="relative">
                                            <a href="landing.html#"
                                                class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Features</a>
                                        </li>
                                        <li class="relative">
                                            <a href="landing.html#"
                                                class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Pricing</a>
                                        </li>
                                        <li class="relative">
                                            <a href="landing.html#"
                                                class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Faq</a>
                                        </li>
                                        <!-- dropdown -->
                                        <li class="relative" x-data="{ open: false }"
                                            @keydown.escape.stop="open = false" @click.away="open = false">
                                            <a id="mobiledrop-03"
                                                class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500"
                                                href="javascript:;" @click="open = !open" aria-haspopup="true"
                                                x-bind:aria-expanded="open" :class="{ 'text-indigo-500': open }">
                                                Docs
                                                <!-- caret -->
                                                <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="transform transition duration-300"
                                                        :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }"
                                                        width=".8rem" height=".8rem" fill="currentColor"
                                                        viewBox="0 0 512 512">
                                                        <polyline points="112 184 256 328 400 184"
                                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                    </svg>
                                                </span>
                                            </a>

                                            <!-- dropdown menu -->
                                            <ul class="block rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right mb-4"
                                                style="min-width: 12rem" x-description="Dropdown menu" x-show="open"
                                                role="menu" aria-orientation="vertical"
                                                aria-labelledby="mobiledrop-03">
                                                <li class="relative">
                                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500"
                                                        href="docs/introduction.html">Documentation</a>
                                                </li>
                                                <li class="relative">
                                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500"
                                                        href="components/alerts.html">Components</a>
                                                </li>
                                                <li class="relative">
                                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500"
                                                        href="docs/changelog.html">Changelog</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="relative">
                                            <a href="landing.html#"
                                                class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- copyright -->
                        <div class="mt-5 text-center">
                            <p>Copyright <a href="landing.html#">Tailnet</a> - All right reserved</p>
                        </div>
                    </nav>
                </div><!-- End Mobile menu -->

                <!-- desktop menu -->
                <div class="hidden lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-between lg:mt-0"
                    id="desktp-menu">
                    <!-- logo -->
                    <a class="hidden lg:flex items-center py-2 mr-4 text-xl" href="index.html">
                        <h2 class="text-2xl font-semibold px-4 max-h-9 overflow-hidden">
                            <!-- <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="{{ ('/img/logo.png"> -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="inline-block w-7 h-7 ltr:mr-2 rtl:ml-2 -mt-1"
                                viewBox="0 0 300.000000 300.000000">
                                <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)"
                                    fill="currentColor" stroke="none">
                                    <path class="text-pink-500"
                                        d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                  -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                  -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                  5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                  58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                  465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z" />
                                    <path class="text-indigo-500"
                                        d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                  0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                  -687 428 -110 29 -111 28 -153 -37z" />
                                    <path class="text-indigo-500"
                                        d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                  l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                  62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                  -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                  -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                  217 -10 16 -14 14 -45 -18z" />
                                </g>
                            </svg><span class="text-gray-200">Taildash</span>
                        </h2>
                    </a>

                    <!-- menu -->
                    <ul class="flex flex-col lg:mx-auto mt-2 lg:flex-row lg:mt-0 text-gray-200">
                        <li class="relative">
                            <a class="block py-3 lg:py-7 px-6 hover:text-white focus:text-white" href="landing.html#">
                                Home
                            </a>
                        </li>
                        <li class="relative">
                            <a class="block py-3 lg:py-7 px-6 hover:text-white focus:text-white" href="landing.html#">
                                Features
                            </a>
                        </li>
                        <li class="relative">
                            <a class="block py-3 lg:py-7 px-6 hover:text-white focus:text-white" href="landing.html#">
                                Pricing
                            </a>
                        </li>
                        <li class="relative">
                            <a class="block py-3 lg:py-7 px-6 hover:text-white focus:text-white" href="landing.html#">
                                Faq
                            </a>
                        </li>
                        <!-- dropdown -->
                        <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                            @mouseleave="open = false">
                            <a id="dropdown-01" class="block py-3 lg:py-7 px-6 hover:text-white focus:text-white"
                                href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                                x-bind:aria-expanded="open" :class="{ 'text-white': open }">
                                Docs
                                <!-- caret -->
                                <span class="inline-block ltr:ml-2 rtl:mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem"
                                        fill="currentColor" viewBox="0 0 512 512">
                                        <polyline points="112 184 256 328 400 184"
                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                    </svg>
                                </span>
                            </a>
                            <!-- dropdown menu -->
                            <ul class="block absolute left-1/2 right-auto border-t-2 transform -translate-x-1/2 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white text-gray-700 dark:text-gray-200 dark:bg-gray-800 border dark:border-gray-700 shadow-md"
                                style="min-width: 12rem" x-show="open" @click.away="open = false"
                                x-transition:enter="transition-all duration-200 ease-out"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition-all duration-200 ease-in"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95">
                                <li class="relative">
                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500"
                                        href="docs/introduction.html">Documentation</a>
                                </li>
                                <li class="relative">
                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500"
                                        href="components/alerts.html">Components</a>
                                </li>
                                <li class="relative">
                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500"
                                        href="docs/changelog.html">Changelog</a>
                                </li>
                            </ul>
                        </li>
                        <li class="relative">
                            <a class="block py-3 lg:py-7 px-6 hover:text-white focus:text-white" href="landing.html#">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <!-- button -->
                    <div class="grid text-center lg:block my-4 lg:my-auto">
                        <a class="py-2 px-4 text-sm inline-block text-center rounded leading-5 text-gray-100 bg-pink-500 border border-pink-500 hover:text-gray-300 hover:bg-pink-600 hover:ring-0 hover:border-pink-600 focus:bg-pink-600 focus:border-pink-600 focus:outline-none focus:ring-0"
                            target="_blank" rel="noopener" href="landing.html#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline ltr:mr-1 rtl:ml-1" width="1.2rem"
                                height="1.2rem" fill="currentColor" viewBox="0 0 512 512">
                                <circle cx="176" cy="416" r="16"
                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                <circle cx="400" cy="416" r="16"
                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                <polyline points="48 80 112 80 160 352 416 352"
                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                <path d="M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128"
                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                            </svg> Buy Now
                        </a>
                    </div>
                </div><!-- end desktop menu -->
            </div>
        </nav><!-- End Navbar -->
    </header><!-- end header -->

    <!-- header -->
    <header class="mt-28 py-4 shadow-sm bg-pink-100 lg:bg-white">
        <div class="container flex items-center justify-between">
            <!-- logo -->
            <a href="#" class="block w-32">
                <img src="images/logo.svg" alt="logo" class="w-full">
            </a>
            <!-- logo end -->

            <!-- searchbar -->
            <div class="w-full xl:max-w-xl lg:max-w-lg lg:flex relative hidden">
                <span class="absolute left-4 top-3 text-lg text-gray-400">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text"
                    class="pl-12 w-full border border-r-0 border-primary py-3 px-3 rounded-l-md focus:ring-primary focus:border-primary"
                    placeholder="search">
                <button type="submit"
                    class="bg-primary border border-primary text-white px-8 font-medium rounded-r-md hover:bg-transparent hover:text-primary transition">
                    Search
                </button>
            </div>
            <!-- searchbar end -->

            <!-- navicons -->
            <div class="space-x-4 flex items-center">
                <a href="wishlist.html"
                    class="block text-center text-gray-700 hover:text-primary transition relative">
                    <span
                        class="absolute -right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">5</span>
                    <div class="text-2xl">
                        <i class="far fa-heart"></i>
                    </div>
                    <div class="text-xs leading-3">Wish List</div>
                </a>
                <a href="cart.html"
                    class="lg:block text-center text-gray-700 hover:text-primary transition hidden relative">
                    <span
                        class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">3</span>
                    <div class="text-2xl">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="text-xs leading-3">Cart</div>
                </a>
                <a href="account.html" class="block text-center text-gray-700 hover:text-primary transition">
                    <div class="text-2xl">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="text-xs leading-3">Account</div>
                </a>
            </div>
            <!-- navicons end -->

        </div>
    </header>
    <!-- header end -->

    <!-- navbar -->
    <nav class="bg-gray-800 hidden lg:block">
        <div class="container">
            <div class="flex">

                <!-- all category -->
                <div class="px-8 py-4 bg-primary flex items-center cursor-pointer group relative">
                    <span class="text-white">
                        <i class="fas fa-bars"></i>
                    </span>
                    <span class="capitalize ml-2 text-white">All categories</span>
                    <div
                        class="absolute left-0 top-full w-full divide-gray-300 divide-dashed divide-y bg-white shadow-md py-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible transition duration-300 z-50">
                        <!-- single category -->
                        <a href="#"
                            class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/bed.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Bedroom</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#"
                            class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/sofa.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Sofa</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#"
                            class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/office.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Office</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#"
                            class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/terrace.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Outdoor</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#"
                            class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/bed-2.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Mattress</span>
                        </a>
                        <!-- single category end -->
                        <!-- single category -->
                        <a href="#"
                            class="px-6 py-3 flex items-center border-gray-300 hover:bg-gray-100 transition">
                            <img src="images/icons/restaurant.svg" class="w-5 h-5 object-contain">
                            <span class="ml-6 text-gray-600 text-sm">Sofa</span>
                        </a>
                        <!-- single category end -->
                    </div>
                </div>
                <!-- all category end -->

                <!-- nav menu -->
                <div class="flex items-center justify-between flex-grow pl-12">
                    <div class="flex items-center space-x-6 text-base capitalize">
                        <a href="index.html" class="text-gray-200 hover:text-white transition">Home</a>
                        <a href="shop.html" class="text-gray-200 hover:text-white transition">Shop</a>
                        <a href="#" class="text-gray-200 hover:text-white transition">About us</a>
                        <a href="#" class="text-gray-200 hover:text-white transition">Contact us</a>
                    </div>
                    <a href="login.html" class="ml-auto justify-self-end text-gray-200 hover:text-white transition">
                        Login/Register
                    </a>
                </div>
                <!-- nav menu end -->

            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- mobile menubar -->
    <div
        class="fixed w-full border-t border-gray-200 shadow-sm bg-white py-3 bottom-0 left-0 flex justify-around items-start px-6 lg:hidden z-40">
        <a href="javascript:void(0)" class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl" id="menuBar">
                <i class="fas fa-bars"></i>
            </div>
            <div class="text-xs leading-3">Menu</div>
        </a>
        <a href="#" class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
                <i class="fas fa-list-ul"></i>
            </div>
            <div class="text-xs leading-3">Category</div>
        </a>
        <a href="#" class="block text-center text-gray-700 hover:text-primary transition relative">
            <div class="text-2xl">
                <i class="fas fa-search"></i>
            </div>
            <div class="text-xs leading-3">Search</div>
        </a>
        <a href="cart.html" class="text-center text-gray-700 hover:text-primary transition relative">
            <span
                class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">3</span>
            <div class="text-2xl">
                <i class="fas fa-shopping-bag"></i>
            </div>
            <div class="text-xs leading-3">Cart</div>
        </a>
    </div>
    <!-- mobile menu end -->

    <!-- mobile sidebar menu -->
    <div class="fixed left-0 top-0 w-full h-full z-50 bg-black bg-opacity-30 shadow hidden" id="mobileMenu">
        <div class="absolute left-0 top-0 w-72 h-full z-50 bg-white shadow">
            <div id="closeMenu"
                class="text-gray-400 hover:text-primary text-lg absolute right-3 top-3 cursor-pointer">
                <i class="fas fa-times"></i>
            </div>
            <!-- navlink -->
            <h3 class="text-xl font-semibold text-gray-700 mb-1 font-roboto pl-4 pt-4">Menu</h3>
            <div class="">
                <a href="index.html" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Home
                </a>
                <a href="shop.html" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Shop
                </a>
                <a href="#" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    About Us
                </a>
                <roa href="#" class="block px-4 py-2 font-medium transition hover:bg-gray-100">
                    Contact Us
                </roa>
            </div>
            <!-- navlinks end -->
        </div>
    </div>
    <!-- mobile sidebar menu end -->

    <!-- breadcrum -->
    <div class="container py-4 flex justify-between">
        <div class="flex gap-3 items-center">
            <a href="index.html" class="text-primary text-base">
                <i class="fas fa-home"></i>
            </a>
            <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
            <p class="text-gray-600 font-medium">Shop</p>
        </div>
    </div>
    <!-- breadcrum end -->

    <!-- shop wrapper -->
    <div class="container grid lg:grid-cols-4 gap-6 pt-4 pb-16 items-start relative">
        <!-- sidebar -->
        <div
            class="col-span-1 bg-white px-4 pt-4 pb-6 shadow rounded overflow-hidden absolute lg:static left-4 top-16 z-10 w-72 lg:w-full lg:block">
            <div class="divide-gray-200 divide-y space-y-5 relative">
                <!-- category filter -->
                <div class="relative">
                    <div
                        class="lg:hidden text-gray-400 hover:text-primary text-lg absolute right-0 top-0 cursor-pointer">
                        <i class="fas fa-times"></i>
                    </div>
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Categories</h3>
                    <div class="space-y-2">
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Bedroom"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Bedroom" class="text-gray-600 ml-3 cursor-pointer">Bedroom</label>
                            <div class="ml-auto text-gray-600 text-sm">(15)</div>
                        </div>
                        <!-- single category end -->
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Sofa"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Sofa" class="text-gray-600 ml-3 cursor-pointer">Sofa</label>
                            <div class="ml-auto text-gray-600 text-sm">(05)</div>
                        </div>
                        <!-- single category end -->
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Office"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Office" class="text-gray-600 ml-3 cursor-pointer">Office</label>
                            <div class="ml-auto text-gray-600 text-sm">(09)</div>
                        </div>
                        <!-- single category end -->
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Outdoor"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Outdoor" class="text-gray-600 ml-3 cursor-pointer">Outdoor</label>
                            <div class="ml-auto text-gray-600 text-sm">(19)</div>
                        </div>
                        <!-- single category end -->
                    </div>
                </div>
                <!-- category filter end -->
                <!-- brand filter -->
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Brands</h3>
                    <div class="space-y-2">
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Dominik"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Dominik" class="text-gray-600 ml-3 cursor-pointer">Dominik</label>
                            <div class="ml-auto text-gray-600 text-sm">(15)</div>
                        </div>
                        <!-- single brand name end -->
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Karl"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Karl" class="text-gray-600 ml-3 cursor-pointer">Karl</label>
                            <div class="ml-auto text-gray-600 text-sm">(18)</div>
                        </div>
                        <!-- single brand name end -->
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Maxing"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Maxing" class="text-gray-600 ml-3 cursor-pointer">Maxing</label>
                            <div class="ml-auto text-gray-600 text-sm">(09)</div>
                        </div>
                        <!-- single brand name end -->
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Ernest"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Ernest" class="text-gray-600 ml-3 cursor-pointer">Ernest</label>
                            <div class="ml-auto text-gray-600 text-sm">(12)</div>
                        </div>
                        <!-- single brand name end -->
                    </div>
                </div>
                <!-- brand filter end -->
                <!-- price filter -->
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Price</h3>
                    <div class="mt-4 flex items-center">
                        <input type="text"
                            class="w-full border-gray-300 focus:ring-0 focus:border-primary px-3 py-1 text-gray-600 text-sm shadow-sm rounded"
                            placeholder="min">
                        <span class="mx-3 text-gray-500">-</span>
                        <input type="text"
                            class="w-full border-gray-300 focus:ring-0 focus:border-primary px-3 py-1 text-gray-600 text-sm shadow-sm rounded"
                            placeholder="mix">
                    </div>
                </div>
                <!-- price filter end -->
                <!-- size filter -->
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">size</h3>
                    <div class="flex items-center gap-2">
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-xs">
                            <label for="size-xs"
                                class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                                XS
                            </label>
                        </div>
                        <!-- single size end -->
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-s">
                            <label for="size-s"
                                class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                                S
                            </label>
                        </div>
                        <!-- single size end -->
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-m" checked>
                            <label for="size-m"
                                class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                                M
                            </label>
                        </div>
                        <!-- single size end -->
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-l">
                            <label for="size-l"
                                class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                                L
                            </label>
                        </div>
                        <!-- single size end -->
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-xl">
                            <label for="size-xl"
                                class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                                XL
                            </label>
                        </div>
                        <!-- single size end -->
                    </div>
                </div>
                <!-- size filter end -->
                <!-- color filter -->
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">color</h3>
                    <div class="flex items-center gap-2">
                        <!-- single color -->
                        <div class="color-selector">
                            <input type="radio" name="color" class="hidden" id="color-red" checked>
                            <label for="color-red" style="background-color : #fc3d57"
                                class="text-xs border border-gray-200 rounded-sm h-5 w-5 flex items-center justify-center cursor-pointer shadow-sm">
                            </label>
                        </div>
                        <!-- single color end -->
                        <!-- single color -->
                        <div class="color-selector">
                            <input type="radio" name="color" class="hidden" id="color-white">
                            <label for="color-white" style="background-color : #fff"
                                class="text-xs border border-gray-200 rounded-sm h-5 w-5 flex items-center justify-center cursor-pointer shadow-sm">
                            </label>
                        </div>
                        <!-- single color end -->
                        <!-- single color -->
                        <div class="color-selector">
                            <input type="radio" name="color" class="hidden" id="color-black">
                            <label for="color-black" style="background-color : #000"
                                class="text-xs border border-gray-200 rounded-sm h-5 w-5 flex items-center justify-center cursor-pointer shadow-sm">
                            </label>
                        </div>
                        <!-- single color end -->
                    </div>
                </div>
                <!-- color filter end -->
            </div>
        </div>
        <!-- sidebar end -->

        <!-- products -->
        <div class="col-span-3">
            <!-- sorting -->
            <div class="mb-4 flex items-center">
                <button="showFilter=!showFilter"
                    class="bg-primary border border-primary text-white px-10 py-3 font-medium rounded uppercase hover:bg-transparent hover:text-primary transition lg:hidden text-sm mr-3 focus:outline-none">
                    Filter
                    </button>
                    <select
                        class="w-44 text-sm text-gray-600 px-4 py-3 border-gray-300 shadow-sm rounded focus:ring-primary focus:border-primary">
                        <option>Default sorting</option>
                        <option>Price low-high</option>
                        <option>Price high-low</option>
                        <option>Latest product</option>
                    </select>
                    <div class="flex gap-2 ml-auto">
                        <div
                            class="border border-primary w-10 h-9 flex items-center justify-center text-white bg-primary rounded cursor-pointer">
                            <i class="fas fa-th"></i>
                        </div>
                        <div
                            class="border border-gray-300 w-10 h-9 flex items-center justify-center text-gray-600 rounded cursor-pointer">
                            <i class="fas fa-list"></i>
                        </div>
                    </div>
            </div>
            <!-- sorting end -->
            <!-- product wrapper -->
            <div class="grid lg:grid-cols-2 xl:grid-cols-3 sm:grid-cols-2 gap-6">
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="images/products/product4.jpg" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="view.html"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="view.html">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Guyer chair
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                    <span:key="n"><i class="fas fa-star"></i></span>
                                        <span:key="n"><i class="fas fa-star"></i></span>
                                            <span:key="n"><i class="fas fa-star"></i></span>
                                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="images/products/product9.jpg" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="view.html"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="view.html">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Guyer chair
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                    <span:key="n"><i class="fas fa-star"></i></span>
                                        <span:key="n"><i class="fas fa-star"></i></span>
                                            <span:key="n"><i class="fas fa-star"></i></span>
                                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="images/products/product1.jpg" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="view.html"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="view.html">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Guyer chair
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                    <span:key="n"><i class="fas fa-star"></i></span>
                                        <span:key="n"><i class="fas fa-star"></i></span>
                                            <span:key="n"><i class="fas fa-star"></i></span>
                                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="images/products/product8.jpg" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="view.html"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="view.html">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Guyer chair
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                    <span:key="n"><i class="fas fa-star"></i></span>
                                        <span:key="n"><i class="fas fa-star"></i></span>
                                            <span:key="n"><i class="fas fa-star"></i></span>
                                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="images/products/product10.jpg" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="view.html"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="view.html">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Guyer chair
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                    <span:key="n"><i class="fas fa-star"></i></span>
                                        <span:key="n"><i class="fas fa-star"></i></span>
                                            <span:key="n"><i class="fas fa-star"></i></span>
                                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="images/products/product11.jpg" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="view.html"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="view.html">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Guyer chair
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">$45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                    <span:key="n"><i class="fas fa-star"></i></span>
                                        <span:key="n"><i class="fas fa-star"></i></span>
                                            <span:key="n"><i class="fas fa-star"></i></span>
                                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
            </div>
            <!-- product wrapper end -->
        </div>
        <!-- products end -->
    </div>
    <!-- shop wrapper end -->




    <script>
        let menuBar = document.querySelector('#menuBar')
        let mobileMenu = document.querySelector('#mobileMenu')
        let closeMenu = document.querySelector('#closeMenu')

        menuBar.addEventListener('click', function() {
            mobileMenu.classList.remove('hidden')
        })

        closeMenu.addEventListener('click', function() {
            mobileMenu.classList.add('hidden')
        })
    </script>


</x-guest-layout>
