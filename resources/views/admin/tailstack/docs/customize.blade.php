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
                    <h1 class="text-xl font-bold mt-3 mb-5 text-gray-800 dark:text-gray-300">Customize</h1>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-gray-800 dark:text-gray-300 text-base font-bold">CSS</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="mb-6">
                                <h2 class="text-base mb-2 font-semibold text-gray-800 dark:text-gray-300">How to create
                                    a new style?</h2>
                                <p class="mb-4">To avoid file loss, overrides of your custom styles or any other
                                    conflicts during the upgrade process, create or modify your styles with add your
                                    custom css or scss in <code class="text-pink-700">src/precss/tailwindcss.css</code>
                                    file. If you want to add other plugin css, please paste css or scss in this file.
                                </p>
                                <pre>
                      <code class="language-html" data-lang="html">
                        /* Insert your css in here */
                        .test-class {
                            @apply relative;
                        }
                      </code>
                    </pre>
                                <p class="mb-4">Core Tailwind css in <code
                                        class="text-pink-700">src/precss/tailwindcss.css</code> file.</p>
                                <pre>
                      <code class="language-html" data-lang="html">
                        :root {
  --primary:#6366F1;
  --secondary:#EC4899;
  --green:#22C55E;
  --yellow:#F59E0B;
  --gray:#84848f;
}

@tailwind base;
@tailwind components;
@tailwind utilities;

********************

