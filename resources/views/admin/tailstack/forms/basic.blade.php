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
                    <h1 class="text-xl font-bold mt-3 mb-5">Form Elements</h1>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-8 mb-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="relative">
                            <h2 class="text-lg mb-4 font-semibold text-gray-800 dark:text-gray-300">Input</h2>
                            <p class="text-lg mb-6 font-light">Most common form control, text-based input fields.
                                Includes support for all HTML5 types.</p>
                            <!-- Example input -->
                            <div
                                class="p-6 mb-6 border border-gray-200 bg-gray-100 dark:bg-gray-900 dark:border-gray-800 dark:bg-opacity-20">
                                <div class="mb-6">
                                    <label for="exampleInput1" class="inline-block mb-2">Full Name</label>
                                    <input type="text"
                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        id="exampleInput1" placeholder="John Doe">
                                </div>
                                <div class="mb-6">
                                    <label for="staticEmail" class="flex-shrink max-w-full w-full sm:w-1/6">Email
                                        Readonly</label>
                                    <div class="flex-shrink max-w-full w-full sm:w-5/6">
                                        <input type="text" readonly
                                            class="fw-full leading-5 relative py-3 rounded text-gray-800 bg-transparent border-0 border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0  dark:text-gray-300 dark:border-gray-700 dark:focus:border-gray-600"
                                            id="staticEmail" value="email@example.com">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="exampleTextarea1" class="inline-block mb-2">Example textarea</label>
                                    <textarea
                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        id="exampleTextarea1" rows="3"></textarea>
                                </div>
                                <div class="mb-6">
                                    <label for="exampleDataList" class="inline-block mb-2">Datalist example</label>
                                    <input
                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                                    <datalist id="datalistOptions">
                                        <option value="Burger">
                                        <option value="Pizza">
                                        <option value="Fried Rice">
                                        <option value="Fried Chicken">
                                        <option value="Kebab">
                                    </datalist>
                                </div>
                                <div class="mb-6">
                                    <label for="formFileMultiple" class="inline-block mb-2">Multiple files input
                                        example</label>
                                    <input
                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        type="file" id="formFileMultiple" multiple>
                                </div>
                                <div class="mb-6">
                                    <label for="exampleColorInput" class="inline-block mb-2">Color picker</label>
                                    <input type="color"
                                        class="block w-10 h-10 leading-5 relative rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        style="max-width: 3rem" id="exampleColorInput" value="#1e40af"
                                        title="Choose your color">
                                </div>
                                <div class="mb-6">
                                    <label for="exampleInput1" class="inline-block mb-2">Disabled input</label>
                                    <input type="text"
                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-gray-100 border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 cursor-not-allowed"
                                        id="exampleInput1" placeholder="Disabled input"
                                        aria-label="Disabled input example" disabled>
                                </div>
                                <div class="mb-6">
                                    <label for="exampleInput1" class="inline-block mb-2">Small</label>
                                    <input type="text"
                                        class="w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        id="exampleInput1" placeholder="small">
                                </div>
                                <div class="mb-6">
                                    <label for="exampleInput1" class="inline-block mb-2">Normal</label>
                                    <input type="text"
                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        id="exampleInput1" placeholder="normal">
                                </div>
                                <div class="mb-6">
                                    <label for="exampleInput1" class="inline-block mb-2">Large</label>
                                    <input type="text"
                                        class="w-full leading-5 relative text-2xl py-4 px-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        id="exampleInput1" placeholder="large">
                                </div>
                            </div>
                            <pre class="mb-8">
                    <code class="language-html" data-lang="html">
                      &lt;div class="mb-6"&gt;
                        &lt;label for="exampleInput1" class="inline-block mb-2"&gt;Full Name&lt;/label&gt;
                        &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="exampleInput1" placeholder="John Doe"&gt;
                      &lt;/div&gt;
                      &lt;div class="mb-6"&gt;
                        &lt;label for="staticEmail" class="flex-shrink max-w-full w-full sm:w-1/6"&gt;Email Readonly&lt;/label&gt;
                        &lt;div class="flex-shrink max-w-full w-full sm:w-5/6"&gt;
                          &lt;input type="text" readonly class="fw-full leading-5 relative py-3 rounded text-gray-800 bg-transparent border-0 border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0  dark:text-gray-300 dark:border-gray-700 dark:focus:border-gray-600" id="staticEmail" value="email@example.com"&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div class="mb-6"&gt;
                        &lt;label for="exampleTextarea1" class="inline-block mb-2"&gt;Example textarea&lt;/label&gt;
                        &lt;textarea class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="exampleTextarea1" rows="3"&gt;&lt;/textarea&gt;
                      &lt;/div&gt;
                      &lt;div class="mb-6"&gt;
                        &lt;label for="exampleDataList" class="inline-block mb-2"&gt;Datalist example&lt;/label&gt;
                        &lt;input class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" list="datalistOptions" id="exampleDataList" placeholder="Type to search..."&gt;
                        &lt;datalist id="datalistOptions"&gt;
                          &lt;option value="Burger"&gt;
                          &lt;option value="Pizza"&gt;
                          &lt;option value="Fried Rice"&gt;
                          &lt;option value="Fried Chicken"&gt;
                          &lt;option value="Kebab"&gt;
                        &lt;/datalist&gt;
                      &lt;/div&gt;
                      &lt;div class="mb-6"&gt;
                        &lt;label for="formFileMultiple" class="inline-block mb-2"&gt;Multiple files input example&lt;/label&gt;
                        &lt;input class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" type="file" id="formFileMultiple" multiple&gt;
                      &lt;/div&gt;
                      &lt;div class="mb-6"&gt;
                        &lt;label for="exampleColorInput" class="inline-block mb-2"&gt;Color picker&lt;/label&gt;
                        &lt;input type="color" class="block w-10 h-10 leading-5 relative rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" style="max-width: 3rem" id="exampleColorInput" value="#1e40af" title="Choose your color"&gt;
                      &lt;/div&gt;
                      &lt;div class="mb-6"&gt;
                        &lt;label for="exampleInput1" class="inline-block mb-2"&gt;Disabled input&lt;/label&gt;
                        &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-gray-100 border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 cursor-not-allowed" id="exampleInput1" placeholder="Disabled input" aria-label="Disabled input example" disabled&gt;
                      &lt;/div&gt;
                      &lt;div class="mb-6"&gt;
                        &lt;label for="exampleInput1" class="inline-block mb-2"&gt;Small&lt;/label&gt;
                        &lt;input type="text" class="w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="exampleInput1" placeholder="small"&gt;
                      &lt;/div&gt;
                      &lt;div class="mb-6"&gt;
                        &lt;label for="exampleInput1" class="inline-block mb-2"&gt;Normal&lt;/label&gt;
                        &lt;input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="exampleInput1" placeholder="normal"&gt;
                      &lt;/div&gt;
                      &lt;div class="mb-6"&gt;
                        &lt;label for="exampleInput1" class="inline-block mb-2"&gt;Large&lt;/label&gt;
                        &lt;input type="text" class="w-full leading-5 relative text-2xl py-4 px-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="exampleInput1" placeholder="large"&gt;
                      &lt;/div&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                    <div class="p-8 mb-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="relative">
                            <h2 class="text-lg mb-4 font-semibold text-gray-800 dark:text-gray-300">Select</h2>
                            <p class="text-lg mb-6 font-light">Customize the native select with custom CSS that changes
                                the element’s initial appearance.</p>
                            <!-- Example input -->
                            <div
                                class="p-6 mb-6 border border-gray-200 bg-gray-100 dark:bg-gray-900 dark:border-gray-800 dark:bg-opacity-20">
                                <div class="mb-6">
                                    <select
                                        class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none"
                                        aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-6">
                                    <select
                                        class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none cursor-not-allowed"
                                        aria-label="Disabled select example" disabled>
                                        <option selected>Disabled select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <pre class="mb-8">
                    <code class="language-html" data-lang="html">
