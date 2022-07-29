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
                    <p class="text-xl font-bold mt-3 mb-5">Shopping Cart</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="w-full mb-6 overflow-x-auto">
                            <table class="table-auto w-full ltr:text-left rtl:text-right text-gray-600">
                                <thead class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
                                    <tr>
                                        <th class="p-4 font-normal">Products</th>
                                        <th class="p-4 font-normal hidden lg:table-cell">Model</th>
                                        <th class="p-4 font-normal hidden lg:table-cell">Quantity</th>
                                        <th class="p-4 font-normal">Unit Price</th>
                                        <th class="p-4 font-normal hidden lg:table-cell">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="p-4 font-normal">
                                            <a href="cart.html#">
                                                <div class="flex flex-wrap flex-row items-center">
                                                    <div class="self-center"><img class="h-8 w-8" src="..//img/products/product1.jpg"></div>
                                                    <div class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">
                                                        Nike Unisex-Child Free Rn (Big Kid)
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="p-4 font-normal text-center hidden lg:table-cell">blue</td>
                                        <td class="p-4 font-normal text-center hidden lg:table-cell">
                                            <div class="flex flex-row" style="max-width: 200px;">
                                                <input type="text" name="quantity[456]" value="1" size="1" class="ltr:rounded-l rtl:rounded-r leading-5 relative py-2 px-4 text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
                                                <span class="flex flex-row">
                                                    <button type="submit" class="py-2 px-4 inline-block text-center rounded-0 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" title="Update">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z">
                                                            </path>
                                                            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <button type="button" onclick="cart.remove('456');" class="py-2 px-4 inline-block text-center ltr:rounded-r rtl:rounded-l leading-normal text-gray-100 bg-pink-500 border border-pink-500 hover:text-white hover:bg-pink-600 hover:ring-0 hover:border-pink-600 focus:bg-pink-600 focus:border-pink-600 focus:outline-none focus:ring-0" title="Remove">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="p-4 font-normal text-center">80$</td>
                                        <td class="p-4 font-normal text-center hidden lg:table-cell">80$</td>
                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="p-4 font-normal">
                                            <a href="cart.html#">
                                                <div class="flex flex-wrap flex-row items-center">
                                                    <div class="self-center"><img class="h-8 w-8" src="..//img/products/product2.jpg"></div>
                                                    <div class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">
                                                        Nike in-Season TR 9 Womens Running Shoe
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="p-4 font-normal text-center hidden lg:table-cell">green</td>
                                        <td class="p-4 font-normal text-center hidden lg:table-cell">
                                            <div class="flex flex-row" style="max-width: 200px;">
                                                <input type="text" name="quantity[456]" value="3" size="1" class="ltr:rounded-l rtl:rounded-r leading-5 relative py-2 px-4 text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
                                                <span class="flex flex-row">
                                                    <button type="submit" class="py-2 px-4 inline-block text-center rounded-0 leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" title="Update">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z">
                                                            </path>
                                                            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <button type="button" onclick="cart.remove('456');" class="py-2 px-4 inline-block text-center ltr:rounded-r rtl:rounded-l leading-normal text-gray-100 bg-pink-500 border border-pink-500 hover:text-white hover:bg-pink-600 hover:ring-0 hover:border-pink-600 focus:bg-pink-600 focus:border-pink-600 focus:outline-none focus:ring-0" title="Remove">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="p-4 font-normal text-center">70$</td>
                                        <td class="p-4 font-normal text-center hidden lg:table-cell">210$</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="flex flex-wrap flex-row">
                                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2">
                                    <div class="my-6" id="coupon">
                                        <label class="col-12 mb-2 hidden" for="input-coupon">Enter your coupon
                                            here</label>
                                        <div class="flex flex-wrap flex-row items-stretch w-full relative mb-6">
                                            <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="flex-shrink flex-grow max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0">
                                            <span class="flex-mr-px">
                                                <input type="button" value="Apply Coupon" id="button-coupon" data-loading-text="Loading..." class="py-2 px-4 flex items-center ltr:-ml-1 ltr:rounded-r rtl:rounded-r rtl:-mr-1 leading-5 text-gray-100 bg-green-500 border border-green-500 hover:text-white hover:bg-green-600 hover:ring-0 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:outline-none focus:ring-0">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 table-custom">
                                    <table class="table-auto w-full ltr:text-left rtl:text-right text-gray-600">
                                        <tbody>
                                            <tr class="border-b dark:border-gray-700">
                                                <td colspan="4"></td>
                                                <td class="p-4 font-normal text-center md:ltr:text-right md:rtl:text-left">
                                                    <b>Sub-Total</b>
                                                </td>
                                                <td class="p-4 font-normal text-center md:ltr:text-right md:rtl:text-left totals">
                                                    $290</td>
                                            </tr>
                                            <tr class="border-b dark:border-gray-700">
                                                <td colspan="4"></td>
                                                <td class="p-4 font-normal text-center md:ltr:text-right md:rtl:text-left">
                                                    <b>Discount</b>
                                                </td>
                                                <td class="p-4 font-normal text-center md:ltr:text-right md:rtl:text-left totals">
                                                    15%</td>
                                            </tr>
                                            <tr class="border-b dark:border-gray-700">
                                                <td colspan="4"></td>
                                                <td class="p-4 font-normal text-center md:ltr:text-right md:rtl:text-left">
                                                    <b>Total</b>
                                                </td>
                                                <td class="p-4 font-normal text-center md:ltr:text-right md:rtl:text-left totals">
                                                    $258,8</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="pt-4 w-full ltr:text-right rtl:text-left">
                                        <a href="cart.html#" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                            Checkout Now <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:ml-2 rtl:mr-2 bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                                </path>
                                            </svg>
                                        </a>
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