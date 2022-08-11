<header>
    <!-- Navbar -->
    <nav x-data="{ open: false }"
        class="flex flex-nowrap lg:flex-start items-center z-20 top-0 left-0 right-0 bg-white shadow overflow-y-auto max-h-screen lg:overflow-visible lg:max-h-full">
        <div class="container mx-auto px-4 max-w-7xl ">
            <!-- mobile navigation -->
            <div class="flex flex-row justify-between py-3 lg:hidden">
                <!-- logo -->
                <a class="flex items-center py-2 mr-4 text-xl" href="index.html">
                    <h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden">
                        <span class="text-gray-700">Flipozo</span>
                    </h2>
                </a>

                <!-- navbar toggler -->
                <div class="right-0 flex items-center">
                    <!-- Mobile menu button-->
                    <button id="navbartoggle" type="button"
                        class="inline-flex items-center justify-center text-gray-700 focus:outline-none focus:ring-0"
                        aria-controls="mobile-menu" @click="open = !open" aria-expanded="false"
                        x-bind:aria-expanded="open.toString()">
                        <span class="sr-only">Mobile menu</span>
                        <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed"
                            class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
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
                                    <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="/img/logo.svg">
                                    <span class="text-gray-700 dark:text-gray-200">Taildash</span>
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
                                    <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                                        @click.away="open = false">
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
                                            role="menu" aria-orientation="vertical" aria-labelledby="mobiledrop-03">
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
                </nav>
            </div><!-- End Mobile menu -->

            <!-- desktop menu -->
            <div class="hidden lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-between lg:mt-0"
                id="desktp-menu">
                <!-- logo -->
                <a class="hidden lg:flex items-center py-2 text-xl" href="/">
                    <h2 class="text-2xl font-semibold px-4 max-h-9 overflow-hidden">
                        <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="/img/logo.svg">
                    </h2>
                </a>

                <!-- menu -->
                <ul class="flex flex-col mt-2 lg:flex-row lg:mt-0 text-gray-700">
                    <li class="relative">
                        <a class="block py-3 lg:py-7 px-4 hover:text-indigo-500 focus:text-indigo-600" href="landing.html#">
                            Home
                        </a>
                    </li>
                    <li class="relative">
                        <a class="block py-3 lg:py-7 px-4 hover:text-indigo-500 focus:text-indigo-600" href="landing.html#">
                            Features
                        </a>
                    </li>
                    <li class="relative">
                        <a class="block py-3 lg:py-7 px-4 hover:text-indigo-500 focus:text-indigo-600" href="landing.html#">
                            Pricing
                        </a>
                    </li~>
                    <!-- dropdown -->
                    <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                        @mouseleave="open = false">
                        <a id="dropdown-01" class="block py-3 lg:py-7 px-4 hover:text-indigo-500 focus:text-indigo-600"
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
                        <a class="block py-3 lg:py-7 px-4 hover:text-indigo-500 focus:text-indigo-600" href="landing.html#">
                            Contact
                        </a>
                    </li>
                </ul>
                <div class="hidden xl:flex max-w-xs pl-4 pr-2 bg-white rounded-lg border">
                    <svg class="w-8 h-10 mr-2" width="18" height="18" viewbox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5 17.1309L12.5042 11.9551" stroke="black" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M7.27524 13.8672C10.8789 13.8672 13.8002 10.945 13.8002 7.34033C13.8002 3.73565 10.8789 0.813477 7.27524 0.813477C3.67159 0.813477 0.750244 3.73565 0.750244 7.34033C0.750244 10.945 3.67159 13.8672 7.27524 13.8672Z"
                            stroke="black" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                    <input class="w-full border-0 focus:ring-transparent focus:outline-none py-2" type="text"
                        placeholder="">
                    <select
                        class="pl-6 pr-6 border-0 border-l border-gray-100 focus:border-gray-100 focus:ring-transparent focus:outline-none cursor-pointer"
                        name="" id="">
                        <option>All&nbsp;items</option>
                        <option>Collection</option>
                        <option>Option</option>
                    </select>
                </div>

                <div class="flex justify-between">
                    <a class="inline-flex items-center font-semibold font-heading" href="/login">
                        <svg class="mr-3" width="32" height="31" viewbox="0 0 32 31" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.0006 16.3154C19.1303 16.3154 21.6673 13.799 21.6673 10.6948C21.6673 7.59064 19.1303 5.07422 16.0006 5.07422C12.871 5.07422 10.334 7.59064 10.334 10.6948C10.334 13.799 12.871 16.3154 16.0006 16.3154Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path
                                d="M24.4225 23.8963C23.6678 22.3507 22.4756 21.0445 20.9845 20.1298C19.4934 19.2151 17.7647 18.7295 15.9998 18.7295C14.2349 18.7295 12.5063 19.2151 11.0152 20.1298C9.52406 21.0445 8.33179 22.3507 7.57715 23.8963"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                        <span>Sign&nbsp;In</span>
                    </a>
                    <div class="flex items-center">
                        <a class="mr-10" href="#">
                            <svg width="23" height="20" viewbox="0 0 23 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.4998 19.2061L2.70115 9.92527C1.92859 9.14433 1.41864 8.1374 1.24355 7.04712C1.06847 5.95684 1.23713 4.8385 1.72563 3.85053V3.85053C2.09464 3.10462 2.63366 2.45803 3.29828 1.96406C3.9629 1.47008 4.73408 1.14284 5.5483 1.00931C6.36252 0.875782 7.19647 0.939779 7.98144 1.19603C8.7664 1.45228 9.47991 1.89345 10.0632 2.48319L11.4998 3.93577L12.9364 2.48319C13.5197 1.89345 14.2332 1.45228 15.0182 1.19603C15.8031 0.939779 16.6371 0.875782 17.4513 1.00931C18.2655 1.14284 19.0367 1.47008 19.7013 1.96406C20.3659 2.45803 20.905 3.10462 21.274 3.85053V3.85053C21.7625 4.8385 21.9311 5.95684 21.756 7.04712C21.581 8.1374 21.071 9.14433 20.2984 9.92527L11.4998 19.2061Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </a>
                        <a class="flex items-center" href="#">
                            <svg class="mr-3" width="23" height="23" viewbox="0 0 23 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.1159 8.72461H2.50427C1.99709 8.72461 1.58594 9.12704 1.58594 9.62346V21.3085C1.58594 21.8049 1.99709 22.2074 2.50427 22.2074H18.1159C18.6231 22.2074 19.0342 21.8049 19.0342 21.3085V9.62346C19.0342 9.12704 18.6231 8.72461 18.1159 8.72461Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M6.34473 6.34469V4.95676C6.34473 3.85246 6.76252 2.79338 7.5062 2.01252C8.24988 1.23165 9.25852 0.792969 10.3102 0.792969C11.362 0.792969 12.3706 1.23165 13.1143 2.01252C13.858 2.79338 14.2758 3.85246 14.2758 4.95676V6.34469"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <span
                                class="inline-block w-6 h-6 text-center bg-gray-100 rounded-full font-semibold font-heading">3</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end desktop menu -->
        </div>
    </nav>
    <!-- End Navbar -->
</header>
<!-- end header -->
