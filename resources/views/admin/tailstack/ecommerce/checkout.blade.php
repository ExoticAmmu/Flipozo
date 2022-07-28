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
                    <p class="text-xl font-bold mt-3 mb-5">Checkout</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-2/3 mb-6">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="w-full overflow-x-auto">
                            <div id="Accordione" x-data="{selected:0}">
                                <!-- list -->
                                <div class="relative flex flex-wrap flex-col shadow mb-4 bg-white dark:bg-gray-800">
                                    <div class="py-2 px-4 border-b border-gray-200 mb-0 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800"
                                        id="HeadingOnee">
                                        <div class="d-grid mb-0">
                                            <button
                                                class="py-4 px-6 w-full rounded-md leading-5 font-medium flex px-0 justify-between focus:outline-none focus:ring-0"
                                                @click="selected !== 0 ? selected = 0 : selected = null">
                                                <span class="font-bold">Step 1: Billing Address</span>
                                                <span>
                                                    <svg class="transform transition duration-500"
                                                        :class="{ '-rotate-180': selected == 0 }" width="1rem"
                                                        height="1rem" viewBox="0 0 16 16" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="CollapseOnee" x-show="selected == 0">
                                        <div
                                            class="flex-1 p-6 bg-gray-100 dark:bg-gray-900 bg-opacity-60 dark:bg-opacity-20">
                                            <form class="flex flex-wrap flex-row -mx-4">
                                                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                                    <label for="inputname" class="inline-block mb-2">First name</label>
                                                    <input type="text"
                                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        id="inputname">
                                                </div>
                                                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                                    <label for="inputlast" class="inline-block mb-2">Last name</label>
                                                    <input type="text"
                                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        id="inputlast">
                                                </div>
                                                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                                    <label for="inputphone" class="inline-block mb-2">Phone
                                                        number</label>
                                                    <input type="text"
                                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        id="inputphone">
                                                </div>
                                                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                                    <label for="inputemail" class="inline-block mb-2">Email</label>
                                                    <input type="email"
                                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        id="inputemail">
                                                </div>
                                                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                                    <label for="inputCountry" class="inline-block mb-2">Country</label>
                                                    <select id="inputCountry"
                                                        class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none">
                                                        <option selected>Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                                    <label for="inputState" class="inline-block mb-2">State</label>
                                                    <select id="inputState"
                                                        class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none">
                                                        <option selected>Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                                    <label for="inputCity" class="inline-block mb-2">City</label>
                                                    <input type="text"
                                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        id="inputCity">
                                                </div>
                                                <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                                    <label for="inputZip" class="inline-block mb-2">Zip</label>
                                                    <input type="text"
                                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        id="inputZip">
                                                </div>
                                                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                                    <label for="inputAddress" class="inline-block mb-2">Address</label>
                                                    <input type="text"
                                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        id="inputAddress" placeholder="1234 Main St">
                                                </div>
                                                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                                    <label for="inputAddress2" class="inline-block mb-2">Address
                                                        2</label>
                                                    <input type="text"
                                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        id="inputAddress2" placeholder="Apartment, studio, or floor">
                                                </div>
                                                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                                    <label class="flex items-center">
                                                        <input type="checkbox" name="checked-demo" value="1"
                                                            class="form-checkbox h-5 w-5 ltr:mr-3 rtl:ml-3 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none">
                                                        <span>Ship to different address ?</span>
                                                    </label>
                                                </div>
                                                <div class="flex-shrink max-w-full px-4 w-full">
                                                    <button type="submit"
                                                        class="py-2 px-4 inline-block text-center mb-3 rounded py-2 px-5 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Continue
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor"
                                                            class="inline-block ltr:ml-2 rtl:mr-2 bi bi-arrow-right"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                                            </path>
                                                        </svg></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- list -->
                                <div class="relative flex flex-wrap flex-col shadow mb-4 bg-white dark:bg-gray-800">
                                    <div class="py-2 px-4 border-b border-gray-200 mb-0 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800"
                                        id="HeadingTwoe">
                                        <div class="d-grid mb-0">
                                            <button
                                                class="py-4 px-6 w-full rounded-md leading-5 font-medium flex px-0 justify-between focus:outline-none focus:ring-0"
                                                @click="selected !== 1 ? selected = 1 : selected = null">
                                                <span class="font-bold">Step 2: Shipping info</span>
                                                <span>
                                                    <svg class="transform transition duration-500"
                                                        :class="{ '-rotate-180': selected == 1 }" width="1rem"
                                                        height="1rem" viewBox="0 0 16 16" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="CollapseTwoe" x-show="selected == 1">
                                        <div
                                            class="flex-1 p-6 bg-gray-100 dark:bg-gray-900 bg-opacity-60 dark:bg-opacity-20">
                                            <p class="mb-3 font-semibold">Shipping Address</p>
                                            <div class="flex flex-wrap flex-row mb-6">
                                                <label
                                                    class="py-3 flex-shrink max-w-full px-4 w-full md:w-1/2 cursor-pointer">
                                                    <input type="radio"
                                                        class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none rounded-full"
                                                        name="shippingAddress" value="home" checked="">
                                                    <span class="ltr:ml-2 rtl:mr-2">Home</span>
                                                    <h5 class="mt-3 mb-1 font-semibold">John Doe</h5>
                                                    <p class="text-gray-500">
                                                        Mountain view, Joice 12<br>
                                                        San Francisco, CA 82987, USA<br>
                                                        <abbr title="Phone">Phone:</abbr> 123 456 789
                                                    </p>
                                                </label>
                                                <label
                                                    class="py-3 flex-shrink max-w-full px-4 w-full md:w-1/2 cursor-pointer">
                                                    <input type="radio"
                                                        class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none rounded-full"
                                                        name="shippingAddress" value="office">
                                                    <span class="ltr:ml-2 rtl:mr-2">Office</span>
                                                    <h5 class="mt-3 mb-1 font-semibold">John Doe</h5>
                                                    <p class="text-gray-500">
                                                        Sunset 12, Joice<br>
                                                        San Francisco, CA 82987, USA<br>
                                                        <abbr title="Phone">Phone:</abbr> 987 654 321
                                                    </p>
                                                </label>
                                            </div>
                                            <p class="mb-3 font-semibold">Shipping Method</p>
                                            <div class="flex flex-wrap flex-row mb-6 text-gray-700">
                                                <label
                                                    class="p-3 bg-green-100 flex-shrink max-w-full px-4 w-full md:w-1/3 cursor-pointer">
                                                    <input type="radio"
                                                        class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none rounded-full"
                                                        name="shippingMethod" value="free" checked="">
                                                    <span class="ltr:ml-2 rtl:mr-2">Free</span>
                                                    <h5 class="mt-3 mb-1 font-semibold">Standart</h5>
                                                    <p class="text-gray-500">0$</p>
                                                </label>
                                                <label
                                                    class="p-3 bg-green-200 flex-shrink max-w-full px-4 w-full md:w-1/3 cursor-pointer">
                                                    <input type="radio"
                                                        class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none rounded-full"
                                                        name="shippingMethod" value="standart">
                                                    <span class="ltr:ml-2 rtl:mr-2">Express</span>
                                                    <h5 class="mt-3 mb-1 font-semibold">Ninja Express</h5>
                                                    <p class="text-gray-500">+12$</p>
                                                </label>
                                                <label
                                                    class="p-3 bg-green-300 flex-shrink max-w-full px-4 w-full md:w-1/3 cursor-pointer">
                                                    <input type="radio"
                                                        class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none rounded-full"
                                                        name="shippingMethod" value="express">
                                                    <span class="ltr:ml-2 rtl:mr-2">Express One Day</span>
                                                    <h5 class="mt-3 mb-1 font-semibold">Super Express</h5>
                                                    <p class="text-gray-500">+25$</p>
                                                </label>
                                            </div>
                                            <div class="flex-shrink max-w-full w-full">
                                                <button type="submit"
                                                    class="py-2 px-4 inline-block text-center mb-3 rounded py-2 px-5 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Continue
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor"
                                                        class="inline-block ltr:ml-2 rtl:mr-2 bi bi-arrow-right"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                                        </path>
                                                    </svg></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- list -->
                                <div class="relative flex flex-wrap flex-col shadow mb-4 bg-white dark:bg-gray-800">
                                    <div class="py-2 px-4 border-b border-gray-200 mb-0 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800"
                                        id="HeadingThreee">
                                        <div class="d-grid mb-0">
                                            <button
                                                class="py-4 px-6 w-full rounded-md leading-5 font-medium flex px-0 justify-between focus:outline-none focus:ring-0"
                                                @click="selected !== 2 ? selected = 2 : selected = null">
                                                <span class="font-bold">Step 3: Payment method</span>
                                                <span>
                                                    <svg class="transform transition duration-500"
                                                        :class="{ '-rotate-180': selected == 2 }" width="1rem"
                                                        height="1rem" viewBox="0 0 16 16" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="CollapseThreee" x-show="selected == 2">
                                        <div
                                            class="flex-1 p-6 bg-gray-100 dark:bg-gray-900 bg-opacity-60 dark:bg-opacity-20">
                                            <div class="flex flex-wrap flex-row mb-6">
                                                <label
                                                    class="py-3 flex-shrink max-w-full px-4 w-full cursor-pointer mb-3">
                                                    <input type="radio"
                                                        class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none rounded-full"
                                                        name="paymentMethod" value="paypal" checked="">
                                                    <span class="ltr:ml-2 rtl:mr-2">Paypal</span>

                                                    <img src="../src/img/payments/paypal.png"
                                                        class="max-w-full w-40 h-auto">

                                                    <p class="mt-2 text-sm text-gray-500">You will be redirected to
                                                        PayPal website to complete your purchase</p>
                                                </label>
                                                <label
                                                    class="py-3 flex-shrink max-w-full px-4 w-full cursor-pointer mb-3">
                                                    <input type="radio"
                                                        class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none rounded-full"
                                                        name="paymentMethod" value="credit">
                                                    <span class="ltr:ml-2 rtl:mr-2">Credit/Debit Card</span>
                                                    <img src="../src/img/payments/creditcard.png"
                                                        class="max-w-full w-40 h-auto">
                                                    <p class="mt-2 text-sm text-gray-500">Pay with most popular payment
                                                        option</p>
                                                </label>
                                                <label
                                                    class="py-3 flex-shrink max-w-full px-4 w-full cursor-pointer mb-3">
                                                    <input type="radio"
                                                        class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none rounded-full"
                                                        name="paymentMethod" value="bank">
                                                    <span class="ltr:ml-2 rtl:mr-2">Payoneer</span>
                                                    <img src="../src/img/payments/payoneer.png"
                                                        class="max-w-full w-40 h-auto">
                                                    <p class="mt-2 text-sm text-gray-500">You will be redirected to
                                                        Payoneer website to complete your purchase</p>
                                                </label>
                                            </div>
                                            <div class="flex-shrink max-w-full w-full">
                                                <button type="submit"
                                                    class="py-2 px-4 inline-block text-center mb-3 rounded py-2 px-5 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Continue
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor"
                                                        class="inline-block ltr:ml-2 rtl:mr-2 bi bi-arrow-right"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                                        </path>
                                                    </svg></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded shadow-lg mb-6">
                        <div class="relative">
                            <table class="table-auto w-full ltr:text-left rtl:text-right text-gray-600">
                                <thead class="border-b dark:border-gray-700">
                                    <tr class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20">
                                        <th class="p-4 font-normal">Products</th>
                                        <th class="p-4 font-normal">Pricing</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-gray-100 dark:bg-gray-900 bg-opacity-60 dark:bg-opacity-20 text-sm">
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="p-4 font-normal">
                                            <a href="checkout.html#">
                                                <div class="flex flex-wrap flex-row items-center">
                                                    <div class="self-center"><img class="h-8 w-8"
                                                            src="../src/img/products/product1.jpg"></div>
                                                    <div
                                                        class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">
                                                        Nike Unisex-Child Free Rn (Big Kid)
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="p-4 font-normal text-center">80$</td>
                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="p-4 font-normal">
                                            <a href="checkout.html#">
                                                <div class="flex flex-wrap flex-row items-center">
                                                    <div class="self-center"><img class="h-8 w-8"
                                                            src="../src/img/products/product2.jpg"></div>
                                                    <div
                                                        class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">
                                                        Nike in-Season TR 9 Womens Running Shoe
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="p-4 font-normal text-center">70$</td>
                                    </tr>
                                </tbody>
                                <tfoot class="bg-gray-100 dark:bg-gray-900 bg-opacity-60 dark:bg-opacity-20 text-sm">
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="p-4 font-normal text-center ltr:text-right rtl:text-left">
                                            <b>Sub-Total</b></td>
                                        <td class="p-4 font-normal text-center ltr:text-right rtl:text-left totals">$290
                                        </td>
                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="p-4 font-normal text-center ltr:text-right rtl:text-left">
                                            <b>Discount</b></td>
                                        <td class="p-4 font-normal text-center ltr:text-right rtl:text-left totals">15%
                                        </td>
                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="p-4 font-normal text-center ltr:text-right rtl:text-left">
                                            <b>Total</b></td>
                                        <td class="p-4 font-normal text-center ltr:text-right rtl:text-left totals">
                                            $258,8</td>
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