<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>


    <main class="pt-20 -mt-2">
        <div class="mx-auto p-2">
            <!-- row -->
            <div class="flex flex-wrap flex-row">
                <div class="flex-shrink max-w-full px-4 w-full">
                    <h1 class="text-xl font-bold mt-3 mb-5">Navbar</h1>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="relative">
                            <div class="mb-6">
                                <p class="leading-relaxed font-light text-lg mx-auto pb-2">Responsive navigation header,
                                    the navbar with link and dropdown menu.</p>
                            </div>

                            <div id="navbar-offcanvas" class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Navbar with
                                    Offcanvas menu</h2>
                                <p class="mb-4">Example navbar starter layout with mobile Offcanvas menu.</p>
                                <!-- example -->
                                <div
                                    class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <!-- Navbar -->
                                    <nav x-data="{ open: false }"
                                        class="flex flex-nowrap lg:flex-start items-center z-20 top-0 left-0 right-0 bg-white dark:bg-gray-800 overflow-y-auto max-h-screen lg:overflow-visible lg:max-h-full">
                                        <div class="container mx-auto px-4 xl:max-w-6xl ">
                                            <!-- mobile navigation -->
                                            <div class="flex flex-row justify-between py-3 lg:hidden">
                                                <!-- logo -->
                                                <a class="flex items-center py-2 mr-4 text-xl" href="navbar.html#">
                                                    <h2
                                                        class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden">
                                                        <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1"
                                                            src="../src/img/logo.png"><span
                                                            class="text-gray-700 dark:text-gray-200">Taildash</span>
                                                    </h2>
                                                </a>
                                                <!-- navbar toggler -->
                                                <div class="ltr:right-0 rtl:left-0 flex items-center">
                                                    <!-- Mobile menu button-->
                                                    <button id="navbartoggle" type="button"
                                                        class="inline-flex items-center justify-center text-gray-800 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 focus:outline-none focus:ring-0"
                                                        aria-controls="mobile-menu" @click="open = !open"
                                                        aria-expanded="false" x-bind:aria-expanded="open.toString()">
                                                        <span class="sr-only">Mobile menu</span>
                                                        <svg x-description="Icon closed" x-state:on="Menu open"
                                                            x-state:off="Menu closed" class="block h-8 w-8"
                                                            :class="{ 'hidden': open, 'block': !(open) }"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                                        </svg>

                                                        <svg x-description="Icon open" x-state:on="Menu open"
                                                            x-state:off="Menu closed" class="hidden h-8 w-8"
                                                            :class="{ 'block': open, 'hidden': !(open) }"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- Mobile menu -->
                                            <div class="lg:hidden fixed w-full h-full inset-0 z-50" id="mobile-menu"
                                                x-description="Mobile menu" x-show="open" style="display: none;">
                                                <!-- bg open -->
                                                <span
                                                    class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>

                                                <!-- Mobile navbar -->
                                                <nav id="mobile-nav"
                                                    class="flex flex-col right-0 w-64 fixed top-0 py-4 bg-white dark:bg-gray-900 h-full overflow-auto z-40"
                                                    x-show="open" @click.away="open=false" x-description="Mobile menu"
                                                    x-show="open" role="menu" aria-orientation="vertical"
                                                    aria-labelledby="navbartoggle"
                                                    x-transition:enter="transform transition-transform duration-300"
                                                    x-transition:enter-start="translate-x-full"
                                                    x-transition:enter-end="translate-x-0"
                                                    x-transition:leave="transform transition-transform duration-300"
                                                    x-transition:leave-start="translate-x-0"
                                                    x-transition:leave-end="translate-x-full">
                                                    <div class="mb-auto">
                                                        <!--logo-->
                                                        <div class="mh-18 text-center px-12 mb-8">
                                                            <a href="navbar.html#" class="flex relative">
                                                                <h2
                                                                    class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden">
                                                                    <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1"
                                                                        src="../src/img/logo.png"><span
                                                                        class="text-gray-700 dark:text-gray-200">Taildash</span>
                                                                </h2>
                                                            </a>
                                                        </div>
                                                        <!--navigation-->
                                                        <div class="mb-4">
                                                            <nav
                                                                class="relative flex flex-wrap items-center justify-between">
                                                                <ul id="side-menu"
                                                                    class="w-full float-none flex flex-col">
                                                                    <li class="relative">
                                                                        <a href="navbar.html#"
                                                                            class="block py-3 px-4 hover:text-indigo-700 focus:text-indigo-700">Home</a>
                                                                    </li>

                                                                    <!-- Insert dropdown mobile Offcanvas menu -->

                                                                    <li class="relative">
                                                                        <a href="navbar.html#"
                                                                            class="block py-3 px-4 hover:text-indigo-700 focus:text-indigo-700">About</a>
                                                                    </li>
                                                                    <li class="relative">
                                                                        <a href="navbar.html#"
                                                                            class="block py-3 px-4 hover:text-indigo-700 focus:text-indigo-700">Services</a>
                                                                    </li>
                                                                    <li class="relative">
                                                                        <a href="navbar.html#"
                                                                            class="block py-3 px-4 hover:text-indigo-700 focus:text-indigo-700">Support</a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                    <!-- copyright -->
                                                    <div class="mt-5 text-center">
                                                        <p>Copyright <a href="navbar.html#">Taildash</a> - All right
                                                            reserved</p>
                                                    </div>
                                                </nav>
                                            </div><!-- End Mobile menu -->

                                            <!-- desktop menu -->
                                            <div class="hidden lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-between lg:mt-0"
                                                id="desktp-menu">
                                                <!-- logo -->
                                                <a class="hidden lg:flex items-center py-2 mr-4 text-xl"
                                                    href="navbar.html#">
                                                    <h2
                                                        class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden">
                                                        <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1"
                                                            src="../src/img/logo.png"><span
                                                            class="text-gray-700 dark:text-gray-200">Taildash</span>
                                                    </h2>
                                                </a>

                                                <!-- menu -->
                                                <ul class="flex flex-col lg:mx-auto mt-2 lg:flex-row lg:mt-0">
                                                    <li class="relative">
                                                        <!-- active -->
                                                        <a class="group block py-3 lg:py-7 px-6 text-indigo-500 hover:text-indigo-600 focus:text-indigo-600"
                                                            href="navbar.html#">
                                                            <span
                                                                class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-100"></span>
                                                            Home
                                                        </a>
                                                    </li>

                                                    <!-- Insert desktop dropdown menu -->

                                                    <li class="relative">
                                                        <a class="group block py-3 lg:py-7 px-6 hover:text-indigo-700 focus:text-indigo-700"
                                                            href="navbar.html#">
                                                            <span
                                                                class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                            About
                                                        </a>
                                                    </li>
                                                    <li class="relative">
                                                        <a class="group block py-3 lg:py-7 px-6 hover:text-indigo-700 focus:text-indigo-700"
                                                            href="navbar.html#">
                                                            <span
                                                                class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                            Services
                                                        </a>
                                                    </li>
                                                    <li class="relative">
                                                        <a class="group block py-3 lg:py-7 px-6 hover:text-indigo-700 focus:text-indigo-700"
                                                            href="navbar.html#">
                                                            <span
                                                                class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                            Support
                                                        </a>
                                                    </li>
                                                </ul>

                                                <!-- button -->
                                                <div class="grid text-center lg:block my-4 lg:my-auto">
                                                    <a class="py-2 px-4 text-sm inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"
                                                        target="_blank" rel="noopener" href="navbar.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="inline mr-1"
                                                            width="1.2rem" height="1.2rem" fill="currentColor"
                                                            viewBox="0 0 512 512">
                                                            <circle cx="176" cy="416" r="16"
                                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                            <circle cx="400" cy="416" r="16"
                                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                            <polyline points="48 80 112 80 160 352 416 352"
                                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                            <path
                                                                d="M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128"
                                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                        </svg> Buy Now
                                                    </a>
                                                </div>
                                            </div><!-- end desktop menu -->
                                        </div>
                                    </nav><!-- End Navbar -->
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- Navbar --&gt;
			                  &lt;nav x-data="{ open: false }" class="flex flex-nowrap lg:flex-start items-center z-20 top-0 left-0 right-0 bg-white dark:bg-gray-800 overflow-y-auto max-h-screen lg:overflow-visible lg:max-h-full"&gt;
			                    &lt;div class="container mx-auto px-4 xl:max-w-6xl "&gt;
			                      &lt;!-- mobile navigation --&gt;
			                      &lt;div class="flex flex-row justify-between py-3 lg:hidden"&gt;
			                        &lt;!-- logo --&gt;
			                        &lt;a class="flex items-center py-2 mr-4 text-xl" href="#"&gt;
			                          &lt;h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden"&gt;&lt;img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="../src/img/logo.png"&gt;&lt;span class="text-gray-700 dark:text-gray-200"&gt;Taildash&lt;/span&gt;&lt;/h2&gt;
			                        &lt;/a&gt;
			                        &lt;!-- navbar toggler --&gt;
			                        &lt;div class="ltr:right-0 rtl:left-0 flex items-center"&gt;
			                          &lt;!-- Mobile menu button--&gt;
			                          &lt;button id="navbartoggle" type="button" class="inline-flex items-center justify-center text-gray-800 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 focus:outline-none focus:ring-0" aria-controls="mobile-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()"&gt;
			                            &lt;span class="sr-only"&gt;Mobile menu&lt;/span&gt;
			                            &lt;svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"&gt;
			                              &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"&gt;&lt;/path&gt;
			                            &lt;/svg&gt;

			                            &lt;svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"&gt;
			                              &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"&gt;&lt;/path&gt;
			                            &lt;/svg&gt;
			                          &lt;/button&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;

			                      &lt;!-- Mobile menu --&gt;
			                      &lt;div class="lg:hidden fixed w-full h-full inset-0 z-50" id="mobile-menu" x-description="Mobile menu" x-show="open" style="display: none;"&gt;
			                        &lt;!-- bg open --&gt;
			                        &lt;span class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"&gt;&lt;/span&gt;
			                        
			                        &lt;!-- Mobile navbar --&gt;
			                        &lt;nav id="mobile-nav" class="flex flex-col right-0 w-64 fixed top-0 py-4 bg-white dark:bg-gray-900 h-full overflow-auto z-40" x-show="open" @click.away="open=false" x-description="Mobile menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="navbartoggle" x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"&gt;
			                          &lt;div class="mb-auto"&gt;
			                            &lt;!--logo--&gt;
			                            &lt;div class="mh-18 text-center px-12 mb-8"&gt;
			                              &lt;a href="#" class="flex relative"&gt;
			                                &lt;h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden"&gt;&lt;img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="../src/img/logo.png"&gt;&lt;span class="text-gray-700 dark:text-gray-200"&gt;Taildash&lt;/span&gt;&lt;/h2&gt;
			                              &lt;/a&gt;
			                            &lt;/div&gt;
			                            &lt;!--navigation--&gt;
			                            &lt;div class="mb-4"&gt;
			                              &lt;nav class="relative flex flex-wrap items-center justify-between"&gt;
			                                &lt;ul id="side-menu" class="w-full float-none flex flex-col"&gt;
			                                  &lt;li class="relative"&gt;
			                                    &lt;a href="#" class="block py-3 px-4 hover:text-indigo-700 focus:text-indigo-700"&gt;Home&lt;/a&gt;
			                                  &lt;/li&gt;

			                                  &lt;!-- Insert dropdown mobile Offcanvas menu --&gt;

			                                  &lt;li class="relative"&gt;
			                                    &lt;a href="#" class="block py-3 px-4 hover:text-indigo-700 focus:text-indigo-700"&gt;About&lt;/a&gt;
			                                  &lt;/li&gt;
			                                  &lt;li class="relative"&gt;
			                                    &lt;a href="#" class="block py-3 px-4 hover:text-indigo-700 focus:text-indigo-700"&gt;Services&lt;/a&gt;
			                                  &lt;/li&gt;
			                                  &lt;li class="relative"&gt;
			                                    &lt;a href="#" class="block py-3 px-4 hover:text-indigo-700 focus:text-indigo-700"&gt;Support&lt;/a&gt;
			                                  &lt;/li&gt;
			                                &lt;/ul&gt;
			                              &lt;/nav&gt;
			                            &lt;/div&gt;
			                          &lt;/div&gt;
			                          &lt;!-- copyright --&gt;
			                          &lt;div class="mt-5 text-center"&gt;
			                            &lt;p&gt;Copyright &lt;a href="#"&gt;Taildash&lt;/a&gt; - All right reserved&lt;/p&gt;
			                          &lt;/div&gt;
			                        &lt;/nav&gt;
			                      &lt;/div&gt;&lt;!-- End Mobile menu --&gt;

			                      &lt;!-- desktop menu --&gt;
			                      &lt;div class="hidden lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-between lg:mt-0" id="desktp-menu"&gt;
			                        &lt;!-- logo --&gt;
			                        &lt;a class="hidden lg:flex items-center py-2 mr-4 text-xl" href="#"&gt;
			                         &lt;h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden"&gt;&lt;img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="../src/img/logo.png"&gt;&lt;span class="text-gray-700 dark:text-gray-200"&gt;Taildash&lt;/span&gt;&lt;/h2&gt;
			                        &lt;/a&gt;

			                        &lt;!-- menu --&gt;
			                        &lt;ul class="flex flex-col lg:mx-auto mt-2 lg:flex-row lg:mt-0"&gt;
			                          &lt;li class="relative"&gt;
			                            &lt;!-- active --&gt;
			                            &lt;a class="group block py-3 lg:py-7 px-6 text-indigo-500 hover:text-indigo-600 focus:text-indigo-600" href="#"&gt;
			                              &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-100"&gt;&lt;/span&gt;
			                              Home
			                            &lt;/a&gt;
			                          &lt;/li&gt;

			                          &lt;!-- Insert desktop dropdown menu --&gt;

			                          &lt;li class="relative"&gt;
			                            &lt;a class="group block py-3 lg:py-7 px-6 hover:text-indigo-700 focus:text-indigo-700" href="#"&gt;
			                              &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"&gt;&lt;/span&gt;
			                              About
			                            &lt;/a&gt;
			                          &lt;/li&gt;
			                          &lt;li class="relative"&gt;
			                            &lt;a class="group block py-3 lg:py-7 px-6 hover:text-indigo-700 focus:text-indigo-700" href="#"&gt;
			                              &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"&gt;&lt;/span&gt;
			                              Services
			                            &lt;/a&gt;
			                          &lt;/li&gt;
			                          &lt;li class="relative"&gt;
			                            &lt;a class="group block py-3 lg:py-7 px-6 hover:text-indigo-700 focus:text-indigo-700" href="#"&gt;
			                              &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"&gt;&lt;/span&gt;
			                              Support
			                            &lt;/a&gt;
			                          &lt;/li&gt;
			                        &lt;/ul&gt;
			                        
			                        &lt;!-- button --&gt;
			                        &lt;div class="grid text-center lg:block my-4 lg:my-auto"&gt;
			                          &lt;a class="py-2 px-4 text-sm inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" target="_blank" rel="noopener" href="#"&gt;
			                            &lt;svg xmlns="http://www.w3.org/2000/svg" class="inline mr-1" width="1.2rem" height="1.2rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;circle cx="176" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/&gt;&lt;circle cx="400" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/&gt;&lt;polyline points="48 80 112 80 160 352 416 352" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/&gt;&lt;path d="M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/&gt;&lt;/svg&gt; Buy Now
			                          &lt;/a&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;&lt;!-- end desktop menu --&gt;
			                    &lt;/div&gt;
			                  &lt;/nav&gt;&lt;!-- End Navbar --&gt;
			                </code>
			              </pre>
                                <p class="mt-6 mb-3">If you want to use navbar fixed, please add <code
                                        class="text-pink-700">fixed</code> class in <code
                                        class="text-pink-700">flex flex-nowrap lg:flex-start</code> (navbar parent)</p>
                                <p class="mb-3">Don't forget to add padding top 20 in <code
                                        class="text-pink-700">body</code> like this <code
                                        class="text-pink-700">&lt;body class="pt-20 font-sans text-base font-normal text-gray-700"&gt;</code>
                                </p>
                                <p class="mb-6"><span class="text-red-700 font-bold uppercase">Note:</span> You can
                                    insert <a href="dropdowns.html#dropdown-desktop" class="text-indigo-700">dropdown
                                        desktop</a> and <a href="dropdowns.html#dropdown-offcanvas"
                                        class="text-indigo-700">dropdown Offcanvas</a> in this navbar.</p>
                            </div>

                            <div id="navbar-dropdowns" class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Navbar with
                                    dropdown menu</h2>
                                <p class="mb-4">Example navbar starter layout with mobile dropdown menu.</p>
                                <!-- example -->
                                <div
                                    class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <!-- Navbar -->
                                    <nav x-data="{ open: false }"
                                        class="flex flex-nowrap lg:flex-start items-center z-50 top-0 left-0 right-0 bg-white dark:bg-gray-800 overflow-y-auto max-h-screen lg:overflow-visible lg:max-h-full">
                                        <div class="container mx-auto px-4 xl:max-w-6xl ">
                                            <!-- mobile navigation -->
                                            <div class="flex flex-row justify-between py-3 lg:hidden">
                                                <!-- logo -->
                                                <a class="flex items-center py-2 mr-4 text-xl" href="navbar.html#">
                                                    <h2
                                                        class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden">
                                                        <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1"
                                                            src="../src/img/logo.png"><span
                                                            class="text-gray-700 dark:text-gray-200">Taildash</span>
                                                    </h2>
                                                </a>

                                                <!-- navbar toggler -->
                                                <div class="ltr:right-0 rtl:left-0 flex items-center">
                                                    <!-- Mobile menu button-->
                                                    <button type="button"
                                                        class="inline-flex items-center justify-center text-gray-800 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 focus:outline-none focus:ring-0"
                                                        aria-controls="mobile-menu" @click="open = !open"
                                                        aria-expanded="false" x-bind:aria-expanded="open.toString()">
                                                        <span class="sr-only">Mobile menu</span>
                                                        <svg x-description="Icon closed" x-state:on="Menu open"
                                                            x-state:off="Menu closed" class="block h-8 w-8"
                                                            :class="{ 'hidden': open, 'block': !(open) }"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                                        </svg>

                                                        <svg x-description="Icon open" x-state:on="Menu open"
                                                            x-state:off="Menu closed" class="hidden h-8 w-8"
                                                            :class="{ 'block': open, 'hidden': !(open) }"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- mobile menu -->
                                            <div class="flex flex-col lg:hidden" id="mobile-menu"
                                                x-description="Mobile menu" x-show="open" style="display: none;">
                                                <!-- menu -->
                                                <ul class="flex flex-col mt-2">
                                                    <li class="relative">
                                                        <!-- active -->
                                                        <a class="group block py-3 lg:py-7 px-0 text-indigo-500 hover:text-indigo-600 focus:text-indigo-600"
                                                            href="navbar.html#">
                                                            <span
                                                                class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-100"></span>
                                                            Home
                                                        </a>
                                                    </li>

                                                    <!-- Insert dropdown mobile menu -->

                                                    <li class="relative">
                                                        <a class="group block py-3 lg:py-7 px-0 hover:text-indigo-600 focus:text-indigo-600"
                                                            href="navbar.html#">
                                                            <span
                                                                class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                            About
                                                        </a>
                                                    </li>
                                                    <li class="relative">
                                                        <a class="group block py-3 lg:py-7 px-0 hover:text-indigo-600 focus:text-indigo-600"
                                                            href="navbar.html#">
                                                            <span
                                                                class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                            Services
                                                        </a>
                                                    </li>
                                                    <li class="relative">
                                                        <a class="group block py-3 lg:py-7 px-0 hover:text-indigo-600 focus:text-indigo-600"
                                                            href="navbar.html#">
                                                            <span
                                                                class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                            Contact
                                                        </a>
                                                    </li>
                                                </ul>

                                                <!-- button -->
                                                <div class="grid text-center my-4">
                                                    <a class="py-2 px-4 -ml-1 rounded leading-5 text-sm text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"
                                                        target="_blank" rel="noopener" href="navbar.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="inline mr-1"
                                                            width="1.2rem" height="1.2rem" fill="currentColor"
                                                            viewBox="0 0 512 512">
                                                            <circle cx="176" cy="416" r="16"
                                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                            <circle cx="400" cy="416" r="16"
                                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                            <polyline points="48 80 112 80 160 352 416 352"
                                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                            <path
                                                                d="M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128"
                                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                        </svg> Buy Now
                                                    </a>
                                                </div>
                                            </div><!-- end mobile menu -->

                                            <!-- desktop menu -->
                                            <div class="hidden lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-between lg:mt-0"
                                                id="desktp-menu">
                                                <!-- logo -->
                                                <a class="hidden lg:flex items-center py-2 mr-4 text-xl"
                                                    href="navbar.html#">
                                                    <h2
                                                        class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden">
                                                        <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1"
                                                            src="../src/img/logo.png"><span
                                                            class="text-gray-700 dark:text-gray-200">Taildash</span>
                                                    </h2>
                                                </a>

                                                <!-- menu -->
                                                <ul class="flex flex-col lg:mx-auto mt-2 lg:flex-row lg:mt-0">
                                                    <li class="relative">
                                                        <!-- active -->
                                                        <a class="group block py-3 lg:py-7 px-6 text-indigo-500 hover:text-indigo-600 focus:text-indigo-600"
                                                            href="navbar.html#">
                                                            <span
                                                                class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-100"></span>
                                                            Home
                                                        </a>
                                                    </li>

                                                    <!-- Insert desktop dropdown menu -->

                                                    <li class="relative">
                                                        <a class="group block py-3 lg:py-7 px-6 hover:text-indigo-600 focus:text-indigo-600"
                                                            href="navbar.html#">
                                                            <span
                                                                class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                            About
                                                        </a>
                                                    </li>
                                                    <li class="relative">
                                                        <a class="group block py-3 lg:py-7 px-6 hover:text-indigo-600 focus:text-indigo-600"
                                                            href="navbar.html#">
                                                            <span
                                                                class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                                            Services
                                                        </a>
                                                    </li>
                                                </ul>

                                                <!-- button -->
                                                <div class="grid text-center lg:block my-4 lg:my-auto">
                                                    <a class="py-2 px-4 -ml-1 rounded leading-5 text-sm text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"
                                                        target="_blank" rel="noopener" href="navbar.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="inline mr-1"
                                                            width="1.2rem" height="1.2rem" fill="currentColor"
                                                            viewBox="0 0 512 512">
                                                            <circle cx="176" cy="416" r="16"
                                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                            <circle cx="400" cy="416" r="16"
                                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                            <polyline points="48 80 112 80 160 352 416 352"
                                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                            <path
                                                                d="M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128"
                                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                                        </svg> Buy Now
                                                    </a>
                                                </div>
                                            </div><!-- end desktop menu -->
                                        </div>
                                    </nav><!-- End Navbar -->
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- Navbar --&gt;
			                  &lt;nav x-data="{ open: false }" class="flex flex-nowrap lg:flex-start items-center z-50 top-0 left-0 right-0 bg-white dark:bg-gray-800 overflow-y-auto max-h-screen lg:overflow-visible lg:max-h-full"&gt;
			                    &lt;div class="container mx-auto px-4 xl:max-w-6xl "&gt;
			                      &lt;!-- mobile navigation --&gt;
			                      &lt;div class="flex flex-row justify-between py-3 lg:hidden"&gt;
			                        &lt;!-- logo --&gt;
			                        &lt;a class="flex items-center py-2 mr-4 text-xl" href="#"&gt;
                              &lt;h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden"&gt;&lt;img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="../src/img/logo.png"&gt;&lt;span class="text-gray-700 dark:text-gray-200"&gt;Taildash&lt;/span&gt;&lt;/h2&gt;
			                        &lt;/a&gt;

			                        &lt;!-- navbar toggler --&gt;
			                        &lt;div class="ltr:right-0 rtl:left-0 flex items-center"&gt;
			                          &lt;!-- Mobile menu button--&gt;
			                          &lt;button type="button" class="inline-flex items-center justify-center text-gray-800 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 focus:outline-none focus:ring-0" aria-controls="mobile-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()"&gt;
			                            &lt;span class="sr-only"&gt;Mobile menu&lt;/span&gt;
			                            &lt;svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"&gt;
			                              &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"&gt;&lt;/path&gt;
			                            &lt;/svg&gt;

			                            &lt;svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"&gt;
			                              &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"&gt;&lt;/path&gt;
			                            &lt;/svg&gt;
			                          &lt;/button&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;

			                      &lt;!-- mobile menu --&gt;
			                      &lt;div class="flex flex-col lg:hidden" id="mobile-menu" x-description="Mobile menu" x-show="open" style="display: none;"&gt;
			                        &lt;!-- menu --&gt;
			                        &lt;ul class="flex flex-col mt-2"&gt;
			                          &lt;li class="relative"&gt;
			                            &lt;!-- active --&gt;
			                            &lt;a class="group block py-3 lg:py-7 px-0 text-indigo-500 hover:text-indigo-600 focus:text-indigo-600" href="#"&gt;
			                              &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-100"&gt;&lt;/span&gt;
			                              Home
			                            &lt;/a&gt;
			                          &lt;/li&gt;

			                          &lt;!-- Insert dropdown mobile menu --&gt;

			                          &lt;li class="relative"&gt;
			                            &lt;a class="group block py-3 lg:py-7 px-0 hover:text-indigo-600 focus:text-indigo-600" href="#"&gt;
			                              &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"&gt;&lt;/span&gt;
			                              About
			                            &lt;/a&gt;
			                          &lt;/li&gt;
			                          &lt;li class="relative"&gt;
			                            &lt;a class="group block py-3 lg:py-7 px-0 hover:text-indigo-600 focus:text-indigo-600" href="#"&gt;
			                              &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"&gt;&lt;/span&gt;
			                              Services
			                            &lt;/a&gt;
			                          &lt;/li&gt;
			                          &lt;li class="relative"&gt;
			                            &lt;a class="group block py-3 lg:py-7 px-0 hover:text-indigo-600 focus:text-indigo-600" href="#"&gt;
			                              &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"&gt;&lt;/span&gt;
			                              Contact
			                            &lt;/a&gt;
			                          &lt;/li&gt;
			                        &lt;/ul&gt;
			                        
			                        &lt;!-- button --&gt;
			                        &lt;div class="grid text-center my-4"&gt;
			                          &lt;a class="py-2 px-4 -ml-1 rounded leading-5 text-sm text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" target="_blank" rel="noopener" href="#"&gt;
			                            &lt;svg xmlns="http://www.w3.org/2000/svg" class="inline mr-1" width="1.2rem" height="1.2rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;circle cx="176" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/&gt;&lt;circle cx="400" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/&gt;&lt;polyline points="48 80 112 80 160 352 416 352" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/&gt;&lt;path d="M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/&gt;&lt;/svg&gt; Buy Now
			                          &lt;/a&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;&lt;!-- end mobile menu --&gt;

			                      &lt;!-- desktop menu --&gt;
			                      &lt;div class="hidden lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-between lg:mt-0" id="desktp-menu"&gt;
			                        &lt;!-- logo --&gt;
			                        &lt;a class="hidden lg:flex items-center py-2 mr-4 text-xl" href="#"&gt;
			                          &lt;h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden"&gt;&lt;img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="../src/img/logo.png"&gt;&lt;span class="text-gray-700 dark:text-gray-200"&gt;Taildash&lt;/span&gt;&lt;/h2&gt;
			                        &lt;/a&gt;

			                        &lt;!-- menu --&gt;
			                        &lt;ul class="flex flex-col lg:mx-auto mt-2 lg:flex-row lg:mt-0"&gt;
			                          &lt;li class="relative"&gt;
			                            &lt;!-- active --&gt;
			                            &lt;a class="group block py-3 lg:py-7 px-6 text-indigo-500 hover:text-indigo-600 focus:text-indigo-600" href="#"&gt;
			                              &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-100"&gt;&lt;/span&gt;
			                              Home
			                            &lt;/a&gt;
			                          &lt;/li&gt;

			                          &lt;!-- Insert desktop dropdown menu --&gt;

			                          &lt;li class="relative"&gt;
			                            &lt;a class="group block py-3 lg:py-7 px-6 hover:text-indigo-600 focus:text-indigo-600" href="#"&gt;
			                              &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"&gt;&lt;/span&gt;
			                              About
			                            &lt;/a&gt;
			                          &lt;/li&gt;
			                          &lt;li class="relative"&gt;
			                            &lt;a class="group block py-3 lg:py-7 px-6 hover:text-indigo-600 focus:text-indigo-600" href="#"&gt;
			                              &lt;span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-6 h-0.5 bg-indigo-600 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"&gt;&lt;/span&gt;
			                              Services
			                            &lt;/a&gt;
			                          &lt;/li&gt;
			                        &lt;/ul&gt;
			                        
			                        &lt;!-- button --&gt;
			                        &lt;div class="grid text-center lg:block my-4 lg:my-auto"&gt;
			                          &lt;a class="py-2 px-4 -ml-1 rounded leading-5 text-sm text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" target="_blank" rel="noopener" href="#"&gt;
			                            &lt;svg xmlns="http://www.w3.org/2000/svg" class="inline mr-1" width="1.2rem" height="1.2rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;circle cx="176" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/&gt;&lt;circle cx="400" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/&gt;&lt;polyline points="48 80 112 80 160 352 416 352" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/&gt;&lt;path d="M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/&gt;&lt;/svg&gt; Buy Now
			                          &lt;/a&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;&lt;!-- end desktop menu --&gt;
			                    &lt;/div&gt;
			                  &lt;/nav&gt;&lt;!-- End Navbar --&gt;
			                </code>
			              </pre>
                                <p class="mt-6 mb-3">If you want to use navbar fixed, please add <code
                                        class="text-pink-700">fixed</code> class in <code
                                        class="text-pink-700">flex flex-nowrap lg:flex-start</code> (navbar parent)</p>
                                <p class="mb-3">Don't forget to add padding top 20 in <code
                                        class="text-pink-700">body</code> like this <code
                                        class="text-pink-700">&lt;body class="pt-20 font-sans text-base font-normal text-gray-700"&gt;</code>
                                </p>
                                <p class="mb-6"><span class="text-red-700 font-bold uppercase">Note:</span> You can
                                    insert <a href="dropdowns.html#dropdown-desktop" class="text-indigo-500">dropdown
                                        desktop</a> and <a href="dropdowns.html#dropdown-mobiles"
                                        class="text-indigo-500">dropdown mobile</a> in this navbar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>