&lt;div class="mb-6"&gt;
  &lt;select class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none" aria-label="Default select example"&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value="1"&gt;One&lt;/option&gt;
    &lt;option value="2"&gt;Two&lt;/option&gt;
    &lt;option value="3"&gt;Three&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;
&lt;div class="mb-6"&gt;
  &lt;select class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none cursor-not-allowed" aria-label="Disabled select example" disabled&gt;
    &lt;option selected&gt;Disabled select menu&lt;/option&gt;
    &lt;option value="1"&gt;One&lt;/option&gt;
    &lt;option value="2"&gt;Two&lt;/option&gt;
    &lt;option value="3"&gt;Three&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                    <div class="p-8 mb-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="relative">
                            <h2 class="text-lg mb-4 font-semibold text-gray-800 dark:text-gray-300">Check and radio</h2>
                            <p class="text-lg mb-6 font-light">Create consistent cross-browser and cross-device
                                checkboxes and radios with our completely rewritten checks component.</p>
                            <!-- Example input -->
                            <div
                                class="p-6 mb-6 border border-gray-200 bg-gray-100 dark:bg-gray-900 dark:border-gray-800 dark:bg-opacity-20">
                                <div class="mb-6">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="checked-demo" value="1"
                                            class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-3 rtl:ml-3">
                                        <span>Checkbox</span>
                                    </label>
                                </div>
                                <div class="mb-6">
                                    <div class="flex flex-nowrap flex-row items-center mb-4">
                                        <input
                                            class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none rounded-full ltr:mr-3 rtl:ml-3"
                                            type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="inline-block" for="flexRadioDefault1">
                                            Default radio
                                        </label>
                                    </div>
                                    <div class="flex flex-nowrap flex-row items-center mb-4">
                                        <input
                                            class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none rounded-full ltr:mr-3 rtl:ml-3"
                                            type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="inline-block" for="flexRadioDefault2">
                                            Default checked radio
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="relative w-8 py-3">
                                        <input title="Switch checkbox" type="checkbox" name="lightdarks" id="lightdarks"
                                            class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white dark:bg-gray-700 border-2 dark:border-gray-700 appearance-none cursor-pointer">
                                        <label for="lightdarks"
                                            class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 dark:bg-gray-900 cursor-pointer"></label>
                                    </div>
                                </div>
                            </div>
                            <pre class="mb-8">
                    <code class="language-html" data-lang="html">
