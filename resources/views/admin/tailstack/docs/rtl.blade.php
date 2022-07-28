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
                <div class="flex-shrink max-w-full px-4 w-full my-4">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="relative">
                            <div class="mb-6">
                                <h1 class="text-3xl mb-4 font-semibold text-gray-800 dark:text-gray-300">RTL Direction
                                </h1>
                                <p class="leading-relaxed font-light text-lg mx-auto pb-2">Taildash <span
                                        class="text-gray-500 italic">(Tailwind dashboard)</span> is Tailwind admin
                                    template with supported RTL Direction.<br> Test RTL Demo from customizer >>
                                    Direction >> and click rtl toggle button.</p>
                            </div>
                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">RTL starter
                                    template</h2>
                                <p class="mb-4">This is starter template with rtl production files.</p>
                                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;!doctype html&gt;
                        &lt;html lang="ar" dir="rtl"&gt;
                          &lt;head&gt;
                            &lt;!-- Title --&gt;
                            &lt;title&gt;Hello, world!&lt;/title&gt;

                            &lt;!-- Required meta tags --&gt;
                            &lt;meta charset="UTF-8"&gt;
                            &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
                            &lt;meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"&gt;

                            &lt;!-- Favicon  --&gt;
                            &lt;link rel="icon" href="src/img/favicon.png"&gt;

                            &lt;!--Google Fonts--&gt;
                            &lt;link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet"&gt;

                            &lt;!--Styles--&gt;
                            &lt;link rel="stylesheet" href="dist/css/style.css"&gt;
                          &lt;/head&gt;

                          &lt;body class="font-sans text-base font-normal text-gray-700"&gt;
                            &lt;h1&gt;Hello, world!&lt;/h1&gt;

                            &lt;!--start::Global javascript (used in all pages)--&gt;
                            &lt;script src="dist/js/scripts.js"&gt;&lt;/script&gt;

                            &lt;!--start::Demo javascript ( initialize global javascript )--&gt;
                            &lt;script src="src/js/demo.js"&gt;&lt;/script&gt;

                            &lt;!--start::Insert your vendors and custom javascript in here--&gt;
                          &lt;/body&gt;
                        &lt;/html&gt;
                        </x-admin-layout>
                      </code>
                    </pre>
                            </div>
                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">How Edit RTL
                                    CSS?</h2>
                                <p class="mb-4">Add or edit rtl css from html file like this<code
                                        class="text-pink-700">ltr:text-left rtl:text-right</code>. For more information
                                    about RTL Mode read documentation on here <a
                                        href="https://tailwindcss.com/docs/hover-focus-and-other-states#rtl-support"
                                        class="text-indigo-500" target="_blank">Tailwind RTL</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>