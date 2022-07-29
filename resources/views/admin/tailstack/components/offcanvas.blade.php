<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Admin Dashboard') }}
    </h2>
  </x-slot>



  <div class="mx-auto p-2">
    <!-- row -->
    <div class="flex flex-wrap flex-row">
      <div class="flex-shrink max-w-full px-4 w-full">
        <p class="text-xl font-bold mt-3 mb-5">Offcanvas</p>
      </div>
      <div class="flex-shrink max-w-full px-4 w-full mb-6">
        <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
          <div class="relative">
            <div class="mb-6">
              <p class="leading-relaxed font-light text-lg mx-auto pb-2">Build hidden sidebars into
                your project for navigation, shopping carts, and more with a few classes and Alpine
                js.</p>
            </div>

            <div class="mb-8">
              <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Right Offcanvas
              </h2>
              <p class="mb-4">Example Right Offcanvas.</p>
              <!-- example -->
              <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                <div class="flex justify-center">
                  <div x-data="{ open: false }">
                    <!-- Offcanvas button trigger -->
                    <button id="navbartoggle" type="button" class="inline-flex items-center justify-center text-gray-800 hover:text-gray-700 dark:text-gray-400 dark:text-gray-300 focus:outline-none focus:ring-0" aria-controls="mobile-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                      <span class="sr-only">Mobile menu</span>
                      <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                      </svg>

                      <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                    </button>

                    <!-- Right Offcanvas -->
                    <div class="fixed w-full h-full inset-0 z-50" id="mobile-menu" x-description="Mobile menu" x-show="open" style="display: none;">
                      <!-- bg open -->
                      <span class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>

                      <!-- Mobile navbar -->
                      <nav id="mobile-nav" class="flex flex-col right-0 w-64 fixed top-0 py-4 bg-white dark:bg-gray-800 h-full overflow-auto z-40" x-show="open" @click.away="open=false" x-description="Mobile menu" role="menu" aria-orientation="vertical" aria-labelledby="navbartoggle" x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
                        <div class="mb-auto">
                          <!--logo-->
                          <div class="mh-18 text-center px-12 mb-8">
                            <a href="offcanvas.html#" class="flex relative">
                              <h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden">
                                <img class="inline-block w-7 h-auto mr-2 -mt-1" src="/img/logo.png"><span class="text-gray-700 dark:text-gray-200">Taildash</span>
                              </h2>
                            </a>
                          </div>

                          <!--navigation-->
                          <div class="mb-4">
                            <nav class="relative flex flex-wrap items-center justify-between">
                              <ul id="side-menu" class="w-full float-none flex flex-col">
                                <li class="relative">
                                  <a href="offcanvas.html#" class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700">Home</a>
                                </li>
                                <li class="relative">
                                  <a href="offcanvas.html#" class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700">About</a>
                                </li>

                                <li class="relative">
                                  <a href="offcanvas.html#" class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700">Support</a>
                                </li>
                              </ul>
                            </nav>
                          </div>
                        </div>
                        <!-- copyright -->
                        <div class="mt-5 text-center">
                          <p>Copyright <a href="offcanvas.html#">Taildash</a> - All right
                            reserved</p>
                        </div>
                      </nav>
                    </div><!-- End Mobile menu -->
                  </div>
                </div>
              </div>
              <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;div x-data="{ open: false }"&gt;
			                    &lt;!-- Offcanvas button trigger --&gt;
			                    &lt;button id="navbartoggle" type="button" class="inline-flex items-center justify-center text-gray-800 hover:text-gray-700 dark:text-gray-400 dark:text-gray-300 focus:outline-none focus:ring-0" aria-controls="mobile-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()"&gt;
			                      &lt;span class="sr-only"&gt;Mobile menu&lt;/span&gt;
			                      &lt;svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"&gt;
			                        &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"&gt;&lt;/path&gt;
			                      &lt;/svg&gt;

			                      &lt;svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"&gt;
			                        &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"&gt;&lt;/path&gt;
			                      &lt;/svg&gt;
			                    &lt;/button&gt;

			                    &lt;!-- Right Offcanvas --&gt;
			                    &lt;div class="fixed w-full h-full inset-0 z-50" id="mobile-menu" x-description="Mobile menu" x-show="open" style="display: none;"&gt;
			                      &lt;!-- bg open --&gt;
			                      &lt;span class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"&gt;&lt;/span&gt;
			                      
			                      &lt;!-- Mobile navbar --&gt;
			                      &lt;nav id="mobile-nav" class="flex flex-col right-0 w-64 fixed top-0 py-4 bg-white dark:bg-gray-800 h-full overflow-auto z-40" x-show="open" @click.away="open=false" x-description="Mobile menu" role="menu" aria-orientation="vertical" aria-labelledby="navbartoggle" x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"&gt;
			                        &lt;div class="mb-auto"&gt;
			                          &lt;!--logo--&gt;
			                          &lt;div class="mh-18 text-center px-12 mb-8"&gt;
			                            &lt;a href="#" class="flex relative"&gt;
			                              &lt;h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden"&gt;&lt;img class="inline-block w-7 h-auto mr-2 -mt-1" src="/img/logo.png"&gt;&lt;span class="text-gray-700 dark:text-gray-200"&gt;Taildash&lt;/span&gt;&lt;/h2&gt;
			                            &lt;/a&gt;
			                          &lt;/div&gt;

			                          &lt;!--navigation--&gt;
			                          &lt;div class="mb-4"&gt;
			                            &lt;nav class="relative flex flex-wrap items-center justify-between"&gt;
			                              &lt;ul id="side-menu" class="w-full float-none flex flex-col"&gt;
			                                &lt;li class="relative"&gt;
			                                  &lt;a href="#" class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700"&gt;Home&lt;/a&gt;
			                                &lt;/li&gt;
			                                &lt;li class="relative"&gt;
			                                  &lt;a href="#" class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700"&gt;About&lt;/a&gt;
			                                &lt;/li&gt;

			                                &lt;li class="relative"&gt;
			                                  &lt;a href="#" class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700"&gt;Support&lt;/a&gt;
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
			                  &lt;/div&gt;
			                </code>
			              </pre>
            </div>

            <div class="mb-8">
              <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Left Offcanvas
              </h2>
              <p class="mb-4">Example Left Offcanvas.</p>
              <!-- example -->
              <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                <div class="flex justify-center">
                  <div x-data="{ open: false }">
                    <!-- Offcanvas button trigger -->
                    <button id="navbartoggle" type="button" class="inline-flex items-center justify-center text-gray-800 hover:text-gray-700 dark:text-gray-400 dark:text-gray-300 focus:outline-none focus:ring-0" aria-controls="mobile-menus" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                      <span class="sr-only">Mobile menu</span>
                      <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                      </svg>

                      <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                    </button>

                    <!-- Offcanvas -->
                    <div class="fixed w-full h-full inset-0 z-50" id="mobile-menus" x-description="Mobile menu" x-show="open" style="display: none;">
                      <!-- bg open -->
                      <span class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>

                      <!-- Mobile navbar -->
                      <nav id="mobile-nav" class="flex flex-col left-0 w-64 fixed top-0 py-4 bg-white dark:bg-gray-800 h-full overflow-auto z-40" x-show="open" @click.away="open=false" x-description="Mobile menu" role="menu" aria-orientation="vertical" aria-labelledby="navbartoggle" x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="-translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="-translate-x-0" x-transition:leave-end="-translate-x-full">
                        <div class="mb-auto">
                          <!--logo-->
                          <div class="mh-18 text-center px-12 mb-8">
                            <a href="offcanvas.html#" class="flex relative">
                              <h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden">
                                <img class="inline-block w-7 h-auto mr-2 -mt-1" src="/img/logo.png"><span class="text-gray-700 dark:text-gray-200">Taildash</span>
                              </h2>
                            </a>
                          </div>

                          <!--navigation-->
                          <div class="mb-4">
                            <nav class="relative flex flex-wrap items-center justify-between">
                              <ul id="side-menu" class="w-full float-none flex flex-col">
                                <li class="relative">
                                  <a href="offcanvas.html#" class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700">Home</a>
                                </li>
                                <li class="relative">
                                  <a href="offcanvas.html#" class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700">About</a>
                                </li>

                                <li class="relative">
                                  <a href="offcanvas.html#" class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700">Support</a>
                                </li>
                              </ul>
                            </nav>
                          </div>
                        </div>
                        <!-- copyright -->
                        <div class="mt-5 text-center">
                          <p>Copyright <a href="offcanvas.html#">Taildash</a> - All right
                            reserved</p>
                        </div>
                      </nav>
                    </div><!-- End Mobile menu -->
                  </div>
                </div>
              </div>
              <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;div x-data="{ open: false }"&gt;
			                    &lt;!-- Offcanvas button trigger --&gt;
			                    &lt;button id="navbartoggle" type="button" class="inline-flex items-center justify-center text-gray-800 hover:text-gray-700 dark:text-gray-400 dark:text-gray-300 focus:outline-none focus:ring-0" aria-controls="mobile-menus" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()"&gt;
			                      &lt;span class="sr-only"&gt;Mobile menu&lt;/span&gt;
			                      &lt;svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"&gt;
			                        &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"&gt;&lt;/path&gt;
			                      &lt;/svg&gt;

			                      &lt;svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"&gt;
			                        &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"&gt;&lt;/path&gt;
			                      &lt;/svg&gt;
			                    &lt;/button&gt;

			                    &lt;!-- Offcanvas --&gt;
			                    &lt;div class="fixed w-full h-full inset-0 z-50" id="mobile-menus" x-description="Mobile menu" x-show="open" style="display: none;"&gt;
			                      &lt;!-- bg open --&gt;
			                      &lt;span class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"&gt;&lt;/span&gt;
			                      
			                      &lt;!-- Mobile navbar --&gt;
			                      &lt;nav id="mobile-nav" class="flex flex-col left-0 w-64 fixed top-0 py-4 bg-white dark:bg-gray-800 h-full overflow-auto z-40" x-show="open" @click.away="open=false" x-description="Mobile menu" role="menu" aria-orientation="vertical" aria-labelledby="navbartoggle" x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="-translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="-translate-x-0" x-transition:leave-end="-translate-x-full"&gt;
			                        &lt;div class="mb-auto"&gt;
			                          &lt;!--logo--&gt;
			                          &lt;div class="mh-18 text-center px-12 mb-8"&gt;
			                            &lt;a href="#" class="flex relative"&gt;
			                              &lt;h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden"&gt;&lt;img class="inline-block w-7 h-auto mr-2 -mt-1" src="/img/logo.png"&gt;&lt;span class="text-gray-700 dark:text-gray-200"&gt;Taildash&lt;/span&gt;&lt;/h2&gt;
			                            &lt;/a&gt;
			                          &lt;/div&gt;

			                          &lt;!--navigation--&gt;
			                          &lt;div class="mb-4"&gt;
			                            &lt;nav class="relative flex flex-wrap items-center justify-between"&gt;
			                              &lt;ul id="side-menu" class="w-full float-none flex flex-col"&gt;
			                                &lt;li class="relative"&gt;
			                                  &lt;a href="#" class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700"&gt;Home&lt;/a&gt;
			                                &lt;/li&gt;
			                                &lt;li class="relative"&gt;
			                                  &lt;a href="#" class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700"&gt;About&lt;/a&gt;
			                                &lt;/li&gt;

			                                &lt;li class="relative"&gt;
			                                  &lt;a href="#" class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700"&gt;Support&lt;/a&gt;
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
			                  &lt;/div&gt;
			                </code>
			              </pre>
              <p class="my-4">Offcanvas is ready in default navbar <a href="navbar.html#navbar-offcanvas" class="text-blue-500">Navbar Offcanvas
                  mobile</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-admin-layout>