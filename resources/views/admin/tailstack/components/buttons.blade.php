<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
<html lang="en" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title  -->
  <title>Taildash | Tailwind Dashboard Template</title>
  <meta name="description" content="Tailwind Dashboard Template">

  <!-- Development css (used in all pages) -->
  <link rel="stylesheet" id="stylesheet" href="../src/css/style.css">
  <!-- Production css (used in all pages) -->
  <!-- <link rel="stylesheet" href="../dist/css/style.css"> -->

  <!--start::Vendor Stylesheets (only on this page)-->
  <link rel="stylesheet" href="../src/css/customizer.css">
  <link rel="stylesheet" href="../src/css/prism.css">
  <!--end::Vendor Stylesheets (only on this page)-->

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

  <!-- Favicon  -->
  <link rel="icon" href="../src/img/favicon.png">
</head>
<body class="font-sans text-base font-normal text-gray-600 dark:text-gray-400 dark:bg-gray-800">
  <!-- wrapper -->
  <div x-data="{ open: false }" class="wrapper overflow-x-hidden bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
    <nav id="sidebar-menu" x-description="Mobile menu" x-bind:aria-expanded="open" :class="{ 'w-64 md:w-0': open, 'w-0 md:w-64': !(open) }" class="fixed w-64 transition-all duration-500 ease-in-out h-screen bg-white dark:bg-gray-800 shadow-sm">
      <div class="h-full overflow-y-auto scrollbars">
        <!--logo-->
        <div class="mh-18 text-center py-5">
          <a href="buttons.html#" class="relative">
            <h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden hidden-compact">
              <!-- <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="../src/img/logo.png"> -->
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
              </svg><span class="text-gray-700 dark:text-gray-200">Taildash</span>
            <h2 class="text-3xl font-semibold mx-auto logo-compact hidden">
              <!-- <img class="inline-block w-7 h-auto -mt-1" src="../src/img/logo.png"> -->
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 -mt-1" viewBox="0 0 300.000000 300.000000"> 
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
              </svg>
            </h2>
          </a>
        </div>

        <!-- Sidebar menu -->
        <ul id="side-menu" x-data="{selected:6}" class="w-full float-none flex flex-col font-medium ltr:pl-1.5 rtl:pr-1.5">
          <!-- dropdown -->
          <li class="relative">
            <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 1 }" @click="selected !== 1 ? selected = 1 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-house-door" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
              </svg>
              <!-- <i class="ltr:mr-2 rtl:ml-2 fas fa-home"></i> -->
              <span>Dashboards</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 1, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 1) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 1, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 1) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 1" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../index.html">CMS</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../index-analytics.html">Analytics</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../index-ecommerce.html">Ecommerce</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../index-projects.html">Projects</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../index-crm.html">CRM</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../index-hosting.html">Hosting</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="../calendar.html">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-calendar4-week" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-calendar-alt"></i> -->
              <span>Calendar</span>
            </a>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 2 }" @click="selected !== 2 ? selected = 2 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-shop" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-store"></i> -->
              <span>Ecommerce</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 2, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 2) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 2, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 2) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 2" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../ecommerce/product.html">Products</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../ecommerce/product-detail.html">Product Details</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../ecommerce/order.html">Orders</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../ecommerce/order-detail.html">Order Details</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../ecommerce/customers.html">Customers</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../ecommerce/cart.html">Shopping Cart</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../ecommerce/checkout.html">Checkout</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../ecommerce/seller.html">Sellers</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../ecommerce/invoice.html">Invoice</a>
              </li>
            </ul>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 3 }" @click="selected !== 3 ? selected = 3 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-briefcase" viewBox="0 0 16 16">
                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-suitcase"></i> -->
              <span>Projects</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 3, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 3) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 3, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 3) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 3" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../project/list.html">List</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../project/detail.html">Detail</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../project/kanban.html">Kanban</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../project/create.html">Create</a>
              </li>
            </ul>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 4 }" @click="selected !== 4 ? selected = 4 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-file-earmark-richtext" viewBox="0 0 16 16">
                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                <path d="M4.5 12.5A.5.5 0 0 1 5 12h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 10h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm1.639-3.708 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V8.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V8s1.54-1.274 1.639-1.208zM6.25 6a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-file"></i> -->
              <span>Pages</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 4, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 4) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
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
                      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }"></i> -->
                  </span>
                </a>
                <ul class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" x-show="open" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" role="menu" aria-orientation="vertical" aria-labelledby="auth">
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../authentication/register-basic.html">Register basic</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../authentication/register-cover.html">Register cover</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../authentication/register-ilustration.html">Register ilustration</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../authentication/login-basic.html">Login basic</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../authentication/login-cover.html">Login cover</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../authentication/login-ilustration.html">Login ilustration</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../authentication/forgot-password.html">Forgot password</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../authentication/confirm-email.html">Confirm email</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../authentication/change-password.html">Change password</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../authentication/logout-page.html">Logout page</a>
                  </li>
                </ul>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../pages-profile.html">Profile</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../pages-service.html">Services</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../pages-faq.html">Faq</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../pages-pricing.html">Pricing</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../pages-maintenance.html">Maintenance</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../pages-404.html">404</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../pages-starter.html">Starter</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="../landing.html">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-window-sidebar" viewBox="0 0 16 16">
                <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v2H1V3a1 1 0 0 1 1-1h12zM1 13V6h4v8H2a1 1 0 0 1-1-1zm5 1V6h9v7a1 1 0 0 1-1 1H6z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-window-maximize"></i> -->
              <span>Landing page</span>
            </a>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 5 }" @click="selected !== 5 ? selected = 5 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-layout-sidebar-inset" viewBox="0 0 16 16">
                <path d="M14 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                <path d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-columns"></i> -->
              <span>Layout</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 5, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 5) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 5, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 5) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 5" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../layout-sidedark.html">Side Dark</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../layout-dark.html">Dark mode</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../layout-rtl.html">RTL mode</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../layout-compact.html">Compact</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../layout-topnav.html">Top Navbar</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../layout-preloader.html">Preloader</a>
              </li>
            </ul>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 6 }" @click="selected !== 6 ? selected = 6 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-layers" viewBox="0 0 16 16">
                <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-layer-group"></i> -->
              <span>Components</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 6, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 6) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 6, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 6) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 6" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="accordion.html">Accordion</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="alerts.html">Alerts</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="avatar.html">Avatar</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="badge.html">Badge</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="breadcrumb.html">Breadcrumb</a>
              </li>
              <li class="relative">
                <a class="text-indigo-500 block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="buttons.html">Buttons</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="card.html">Card</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="carousel.html">Carousel</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="collapse.html">Collapse</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="devices.html">Devices</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="dropdowns.html">Dropdowns</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="grid.html">Grid</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="list-group.html">List Group</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="lightbox.html">Lightbox</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="map.html">Map</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="modal.html">Modal</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="navbar.html">Navbar</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="notification.html">Notification</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="offcanvas.html">Offcanvas</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="pagination.html">Pagination</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="popovers.html">Popovers</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="progress.html">Progress</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="ribbon.html">Ribbon</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="scrollbar.html">Scrollbar</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="spinners.html">Spinners</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="sweetalert.html">Sweet alert</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="tabs.html">Tabs</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="tooltips.html">Tooltips</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="../widgets.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-columns-gap" viewBox="0 0 16 16">
                <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-window-maximize"></i> -->
              <span>Widgets</span>
            </a>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 7 }" @click="selected !== 7 ? selected = 7 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-card-list" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-list-alt"></i> -->
              <span>Forms</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 7, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 7) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 7, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 7) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 7" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../forms/basic.html">Basic Form</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../forms/datepicker.html">Datepicker</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../forms/editor.html">Editor</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../forms/input-tags.html">Input tags</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../forms/uploader.html">Uplader</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../forms/validation.html">Validation</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../forms/layout.html">Layout</a>
              </li>
            </ul>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 8 }" @click="selected !== 8 ? selected = 8 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-blockquote-right" viewBox="0 0 16 16">
                <path d="M2.5 3a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1h-11zm0 3a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6zm0 3a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6zm0 3a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1h-11zm10.113-5.373a6.59 6.59 0 0 0-.445-.275l.21-.352c.122.074.272.17.452.287.18.117.35.26.51.428.156.164.289.351.398.562.11.207.164.438.164.692 0 .36-.072.65-.216.873-.145.219-.385.328-.721.328-.215 0-.383-.07-.504-.211a.697.697 0 0 1-.188-.463c0-.23.07-.404.211-.521.137-.121.326-.182.569-.182h.281a1.686 1.686 0 0 0-.123-.498 1.379 1.379 0 0 0-.252-.37 1.94 1.94 0 0 0-.346-.298zm-2.168 0A6.59 6.59 0 0 0 10 6.352L10.21 6c.122.074.272.17.452.287.18.117.35.26.51.428.156.164.289.351.398.562.11.207.164.438.164.692 0 .36-.072.65-.216.873-.145.219-.385.328-.721.328-.215 0-.383-.07-.504-.211a.697.697 0 0 1-.188-.463c0-.23.07-.404.211-.521.137-.121.327-.182.569-.182h.281a1.749 1.749 0 0 0-.117-.492 1.402 1.402 0 0 0-.258-.375 1.94 1.94 0 0 0-.346-.3z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-file-alt"></i> -->
              <span>Content</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 8, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 8) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 8, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 8) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 8" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../content/typography.html">Typography</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../content/tables.html">Tables</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../content/images.html">Images</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../content/embed-video.html">Embed video</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../content/icons.html">Icons</a>
              </li>
            </ul>
          </li>

          <li class="relative">
            <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="../charts.html">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-bar-chart-line" viewBox="0 0 16 16">
                <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-chart-bar"></i> -->
              <span>Charts</span>
            </a>
          </li>

          <li class="relative">
            <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="../file-manager.html">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-folder" viewBox="0 0 16 16">
                <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-folder"></i> -->
              <span>File Manager</span>
            </a>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 9 }" @click="selected !== 9 ? selected = 9 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi  bi-file-text" viewBox="0 0 16 16">
                <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-book"></i> -->
              <span>Documentation</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 9, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 9) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 9, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 9) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 9" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../docs/introduction.html">Introduction</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../docs/tools.html">Tools</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../docs/customize.html">Customize</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../docs/rtl.html">RTL Direction</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../docs/credits.html">Credits</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="../docs/changelog.html">Changelog</a>
              </li>
            </ul>
          </li>
          
          <!-- dropdown -->
          <li class="relative">
            <a  :class="{ 'text-indigo-500 dark:text-gray-300': selected == 10 }" @click="selected !== 10 ? selected = 10 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-list-nested" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5z"/>
              </svg>
              <!-- <i class="mr-2 fas fa-stream"></i> -->
             <span>Multi Level</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 10, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 10) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
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
                      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }"></i> -->
                  </span>
                </a>
                <ul class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" x-show="open" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" role="menu" aria-orientation="vertical" aria-labelledby="mobiledrop-91">
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="buttons.html#">Item 1</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="buttons.html#">Item 2</a>
                  </li>
                </ul>
              </li>
              <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false">
                <a :class="{ 'text-indigo-500': open }" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" id="mobiledrop-92" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
                  Third Level
                  <!-- caret -->
                  <span class="inline-block ltr:float-right rtl:float-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }"></i> -->
                  </span>
                </a>
                <ul class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" x-show="open" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" role="menu" aria-orientation="vertical" aria-labelledby="mobiledrop-92">
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="buttons.html#">Item 1</a>
                  </li>
                  <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false">
                    <a :class="{ 'text-indigo-500': open }" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" id="mobiledrop-93" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
                      <span> Item 2 </span>
                      <!-- caret -->
                      <span class="inline-block ltr:float-right rtl:float-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }"></i> -->
                      </span>
                    </a>
                    <ul class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" x-show="open" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" role="menu" aria-orientation="vertical" aria-labelledby="mobiledrop-93">
                      <li class="relative">
                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="buttons.html#">Item 2.1</a>
                      </li>
                      <li class="relative">
                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 dark:hover:text-gray-300" href="buttons.html#">Item 2.2</a>
                      </li>
                    </ul>
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
              <a href="buttons.html#" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-pink-500 border border-pink-500 hover:text-white hover:bg-pink-600 hover:ring-0 hover:border-pink-600 focus:bg-pink-600 focus:border-pink-600 focus:outline-none focus:ring-0" target="_blank">Download</a>
            </div>
          </div>
        </div><!-- end banner -->
      </div>
    </nav>

    <div x-bind:aria-expanded="open" :class="{ 'ltr:ml-64 ltr:-mr-64 md:ltr:ml-0 md:ltr:mr-0 rtl:mr-64 rtl:-ml-64 md:rtl:mr-0 md:rtl:ml-0': open, 'ltr:ml-0 ltr:mr-0 md:ltr:ml-64 rtl:mr-0 rtl:ml-0 md:rtl:mr-64': !(open) }" class="flex flex-col ltr:ml-64 rtl:mr-64 min-h-screen transition-all duration-500 ease-in-out">
      <!-- Navbar -->
      <nav :class="{ 'ltr:left-64 ltr:-right-64 md:ltr:left-0 md:ltr:right-0 rtl:right-64 rtl:-left-64 md:rtl:right-0 md:rtl:left-0': open, 'ltr:left-0 ltr:right-0 md:ltr:left-64 rtl:right-0 rtl:left-0 md:rtl:right-64': !(open) }" class="z-50 fixed flex flex-row flex-nowrap items-center justify-between mt-0 py-2 ltr:left-0 md:ltr:left-64 ltr:right-0 rtl:right-0 md:rtl:right-64 rtl:left-0 px-6 bg-white dark:bg-gray-800 shadow-sm transition-all duration-500 ease-in-out" id="desktop-menu">
        <!-- sidenav button-->
        

        <!-- Search -->
        

        <!-- menu -->
        <ul class="flex ltr:ml-auto rtl:mr-auto mt-2 mt-0">
          <!-- Customizer (Only for demo purpose) -->
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="block py-3 px-4 flex text-sm rounded-full focus:outline-none" aria-controls="mobile-canvas" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
              <span class="sr-only">Customizer</span>
              <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
              </svg>
              <!-- <i class="text-2xl fas fa-cog"></i> -->
            </a>

            <!-- Right Offcanvas -->
            <div class="fixed w-full h-full inset-0 z-50" id="mobile-canvas" x-description="Mobile menu" x-show="open" style="display: none;">
              <!-- bg open -->
              <span class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>

              <nav id="mobile-nav" class="flex flex-col ltr:right-0 rtl:left-0 w-72 fixed top-0 bg-white dark:bg-gray-800 h-full overflow-auto z-40 scrollbars show" x-show="open" @click.away="open=false" x-description="Mobile menu" role="menu" aria-orientation="vertical" aria-labelledby="navbartoggle" x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="ltr:translate-x-full rtl:-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="ltr:translate-x-full rtl:-translate-x-full">
                <div class="p-6 bg-indigo-500 text-gray-100 border-b border-gray-200 dark:border-gray-700">
                  <div class="flex flex-row justify-between">
                    <h3 class="text-md font-bold">Customizer</h3>
                    <button @click="open = false" type="button" class="inline-block w-4 h-4">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block text-gray-100 bi bi-x-lg" viewBox="0 0 16 16" id="x-lg"><path d="M1.293 1.293a1 1 0 011.414 0L8 6.586l5.293-5.293a1 1 0 111.414 1.414L9.414 8l5.293 5.293a1 1 0 01-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 01-1.414-1.414L6.586 8 1.293 2.707a1 1 0 010-1.414z"></path></svg>
                      <!-- <i class="fas fa-times"></i> -->
                    </Button>
                  </div>
                </div>
                <div class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Color Scheme</p>
                  <div class="flex flex-row">
                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in">
                      <input type="checkbox" name="lightdark" id="lightdark" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white dark:bg-gray-900 border-2 dark:border-gray-700 appearance-none cursor-pointer"/>
                      <label for="lightdark" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 dark:bg-gray-700 cursor-pointer"></label>
                    </div>
                    <p class="text-sm text-gray-500 self-center">Light and Dark</p>
                  </div>
                </div>
                <div class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Sidebar Color</p>
                  <div class="flex flex-row">
                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in">
                      <input type="checkbox" name="sidecolor" id="sidecolor" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white dark:bg-gray-900 border-2 dark:border-gray-700 appearance-none cursor-pointer"/>
                      <label for="sidecolor" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 dark:bg-gray-700 cursor-pointer"></label>
                    </div>
                    <p class="text-sm text-gray-500 self-center">Light and Dark</p>
                  </div>
                </div>
                <div class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Direction</p>
                  <div class="flex flex-row">
                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in">
                      <input  type="checkbox" name="rtlmode" id="rtlmode" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white dark:bg-gray-900 border-2 dark:border-gray-700 appearance-none cursor-pointer"/>
                      <label for="rtlmode" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 dark:bg-gray-700 cursor-pointer"></label>
                    </div>
                    <p class="text-sm text-gray-500 self-center">LTR and RTL</p>
                  </div>
                </div>
                <div class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Layout</p>
                  <div class="relative mb-3">
                    <a href="../index.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:hover:bg-opacity-60 hover:text-indigo-500 hover:bg-gray-200 self-center">Default</a>
                    <a href="../layout-compact.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:hover:bg-opacity-60 hover:text-indigo-500 hover:bg-gray-200 self-center">Compact</a>
                    <a href="../layout-topnav.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:hover:bg-opacity-60 hover:text-indigo-500 hover:bg-gray-200 self-center">Topnav</a>
                  </div>
                </div>
                <div id="customcolor" class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Primary Color</p>
                  <div class="relative my-3">
                    <div id="custred" title="red" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-red-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custyellow" title="yellow" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-yellow-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custgreen" title="green" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-green-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custblue" title="blue" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-blue-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custpurple" title="purple" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-purple-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custpink" title="pink" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-pink-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custindigo" title="reset color" class="inline-block cursor-pointer">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                      <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                    </svg></div>
                  </div>
                </div>
                <div class="pt-6 px-6">
                  <div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-yellow-100 text-yellow-900 p-3 rounded-lg mb-4">
                    <div>
                      How to apply? please read the documentation on <a href="../docs/customize.html" class="underline font-semibold">Customize page</a>
                    </div>
                    <button type="button" @click="open = false">
                      <span class="text-2xl">×</span>
                      <!-- <i class="fas fa-times"></i> -->
                    </button>
                  </div>
                </div>
              </nav>
            </div>
          </li><!-- End Customizer (Only for demo purpose) -->

          <!-- messages -->
          <li x-data="{ open: false }" class="relative">
            

            <div x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="w-72 origin-top-right absolute ltr:-right-36 md:ltr:right-0 rtl:-left-36 md:rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="display: none;">
              <div class="p-3 font-normal border-b border-gray-200 dark:border-gray-700">
                <div class="relative">
                  <div class="font-bold">Messages</div>
                  <div x-data="{ open: false }" class="absolute top-0 ltr:right-0 rtl:left-0">
                    
                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 bg-white dark:bg-gray-700 z-10 rounded" style="min-width:16rem">
                       
                    </div>
                    <a href="buttons.html#" class="inline-block ltr:mr-2 rtl:ml-2" title="Mark all as read">
                      
                      <!-- <i class="fas fa-envelope-open"></i> -->
                    </a>
                    <a href="buttons.html#" class="inline-block ltr:mr-2 rtl:ml-2" title="New message">
                      
                      <!-- <i class="fas fa-edit"></i> -->
                    </a>
                  </div>
                </div>
              </div>
              <div class="max-h-60 overflow-y-auto scrollbars show">
                <a href="buttons.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100 bg-gray-50">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="relative">
                        <img src="../src/img/avatar/avatar2.png" class="h-10 w-10 rounded-full mx-auto" alt="Daniel Esteban">
                        <span title="online" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-sm font-bold">Daniel Esteban</div>
                      <div class="text-gray-500 text-sm mt-1">What do you think about this project?</div>
                      <div class="text-gray-500 text-sm mt-1">12m ago</div>
                    </div>
                  </div>
                </a>
                <a href="buttons.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100 bg-gray-50">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="relative">
                        <img src="../src/img/avatar/avatar3.png" class="h-10 w-10 rounded-full mx-auto" alt="Carlos Garcia">
                        <span title="busy" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-pink-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-sm font-bold">Carlos Garcia</div>
                      <div class="text-gray-500 text-sm mt-1">Hello, how are you friends?</div>
                      <div class="text-gray-500 text-sm mt-1">30m ago</div>
                    </div>
                  </div>
                </a>
                <a href="buttons.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100 bg-gray-50">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="relative">
                        <img src="../src/img/avatar/avatar4.png" class="h-10 w-10 rounded-full mx-auto" alt="Steven Rey">
                        <span title="offline" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-gray-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-sm font-bold">Steven Rey</div>
                      <div class="text-gray-500 text-sm mt-1">Thank you for your help today.</div>
                      <div class="text-gray-500 text-sm mt-1">4h ago</div>
                    </div>
                  </div>
                </a>
                <a href="buttons.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="relative">
                        <img src="../src/img/avatar/avatar.png" class="h-10 w-10 rounded-full mx-auto" alt="Roman Davis">
                        <span title="offline" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-gray-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-sm font-bold">Roman Davis</div>
                      <div class="text-gray-500 text-sm mt-1">Do you have time? I want to call you.</div>
                      <div class="text-gray-500 text-sm mt-1">5h ago</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-3 text-center font-normal">
                <a href="buttons.html#" class="hover:underline">Show all Messages</a>
              </div>
            </div>
          </li>
          
          <!-- notification -->
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="block py-3 px-4 flex text-sm rounded-full focus:outline-none" id="notify" @click="open = ! open">
              
            </a>

            <div x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="w-72 origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="display: none;">
              <div class="p-3 font-normal border-b border-gray-200 dark:border-gray-700">
                <div class="relative">
                  <div class="font-bold">Notifications</div>
                  <div class="absolute top-0 ltr:right-0 rtl:left-0">
                    <a href="buttons.html#" class="inline-block ltr:mr-2 rtl:ml-2" title="Clear all">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg>
                      <!-- <i class="fas fa-trash-alt"></i> -->
                    </a>
                  </div>
                </div>
              </div>
              <div class="max-h-60 overflow-y-auto scrollbars show">
                <a class="relative" href="buttons.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100 bg-gray-50">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-indigo-500 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="self-center w-4 h-4 bi bi-calendar4-event" viewBox="0 0 16 16">
                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                          <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                        </svg>
                        <!-- <i class="self-center fas fa-calendar"></i> -->
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-sm font-bold">Event will coming</div>
                      <div class="text-gray-500 text-sm mt-1">Meeting with Mr.John Navas at:10.00Am</div>
                      <div class="text-gray-500 text-sm mt-1">1h ago</div>
                    </div>
                  </div>
                </a>
                <a class="relative" href="buttons.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-indigo-500 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="self-center w-4 h-4 bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                          <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                        </svg>
                        <!-- <i class="self-center fas fa-thumbs-up"></i> -->
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-gray-500 text-sm mt-1"><b class="text-gray-600 dark:text-gray-400">Daniel</b> like your post: <b class="text-gray-600 dark:text-gray-400">Hello World!</b></div>
                      <div class="text-gray-500 text-sm mt-1">3h ago</div>
                    </div>
                  </div>
                </a>
                <a class="relative" href="buttons.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-indigo-500 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="self-center w-4 h-4 bi bi-hdd-stack" viewBox="0 0 16 16">
                          <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z"/>
                          <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                          <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                        </svg>
                        <!-- <i class="self-center fas fa-server"></i> -->
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-sm font-bold">Server maintenance</div>
                      <div class="text-gray-500 text-sm mt-1">Server maintenance at:07.00Am</div>
                      <div class="text-gray-500 text-sm mt-1">8h ago</div>
                    </div>
                  </div>
                </a>
                <a class="relative" href="buttons.html#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100">
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                      <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-indigo-500 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="self-center w-4 h-4 bi bi-chat-left" viewBox="0 0 16 16">
                          <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        </svg>
                        <!-- <i class="self-center fas fa-comment"></i> -->
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4">
                      <div class="text-gray-500 text-sm mt-1"><b class="text-gray-600 dark:text-gray-400">Carlos</b> comment in your post: <b class="text-gray-600 dark:text-gray-400">Hello World!</b></div>
                      <div class="text-gray-500 text-sm mt-1">1d ago</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-3 text-center font-normal">
                <a href="buttons.html#" class="hover:underline">Show all Notifications</a>
              </div>
            </div>
          </li>

          <!-- profile -->
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="px-3 flex text-sm rounded-full focus:outline-none" id="user-menu-button" @click="open = ! open">
              <div class="relative">
                <img class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700" src="../src/img/avatar/avatar.png" alt="avatar">
                <span title="online" class="flex justify-center absolute -bottom-0.5 ltr:right-1 rtl:left-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
              </div>
              <span class="hidden md:block ltr:ml-1 rtl:mr-1 self-center">Ari Budin</span>
            </a>
            <ul x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="min-width:12rem;display: none;">
              <li class="relative">
                <div class="flex flex-wrap flex-row -mx-4 px-3 py-4 items-center">
                  <div class="flex-shrink max-w-full px-4 w-1/3">
                    <img src="../src/img/avatar/avatar.png" class="h-10 w-10 rounded-full" alt="Ari Budin">
                  </div>
                  <div class="flex-shrink max-w-full px-4 w-2/3 ltr:pl-1 rtl:pr-1">
                    <div class="font-bold"><a href="buttons.html#" ">Ari Budin</a></div>
                    
                  </div>
                </div>
              </li>
              <li class="relative">
                <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="buttons.html#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-cog"></i> --> Settings &amp; Privacy
                </a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="buttons.html#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-question-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-question-circle"></i> --> Help &amp; Support
                </a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="buttons.html#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-translate" viewBox="0 0 16 16">
                    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-language"></i> --> Change Language
                  </a>
              </li>
              <li class="relative">
                <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="buttons.html#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-sign-out-alt"></i> --> Sign out
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- End Navbar -->

      <main class="pt-20 -mt-2">
				<div class="mx-auto p-2">
					<!-- row -->
					<div class="flex flex-wrap flex-row">
						<div class="flex-shrink max-w-full px-4 w-full">   
					    <p class="text-xl font-bold mt-3 mb-5">Buttons</p>
					  </div>                                                 
          	<div class="flex-shrink max-w-full px-4 w-full mb-6">
          		<div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
	              <div class="relative">
                  <div class="mb-6">
			              <p class="leading-relaxed font-light text-lg mx-auto pb-2">Use Taildash custom button styles for actions in forms, dialogs, and more with multiple sizes, states, and more.</p>
			            </div>
			            
			            <div class="mb-8">
			              <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Examples</h2>
			              <p class="mb-4">Taildash includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
			              <!-- example -->
			              <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2">Primary</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-green-500 border border-green-500 hover:text-white hover:bg-green-600 hover:ring-0 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:outline-none focus:ring-0 mr-2">Success</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-red-500 border border-red-500 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:outline-none focus:ring-0 mr-2">Danger</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-yellow-300 border border-yellow-300 hover:text-gray-900 hover:bg-yellow-400 hover:ring-0 hover:border-yellow-400 focus:bg-yellow-400 focus:border-yellow-400 focus:outline-none focus:ring-0 mr-2">Warning</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-indigo-300 border border-indigo-300 hover:text-gray-900 hover:bg-indigo-500 hover:ring-0 hover:border-indigo-500 focus:bg-indigo-500 focus:border-indigo-500 focus:outline-none focus:ring-0 mr-2">Info</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-2">Light</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-gray-900 border border-gray-900 hover:text-white hover:bg-black hover:ring-0 hover:border-black focus:bg-black focus:border-black focus:outline-none focus:ring-0 mr-2">Dark</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 mr-2 cursor-not-allowed opacity-70" disabled>Primary</button>
			              </div>
			              <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Primary&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-green-500 border border-green-500 hover:text-white hover:bg-green-600 hover:ring-0 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:outline-none focus:ring-0"&gt;Success&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-red-500 border border-red-500 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:outline-none focus:ring-0"&gt;Danger&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-yellow-300 border border-yellow-300 hover:text-gray-900 hover:bg-yellow-400 hover:ring-0 hover:border-yellow-400 focus:bg-yellow-400 focus:border-yellow-400 focus:outline-none focus:ring-0"&gt;Warning&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-indigo-300 border border-indigo-300 hover:text-gray-900 hover:bg-indigo-500 hover:ring-0 hover:border-indigo-500 focus:bg-indigo-500 focus:border-indigo-500 focus:outline-none focus:ring-0"&gt;Info&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0"&gt;Light&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-gray-900 border border-gray-900 hover:text-white hover:bg-black hover:ring-0 hover:border-black focus:bg-black focus:border-black focus:outline-none focus:ring-0"&gt;Dark&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 mr-2 cursor-not-allowed opacity-70" disabled&gt;Primary&lt;/button&gt;
			                </code>
			              </pre>
			            </div>

			            <div class="mb-8">
			              <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Outline buttons</h2>
			              <p class="mb-4">Taildash button with outline style.</p>
			              <!-- example -->
			              <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-indigo-500 bg-transparent border border-indigo-500 hover:text-gray-100 hover:bg-indigo-500 hover:ring-0 hover:border-indigo-500 focus:text-gray-100 focus:bg-indigo-500 focus:border-indigo-500 focus:outline-none focus:ring-0 mr-2">Primary</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-green-500 bg-transparent border border-green-500 hover:text-white hover:bg-green-500 hover:ring-0 hover:border-green-500 focus:text-white focus:bg-green-500 focus:border-green-500 focus:outline-none focus:ring-0 mr-2">Success</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-red-500 bg-transparent border border-red-500 hover:text-white hover:bg-red-500 hover:ring-0 hover:border-red-500 focus:text-white focus:bg-red-500 focus:border-red-500 focus:outline-none focus:ring-0 mr-2">Danger</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-yellow-500 bg-transparent border border-yellow-500 hover:text-gray-100 hover:bg-yellow-500 hover:ring-0 hover:border-yellow-500 focus:text-gray-900 focus:bg-yellow-500 focus:border-yellow-500 focus:outline-none focus:ring-0 mr-2">Warning</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-indigo-300 bg-transparent border border-indigo-300 hover:text-gray-900 hover:bg-indigo-300 hover:ring-0 hover:border-indigo-300 focus:text-gray-900 focus:bg-indigo-300 focus:border-indigo-300 focus:outline-none focus:ring-0 mr-2">Info</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-transparent border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:text-gray-900 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-2">Light</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-900 bg-transparent border border-gray-900 hover:text-white hover:bg-black hover:ring-0 hover:border-black focus:text-white focus:bg-black focus:border-black focus:outline-none focus:ring-0 mr-2">Dark</button>
			              </div>
			              <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-indigo-500 bg-transparent border border-indigo-500 hover:text-gray-100 hover:bg-indigo-500 hover:ring-0 hover:border-indigo-500 focus:text-gray-100 focus:bg-indigo-500 focus:border-indigo-500 focus:outline-none focus:ring-0">Primary&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-green-500 bg-transparent border border-green-500 hover:text-white hover:bg-green-500 hover:ring-0 hover:border-green-500 focus:text-white focus:bg-green-500 focus:border-green-500 focus:outline-none focus:ring-0"&gt;Success&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-red-500 bg-transparent border border-red-500 hover:text-white hover:bg-red-500 hover:ring-0 hover:border-red-500 focus:text-white focus:bg-red-500 focus:border-red-500 focus:outline-none focus:ring-0"&gt;Danger&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-yellow-500 bg-transparent border border-yellow-500 hover:text-gray-100 hover:bg-yellow-500 hover:ring-0 hover:border-yellow-500 focus:text-gray-900 focus:bg-yellow-500 focus:border-yellow-500 focus:outline-none focus:ring-0"&gt;Warning&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-indigo-300 bg-transparent border border-indigo-300 hover:text-gray-900 hover:bg-indigo-300 hover:ring-0 hover:border-indigo-300 focus:text-gray-900 focus:bg-indigo-300 focus:border-indigo-300 focus:outline-none focus:ring-0"&gt;Info&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-transparent border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:text-gray-900 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0"&gt;Light&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-900 bg-transparent border border-gray-900 hover:text-white hover:bg-black hover:ring-0 hover:border-black focus:text-white focus:bg-black focus:border-black focus:outline-none focus:ring-0"&gt;Dark&lt;/button&gt;
			                </code>
			              </pre>
			            </div>

			            <div class="mb-8">
			              <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Gradient button</h2>
			              <p class="mb-4">Taildash button with background gradient style.</p>
			              <!-- example -->
			              <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 bg-gradient-to-b from-indigo-400 to-indigo-600 hover:bg-indigo-600 hover:from-indigo-500 hover:to-indigo-600 focus:from-indigo-400 focus:to-indigo-600 hover:text-white hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2">Primary</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-green-500 border border-green-500 bg-gradient-to-b from-green-400 to-green-600 hover:bg-green-600 hover:from-green-500 hover:to-green-600 focus:from-green-500 focus:to-green-600 hover:text-white hover:bg-green-600 hover:ring-0 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:outline-none focus:ring-0 mr-2">Success</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-red-500 border border-red-500 bg-gradient-to-b from-red-400 to-red-600 hover:bg-red-600 hover:from-red-500 hover:to-red-600 focus:from-red-500 focus:to-red-600 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:outline-none focus:ring-0 mr-2">Danger</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-yellow-500 border border-yellow-500 bg-gradient-to-b from-yellow-400 to-yellow-600 hover:bg-yellow-600 hover:from-yellow-500 hover:to-yellow-600 focus:from-yellow-500 focus:to-yellow-600 hover:text-white hover:bg-yellow-600 hover:ring-0 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:outline-none focus:ring-0 mr-2">Warning</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-300 bg-gradient-to-b from-indigo-300 to-indigo-500 hover:bg-indigo-600 hover:from-indigo-300 hover:to-indigo-500 focus:from-indigo-300 focus:to-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-400 focus:bg-indigo-600 focus:border-indigo-400 focus:outline-none focus:ring-0 mr-2">Info</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 bg-gradient-to-b from-gray-100 to-gray-300 hover:bg-gray-200 hover:from-gray-300 hover:to-gray-100 focus:from-gray-300 focus:to-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-2">Light</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-gray-800 border border-gray-800 bg-gradient-to-b from-gray-700 to-gray-900 hover:bg-gray-800 hover:from-gray-900 hover:to-gray-700 focus:from-gray-900 focus:to-gray-700 hover:text-white hover:bg-gray-900 hover:ring-0 hover:border-gray-900 focus:bg-gray-900 focus:border-gray-900 focus:outline-none focus:ring-0 mr-2">Dark</button>
			              </div>
			              <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 bg-gradient-to-b from-indigo-400 to-indigo-600 hover:bg-indigo-600 hover:from-indigo-500 hover:to-indigo-600 focus:from-indigo-400 focus:to-indigo-600 hover:text-white hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Primary&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-green-500 border border-green-500 bg-gradient-to-b from-green-400 to-green-600 hover:bg-green-600 hover:from-green-500 hover:to-green-600 focus:from-green-500 focus:to-green-600 hover:text-white hover:bg-green-600 hover:ring-0 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:outline-none focus:ring-0"&gt;Success&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-red-500 border border-red-500 bg-gradient-to-b from-red-400 to-red-600 hover:bg-red-600 hover:from-red-500 hover:to-red-600 focus:from-red-500 focus:to-red-600 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:outline-none focus:ring-0"&gt;Danger&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-yellow-500 border border-yellow-500 bg-gradient-to-b from-yellow-400 to-yellow-600 hover:bg-yellow-600 hover:from-yellow-500 hover:to-yellow-600 focus:from-yellow-500 focus:to-yellow-600 hover:text-white hover:bg-yellow-600 hover:ring-0 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:outline-none focus:ring-0"&gt;Warning&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-300 bg-gradient-to-b from-indigo-300 to-indigo-500 hover:bg-indigo-600 hover:from-indigo-300 hover:to-indigo-500 focus:from-indigo-300 focus:to-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-500 focus:bg-indigo-400 focus:border-indigo-400 focus:outline-none focus:ring-0"&gt;Info&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 bg-gradient-to-b from-gray-100 to-gray-300 hover:bg-gray-200 hover:from-gray-300 hover:to-gray-100 focus:from-gray-300 focus:to-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0"&gt;Light&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-gray-800 border border-gray-800 bg-gradient-to-b from-gray-700 to-gray-900 hover:bg-gray-800 hover:from-gray-900 hover:to-gray-700 focus:from-gray-900 focus:to-gray-700 hover:text-white hover:bg-gray-900 hover:ring-0 hover:border-gray-900 focus:bg-gray-900 focus:border-gray-900 focus:outline-none focus:ring-0"&gt;Dark&lt;/button&gt;
			                </code>
			              </pre>
			            </div>

			            <div class="mb-8">
			              <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Button styles and Icon</h2>
			              <p class="mb-4">Taildash button variant and style.</p>
			              <!-- example -->
			              <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2">
			                  <svg xmlns="http://www.w3.org/2000/svg" class="inline-block mr-1" width="1.5rem" height="1.5rem" fill="currentColor" viewBox="0 0 512 512"><circle cx="176" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></circle><circle cx="400" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></circle><polyline points="48 80 112 80 160 352 416 352" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline><path d="M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path></svg> Buy Now
			                </button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-200 border border-gray-200 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0 mr-2">
			                  Play Now <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="inline-block ml-1" fill="currentColor" viewBox="0 0 512 512"><path d="M238.23,342.43l89.09-74.13a16,16,0,0,0,0-24.6l-89.09-74.13A16,16,0,0,0,212,181.86V330.14A16,16,0,0,0,238.23,342.43Z"/><path d="M448,256c0-106-86-192-192-192S64,150,64,256s86,192,192,192S448,362,448,256Z" style="fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:32px"/></svg>
			                </button>

			                <button type="button" class="p-6 inline-block text-center rounded-full mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2">
			                  <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="inline-block" fill="currentColor" viewBox="0 0 512 512"><path d="M190.06,414,353.18,274.22a24,24,0,0,0,0-36.44L190.06,98c-15.57-13.34-39.62-2.28-39.62,18.22V395.82C150.44,416.32,174.49,427.38,190.06,414Z"/></svg>
			                </button>
			                <button type="button" class="p-6 inline-block text-center rounded-full mb-3 leading-normal text-gray-800 bg-gray-200 border border-gray-200 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0 mr-2">
			                  <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="inline-block" fill="currentColor" viewBox="0 0 512 512"><path d="M190.06,414,353.18,274.22a24,24,0,0,0,0-36.44L190.06,98c-15.57-13.34-39.62-2.28-39.62,18.22V395.82C150.44,416.32,174.49,427.38,190.06,414Z"/></svg>
			                </button>

			                <!--App store button-->
			                <a class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-gray-900 border border-gray-900 hover:text-white hover:bg-black hover:ring-0 hover:border-black focus:bg-black focus:border-black focus:outline-none focus:ring-0 mr-2" href="https://itunes.apple.com">
			                  <span class="flex items-center">
			                    <!--icon-->
			                    <span class="ltr:mr-3 rtl:ml-3">
			                      <!-- <span class="fab fa-apple font-size-2"></span> -->
			                       <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="2rem" height="2rem" fill="currentColor" viewBox="0 0 512 512"><path d="M256,32C132.26,32,32,132.26,32,256S132.26,480,256,480,480,379.74,480,256,379.74,32,256,32ZM171,353.89a15.48,15.48,0,0,1-13.46,7.65,14.91,14.91,0,0,1-7.86-2.16,15.48,15.48,0,0,1-5.6-21.21l15.29-25.42a8.73,8.73,0,0,1,7.54-4.3h2.26c11.09,0,18.85,6.67,21.11,13.13Zm129.45-50L200.32,304H133.77a15.46,15.46,0,0,1-15.51-16.15c.32-8.4,7.65-14.76,16-14.76h48.24l57.19-97.35h0l-18.52-31.55C217,137,218.85,127.52,226,123a15.57,15.57,0,0,1,21.87,5.17l9.9,16.91h.11l9.91-16.91A15.58,15.58,0,0,1,289.6,123c7.11,4.52,8.94,14,4.74,21.22l-18.52,31.55-18,30.69-39.09,66.66v.11h57.61c7.22,0,16.27,3.88,19.93,10.12l.32.65c3.23,5.49,5.06,9.26,5.06,14.75A13.82,13.82,0,0,1,300.48,303.92Zm77.75.11H351.09v.11l19.82,33.71a15.8,15.8,0,0,1-5.17,21.53,15.53,15.53,0,0,1-8.08,2.27A15.71,15.71,0,0,1,344.2,354l-29.29-49.86-18.2-31L273.23,233a38.35,38.35,0,0,1-.65-38c4.64-8.19,8.19-10.34,8.19-10.34L333,273h44.91c8.4,0,15.61,6.46,16,14.75A15.65,15.65,0,0,1,378.23,304Z"/></svg>
			                    </span>
			                    <!--text-->
			                    <span class="ltr:text-left rtl:text-right">
			                      <span class="block">Download on the</span>
			                      <strong>App Store</strong>
			                    </span><!--end text-->
			                  </span>
			                </a>

			                <!--google play-->
			                <a class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-200 border border-gray-200 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0 mr-2" href="https://play.google.com">
			                  <span class="flex items-center">
			                    <!--icon-->
			                    <span class="ltr:mr-3 rtl:ml-3">
			                      <!-- <span class="fab fa-google-play font-size-2"></span> -->
			                      <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="2rem" height="2rem" fill="currentColor" viewBox="0 0 512 512"><path d="M48,59.49v393a4.33,4.33,0,0,0,7.37,3.07L260,256,55.37,56.42A4.33,4.33,0,0,0,48,59.49Z"/><path d="M345.8,174,89.22,32.64l-.16-.09c-4.42-2.4-8.62,3.58-5,7.06L285.19,231.93Z"/><path d="M84.08,472.39c-3.64,3.48.56,9.46,5,7.06l.16-.09L345.8,338l-60.61-57.95Z"/><path d="M449.38,231l-71.65-39.46L310.36,256l67.37,64.43L449.38,281C468.87,270.23,468.87,241.77,449.38,231Z"/></svg>
			                    </span>
			                    <!--text-->
			                    <span class="ltr:text-left rtl:text-right">
			                      <span class="block">Get it on</span>
			                      <strong>Google Play</strong>
			                    </span><!--end text-->
			                  </span>
			                </a>
			                <!--end google play-->
			              </div>
			              <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;
			                    &lt;svg xmlns="http://www.w3.org/2000/svg" class="inline-block mr-1" width="1.5rem" height="1.5rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;circle cx="176" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"&gt;&lt;/circle&gt;&lt;circle cx="400" cy="416" r="16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"&gt;&lt;/circle&gt;&lt;polyline points="48 80 112 80 160 352 416 352" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"&gt;&lt;/polyline&gt;&lt;path d="M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"&gt;&lt;/path&gt;&lt;/svg&gt; Buy Now
			                  &lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-200 border border-gray-200 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"&gt;
			                    Play Now &lt;svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="inline-block ml-1" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;path d="M238.23,342.43l89.09-74.13a16,16,0,0,0,0-24.6l-89.09-74.13A16,16,0,0,0,212,181.86V330.14A16,16,0,0,0,238.23,342.43Z"/&gt;&lt;path d="M448,256c0-106-86-192-192-192S64,150,64,256s86,192,192,192S448,362,448,256Z" style="fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:32px"/&gt;&lt;/svg&gt;
			                  &lt;/button&gt;

			                  &lt;button type="button" class="p-6 inline-block text-center rounded-full mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;
			                    &lt;svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="inline-block" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;path d="M190.06,414,353.18,274.22a24,24,0,0,0,0-36.44L190.06,98c-15.57-13.34-39.62-2.28-39.62,18.22V395.82C150.44,416.32,174.49,427.38,190.06,414Z"/&gt;&lt;/svg&gt;
			                  &lt;/button&gt;
			                  &lt;button type="button" class="p-6 inline-block text-center rounded-full mb-3 leading-normal text-gray-800 bg-gray-200 border border-gray-200 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"&gt;
			                    &lt;svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="inline-block" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;path d="M190.06,414,353.18,274.22a24,24,0,0,0,0-36.44L190.06,98c-15.57-13.34-39.62-2.28-39.62,18.22V395.82C150.44,416.32,174.49,427.38,190.06,414Z"/&gt;&lt;/svg&gt;
			                  &lt;/button&gt;

			                  &lt;!--App store button--&gt;
			                  &lt;a class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-gray-900 border border-gray-900 hover:text-white hover:bg-black hover:ring-0 hover:border-black focus:bg-black focus:border-black focus:outline-none focus:ring-0" href="https://itunes.apple.com"&gt;
			                    &lt;span class="flex items-center"&gt;
			                      &lt;!--icon--&gt;
			                      &lt;span class="ltr:mr-3 rtl:ml-3"&gt;
			                        &lt;!-- &lt;span class="fab fa-apple font-size-2"&gt;&lt;/span&gt; --&gt;
			                         &lt;svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="2rem" height="2rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;path d="M256,32C132.26,32,32,132.26,32,256S132.26,480,256,480,480,379.74,480,256,379.74,32,256,32ZM171,353.89a15.48,15.48,0,0,1-13.46,7.65,14.91,14.91,0,0,1-7.86-2.16,15.48,15.48,0,0,1-5.6-21.21l15.29-25.42a8.73,8.73,0,0,1,7.54-4.3h2.26c11.09,0,18.85,6.67,21.11,13.13Zm129.45-50L200.32,304H133.77a15.46,15.46,0,0,1-15.51-16.15c.32-8.4,7.65-14.76,16-14.76h48.24l57.19-97.35h0l-18.52-31.55C217,137,218.85,127.52,226,123a15.57,15.57,0,0,1,21.87,5.17l9.9,16.91h.11l9.91-16.91A15.58,15.58,0,0,1,289.6,123c7.11,4.52,8.94,14,4.74,21.22l-18.52,31.55-18,30.69-39.09,66.66v.11h57.61c7.22,0,16.27,3.88,19.93,10.12l.32.65c3.23,5.49,5.06,9.26,5.06,14.75A13.82,13.82,0,0,1,300.48,303.92Zm77.75.11H351.09v.11l19.82,33.71a15.8,15.8,0,0,1-5.17,21.53,15.53,15.53,0,0,1-8.08,2.27A15.71,15.71,0,0,1,344.2,354l-29.29-49.86-18.2-31L273.23,233a38.35,38.35,0,0,1-.65-38c4.64-8.19,8.19-10.34,8.19-10.34L333,273h44.91c8.4,0,15.61,6.46,16,14.75A15.65,15.65,0,0,1,378.23,304Z"/&gt;&lt;/svg&gt;
			                      &lt;/span&gt;
			                      &lt;!--text--&gt;
			                      &lt;span class="ltr:text-left rtl:text-right"&gt;
			                        &lt;span class="block"&gt;Download on the&lt;/span&gt;
			                        &lt;strong&gt;App Store&lt;/strong&gt;
			                      &lt;/span&gt;&lt;!--end text--&gt;
			                    &lt;/span&gt;
			                  &lt;/a&gt;

			                  &lt;!--google play--&gt;
			                  &lt;a class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-200 border border-gray-200 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0" href="https://play.google.com"&gt;
			                    &lt;span class="flex items-center"&gt;
			                      &lt;!--icon--&gt;
			                      &lt;span class="ltr:mr-3 rtl:ml-3"&gt;
			                        &lt;!-- &lt;span class="fab fa-google-play font-size-2"&gt;&lt;/span&gt; --&gt;
			                        &lt;svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="2rem" height="2rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;path d="M48,59.49v393a4.33,4.33,0,0,0,7.37,3.07L260,256,55.37,56.42A4.33,4.33,0,0,0,48,59.49Z"/&gt;&lt;path d="M345.8,174,89.22,32.64l-.16-.09c-4.42-2.4-8.62,3.58-5,7.06L285.19,231.93Z"/&gt;&lt;path d="M84.08,472.39c-3.64,3.48.56,9.46,5,7.06l.16-.09L345.8,338l-60.61-57.95Z"/&gt;&lt;path d="M449.38,231l-71.65-39.46L310.36,256l67.37,64.43L449.38,281C468.87,270.23,468.87,241.77,449.38,231Z"/&gt;&lt;/svg&gt;
			                      &lt;/span&gt;
			                      &lt;!--text--&gt;
			                      &lt;span class="ltr:text-left rtl:text-right"&gt;
			                        &lt;span class="block"&gt;Get it on&lt;/span&gt;
			                        &lt;strong&gt;Google Play&lt;/strong&gt;
			                      &lt;/span&gt;&lt;!--end text--&gt;
			                    &lt;/span&gt;
			                  &lt;/a&gt;
			                  &lt;!--end google play--&gt;
			                </code>
			              </pre>
			            </div>

			            <div class="mb-8">
			              <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Button size</h2>
			              <p class="mb-4">Taildash button size.</p>
			              <!-- example -->
			              <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
			                <button type="button" class="text-sm py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2">Small</button>
			                <button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2">Normal</button>
			                <button type="button" class="text-2xl py-4 px-8 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 mr-2">Large</button>
			              </div>
			              <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;button type="button" class="text-sm py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Small&lt;/button&gt;
			                  &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Normal&lt;/button&gt;
			                  &lt;button type="button" class="text-2xl py-4 px-8 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Large&lt;/button&gt;
			                </code>
			              </pre>
			            </div>

			            <div class="mb-8">
			              <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Button group</h2>
			              <p class="mb-4">Taildash button group.</p>
			              <!-- example -->
			              <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
			                <!-- button group -->
			                <div class="flex inline-flex mr-2" role="group">
			                  <button type="button" class="ltr:rounded-l rtl:rounded-r py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-mr-0.5 rtl:-ml-0.5">Left</button>
			                  <button type="button" class="py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Middle</button>
			                  <button type="button" class="ltr:rounded-r rtl:rounded-l py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-ml-0.5 rtl:-mr-0.5">Right</button>
			                </div>

			                <!-- outline button group -->
			                <div class="flex inline-flex" role="group">
			                  <button type="button" class="ltr:rounded-l rtl:rounded-r py-2 px-4 inline-block text-center mb-3 leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-mr-0.5 rtl:-ml-0.5">Left</button>
			                  <button type="button" class="py-2 px-4 inline-block text-center mb-3 leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Middle</button>
			                  <button type="button" class="ltr:rounded-r rtl:rounded-l py-2 px-4 inline-block text-center mb-3 leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-ml-0.5 rtl:-mr-0.5">Right</button>
			                </div>
			              </div>
			              <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- button group --&gt;
			                  &lt;div class="flex inline-flex" role="group"&gt;
			                    &lt;button type="button" class="ltr:rounded-l rtl:rounded-r py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-mr-0.5 rtl:-ml-0.5"&gt;Left&lt;/button&gt;
			                    &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Middle&lt;/button&gt;
			                    &lt;button type="button" class="ltr:rounded-r rtl:rounded-l py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-ml-0.5 rtl:-mr-0.5"&gt;Right&lt;/button&gt;
			                  &lt;/div&gt;

			                  &lt;!-- outline button group --&gt;
			                  &lt;div class="flex inline-flex" role="group"&gt;
			                    &lt;button type="button" class="ltr:rounded-l rtl:rounded-r py-2 px-4 inline-block text-center mb-3 leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-mr-0.5 rtl:-ml-0.5"&gt;Left&lt;/button&gt;
			                    &lt;button type="button" class="py-2 px-4 inline-block text-center mb-3 leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Middle&lt;/button&gt;
			                    &lt;button type="button" class="ltr:rounded-r rtl:rounded-l py-2 px-4 inline-block text-center mb-3 leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 ltr:-ml-0.5 rtl:-mr-0.5"&gt;Right&lt;/button&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
			            </div>

			            <div class="mb-8">
			              <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Button group vertical</h2>
			              <p class="mb-4">Taildash button group vertical style.</p>
			              <!-- example -->
			              <div class="float-left w-full bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
			                <!-- button group vertical -->
			                <div class="flex flex-col float-left w-32 mr-4" role="group">
			                  <button type="button" class="rounded-t py-2 px-4 inline-block text-center leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mb-0.5">Left</button>
			                  <button type="button" class="py-2 px-4 inline-block text-center leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Middle</button>
			                  <button type="button" class="rounded-b py-2 px-4 inline-block text-center leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mt-0.5">Right</button>
			                </div>

			                <!-- outline button group vertical -->
			                <div class="flex flex-col float-left w-32" role="group">
			                  <button type="button" class="rounded-t py-2 px-4 inline-block text-center leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mb-0.5">Left</button>
			                  <button type="button" class="py-2 px-4 inline-block text-center leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Middle</button>
			                  <button type="button" class="rounded-b py-2 px-4 inline-block text-center leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mt-0.5">Right</button>
			                </div>
			              </div>
			              <div class="clear-both"></div>
			              <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- button group vertical --&gt;
			                  &lt;div class="flex flex-col float-left w-32 mr-4" role="group"&gt;
			                    &lt;button type="button" class="rounded-t py-2 px-4 inline-block text-center leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mb-0.5"&gt;Left&lt;/button&gt;
			                    &lt;button type="button" class="py-2 px-4 inline-block text-center leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Middle&lt;/button&gt;
			                    &lt;button type="button" class="rounded-b py-2 px-4 inline-block text-center leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mt-0.5"&gt;Right&lt;/button&gt;
			                  &lt;/div&gt;&lt;div class="clear-both"&gt;&lt;/div&gt;

			                  &lt;!-- outline button group vertical --&gt;
			                  &lt;div class="flex flex-col float-left w-32" role="group"&gt;
			                    &lt;button type="button" class="rounded-t py-2 px-4 inline-block text-center leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mb-0.5"&gt;Left&lt;/button&gt;
			                    &lt;button type="button" class="py-2 px-4 inline-block text-center leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Middle&lt;/button&gt;
			                    &lt;button type="button" class="rounded-b py-2 px-4 inline-block text-center leading-normal text-indigo-500 bg-white border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0 -mt-0.5"&gt;Right&lt;/button&gt;
			                  &lt;/div&gt;&lt;div class="clear-both"&gt;&lt;/div&gt;
			                </code>
			              </pre>
			            </div>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</main>

			<footer class="bg-white dark:bg-gray-800 p-6 shadow-sm">
        <div class="mx-auto">
          <div class="flex flex-wrap flex-row -mx-4">
            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 text-center md:ltr:text-left md:rtl:text-right">
              <ul class="ltr:pl-0 rtl:pr-0">
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="buttons.html#">Support</a>
                </li>
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="buttons.html#">Help Center</a>
                </li>
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="buttons.html#">Privacy</a>
                </li>
                <li class="inline-block ltr:mr-3 rtl:ml-3">
                  <a class="hover:text-indigo-500" href="buttons.html#">Terms of Service</a>
                </li>
              </ul>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 text-center md:ltr:text-right md:rtl:text-left">
              <p class="mb-0 mt-3 md:mt-0">
                <a href="../index.html" class="hover:text-indigo-500">Tailnet</a> | All right reserved
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--start::Global javascript (used in all pages)-->
  <script src="../vendors/alpinejs/dist/cdn.min.js"></script><!-- core js -->
  <script src="../vendors/chart.js/dist/chart.min.js"></script><!-- charts -->
  <script src="../vendors/flatpickr/dist/flatpickr.min.js"></script><!-- input date -->
  <script src="../vendors/flatpickr/dist/plugins/rangePlugin.js"></script><!-- input range date -->
  <script src="../vendors/@yaireo/tagify/dist/tagify.min.js"></script><!-- input tags -->
  <script src="../vendors/pristinejs/dist/pristine.min.js"></script><!-- form validation -->
  <script src="../vendors/simple-datatables/dist/umd/simple-datatables.js"></script><!--sort table-->
  <script src="../vendors/glightbox/dist/js/glightbox.min.js"></script><!-- lightbox image -->
  <script src="../vendors/flickity/dist/flickity.pkgd.min.js"></script><!-- slider -->
  <!--end::Global javascript (used in all pages)-->

  <!-- Minify Global javascript (for production purpose) -->
  <!-- <script src="../dist/js/scripts.js"></script> -->

  <!--start::Demo javascript ( initialize global javascript )-->
  <script src="../src/js/demo.js"></script>

  <!--start::Customizer js ( Only for demo purpose )-->
  <script src="../src/js/customizer.js"></script>
  <script src="../src/js/prism.js"></script>
</body>
</x-admin-layout>