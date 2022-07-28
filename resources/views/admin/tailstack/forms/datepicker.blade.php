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
                    <h1 class="text-xl font-bold mt-3 mb-5">Datepicker</h1>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-8 mb-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="relative">
                            <p class="text-lg mb-6 font-light">We use Flatpickr plugin for add custom datepicker</p>
                            <div class="mb-6">
                                <label for="datepick" class="inline-block mb-2">Date picker</label>
                                <div class="flex flex-row justify-between">
                                    <input id="datepick"
                                        class="datepick w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        type="text" name="start">
                                </div>
                            </div>
                            <div class="mb-6">
                                <label for="rangetime" class="inline-block mb-2">Start and End date</label>
                                <div id="rangetime" class="flex flex-col justify-center md:flex-row md:justify-between">
                                    <input id="startDate"
                                        class="startDate w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        type="text" name="start">
                                    <span class="px-4 text-center">to</span>
                                    <input id="endDate"
                                        class="endDate w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        type="text" name="end">
                                </div>
                            </div>
                        </div>
                        <pre class="mb-8">
                  <code class="language-html" data-lang="html">
&lt;div class="mb-6"&gt;
  &lt;label for="datepick" class="inline-block mb-2"&gt;Date picker&lt;/label&gt;
  &lt;div id="datepicks" class="flex flex-col justify-center md:flex-row md:justify-between"&gt;
    &lt;input id="datepick" class="datepick w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" type="text" name="start"&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="mb-6"&gt;
  &lt;label for="rangetime" class="inline-block mb-2"&gt;Start and End date&lt;/label&gt;
  &lt;div id="rangetime" class="flex flex-row justify-between"&gt;
    &lt;input id="startDate" class="startDate w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" type="text" name="start"&gt;
    &lt;span class="px-4 text-center"&gt;to&lt;/span&gt;
    &lt;input id="endDate" class="endDate w-full leading-5 relative text-sm py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" type="text" name="end"&gt;  
  &lt;/div&gt;
&lt;/div&gt;
                  </code>
                </pre>
                        <p class="mb-4">Demo config available in <code class="text-pink-700">src/js/demo.js</code>
                            function <code class="text-pink-700">myDatepicker();</code></p>

                        <p class="text-lg mb-6 font-light">Editing id value and configuration with javascript, please
                            see example in demo.js. Read complete documentation in <a
                                href="https://flatpickr.js.org/getting-started/" target="_blank"
                                class="text-blue-500">https://flatpickr.js.org/getting-started/</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>