&lt;div class="mb-6"&gt;
  &lt;label class="flex items-center"&gt;
    &lt;input type="checkbox" name="checked-demo" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-3 rtl:ml-3"&gt;
    &lt;span&gt;Checkbox&lt;/span&gt;
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class="mb-6"&gt;
  &lt;div class="flex flex-nowrap flex-row items-center mb-4"&gt;
    &lt;input class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none rounded-full ltr:mr-3 rtl:ml-3" type="radio" name="flexRadioDefault" id="flexRadioDefault1"&gt;
    &lt;label class="inline-block" for="flexRadioDefault1"&gt;
      Default radio
    &lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="flex flex-nowrap flex-row items-center mb-4"&gt;
    &lt;input class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none rounded-full ltr:mr-3 rtl:ml-3" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked&gt;
    &lt;label class="inline-block" for="flexRadioDefault2"&gt;
      Default checked radio
    &lt;/label&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="mb-6"&gt;
  &lt;div class="relative w-8 py-3"&gt;
    &lt;input title="Switch checkbox" type="checkbox" name="lightdarks" id="lightdarks" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white dark:bg-gray-700 border-2 dark:border-gray-700 appearance-none cursor-pointer"/&gt;
    &lt;label for="lightdarks" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 dark:bg-gray-900 cursor-pointer"&gt;&lt;/label&gt;
  &lt;/div&gt;
&lt;/div&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                    <div class="p-8 mb-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="relative">
                            <h2 class="text-lg mb-4 font-semibold text-gray-800 dark:text-gray-300">Range</h2>
                            <p class="text-lg mb-6 font-light">Use our custom range inputs for consistent cross-browser
                                styling and built-in customization.</p>
                            <!-- Example input -->
                            <div
                                class="p-6 mb-6 border border-gray-200 bg-gray-100 dark:bg-gray-900 dark:border-gray-800 dark:bg-opacity-20">
                                <div class="mb-6">
                                    <label for="customRange1" class="inline-block">Example range</label>
                                    <input type="range"
                                        class="w-full h-6 py-1 bg-transparent focus:outline-none focus:ring-0"
                                        id="customRange1">
                                    <span class="block clear-both"></span>
                                </div>
                                <div class="mb-6">
                                    <label for="customRange2" class="inline-block">Disabled range</label>
                                    <input type="range"
                                        class="w-full h-6 py-1 bg-transparent focus:outline-none focus:ring-0 cursor-not-allowed"
                                        id="customRange2" disabled>
                                    <span class="block clear-both"></span>
                                </div>
                            </div>
                            <pre class="mb-8">
                    <code class="language-html" data-lang="html">
&lt;div class="mb-6"&gt;
  &lt;label for="customRange1" class="inline-block"&gt;Example range&lt;/label&gt;
  &lt;input type="range" class="w-full h-6 py-1 bg-transparent focus:outline-none focus:ring-0" id="customRange1"&gt;
  &lt;span class="block clear-both"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div class="mb-6"&gt;
  &lt;label for="customRange2" class="inline-block"&gt;Disabled range&lt;/label&gt;
  &lt;input type="range" class="w-full h-6 py-1 bg-transparent focus:outline-none focus:ring-0 cursor-not-allowed" id="customRange2" disabled&gt;
  &lt;span class="block clear-both"&gt;&lt;/span&gt;
