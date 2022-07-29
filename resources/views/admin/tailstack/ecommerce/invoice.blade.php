<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <main class="pt-20 -mt-2">
        <style>
            @media print {

                #sidebar-menu,
                #desktop-menu,
                footer,
                #btn-invoice {
                    display: none;
                }

                main.pt-20 {
                    margin-top: -60px;
                    padding-top: 0;
                }
            }
        </style>
        <div class="mx-auto p-2">
            <!-- row -->
            <div class="flex flex-wrap flex-row">
                <div id="title-invoice" class="flex justify-between max-w-full px-4 py-4 w-full">
                    <p class="text-xl font-bold mt-3 mb-5">Invoice #1089</p>
                    <button type="button" id="btn-invoice" onclick="window.print();" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ltr:mr-2 rtl:ml-2 inline-block bi bi-printer" viewBox="0 0 16 16">
                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                        </svg>Print Invoice</button>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="flex justify-between items-center pb-4 border-b border-gray-200 dark:border-gray-700 mb-3">
                            <div class="flex flex-col">
                                <div class="text-3xl font-bold mb-1">
                                    <img class="inline-block w-12 h-auto ltr:mr-2 rtl:ml-2" src="/img/favicon.png">Taildash
                                </div>
                                <p class="text-sm">Amphitheatre, Mountain View<br>San Francisco, CA 9321, US</p>
                            </div>
                            <div class="text-4xl uppercase font-bold">Invoice</div>
                        </div>
                        <div class="flex flex-row justify-between py-3">
                            <div class="flex-1">
                                <p><strong>Bill to:</strong><br>
                                    James Doe<br>
                                    Andreas street, Mountain View<br>
                                    San Francisco, CA 9321, US<br>
                                    Andreas-Doe@domain.com<br>
                                    +123 456 7890</p>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between mb-2">
                                    <div class="flex-1 font-semibold">Invoice ID#:</div>
                                    <div class="flex-1 ltr:text-right rtl:text-left">INV1089</div>
                                </div>
                                <div class="flex justify-between mb-2">
                                    <div class="flex-1 font-semibold">Invoice date:</div>
                                    <div class="flex-1 ltr:text-right rtl:text-left">12/08/2022</div>
                                </div>
                                <div class="flex justify-between mb-2">
                                    <div class="flex-1 font-semibold">Due date:</div>
                                    <div class="flex-1 ltr:text-right rtl:text-left">12/08/2022</div>
                                </div>
                                <div class="flex justify-between mb-2">
                                    <div class="flex-1 font-semibold">Status #:</div>
                                    <div class="flex-1 ltr:text-right rtl:text-left">Paid</div>
                                </div>
                                <div class="flex justify-between mb-2">
                                    <div class="flex-1 font-semibold">Payment #:</div>
                                    <div class="flex-1 ltr:text-right rtl:text-left">Paypal</div>
                                </div>
                            </div>
                        </div>
                        <div class="py-4">
                            <table class="table-bordered w-full ltr:text-left rtl:text-right text-gray-600">
                                <thead class="border-b dark:border-gray-700">
                                    <tr class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20">
                                        <th>Products</th>
                                        <th class="text-center">Qty</th>
                                        <th class="text-center">Unit price</th>
                                        <th class="text-center">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="flex flex-wrap flex-row items-center">
                                                <div class="self-center"><img class="h-8 w-8" src="/img/products/product1.jpg"></div>
                                                <div class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">
                                                    Nike Unisex-Child Free Rn (Big Kid)
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">80$</td>
                                        <td class="text-center">80$</td>
                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td>
                                            <div class="flex flex-wrap flex-row items-center">
                                                <div class="self-center"><img class="h-8 w-8" src="/img/products/product2.jpg"></div>
                                                <div class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">
                                                    Nike in-Season TR 9 Womens Running Shoe
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">70$</td>
                                        <td class="text-center">210$</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="text-center"><b>Sub-Total</b></td>
                                        <td class="text-center">$290</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="text-center"><b>Discount</b></td>
                                        <td class="text-center">15%</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="text-center"><b>Tax</b></td>
                                        <td class="text-center">5%</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="text-center"><b>Total</b></td>
                                        <td class="text-center font-bold">$258,8</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>