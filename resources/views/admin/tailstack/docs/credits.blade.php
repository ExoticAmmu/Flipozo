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
                                <h1 class="text-3xl mb-4 font-semibold text-gray-800 dark:text-gray-300">Credits</h1>
                                <p class="leading-relaxed font-light text-lg mx-auto pb-2">First, let us take this
                                    opportunity to thank all the creative minds for their great products and plugins.
                                </p>
                            </div>

                            <div id="premium-plugins" class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Premium plugins
                                </h2>
                                <p class="mb-4">All third-party premium plugins are located in the <code class="text-pink-700">vendors/..</code> folder.</p>

                                <div class="tabless">
                                    <table class="table-bordered w-full">
                                        <thead class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20">
                                            <tr class="border border-gray-200 dark:border-gray-700">
                                                <th class="py-2">Name</th>
                                                <th class="py-2">Description</th>
                                                <th class="py-2">URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Flickity</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    Touch, responsive, flickable carousels</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://flickity.metafizzy.co/" target="_blank">https://flickity.metafizzy.co/</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="free-plugins" class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Free Plugins
                                </h2>
                                <p class="mb-4">All third-party plugins (libraries) are located in the <code class="text-pink-700">vendors/..</code> folder.</p>

                                <div class="tabless">
                                    <table class="table-bordered w-full">
                                        <thead class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20">
                                            <tr class="border border-gray-200 dark:border-gray-700">
                                                <th class="py-2">Name</th>
                                                <th class="py-2">Description</th>
                                                <th class="py-2">URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Tailwind Css</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    Rapidly build modern websites without ever leaving your HTML</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://tailwindcss.com/" target="_blank">https://tailwindcss.com/</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Alpine JS</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    Alpine.js offers you the reactive and declarative nature of big
                                                    frameworks like Vue or React at a much lower cost</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://github.com/alpinejs/alpine" target="_blank">https://github.com/alpinejs/alpine</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Chart.js</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    Simple yet flexible JavaScript charting for designers & developers.
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://www.chartjs.org/" target="_blank">https://www.chartjs.org/</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Dropzone</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    Dropzone is an easy to use drag'n'drop library. It supports image
                                                    previews and shows nice progress bars.</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://github.com/dropzone/dropzone" target="_blank">https://github.com/dropzone/dropzone</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Flatpickr</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    lightweight, powerful javascript datetimepicker with no
                                                    dependencies.</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://github.com/flatpickr/flatpickr" target="_blank">https://github.com/flatpickr/flatpickr</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">FullCalendar</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    Full-sized drag & drop event calendar.</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://github.com/fullcalendar/fullcalendar" target="_blank">https://github.com/fullcalendar/fullcalendar</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Glightbox</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    Pure Javascript lightbox with mobile support. It can handle images,
                                                    videos with autoplay, inline content and iframes</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://github.com/biati-digital/glightbox" target="_blank">https://github.com/biati-digital/glightbox</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Google Fonts</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    Google Fonts is a library of over 800 libre licensed fonts, an
                                                    interactive web directory for browsing the library, and APIs for
                                                    conveniently using the fonts via CSS and Android.</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://fonts.google.com/" target="_blank">https://fonts.google.com</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Jsvectormap</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    A lightweight Javascript library for creating interactive maps and
                                                    pretty data visualization.</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://github.com/themustafaomar/jsvectormap" target="_blank">https://github.com/themustafaomar/jsvectormap</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Prism.js</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    Prism is a lightweight, extensible syntax highlighter, built with
                                                    modern web standards in mind. It's used in thousands of websites,
                                                    including some of those you visit daily.</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="http://prismjs.com" target="_blank">http://prismjs.com</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Simple-DataTables</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    DataTables but in Vanilla ES2018 JS</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">https://github.com/fiduswriter/Simple-DataTables</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">SimpleMDE</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    SimpleMDE is a simple, embeddable, and beautiful JS markdown editor
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://simplemde.com/" target="_blank">https://simplemde.com/</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Sweetalert2</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    A beautiful, responsive, highly customizable and accessible
                                                    (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                                                    dependencies.</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://github.com/sweetalert2/sweetalert2" target="_blank">https://github.com/sweetalert2/sweetalert2</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Tagify</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    Lightweight, efficient Tags input component in Vanilla JS / React /
                                                    Angular / Vue</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://github.com/yairEO/tagify" target="_blank">https://github.com/yairEO/tagify</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="free-design" class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Free design
                                    sources</h2>
                                <p class="mb-4">Demo image sources in the <code class="text-pink-700">/img/..</code>
                                    folder</p>
                                <div class="tabless">
                                    <table class="table-bordered w-full">
                                        <thead class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20">
                                            <tr class="border border-gray-200 dark:border-gray-700">
                                                <th class="py-2">Name</th>
                                                <th class="py-2">Description</th>
                                                <th class="py-2">URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Manypixels</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    Browse to find the svg ilustrations that fit your needs and click to
                                                    download. Use the on-the-fly color image generation to match your
                                                    brand identity.</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://www.manypixels.co/gallery/?page=1&style=flatline" target="_blank">https://www.manypixels.co/gallery/</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Pexels</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    The best free stock photos & videos shared by talented creators.
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://www.pexels.com/" target="_blank">https://www.pexels.com/</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <span class="font-bold">Bootstrap Icons</span>
                                                </td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    For the first time ever, Bootstrap has its own icon library.</td>
                                                <td class="text-gray-500 border border-gray-200 dark:border-gray-700 px-4 py-2">
                                                    <a class="text-indigo-500" href="https://icons.getbootstrap.com/" target="_blank">https://icons.getbootstrap.com/</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>