&lt;/div&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                    <div class="p-8 mb-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="relative">
                            <h2 class="text-lg mb-4 font-semibold text-gray-800 dark:text-gray-300">Input group</h2>
                            <p class="text-lg mb-6 font-light">Easily extend form by adding text, buttons, or button
                                groups on either side of textual inputs, custom selects, and custom file inputs.</p>
                            <!-- Example input -->
                            <div
                                class="p-6 mb-6 border border-gray-200 bg-gray-100 dark:bg-gray-900 dark:border-gray-800 dark:bg-opacity-20">
                                <div class="flex flex-wrap items-stretch w-full relative mb-6">
                                    <input type="email"
                                        class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        name="email" required="" placeholder="Enter you email address"
                                        aria-label="subcribe newsletter">
                                    <div class="flex -mr-px">
                                        <button
                                            class="flex items-center py-2 px-4 ltr:-ml-1 ltr:rounded-r rtl:-mr-1 rtl:rounded-l leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"
                                            type="submit">Subscribe</button>
                                    </div>
                                </div>

                                <div class="flex flex-wrap items-stretch w-full relative mb-6">
                                    <span
                                        class="flex items-center py-2 px-4 ltr:-mr-1 rtl:-ml-1 ltr:rounded-l rtl:rounded-r leading-5  bg-gray-100 border border-gray-300 dark:bg-gray-900 dark:border-gray-900"
                                        id="basic-addon1">@</span>
                                    <input type="text"
                                        class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-r rtl:rounded-l text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="flex flex-wrap items-stretch w-full relative mb-6">
                                    <input type="text"
                                        class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        placeholder="Recipient's username" aria-label="Recipient's username"
                                        aria-describedby="basic-addon2">
                                    <span
                                        class="flex items-center py-2 px-4 ltr:-ml-1 ltr:rounded-r rtl:-mr-1 rtl:rounded-l leading-5 bg-gray-100 border border-gray-300 dark:bg-gray-900 dark:border-gray-900"
                                        id="basic-addon2">@example.com</span>
                                </div>

                                <label for="basic-url" class="inline-block mb-2">Your vanity URL</label>
                                <div class="flex flex-wrap items-stretch w-full relative mb-6">
                                    <span
                                        class="flex items-center py-2 px-4 ltr:-mr-1 rtl:-ml-1 ltr:rounded-l rtl:rounded-r leading-5  bg-gray-100 border border-gray-300 dark:bg-gray-900 dark:border-gray-900"
                                        id="basic-addon3">https://example.com/users/</span>
                                    <input type="text"
                                        class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-r rtl:rounded-l text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        id="basic-url" aria-describedby="basic-addon3">
                                </div>

                                <div class="flex flex-wrap items-stretch w-full relative mb-6">
                                    <span
                                        class="flex items-center py-2 px-4 ltr:-mr-1 rtl:-ml-1 ltr:rounded-l rtl:rounded-r leading-5  bg-gray-100 border border-gray-300 dark:bg-gray-900 dark:border-gray-900">$</span>
                                    <input type="text"
                                        class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        aria-label="Amount (to the nearest dollar)">
                                    <span
                                        class="flex items-center py-2 px-4 ltr:-ml-1 ltr:rounded-r rtl:-mr-1 rtl:rounded-l leading-5 bg-gray-100 border border-gray-300 dark:bg-gray-900 dark:border-gray-900">.00</span>
                                </div>

                                <div class="flex flex-wrap items-stretch w-full relative mb-6">
                                    <input type="text"
                                        class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        placeholder="Username" aria-label="Username">
                                    <span
                                        class="flex items-center py-2 px-4 -mx-1 ltr:rounded-l rtl:rounded-r leading-5 text-gray-700 dark:text-gray-300 bg-gray-100 border border-gray-300 dark:bg-gray-900 dark:border-gray-900">@</span>
                                    <input type="text"
                                        class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-r rtl:rounded-l text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        placeholder="Server" aria-label="Server">
                                </div>

                                <div class="flex flex-wrap items-stretch w-full relative mb-6">
                                    <span
                                        class="flex items-center py-2 px-4 ltr:-mr-1 rtl:-ml-1 ltr:rounded-l rtl:rounded-r leading-5  bg-gray-100 border border-gray-300 dark:bg-gray-900 dark:border-gray-900">With
                                        textarea</span>
                                    <textarea
                                        class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-r rtl:rounded-l text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        aria-label="With textarea"></textarea>
                                </div>
                            </div>
                            <pre class="mb-8">
                    <code class="language-html" data-lang="html">
