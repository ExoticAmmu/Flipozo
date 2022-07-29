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
        <p class="text-xl font-bold mt-3 mb-5">Form Layout</p>
      </div>
      <div class="flex-shrink max-w-full px-4 w-full mb-6">
        <div class="p-8 mb-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
          <div class="relative">
            <div class="mb-6">
              <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Give your forms
                some structure layout options.</p>
            </div>

            <div class="mb-8">
              <h2 class="text-lg mb-6 font-semibold text-gray-800 dark:text-gray-300">Full width</h2>
              <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                <div class="mb-6">
                  <label for="formGroupExampleInput" class="inline-block mb-2">Example
                    label</label>
                  <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="mb-6">
                  <label for="formGroupExampleInput2" class="inline-block mb-2">Another
                    label</label>
                  <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="formGroupExampleInput2" placeholder="Another input placeholder">
                </div>
              </div>
              <pre>
                        <code class="language-html" data-lang="html">
                          &lt;div class="mb-6"&gt;
                            &lt;label for="formGroupExampleInput" class="inline-block mb-2"&gt;Example label&lt;/label&gt;
                            &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="formGroupExampleInput" placeholder="Example input placeholder"&gt;
                          &lt;/div&gt;
                          &lt;div class="mb-6"&gt;
                            &lt;label for="formGroupExampleInput2" class="inline-block mb-2"&gt;Another label&lt;/label&gt;
                            &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="formGroupExampleInput2" placeholder="Another input placeholder"&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
            </div>

            <div class="mb-8">
              <h2 class="text-lg mb-6 font-semibold text-gray-800 dark:text-gray-300">Responsive Grid
              </h2>
              <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                <div class="flex flex-wrap flex-row -mx-4">
                  <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6 lg:mb-0">
                    <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="First name" aria-label="First name">
                  </div>
                  <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6 lg:mb-0">
                    <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Last name" aria-label="Last name">
                  </div>
                </div>
              </div>
              <pre>
                        <code class="language-html" data-lang="html">
                          &lt;div class="flex flex-wrap flex-row -mx-4"&gt;
                            &lt;div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6 lg:mb-0"&gt;
                              &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="First name" aria-label="First name"&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6 lg:mb-0"&gt;
                              &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Last name" aria-label="Last name"&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        </code>
                      </pre>
            </div>

            <div class="mb-8">
              <h2 class="text-lg mb-6 font-semibold text-gray-800 dark:text-gray-300">Multiple
                Responsive Grid</h2>
              <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                <form class="flex flex-wrap flex-row -mx-4">
                  <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                    <label for="inputEmail4" class="inline-block mb-2">Email</label>
                    <input type="email" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputEmail4">
                  </div>
                  <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                    <label for="inputPassword4" class="inline-block mb-2">Password</label>
                    <input type="password" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputPassword4">
                  </div>
                  <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <label for="inputAddress" class="inline-block mb-2">Address</label>
                    <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <label for="inputAddress2" class="inline-block mb-2">Address 2</label>
                    <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                  <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                    <label for="inputCity" class="inline-block mb-2">City</label>
                    <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputCity">
                  </div>
                  <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-6">
                    <label for="inputState" class="inline-block mb-2">State</label>
                    <select id="inputState" class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="flex-shrink max-w-full px-4 w-full md:w-1/6 mb-6">
                    <label for="inputZip" class="inline-block mb-2">Zip</label>
                    <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputZip">
                  </div>
                  <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <label class="flex items-center mb-6">
                      <input type="checkbox" name="checked-demo" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-2 rtl:ml-2">
                      <span>I agree to the Terms of Use</span>
                    </label>
                  </div>
                  <div class="flex-shrink max-w-full px-4 w-full">
                    <button type="submit" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Register
                      now</button>
                  </div>
                </form>
              </div>
              <pre>
                        <code class="language-html" data-lang="html">
                          &lt;form class="flex flex-wrap flex-row -mx-4"&gt;
                            &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6"&gt;
                              &lt;label for="inputEmail4" class="inline-block mb-2"&gt;Email&lt;/label&gt;
                              &lt;input type="email" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputEmail4"&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6"&gt;
                              &lt;label for="inputPassword4" class="inline-block mb-2"&gt;Password&lt;/label&gt;
                              &lt;input type="password" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputPassword4"&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-shrink max-w-full px-4 w-full mb-6"&gt;
                              &lt;label for="inputAddress" class="inline-block mb-2"&gt;Address&lt;/label&gt;
                              &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputAddress" placeholder="1234 Main St"&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-shrink max-w-full px-4 w-full mb-6"&gt;
                              &lt;label for="inputAddress2" class="inline-block mb-2"&gt;Address 2&lt;/label&gt;
                              &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputAddress2" placeholder="Apartment, studio, or floor"&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6"&gt;
                              &lt;label for="inputCity" class="inline-block mb-2"&gt;City&lt;/label&gt;
                              &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputCity"&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-6"&gt;
                              &lt;label for="inputState" class="inline-block mb-2"&gt;State&lt;/label&gt;
                              &lt;select id="inputState" class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none"&gt;
                                &lt;option selected&gt;Choose...&lt;/option&gt;
                                &lt;option&gt;...&lt;/option&gt;
                              &lt;/select&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-shrink max-w-full px-4 w-full md:w-1/6 mb-6"&gt;
                              &lt;label for="inputZip" class="inline-block mb-2"&gt;Zip&lt;/label&gt;
                              &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputZip"&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-shrink max-w-full px-4 w-full mb-6"&gt;
                              &lt;label class="flex items-center"&gt;
                                &lt;input type="checkbox" name="checked-demo" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-2 rtl:ml-2"&gt;
                                &lt;span&gt;I agree to the Terms of Use&lt;/span&gt;
                              &lt;/label&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-shrink max-w-full px-4 w-full"&gt;
                              &lt;button type="submit" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"&gt;Register now&lt;/button&gt;
                            &lt;/div&gt;
                          &lt;/form&gt;
                        </code>
                      </pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-admin-layout>