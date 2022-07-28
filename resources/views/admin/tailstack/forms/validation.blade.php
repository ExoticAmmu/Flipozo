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
                    <p class="text-xl font-bold mt-3 mb-5">Form Validation</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-8 mb-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="relative">
                            <div class="mb-6">
                                <p class="text-gray-500 leading-relaxed font-light text-lg mx-auto pb-2">Provide
                                    valuable, actionable feedback to your users with Pristine form validation</p>
                            </div>

                            <div class="mb-8">
                                <div
                                    class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <form class="valid-form flex flex-wrap flex-row -mx-4">
                                        <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                                            <label for="inputEmail4" class="inline-block mb-2">Email</label>
                                            <input type="email"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                id="inputEmail4" required>
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                                            <label for="inputPassword4" class="inline-block mb-2">Password</label>
                                            <input type="password"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                id="inputPassword4" required>
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full mb-4">
                                            <label for="inputAddress" class="inline-block mb-2">Address</label>
                                            <input type="text"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                id="inputAddress" placeholder="1234 Main St" required>
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full mb-4">
                                            <label for="inputAddress2" class="inline-block mb-2">Address 2</label>
                                            <input type="text"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                id="inputAddress2" placeholder="Apartment, studio, or floor" required>
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                                            <label for="inputCity" class="inline-block mb-2">City</label>
                                            <input type="text"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                id="inputCity" required>
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/3 mb-4">
                                            <label for="inputState" class="inline-block mb-2">State</label>
                                            <select id="inputState"
                                                class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 select-caret appearance-none dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                required>
                                                <option>Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/6 mb-4">
                                            <label for="inputZip" class="inline-block mb-2">Zip</label>
                                            <input type="text"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                id="inputZip" required>
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full mb-4">
                                            <label class="flex items-center">
                                                <input type="checkbox" name="checked-demo" value="1"
                                                    class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-3 rtl:ml-2"
                                                    required>
                                                <span>I agree to the Terms of Use</span>
                                            </label>
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full">
                                            <button type="submit"
                                                class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Register
                                                now</button>
                                        </div>
                                    </form>
                                </div>
                                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;form class="valid-form flex flex-wrap flex-row -mx-4"&gt;
                          &lt;div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4"&gt;
                            &lt;label for="inputEmail4" class="inline-block mb-2"&gt;Email&lt;/label&gt;
                            &lt;input type="email" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputEmail4" required&gt;
                          &lt;/div&gt;
                          &lt;div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4"&gt;
                            &lt;label for="inputPassword4" class="inline-block mb-2"&gt;Password&lt;/label&gt;
                            &lt;input type="password" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputPassword4" required&gt;
                          &lt;/div&gt;
                          &lt;div class="form-group flex-shrink max-w-full px-4 w-full mb-4"&gt;
                            &lt;label for="inputAddress" class="inline-block mb-2"&gt;Address&lt;/label&gt;
                            &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputAddress" placeholder="1234 Main St" required&gt;
                          &lt;/div&gt;
                          &lt;div class="form-group flex-shrink max-w-full px-4 w-full mb-4"&gt;
                            &lt;label for="inputAddress2" class="inline-block mb-2"&gt;Address 2&lt;/label&gt;
                            &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputAddress2" placeholder="Apartment, studio, or floor" required&gt;
                          &lt;/div&gt;
                          &lt;div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-4"&gt;
                            &lt;label for="inputCity" class="inline-block mb-2"&gt;City&lt;/label&gt;
                            &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputCity" required&gt;
                          &lt;/div&gt;
                          &lt;div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/3 mb-4"&gt;
                            &lt;label for="inputState" class="inline-block mb-2"&gt;State&lt;/label&gt;
                            &lt;select id="inputState" class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 select-caret appearance-none dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" required&gt;
                              &lt;option&gt;Choose...&lt;/option&gt;
                              &lt;option&gt;...&lt;/option&gt;
                            &lt;/select&gt;
                          &lt;/div&gt;
                          &lt;div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/6 mb-4"&gt;
                            &lt;label for="inputZip" class="inline-block mb-2"&gt;Zip&lt;/label&gt;
                            &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputZip" required&gt;
                          &lt;/div&gt;
                          &lt;div class="form-group flex-shrink max-w-full px-4 w-full mb-4"&gt;
                            &lt;label class="flex items-center"&gt;
                              &lt;input type="checkbox" name="checked-demo" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-3 rtl:ml-2" required&gt;
                              &lt;span&gt;I agree to the Terms of Use&lt;/span&gt;
                            &lt;/label&gt;
                          &lt;/div&gt;
                          &lt;div class="form-group flex-shrink max-w-full px-4 w-full"&gt;
                            &lt;button type="submit" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Register now&lt;/button&gt;
                          &lt;/div&gt;
                        &lt;/form&gt;
                      </code>
                    </pre>
                                <p class="mb-4">Three part must included <code
                                        class="text-pink-700">.form-valid, .form-group and required</code> element</p>
                                <p class="mb-4">Demo config available in <code
                                        class="text-pink-700">src/js/demo.js</code> function <code
                                        class="text-pink-700">myValidation();</code></p>
                                <p class="mt-6">More information about Pristine please read <a target="_blank"
                                        href="https://github.com/sha256/Pristine" class="text-indigo-500">on here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>