plugins css
                      </code>
                    </pre>
                                <p class="mb-4">Remove all plugin css from this file.</p>
                                <P>More information about custom in Tailwindcss is <a target="_blank"
                                        href="https://tailwindcss.com/docs/installation#using-a-custom-css-file"
                                        class="text-blue-500">in here</a>
                            </div>

                            <div class="mb-6">
                                <h2 class="text-base mb-2 font-semibold text-gray-800 dark:text-gray-300">How Edit RTL
                                    CSS?</h2>
                                <p class="mb-4">Add or edit rtl css from html file like this<code
                                        class="text-pink-700">ltr:text-left rtl:text-right</code></p>
                                <p>More information about rtl in here <a class="text-blue-500" target="_blank"
                                        href="https://tailwindcss.com/docs/hover-focus-and-other-states#rtl-support">Tailwind
                                        RTL</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-gray-800 dark:text-gray-300 text-base font-bold">JS</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="mb-6">
                                <h2 class="text-base mb-2 font-semibold text-gray-800 dark:text-gray-300">How to create
                                    a new Javascript?</h2>
                                <p class="mb-4">To avoid file loss, overrides of your custom styles or any other
                                    conflicts during the upgrade process, create or modify your custom javascript in
                                    <code class="text-pink-700">src/js/demo.js</code> file.</p>
                                <pre>
                      <code class="language-html" data-lang="html">
                        // Custom JS
                        const myCustom = function () {
                          
                          // insert your javascript in here

                        }
                      </code>
                    </pre>
                            </div>
                            <div class="mb-6">
                                <h2 class="text-base mb-2 font-semibold text-gray-800 dark:text-gray-300">How to edit
                                    Demo Javascript?</h2>
                                <p class="mb-4"><code class="text-pink-700">demo.js</code> is a javascript that is used
                                    to display sample layouts such as charts, datepickers, vectormaps and event
                                    calendars. Copy some scripts you need and paste them in the footer before <code
                                        class="text-pink-700">&lt;/body&gt;</code>. Replace the javascript demo value
                                    with the dynamic data you have.</p>
                                <p>Example:</p>
                                <pre>
                      <code class="language-html" data-lang="html">
                          &lt;!-- Demo Chart.js and all vendors config --&gt;
                          &lt;script src="src/js/demo.js"&gt;&lt;/script&gt;

                          &lt;script&gt;
                            const date_range = document.getElementById('startDate');
                            if ( date_range != null) {
                              flatpickr('#startDate', {
                                enableTime: true,
                                allowInput: true,
                                dateFormat: "m/d/Y h:iK",
                                "plugins": [new rangePlugin({ input: "#endDate"})]
                              });
                            } 
                          &lt;/script&gt;
                        &lt;/body&gt;
                      </code>
                    </pre>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between py-6">
                            <div class="flex flex-col">
                                <h3 class="text-gray-800 dark:text-gray-300 text-base font-bold">Theme Skin</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <p class="mb-4">Tailback is ready in light and dark mode. Very simple to change color skin,
                                just editing html file and add "dark" classes like this <code
                                    class="text-pink-700">&lt;html class="dark" lang="en"&gt;</code>.</p>
                            <p>Read more information about Tailwind dark mode in here <a target="_blank"
                                    class="text-blue-500 hover:underline"
                                    href="https://tailwindcss.com/docs/dark-mode">https://tailwindcss.com/docs/dark-mode</a>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-gray-800 dark:text-gray-300 text-base font-bold">Theme Colors</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="mb-6">
                                <p class="mb-3">We use a subset of Tailwindcss color palette for generating color
                                    schemes. <br>You can use <code class="text-pink-700">text-</code> or <code
                                        class="text-pink-700">bg-</code> before color like this <code
                                        class="text-pink-700">text-indigo-500</code> or <code
                                        class="text-pink-700">bg-indigo-600</code></p>
                                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                    <div class="w-full">
                                        <div class="inline-block mr-2 p-6 bg-indigo-50"></div>
                                        <div class="inline-block mr-2 p-6 bg-indigo-100"></div>
                                        <div class="inline-block mr-2 p-6 bg-indigo-200"></div>
                                        <div class="inline-block mr-2 p-6 bg-indigo-300"></div>
                                        <div class="inline-block mr-2 p-6 bg-indigo-400"></div>
                                        <div class="inline-block mr-2 p-6 bg-indigo-500"></div>
                                        <div class="inline-block mr-2 p-6 bg-indigo-600"></div>
                                        <div class="inline-block mr-2 p-6 bg-indigo-700"></div>
                                        <div class="inline-block mr-2 p-6 bg-indigo-800"></div>
                                        <div class="inline-block mr-2 p-6 bg-indigo-900"></div>
                                    </div>
                                    <div class="w-full">
                                        <div class="inline-block mr-2 p-6 bg-gray-50"></div>
                                        <div class="inline-block mr-2 p-6 bg-gray-100"></div>
                                        <div class="inline-block mr-2 p-6 bg-gray-200"></div>
                                        <div class="inline-block mr-2 p-6 bg-gray-300"></div>
                                        <div class="inline-block mr-2 p-6 bg-gray-400"></div>
                                        <div class="inline-block mr-2 p-6 bg-gray-500"></div>
                                        <div class="inline-block mr-2 p-6 bg-gray-600"></div>
                                        <div class="inline-block mr-2 p-6 bg-gray-700"></div>
                                        <div class="inline-block mr-2 p-6 bg-gray-800"></div>
                                        <div class="inline-block mr-2 p-6 bg-gray-900"></div>
                                    </div>
                                </div>
                                <p>Our primary color is <code class="text-pink-700">text-indigo-</code>. You can change
                                    all primary color on html file with change <code
                                        class="text-pink-700">text-indigo-</code> and <code
                                        class="text-pink-700">bg-indigo-</code> with others color.</p>
                                <p>We also use customize color for <code class="text-pink-700">-gray-</code>. Edit this
                                    color from <code class="text-pink-700">tailwind.config.js</code></p>
                                <pre>
                      <code class="language-html" data-lang="html">
extend: {
  colors: {
    gray: {
      50:  '#f8f7ff',
      100: '#f6f5ff',
      200:  '#eff0fe',
      300:  '#e0e0fc',
      400:  '#98A5C0',
      500:  '#6B7280',
      600:  '#282960',
      700:  '#1e1f48',
      800:  '#141430',
      900:  '#0a0a18'
    },
  }
},
                      </code>
                    </pre>

                                <p class="mt-4">More complete color can see in Official <a
                                        href="https://tailwindcss.com/docs/customizing-colors" class="text-indigo-500"
                                        target="_blank">Tailwindcss</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="flex flex-row justify-between pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-gray-800 dark:text-gray-300 text-base font-bold">Option</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <p class="mb-6">You can change setting about Tailwindcss from this file. For example: Change
                                Google fonts from <code class="text-pink-700">tailwind.config.js</code></p>
                            <pre>
                <code class="language-html" data-lang="html">
                  // tailwind.config.js
module.exports = {
  mode: 'layers',
  content: ['*.html/','./src/js/*.js',
    './docs/**/*.html','./ecommerce/*.html'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    fontFamily: {
      sans: ['Nunito', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
                </code>
              </pre>
                            <p class="my-6">For more information about Theme configuration please read <a
                                    href="https://tailwindcss.com/docs/theme" target="_blank" class="text-blue-500">in
                                    here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>