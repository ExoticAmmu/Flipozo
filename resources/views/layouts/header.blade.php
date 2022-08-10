<header>
    <!-- Navbar -->
    <nav x-data="{ open: false }"
        class="nav-top flex flex-nowrap lg:flex-start items-center z-20 top-0 left-0 right-0 bg-white shadow dark:from-gray-800 dark:via-gray-700 dark:to-green-700 overflow-y-auto max-h-screen lg:overflow-visible lg:max-h-full">
        <div class="container mx-auto px-4 xl:max-w-6xl ">
            <!-- mobile navigation -->
            <div class="flex flex-row justify-between py-3 lg:hidden">
                <!-- logo -->
                <a class="flex items-center py-2 mr-4 text-xl" href="index.html">
                    <h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden">
                        <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="/img/logo.png">
                        <span class="text-gray-200">Flipozo</span>
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
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>

                        <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed"
                            class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
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
                                    <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="/img/logo.png">
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
                <a class="hidden lg:flex items-center py-2 mr-4 text-xl" href="/">
                    <h2 class="text-2xl font-semibold px-4 max-h-9 overflow-hidden">
                        <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="/img/logo.svg">
                    </h2>
                </a>

                <!-- menu -->
                <ul class="flex flex-col lg:mx-auto mt-2 lg:flex-row lg:mt-0 text-gray-700">
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
