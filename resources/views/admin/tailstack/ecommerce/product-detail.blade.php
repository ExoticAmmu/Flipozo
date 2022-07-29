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
                    <p class="text-xl font-bold mt-3 mb-5">Product Detail</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="flex flex-wrap flex-row -mx-4">
                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 text-center">
                                <div class="p-4">
                                    <a href="..//img/products/blue.jpg" class="glightbox3 max-w-full w-full h-auto" data-gallery="gallery1">
                                        <img src="..//img/products/blue.jpg" alt="image">
                                    </a>
                                    <ul class="py-4 ltr:text-left rtl:text-right">
                                        <li class="inline-block">
                                            <a href="..//img/products/purple.jpg" class="glightbox3" data-gallery="gallery1"><img src="..//img/products/purple-small.jpg" class="w-20 h-auto ltr:mr-1 rtl:ml-1 border border-dashed"></a>
                                        </li>
                                        <li class="inline-block">
                                            <a href="..//img/products/green.jpg" class="glightbox3" data-gallery="gallery1"><img src="..//img/products/green-small.jpg" class="w-20 h-auto ltr:mr-1 rtl:ml-1 border border-dashed"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full px-4 w-full md:w-2/3">
                                <h1 class="text-2xl text-semibold mb-4">Nike Women's Race Running Shoe</h1>
                                <a href="product-detail.html#">
                                    <ul class="flex my-1">
                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                            <!-- icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                </path>
                                            </svg>
                                            <!-- <i class="fa fa-star"></i> -->
                                        </li>
                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                            <!-- icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                </path>
                                            </svg>
                                            <!-- <i class="fa fa-star"></i> -->
                                        </li>
                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                            <!-- icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                </path>
                                            </svg>
                                            <!-- <i class="fa fa-star"></i> -->
                                        </li>
                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                            <!-- icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                </path>
                                            </svg>
                                            <!-- <i class="fa fa-star"></i> -->
                                        </li>
                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                            <!-- icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                </path>
                                            </svg>
                                            <!-- <i class="fa fa-star"></i> -->
                                        </li>
                                        <li class="ltr:mr-2 rtl:ml-2">4.9(42)</li>
                                    </ul>
                                </a>
                                <p class="mb-4 text-sm">Sales: 836x</p>
                                <h3 class="font-bold text-3xl text-green-600 mb-4"><span class="line-through mr-2 font-normal text-gray-500">97$</span class="text-2xl">79$</h3>

                                <div class="flex">
                                    <p class="mb-2 text-sm ltr:mr-2 rtl:ml-2">Color</p>
                                    <div class="flex flex-nowrap flex-row items-center mb-4 text-sm">
                                        <div class="flex flex-nowrap flex-row items-center mr-3">
                                            <input class="form-checkbox text-indigo-500 dark:bg-gray-700 h-4 w-4 border border-gray-300 dark:border-gray-700 ltr:mr-3 rtl:ml-3 rounded-full" type="radio" name="procolor" id="procolor1" checked>
                                            <label class="inline-block" for="procolor1">
                                                Blue
                                            </label>
                                        </div>
                                        <div class="flex flex-nowrap flex-row items-center mr-3">
                                            <input class="form-checkbox text-indigo-500 dark:bg-gray-700 h-4 w-4 border border-gray-300 dark:border-gray-700 ltr:mr-3 rtl:ml-3 rounded-full" type="radio" name="procolor" id="procolor2">
                                            <label class="inline-block" for="procolor2">
                                                Purple
                                            </label>
                                        </div>
                                        <div class="flex flex-nowrap flex-row items-center mr-3">
                                            <input class="form-checkbox text-indigo-500 dark:bg-gray-700 h-4 w-4 border border-gray-300 dark:border-gray-700 ltr:mr-3 rtl:ml-3 rounded-full" type="radio" name="procolor" id="procolor3">
                                            <label class="inline-block" for="procolor3">
                                                Green
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <p class="mb-2 text-sm ltr:mr-2 rtl:ml-2">Size</p>
                                    <div class="flex flex-nowrap flex-row items-center mb-4 text-sm">
                                        <div class="flex flex-nowrap flex-row items-center mr-3">
                                            <input class="form-checkbox text-indigo-500 dark:bg-gray-700 h-4 w-4 border border-gray-300 dark:border-gray-700 ltr:mr-3 rtl:ml-3 rounded-full" type="radio" name="prosize" id="prosize1" checked>
                                            <label class="inline-block" for="prosize1">
                                                12
                                            </label>
                                        </div>
                                        <div class="flex flex-nowrap flex-row items-center mr-3">
                                            <input class="form-checkbox text-indigo-500 dark:bg-gray-700 h-4 w-4 border border-gray-300 dark:border-gray-700 ltr:mr-3 rtl:ml-3 rounded-full" type="radio" name="prosize" id="prosize2">
                                            <label class="inline-block" for="prosize2">
                                                14
                                            </label>
                                        </div>
                                        <div class="flex flex-nowrap flex-row items-center mr-3">
                                            <input class="form-checkbox text-indigo-500 dark:bg-gray-700 h-4 w-4 border border-gray-300 dark:border-gray-700 ltr:mr-3 rtl:ml-3 rounded-full" type="radio" name="prosize" id="prosize3">
                                            <label class="inline-block" for="prosize3">
                                                17
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="product_id" value="81">

                                    <button type="button" id="button-cart" data-loading-text="Loading..." class="py-2 px-5 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline bi bi-cart" viewBox="0 0 16 16">
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                            </path>
                                        </svg> Add to Cart
                                    </button>
                                </div>
                                <div class="text-sm">
                                    <p class="mb-2">Brand: <a href="product-detail.html#" class="hover:text-indigo-500">Iphone</a></p>
                                    <p class="mb-2">Category: <a href="product-detail.html#" class="hover:text-indigo-500">Smartphone</a></p>
                                    <p class="mb-2">Stock: 178</p>
                                </div>
                            </div>
                            <div class="flex-shrink max-w-full px-4 w-full">
                                <!-- tabs -->
                                <div x-data="{ tabs: 1 }">
                                    <ul class="flex border-b dark:border-gray-700">
                                        <li @click="tabs = 1" :class="{ '-mb-px': tabs === 1 }" class="mr-1">
                                            <a :class="{ '-mb-px border-l border-t border-r rounded-t text-indigo-500 dark:border-gray-700': tabs === 1 }" class="bg-white dark:bg-gray-800 dark:border-gray-700 inline-block py-2 px-4 hover:text-indigo-500 font-semibold" href="javascript:;">Descriptions</a>
                                        </li>
                                        <li @click="tabs = 2" :class="{ '-mb-px': tabs === 2 }" class="mr-1">
                                            <a :class="{ 'border-l border-t border-r rounded-t text-indigo-500': tabs === 2 }" class="bg-white dark:bg-gray-800 dark:border-gray-700 inline-block py-2 px-4 hover:text-indigo-500 font-semibold" href="javascript:;">Reviews (42)</a>
                                        </li>
                                        <li @click="tabs = 3" :class="{ '-mb-px': tabs === 3 }" class="mr-1">
                                            <a :class="{ 'border-l border-t border-r rounded-t text-indigo-500': tabs === 3 }" class="bg-white dark:bg-gray-800 dark:border-gray-700 inline-block py-2 px-4 hover:text-indigo-500 font-semibold" href="javascript:;">Questions (32)</a>
                                        </li>
                                    </ul>
                                    <div class="w-full pt-4">
                                        <div x-show="tabs === 1">
                                            <h2 class="text-lg font-semibold mb-2">Nike Women's Race Running Shoe</h2>
                                            <p class="mb-4">With nike renew run you can move for as long as you want,
                                                thanks to the even softer foam for maximum cushioning. Designed for
                                                everyday runners, this shoe offers secure support, traction and
                                                durability for maximum comfort on the go.</p>
                                            <h2 class="text-lg font-semibold mb-2">Spesification</h2>
                                            <ul>
                                                <li class="py-2 border-b dark:border-gray-700 flex items-center justify-between">
                                                    <span class="text-gray-500">Dimension:</span> 15.75 x 11.81 x 5.91
                                                    inches; 1.28 Pounds
                                                </li>
                                                <li class="py-2 border-b dark:border-gray-700 flex items-center justify-between">
                                                    <span class="text-gray-500">Model:</span> CK6360-100
                                                </li>
                                                <li class="py-2 border-b dark:border-gray-700 flex items-center justify-between">
                                                    <span class="text-gray-500">Department:</span> Women
                                                </li>
                                                <li class="py-2 border-b dark:border-gray-700 flex items-center justify-between">
                                                    <span class="text-gray-500">Date First Available:</span> June 29,
                                                    2021
                                                </li>
                                                <li class="py-2 border-b dark:border-gray-700 flex items-center justify-between">
                                                    <span class="text-gray-500">Color:</span> Blue, Green, Purple
                                                </li>
                                            </ul>
                                        </div>
                                        <div x-show="tabs === 2">
                                            <h2 class="text-lg font-semibold mb-2">Product Reviews</h2>
                                            <!-- box reviews -->
                                            <div class="flex items-center text-center pb-6 border-b dark:border-gray-700">
                                                <div class="flex flex-col ltr:mr-3 rtl:ml-3">
                                                    <h4 class="text-3xl font-semibold"><span class="text-gray-500">4.9</span>/5.0</h4>
                                                    <ul class="flex my-1">
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                    </ul>
                                                    <div class="text-sm text-gray-500">42 Reviews</div>
                                                </div>
                                                <div class="flex flex-col ltr:mr-3 rtl:ml-3">
                                                    <div class="flex items-center">
                                                        <div class="ltr:mr-2 rtl:ml-2">5 <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-yellow-400" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </div>
                                                        <div class="ltr:mr-2 rtl:ml-2 w-40 h-2 bg-gray-200 rounded-full mt-2">
                                                            <div class="h-full text-center text-xs text-white bg-yellow-400 rounded-full" style="width:80%"></div>
                                                        </div>
                                                        <div class="ltr:mr-2 rtl:ml-2">(35)</div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div class="ltr:mr-2 rtl:ml-2">4 <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-yellow-400" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </div>
                                                        <div class="ltr:mr-2 rtl:ml-2 w-40 h-2 bg-gray-200 rounded-full mt-2">
                                                            <div class="h-full text-center text-xs text-white bg-yellow-400 rounded-full" style="width:20%"></div>
                                                        </div>
                                                        <div class="ltr:mr-2 rtl:ml-2">(7)</div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div class="ltr:mr-2 rtl:ml-2">3 <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-yellow-400" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </div>
                                                        <div class="ltr:mr-2 rtl:ml-2 w-40 h-2 bg-gray-200 rounded-full mt-2">
                                                            <div class="h-full text-center text-xs text-white bg-yellow-400 rounded-full" style="width:0%"></div>
                                                        </div>
                                                        <div class="ltr:mr-2 rtl:ml-2">(0)</div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div class="ltr:mr-2 rtl:ml-2">2 <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-yellow-400" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </div>
                                                        <div class="ltr:mr-2 rtl:ml-2 w-40 h-2 bg-gray-200 rounded-full mt-2">
                                                            <div class="h-full text-center text-xs text-white bg-yellow-400 rounded-full" style="width:0%"></div>
                                                        </div>
                                                        <div class="ltr:mr-2 rtl:ml-2">(0)</div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div class="ltr:mr-2 rtl:ml-2">1 <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-yellow-400" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </div>
                                                        <div class="ltr:mr-2 rtl:ml-2 w-40 h-2 bg-gray-200 rounded-full mt-2">
                                                            <div class="h-full text-center text-xs text-white bg-yellow-400 rounded-full" style="width:0%"></div>
                                                        </div>
                                                        <div class="ltr:mr-2 rtl:ml-2">(0)</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- review list -->
                                            <div class="flex flex-col py-4 border-b dark:border-gray-700">
                                                <div class="flex flex-row">
                                                    <h4 class="font-semibold mb-1 ltr:mr-2 rtl:ml-2">Original product
                                                    </h4>
                                                    <ul class="flex mt-1 mb-2">
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="text-gray-500 mb-1">Trusted seller, original product, fast
                                                    response and fast shipping</p>
                                                <p class="text-xs text-gray-500 mb-2">by Ari budin <span class="ml-1">Oct 12,2022</span></p>
                                                <div class="w-full">
                                                    <a href="..//img/products/purple.jpg" class="glightbox3 mr-2" data-gallery="gallery2">
                                                        <img class="inline-block border dark:border-gray-700 w-20 h-auto hover:opacity-90" src="..//img/products/purple-small.jpg">
                                                    </a>

                                                    <a href="..//img/products/blue.jpg" class="glightbox3 mr-2" data-gallery="gallery2">
                                                        <img class="inline-block border dark:border-gray-700 w-20 h-auto hover:opacity-90" src="..//img/products/blue-small.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- review list -->
                                            <div class="flex flex-col py-4 border-b dark:border-gray-700">
                                                <div class="flex flex-row">
                                                    <ul class="flex mt-1 mb-2">
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="text-gray-500 mb-1">Thanks very recommended seller</p>
                                                <p class="text-xs text-gray-500 mb-2">by Jane <span class="ml-1">Oct
                                                        10,2022</span></p>
                                            </div>
                                            <!-- review list -->
                                            <div class="flex flex-col py-4 border-b dark:border-gray-700">
                                                <div class="flex flex-row">
                                                    <ul class="flex mt-1 mb-2">
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="mr-2 text-gray-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="text-gray-500 mb-1">Original product, fast shipping</p>
                                                <p class="text-xs text-gray-500 mb-2">by Thomas <span class="ml-1">Oct
                                                        10,2022</span></p>
                                            </div>
                                            <!-- review list -->
                                            <div class="flex flex-col py-4 border-b dark:border-gray-700">
                                                <div class="flex flex-row">
                                                    <ul class="flex mt-1 mb-2">
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="text-gray-500 mb-1">Thanks very recommended seller</p>
                                                <p class="text-xs text-gray-500 mb-2">by Jane <span class="ml-1">Oct
                                                        10,2022</span></p>
                                            </div>
                                            <!-- review list -->
                                            <div class="flex flex-col py-4 border-b dark:border-gray-700">
                                                <div class="flex flex-row">
                                                    <ul class="flex mt-1 mb-2">
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                        <li class="ltr:mr-2 rtl:ml-2 text-yellow-400">
                                                            <!-- icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                                                                <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z">
                                                                </path>
                                                            </svg>
                                                            <!-- <i class="fa fa-star"></i> -->
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="text-gray-500 mb-1">Thanks very recommended seller</p>
                                                <p class="text-xs text-gray-500 mb-2">by Jane <span class="ml-1">Oct
                                                        10,2022</span></p>
                                            </div>
                                            <!-- navigation -->
                                            <div class="flex flex-row justify-between py-4">
                                                <nav aria-label="Page navigation">
                                                    <ul x-data="{ item: '1' }" class="flex justify-end space-x-0">
                                                        <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-600 text-gray-100': item === '1' }" @click="item = '1'" class="ltr:rounded-l rtl:rounded-r block relative py-2 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700 bg-indigo-500 dark:bg-indigo-600 text-gray-100" href="product-detail.html#">1</a></li>
                                                        <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-600 text-gray-100': item === '2' }" @click="item = '2'" class="block relative py-2 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700" href="product-detail.html#">2</a></li>
                                                        <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-600 text-gray-100': item === '3' }" @click="item = '3'" class="block relative py-2 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700" href="product-detail.html#">3</a></li>
                                                        <li>
                                                            <a :class="{ 'bg-indigo-500 dark:bg-indigo-600 text-gray-100': item === '4' }" @click="item = '4'" class="block relative py-2 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700 ltr:rounded-r rtl:rounded-l" href="product-detail.html#" aria-label="Next">
                                                                <span aria-hidden="true">»</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="self-center">Showing 1 to 5 of 42 results</p>
                                            </div>
                                        </div>
                                        <div x-show="tabs === 3">
                                            <h2 class="text-lg font-semibold mb-2">Product discussion</h2>
                                            <div class="border p-4 rounded-md mb-4 dark:border-gray-700">
                                                <div x-data="{open:false}">
                                                    <p class="flex">
                                                        <button @click="open=!open" class="py-2 px-4 inline-block text-center rounded leading-5 text-indigo-500 hover:text-gray-300 focus:text-gray-300 bg-transparent border border-indigo-500 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" type="button">
                                                            Ask question ?
                                                        </button>
                                                    </p>
                                                    <div x-show="open">
                                                        <form class="flex flex-wrap flex-row mt-4">
                                                            <div class="mr-4">
                                                                <label for="formGroupExampleInput" class="hidden">Your
                                                                    question</label>
                                                                <input type="text" class="w-full leading-normal relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="formGroupExampleInput" placeholder="insert your question">
                                                            </div>
                                                            <div class="flex-shrink">
                                                                <button type="submit" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-blue-800 hover:ring-0 hover:border-blue-800 focus:bg-blue-800 focus:border-blue-800 focus:outline-none focus:ring-0">Submit
                                                                    question</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Question -->
                                            <div class="flex flex-col p-4 mb-4 rounded-md border dark:border-gray-700">
                                                <h5 class="mb-1 font-bold">Question: when is it ready for red color?
                                                </h5>
                                                <p class="text-xs mb-2">by Jesicca <span class="italic">Oct 12,
                                                        2021</span></p>

                                                <p class="mb-1"><span class="font-bold">Answer:</span> I'm very sorry,
                                                    Sis, until now, the red Nike Women's Race Running Shoe product has
                                                    not been able to be ordered because of the enthusiasm and interest
                                                    of buyers so that the product stock runs out. Please click "Notify
                                                    Me" to receive a notification when the product is ready again. Thank
                                                    you</p>
                                                <p class="text-xs mb-2">by CS <span class="italic">Oct 12, 2021</span>
                                                </p>
                                            </div>
                                            <!-- Question -->
                                            <div class="flex flex-col p-4 mb-4 rounded-md border dark:border-gray-700">
                                                <h5 class="mb-1 font-bold">Question: when is it ready for red color?
                                                </h5>
                                                <p class="text-xs mb-2">by Jesicca <span class="italic">Oct 12,
                                                        2021</span></p>

                                                <p class="mb-1"><span class="font-bold">Answer:</span> I'm very sorry,
                                                    Sis, until now, the red Nike Women's Race Running Shoe product has
                                                    not been able to be ordered because of the enthusiasm and interest
                                                    of buyers so that the product stock runs out. Please click "Notify
                                                    Me" to receive a notification when the product is ready again. Thank
                                                    you</p>
                                                <p class="text-xs mb-2">by CS <span class="italic">Oct 12, 2021</span>
                                                </p>
                                            </div>
                                            <!-- Question -->
                                            <div class="flex flex-col p-4 mb-4 rounded-md border dark:border-gray-700">
                                                <h5 class="mb-1 font-bold">Question: when is it ready for red color?
                                                </h5>
                                                <p class="text-xs mb-2">by Jesicca <span class="italic">Oct 12,
                                                        2021</span></p>

                                                <p class="mb-1"><span class="font-bold">Answer:</span> I'm very sorry,
                                                    Sis, until now, the red Nike Women's Race Running Shoe product has
                                                    not been able to be ordered because of the enthusiasm and interest
                                                    of buyers so that the product stock runs out. Please click "Notify
                                                    Me" to receive a notification when the product is ready again. Thank
                                                    you</p>
                                                <p class="text-xs mb-2">by CS <span class="italic">Oct 12, 2021</span>
                                                </p>
                                            </div>
                                            <!-- navigation -->
                                            <div class="flex flex-row justify-between py-4">
                                                <nav aria-label="Page navigation">
                                                    <ul x-data="{ item: '1' }" class="flex justify-end space-x-0">
                                                        <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-600 text-gray-100': item === '1' }" @click="item = '1'" class="ltr:rounded-l rtl:rounded-r block relative py-2 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700 bg-indigo-500 dark:bg-indigo-600 text-gray-100" href="product-detail.html#">1</a></li>
                                                        <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-600 text-gray-100': item === '2' }" @click="item = '2'" class="block relative py-2 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700" href="product-detail.html#">2</a></li>
                                                        <li><a :class="{ 'bg-indigo-500 dark:bg-indigo-600 text-gray-100': item === '3' }" @click="item = '3'" class="block relative py-2 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700" href="product-detail.html#">3</a></li>
                                                        <li>
                                                            <a :class="{ 'bg-indigo-500 dark:bg-indigo-600 text-gray-100': item === '4' }" @click="item = '4'" class="block relative py-2 px-4 bg-white border border-gray-200 hover:text-gray-100 hover:bg-indigo-500 ltr:-mr-0.5 rtl:-ml-0.5 dark:bg-gray-800 dark:border-gray-700 ltr:rounded-r rtl:rounded-l" href="product-detail.html#" aria-label="Next">
                                                                <span aria-hidden="true">»</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="self-center">Showing 1 to 3 of 32 results</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>