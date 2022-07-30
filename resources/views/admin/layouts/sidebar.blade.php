<nav id="sidebar-menu" x-description="Mobile menu" x-bind:aria-expanded="open" :class="{ 'w-64 md:w-0': open, 'w-0 md:w-64': !(open) }" class="fixed w-64 transition-all duration-500 ease-in-out h-screen bg-white dark:bg-gray-800 shadow-sm">
  <div class="h-full overflow-y-auto scrollbars">
    <!--logo-->
    <div class="mh-18 text-center py-5">
      <a href="{{ url('admin/dashboard') }}" class="relative">
        <h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden hidden-compact">
          <!-- <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="/img/logo.png"> -->
          <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 ltr:mr-2 rtl:ml-2 -mt-1" viewBox="0 0 300.000000 300.000000">
            <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
              <path class="text-pink-500" d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                  -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                  -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                  5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                  58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                  465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z" />
              <path class="text-indigo-500" d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                  0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                  -687 428 -110 29 -111 28 -153 -37z" />
              <path class="text-indigo-500" d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                  l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                  62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                  -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                  -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                  217 -10 16 -14 14 -45 -18z" />
            </g>
          </svg><span class="text-gray-700 dark:text-gray-200">Taildash</span>
          <h2 class="text-3xl font-semibold mx-auto logo-compact hidden">
            <!-- <img class="inline-block w-7 h-auto -mt-1" src="/img/logo.png"> -->
            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 -mt-1" viewBox="0 0 300.000000 300.000000">
              <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                <path class="text-pink-500" d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                  -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                  -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                  5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                  58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                  465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z" />
                <path class="text-indigo-500" d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                  0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                  -687 428 -110 29 -111 28 -153 -37z" />
                <path class="text-indigo-500" d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                  l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                  62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                  -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                  -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                  217 -10 16 -14 14 -45 -18z" />
              </g>
            </svg>
          </h2>
      </a>
    </div>

    <!-- Sidebar menu -->
    <ul id="side-menu" x-data="{selected:1}" class="w-full float-none flex flex-col font-medium ltr:pl-1.5 rtl:pr-1.5">
      <li>
        <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/customers') }}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-calendar4-week" viewBox="0 0 16 16">
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
          </svg>
          <!-- <i class="mr-2 fas fa-calendar-alt"></i> -->
          <span>Customers</span>
        </a>
      </li>
      <!-- dropdown -->
      <li class="relative">
        <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 15 }" @click="selected !== 15 ? selected = 15 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-shop" viewBox="0 0 16 16">
            <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
          </svg>
          <!-- <i class="mr-2 fas fa-store"></i> -->
          <span>Ecommerce</span>
          <!-- caret -->
          <span class="inline-block ltr:float-right rtl:float-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 2, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 2) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 2, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 2) }"></i> -->
          </span>
        </a>

        <!-- dropdown menu -->
        <ul x-show="selected == 15" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/products') }}">Products</a>
          </li>
        </ul>
      </li>
      <!-- dropdown -->
      <li class="relative">
        <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 1 }" @click="selected !== 1 ? selected = 1 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-house-door" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
          </svg>
          <!-- <i class="ltr:mr-2 rtl:ml-2 fas fa-home"></i> -->
          <span>Dashboards</span>
          <!-- caret -->
          <span class="inline-block ltr:float-right rtl:float-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 1, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 1) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 1, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 1) }"></i> -->
          </span>
        </a>

        <!-- dropdown menu -->
        <ul x-show="selected == 1" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
          <li class="relative">
            <a class="text-indigo-500 dark:text-gray-300 block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/dashboard') }}">CMS</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/index-analytics') }}">Analytics</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/index-ecommerce') }}">Ecommerce</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/index-projects') }}">Projects</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/index-crm') }}">CRM</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/index-hosting') }}">Hosting</a>
          </li>
        </ul>
      </li>

      <li>
        <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/calendar') }}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-calendar4-week" viewBox="0 0 16 16">
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
          </svg>
          <!-- <i class="mr-2 fas fa-calendar-alt"></i> -->
          <span>Calendar</span>
        </a>
      </li>

      <!-- dropdown -->
      <li class="relative">
        <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 2 }" @click="selected !== 2 ? selected = 2 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-shop" viewBox="0 0 16 16">
            <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
          </svg>
          <!-- <i class="mr-2 fas fa-store"></i> -->
          <span>Ecommerce</span>
          <!-- caret -->
          <span class="inline-block ltr:float-right rtl:float-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 2, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 2) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 2, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 2) }"></i> -->
          </span>
        </a>

        <!-- dropdown menu -->
        <ul x-show="selected == 2" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/ecommerce/product-detail') }}">Product Details</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/ecommerce/order') }}">Orders</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/ecommerce/order-detail') }}">Order Details</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/ecommerce/cart') }}">Shopping Cart</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/ecommerce/checkout') }}">Checkout</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/ecommerce/seller') }}">Sellers</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/ecommerce/invoice') }}">Invoice</a>
          </li>
        </ul>
      </li>

      <!-- dropdown -->
      <li class="relative">
        <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 3 }" @click="selected !== 3 ? selected = 3 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-briefcase" viewBox="0 0 16 16">
            <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
          </svg>
          <!-- <i class="mr-2 fas fa-suitcase"></i> -->
          <span>Projects</span>
          <!-- caret -->
          <span class="inline-block ltr:float-right rtl:float-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 3, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 3) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 3, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 3) }"></i> -->
          </span>
        </a>

        <!-- dropdown menu -->
        <ul x-show="selected == 3" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/project/list') }}">List</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/project/detail') }}">Detail</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/project/kanban') }}">Kanban</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/project/create') }}">Create</a>
          </li>
        </ul>
      </li>

      <!-- dropdown -->
      <li class="relative">
        <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 4 }" @click="selected !== 4 ? selected = 4 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-file-earmark-richtext" viewBox="0 0 16 16">
            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
            <path d="M4.5 12.5A.5.5 0 0 1 5 12h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 10h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm1.639-3.708 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V8.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V8s1.54-1.274 1.639-1.208zM6.25 6a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z" />
          </svg>
          <!-- <i class="mr-2 fas fa-file"></i> -->
          <span>Pages</span>
          <!-- caret -->
          <span class="inline-block ltr:float-right rtl:float-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 4, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 4) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 4, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 4) }"></i> -->
          </span>
        </a>

        <!-- dropdown menu -->
        <ul x-show="selected == 4" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
          <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false">
            <a @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" id="auth" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              Authentication
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }"></i> -->
              </span>
            </a>
            <ul class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" x-show="open" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" role="menu" aria-orientation="vertical" aria-labelledby="auth">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/authentication/register-basic') }}">Register basic</a>
              </li>

              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/authentication/register-ilustration') }}">Register ilustration</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/authentication/login-basic') }}">Login basic</a>
              </li>

              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/authentication/login-ilustration') }}">Login ilustration</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/authentication/forgot-password') }}">Forgot password</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/authentication/confirm-email') }}">Confirm email</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/authentication/change-password') }}">Change password</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/authentication/logout-page') }}">Logout page</a>
              </li>
            </ul>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/pages-profile') }}">Profile</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/pages-service') }}">Services</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/pages-faq') }}">Faq</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/pages-pricing') }}">Pricing</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/pages-maintenance') }}">Maintenance</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/pages-404') }}">404</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/pages-starter') }}">Starter</a>
          </li>
        </ul>
      </li>

      <li>
        <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/landing') }}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-window-sidebar" viewBox="0 0 16 16">
            <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
            <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v2H1V3a1 1 0 0 1 1-1h12zM1 13V6h4v8H2a1 1 0 0 1-1-1zm5 1V6h9v7a1 1 0 0 1-1 1H6z" />
          </svg>
          <!-- <i class="mr-2 fas fa-window-maximize"></i> -->
          <span>Landing page</span>
        </a>
      </li>

      <!-- dropdown -->
      <li class="relative">
        <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 5 }" @click="selected !== 5 ? selected = 5 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-layout-sidebar-inset" viewBox="0 0 16 16">
            <path d="M14 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z" />
            <path d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
          </svg>
          <!-- <i class="mr-2 fas fa-columns"></i> -->
          <span>Layout</span>
          <!-- caret -->
          <span class="inline-block ltr:float-right rtl:float-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 5, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 5) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 5, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 5) }"></i> -->
          </span>
        </a>

        <!-- dropdown menu -->
        <ul x-show="selected == 5" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/layout-sidedark') }}">Side Dark</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/layout-dark') }}">Dark mode</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/layout-rtl') }}">RTL mode</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/layout-compact') }}">Compact</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/layout-topnav') }}">Top Navbar</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/layout-preloader') }}">Preloader</a>
          </li>
        </ul>
      </li>

      <!-- dropdown -->
      <li class="relative">
        <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 6 }" @click="selected !== 6 ? selected = 6 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-layers" viewBox="0 0 16 16">
            <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
          </svg>
          <!-- <i class="mr-2 fas fa-layer-group"></i> -->
          <span>Components</span>
          <!-- caret -->
          <span class="inline-block ltr:float-right rtl:float-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 6, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 6) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 6, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 6) }"></i> -->
          </span>
        </a>

        <!-- dropdown menu -->
        <ul x-show="selected == 6" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/accordion') }}">Accordion</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/alerts') }}">Alerts</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/avatar') }}">Avatar</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/badge') }}">Badge</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/breadcrumb') }}">Breadcrumb</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/buttons') }}">Buttons</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/card') }}">Card</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/carousel') }}">Carousel</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/collapse') }}">Collapse</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/devices') }}">Devices</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/dropdowns') }}">Dropdowns</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/grid') }}">Grid</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/list-group') }}">List Group</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/lightbox') }}">Lightbox</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/map') }}">Map</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/modal') }}">Modal</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/navbar') }}">Navbar</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/notification') }}">Notification</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/offcanvas') }}">Offcanvas</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/pagination') }}">Pagination</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/popovers') }}">Popovers</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/progress') }}">Progress</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/ribbon') }}">Ribbon</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/scrollbar') }}">Scrollbar</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/spinners') }}">Spinners</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/sweetalert') }}">Sweet alert</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/tabs') }}">Tabs</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/components/tooltips') }}">Tooltips</a>
          </li>
        </ul>
      </li>

      <li>
        <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/widgets') }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-columns-gap" viewBox="0 0 16 16">
            <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
          </svg>
          <!-- <i class="mr-2 fas fa-window-maximize"></i> -->
          <span>Widgets</span>
        </a>
      </li>

      <!-- dropdown -->
      <li class="relative">
        <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 7 }" @click="selected !== 7 ? selected = 7 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-card-list" viewBox="0 0 16 16">
            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
            <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
          </svg>
          <!-- <i class="mr-2 fas fa-list-alt"></i> -->
          <span>Forms</span>
          <!-- caret -->
          <span class="inline-block ltr:float-right rtl:float-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 7, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 7) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 7, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 7) }"></i> -->
          </span>
        </a>

        <!-- dropdown menu -->
        <ul x-show="selected == 7" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/forms/basic') }}">Basic Form</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/forms/datepicker') }}">Datepicker</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/forms/editor') }}">Editor</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/forms/input-tags') }}">Input tags</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/forms/uploader') }}">Uplader</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/forms/validation') }}">Validation</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/forms/layout') }}">Layout</a>
          </li>
        </ul>
      </li>

      <!-- dropdown -->
      <li class="relative">
        <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 8 }" @click="selected !== 8 ? selected = 8 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-blockquote-right" viewBox="0 0 16 16">
            <path d="M2.5 3a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1h-11zm0 3a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6zm0 3a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6zm0 3a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1h-11zm10.113-5.373a6.59 6.59 0 0 0-.445-.275l.21-.352c.122.074.272.17.452.287.18.117.35.26.51.428.156.164.289.351.398.562.11.207.164.438.164.692 0 .36-.072.65-.216.873-.145.219-.385.328-.721.328-.215 0-.383-.07-.504-.211a.697.697 0 0 1-.188-.463c0-.23.07-.404.211-.521.137-.121.326-.182.569-.182h.281a1.686 1.686 0 0 0-.123-.498 1.379 1.379 0 0 0-.252-.37 1.94 1.94 0 0 0-.346-.298zm-2.168 0A6.59 6.59 0 0 0 10 6.352L10.21 6c.122.074.272.17.452.287.18.117.35.26.51.428.156.164.289.351.398.562.11.207.164.438.164.692 0 .36-.072.65-.216.873-.145.219-.385.328-.721.328-.215 0-.383-.07-.504-.211a.697.697 0 0 1-.188-.463c0-.23.07-.404.211-.521.137-.121.327-.182.569-.182h.281a1.749 1.749 0 0 0-.117-.492 1.402 1.402 0 0 0-.258-.375 1.94 1.94 0 0 0-.346-.3z" />
          </svg>
          <!-- <i class="mr-2 fas fa-file-alt"></i> -->
          <span>Content</span>
          <!-- caret -->
          <span class="inline-block ltr:float-right rtl:float-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 8, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 8) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 8, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 8) }"></i> -->
          </span>
        </a>

        <!-- dropdown menu -->
        <ul x-show="selected == 8" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/content/typography') }}">Typography</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/content/tables') }}">Tables</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/content/images') }}">Images</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/content/embed-video') }}">Embed video</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/content/icons') }}">Icons</a>
          </li>
        </ul>
      </li>

      <li class="relative">
        <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/charts') }}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-bar-chart-line" viewBox="0 0 16 16">
            <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
          </svg>
          <!-- <i class="mr-2 fas fa-chart-bar"></i> -->
          <span>Charts</span>
        </a>
      </li>

      <li class="relative">
        <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/file-manager') }}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-folder" viewBox="0 0 16 16">
            <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z" />
          </svg>
          <!-- <i class="mr-2 fas fa-folder"></i> -->
          <span>File Manager</span>
        </a>
      </li>

      <!-- dropdown -->
      <li class="relative">
        <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 9 }" @click="selected !== 9 ? selected = 9 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi  bi-file-text" viewBox="0 0 16 16">
            <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
          </svg>
          <!-- <i class="mr-2 fas fa-book"></i> -->
          <span>Documentation</span>
          <!-- caret -->
          <span class="inline-block ltr:float-right rtl:float-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 9, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 9) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 9, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 9) }"></i> -->
          </span>
        </a>

        <!-- dropdown menu -->
        <ul x-show="selected == 9" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/docs/introduction') }}">Introduction</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/docs/tools') }}">Tools</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/docs/customize') }}">Customize</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/docs/rtl') }}">RTL Direction</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/docs/credits') }}">Credits</a>
          </li>
          <li class="relative">
            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="{{ url('admin/docs/changelog') }}">Changelog</a>
          </li>
        </ul>
      </li>

      <!-- dropdown -->
      <li class="relative">
        <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 10 }" @click="selected !== 10 ? selected = 10 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-list-nested" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5z" />
          </svg>
          <!-- <i class="mr-2 fas fa-stream"></i> -->
          <span>Multi Level</span>
          <!-- caret -->
          <span class="inline-block ltr:float-right rtl:float-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 10, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 10) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 10, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 10) }"></i> -->
          </span>
        </a>
        <ul x-show="selected == 10" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
          <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false">
            <a :class="{ 'text-indigo-500': open }" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" id="mobiledrop-91" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              Second Level
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }"></i> -->
              </span>
            </a>
            <ul class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" x-show="open" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" role="menu" aria-orientation="vertical" aria-labelledby="mobiledrop-91">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="index#">Item 1</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="index#">Item 2</a>
              </li>
            </ul>
          </li>

        </ul>
      </li>
    </ul>

    <!-- Banner -->
    <div class="px-4 box-banner">
      <div class="my-8 p-4 text-center bg-gray-300 dark:bg-gray-700 bg-opacity-50 rounded-lg">
        <h4 class="font-bold inline-block mb-2">Sales Report</h4>
        <div class="mb-3 text-sm">
          Monthly sales report is ready for download!
        </div>

        <div class="grid">
          <a href="index#" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-pink-500 border border-pink-500 hover:text-white hover:bg-pink-600 hover:ring-0 hover:border-pink-600 focus:bg-pink-600 focus:border-pink-600 focus:outline-none focus:ring-0" target="_blank">Download</a>
        </div>
      </div>
    </div><!-- end banner -->
  </div>
</nav>