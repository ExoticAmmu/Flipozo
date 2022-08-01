<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
   <!-- ========== { HEADER }==========  -->
   <header>
    <!-- Navbar -->
    <nav x-data="{ open: false }" class="nav-top flex flex-nowrap lg:flex-start items-center z-20 fixed top-0 left-0 right-0 bg-indigo-600 bg-gradient-to-r from-indigo-800 via-indigo-700 to-green-500 dark:from-gray-800 dark:via-gray-700 dark:to-green-700 overflow-y-auto max-h-screen lg:overflow-visible lg:max-h-full">
      <div class="container mx-auto px-4 xl:max-w-6xl ">
        <!-- mobile navigation -->
        <div class="flex flex-row justify-between py-3 lg:hidden">
          <!-- logo -->
          <a class="flex items-center py-2 mr-4 text-xl" href="index.html">
            <h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden">
              <!-- <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="{{ ('/img/logo.png"> -->
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 ltr:mr-2 rtl:ml-2 -mt-1" viewBox="0 0 300.000000 300.000000"> 
                <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                  <path class="text-pink-500" d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                  -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                  -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                  5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                  58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                  465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z"/>
                  <path class="text-indigo-500" d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                  0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                  -687 428 -110 29 -111 28 -153 -37z"/>
                  <path class="text-indigo-500" d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                  l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                  62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                  -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                  -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                  217 -10 16 -14 14 -45 -18z"/>
                </g>
              </svg><span class="text-gray-200">Taildash</span></h2>
          </a>

          <!-- navbar toggler -->
          <div class="right-0 flex items-center">
            <!-- Mobile menu button-->
            <button id="navbartoggle" type="button" class="inline-flex items-center justify-center text-gray-200 focus:outline-none focus:ring-0" aria-controls="mobile-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
              <span class="sr-only">Mobile menu</span>
              <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>

              <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
        </div>

        <!-- Mobile menu -->
        <div class="lg:hidden fixed w-full h-full inset-0 z-40" id="mobile-menu" x-description="Mobile menu" x-show="open" style="display: none;">
          <!-- bg open -->
          <span class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>
          
          <!-- Mobile navbar -->
          <nav id="mobile-nav" class="flex flex-col ltr:right-0 rtl:left-0 w-64 fixed top-0 py-4 bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-400 h-full overflow-auto z-40" x-show="open" @click.away="open=false" x-description="Mobile menu" role="menu" aria-orientation="vertical" aria-labelledby="navbartoggle" x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="ltr:translate-x-full rtl:-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="ltr:translate-x-full rtl:-translate-x-full">
            <div class="mb-auto">
              <!--logo-->
              <div class="mh-18 text-center px-12 mb-8">
                <a href="landing.html#" class="flex relative">
                  <h2 class="text-2xl font-semibold text-gray-200 max-h-9">
                    <!-- <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="{{ ('/img/logo.png"> -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 ltr:mr-2 rtl:ml-2 -mt-1" viewBox="0 0 300.000000 300.000000"> 
                    <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                      <path class="text-pink-500" d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                      -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                      -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                      5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                      58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                      465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z"/>
                      <path class="text-indigo-500" d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                      0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                      -687 428 -110 29 -111 28 -153 -37z"/>
                      <path class="text-indigo-500" d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                      l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                      62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                      -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                      -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                      217 -10 16 -14 14 -45 -18z"/>
                    </g>
                  </svg><span class="text-gray-700 dark:text-gray-200">Taildash</span></h2>
                </a>
              </div>

              <!--navigation-->
              <div class="mb-4">
                <nav class="relative flex flex-wrap items-center justify-between">
                  <ul id="side-menu" class="w-full float-none flex flex-col">
                    <li class="relative">
                      <a href="landing.html#" class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Home</a>
                    </li>
                    <li class="relative">
                      <a href="landing.html#" class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Features</a>
                    </li>
                    <li class="relative">
                      <a href="landing.html#" class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Pricing</a>
                    </li>
                    <li class="relative">
                      <a href="landing.html#" class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Faq</a>
                    </li>
                    <!-- dropdown -->
                    <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false">
                      <a id="mobiledrop-03" class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500" href="javascript:;" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-indigo-500': open }">
                        Docs
                        <!-- caret -->
                        <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                          <svg xmlns="http://www.w3.org/2000/svg" class="transform transition duration-300" :class="{ 'rotate-0' : open , 'ltr:-rotate-90 rtl:rotate-90' : !open }" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/></svg>
                        </span>
                      </a>

                      <!-- dropdown menu -->
                      <ul class="block rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right mb-4" style="min-width: 12rem" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="mobiledrop-03">
                        <li class="relative">
                          <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="docs/introduction.html">Documentation</a>
                        </li>
                        <li class="relative">
                          <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="components/alerts.html">Components</a>
                        </li>
                        <li class="relative">
                          <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="docs/changelog.html">Changelog</a>
                        </li>
                      </ul>
                    </li>

                    <li class="relative">
                      <a href="landing.html#" class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Contact</a>
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
        <div class="hidden lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-between lg:mt-0" id="desktp-menu">
          <!-- logo -->
          <a class="hidden lg:flex items-center py-2 mr-4 text-xl" href="index.html">
            <h2 class="text-2xl font-semibold px-4 max-h-9 overflow-hidden">
              <!-- <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="{{ ('/img/logo.png"> -->
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 ltr:mr-2 rtl:ml-2 -mt-1" viewBox="0 0 300.000000 300.000000"> 
                <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                  <path class="text-pink-500" d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                  -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                  -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                  5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                  58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                  465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z"/>
                  <path class="text-indigo-500" d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                  0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                  -687 428 -110 29 -111 28 -153 -37z"/>
                  <path class="text-indigo-500" d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                  l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                  62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                  -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                  -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                  217 -10 16 -14 14 -45 -18z"/>
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
            <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @mouseleave="open = false">
              <a id="dropdown-01" class="block py-3 lg:py-7 px-6 hover:text-white focus:text-white" href="javascript:;" @mouseenter="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-white': open }">
                Docs
                <!-- caret -->
                <span class="inline-block ltr:ml-2 rtl:mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/></svg>
                </span>
              </a>
              <!-- dropdown menu -->
              <ul class="block absolute left-1/2 right-auto border-t-2 transform -translate-x-1/2 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white text-gray-700 dark:text-gray-200 dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="min-width: 12rem"  x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95">
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="docs/introduction.html">Documentation</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="components/alerts.html">Components</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="docs/changelog.html">Changelog</a>
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
            <a class="py-2 px-4 text-sm inline-block text-center rounded leading-5 text-gray-100 bg-pink-500 border border-pink-500 hover:text-gray-300 hover:bg-pink-600 hover:ring-0 hover:border-pink-600 focus:bg-pink-600 focus:border-pink-600 focus:outline-none focus:ring-0" target="_blank" rel="noopener" href="landing.html#">
              <svg xmlns="http://www.w3.org/2000/svg" class="inline ltr:mr-1 rtl:ml-1" width="1.2rem" height="1.2rem" fill="currentColor" viewBox="0 0 512 512"><circle cx="176" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><circle cx="400" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="48 80 112 80 160 352 416 352" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg> Buy Now
            </a>
          </div>
        </div><!-- end desktop menu -->
      </div>
    </nav><!-- End Navbar -->
  </header><!-- end header -->
</nav>