&lt;div class="flex flex-wrap items-stretch w-full relative mb-6"&gt;
  &lt;input type="email" class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" name="email" required="" placeholder="Enter you email address" aria-label="subcribe newsletter"&gt;
  &lt;div class="flex -mr-px"&gt;
    &lt;button class="flex items-center py-2 px-4 ltr:-ml-1 ltr:rounded-r rtl:-mr-1 rtl:rounded-l leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" type="submit"&gt;Subscribe&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="flex flex-wrap items-stretch w-full relative mb-6"&gt;
  &lt;span class="flex items-center py-2 px-4 ltr:-mr-1 rtl:-ml-1 ltr:rounded-l rtl:rounded-r leading-5  bg-gray-100 border border-gray-300 dark:bg-gray-900 dark:border-gray-900" id="basic-addon1"&gt;@&lt;/span&gt;
  &lt;input type="text" class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-r rtl:rounded-l text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"&gt;
&lt;/div&gt;

&lt;div class="flex flex-wrap items-stretch w-full relative mb-6"&gt;
  &lt;input type="text" class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"&gt;
  &lt;span class="flex items-center py-2 px-4 ltr:-ml-1 ltr:rounded-r rtl:-mr-1 rtl:rounded-l leading-5 bg-gray-100 border border-gray-300 dark:bg-gray-900 dark:border-gray-900" id="basic-addon2"&gt;@example.com&lt;/span&gt;
&lt;/div&gt;

&lt;label for="basic-url" class="inline-block mb-2"&gt;Your vanity URL&lt;/label&gt;
&lt;div class="flex flex-wrap items-stretch w-full relative mb-6"&gt;
  &lt;span class="flex items-center py-2 px-4 ltr:-mr-1 rtl:-ml-1 ltr:rounded-l rtl:rounded-r leading-5  bg-gray-100 border border-gray-300 dark:bg-gray-900 dark:border-gray-900" id="basic-addon3"&gt;https://example.com/users/&lt;/span&gt;
  &lt;input type="text" class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-r rtl:rounded-l text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="basic-url" aria-describedby="basic-addon3"&gt;
&lt;/div&gt;

&lt;div class="flex flex-wrap items-stretch w-full relative mb-6"&gt;
  &lt;span class="flex items-center py-2 px-4 ltr:-mr-1 rtl:-ml-1 ltr:rounded-l rtl:rounded-r leading-5  bg-gray-100 border border-gray-300 dark:bg-gray-900 dark:border-gray-900"&gt;$&lt;/span&gt;
  &lt;input type="text" class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" aria-label="Amount (to the nearest dollar)"&gt;
  &lt;span class="flex items-center py-2 px-4 ltr:-ml-1 ltr:rounded-r rtl:-mr-1 rtl:rounded-l leading-5 bg-gray-100 border border-gray-300 dark:bg-gray-900 dark:border-gray-900"&gt;.00&lt;/span&gt;
&lt;/div&gt;

&lt;div class="flex flex-wrap items-stretch w-full relative mb-6"&gt;
  &lt;input type="text" class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Username" aria-label="Username"&gt;
  &lt;span class="flex items-center py-2 px-4 -mx-1 ltr:rounded-l rtl:rounded-r leading-5 text-gray-700 dark:text-gray-300 bg-gray-100 border border-gray-300 dark:bg-gray-900 dark:border-gray-900"&gt;@&lt;/span&gt;
  &lt;input type="text" class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-r rtl:rounded-l text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Server" aria-label="Server"&gt;
&lt;/div&gt;

&lt;div class="flex flex-wrap items-stretch w-full relative mb-6"&gt;
  &lt;span class="flex items-center py-2 px-4 ltr:-mr-1 rtl:-ml-1 ltr:rounded-l rtl:rounded-r leading-5  bg-gray-100 border border-gray-300 dark:bg-gray-900 dark:border-gray-900"&gt;With textarea&lt;/span&gt;
  &lt;textarea class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-4 ltr:rounded-r rtl:rounded-l text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" aria-label="With textarea"&gt;&lt;/textarea&gt;
&lt;/div&gt;
                    </code>
                  </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>