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
                    <h1 class="text-3xl mb-4 font-semibold text-gray-800 dark:text-gray-300">Introduction</h1>
                    <p class="leading-relaxed font-light text-lg mx-auto pb-2">Taildash <span class="italic text-gray-500">(Tailwind dashboard)</span> is Tailwind admin template with flat design and fast loading. This template is perfect for make awesome dasboard admin for your site.</p>
                  </div>
                  
                  <div class="mb-8">
                    <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Quick start</h2>
                    <p class="mb-4">Looking to quickly add <span class="text-gray-800 dark:text-gray-300 font-medium">Taildash</span> to your project? Use css, js and starter page from this package.</p>
                  </div>
                  
                  <div class="mb-8">
                    <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">CSS</h2>
                    <p class="mb-4">For developement, Copy the Tailwind stylesheets <code class="text-red-600">&lt;link&gt;</code> and paste to your <code class="text-red-600">&lt;head&gt;</code>.</p>
                    <pre>
                      <code class="language-html" data-lang="html">
                        &lt;!--Development css (used in all pages)--&gt;
                        &lt;link rel="stylesheet" href="src/css/style.css"&gt;
                      </code>
                    </pre>
                  </div>

                  <div class="mb-8">
                    <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">JS</h2>
                    <p class="mb-4">Copy-paste the Alpine JS, Plugins js and Demo js <code class="text-red-600">&lt;script&gt;</code> place the following near the end of your pages, right before the closing <code class="text-red-600">&lt;/body&gt;</code> tag. Don't forget to editing demo js with your data and paste demo js before the closing <code class="text-red-600">&lt;/body&gt;</code> tag.</p>
                    <pre>
                      <code class="language-html" data-lang="html">
                        &lt;!--start::Global javascript (used in all pages)--&gt;
                        &lt;script src="vendors/alpinejs/dist/cdn.min.js"&gt;&lt;/script&gt;
                        &lt;script src="vendors/flickity/dist/flickity.pkgd.min.js"&gt;&lt;/script&gt;
                        &lt;script src="vendors/chart.js/dist/chart.min.js"&gt;&lt;/script&gt;
                        &lt;script src="vendors/flatpickr/dist/flatpickr.min.js"&gt;&lt;/script&gt;
                        &lt;script src="vendors/flatpickr/dist/plugins/rangePlugin.js"&gt;&lt;/script&gt;
                        &lt;script src="vendors/simple-datatables/dist/umd/simple-datatables.js"&gt;&lt;/script&gt;
                        &lt;script src="vendors/@yaireo/tagify/dist/tagify.min.js"&gt;&lt;/script&gt;
                        &lt;script src="vendors/pristinejs/dist/pristine.min.js"&gt;&lt;/script&gt;
                        &lt;script src="vendors/glightbox/dist/js/glightbox.min.js"&gt;&lt;/script&gt;
                        &lt;!--end::Global javascript (used in all pages)--&gt;

                        &lt;!--start::Vendor javascript (only on this page)--&gt;
                        &lt;script src="vendors/dropzone/dist/min/dropzone.min.js"&gt;&lt;/script&gt;
                        &lt;script src="vendors/simplemde/dist/simplemde.min.js"&gt;&lt;/script&gt;
                        &lt;script src="vendors/jsvectormap/dist/js/jsvectormap.min.js"&gt;&lt;/script&gt;
                        &lt;script src="vendors/jsvectormap/dist/maps/world.js"&gt;&lt;/script&gt;
                        &lt;!--end::Vendor javascript (only on this page)--&gt;

                        &lt;!-- start::Demo javascript ( initialize global javascript ) --&gt;
                        &lt;script src="src/js/demo.js"&gt;&lt;/script&gt;

                        &lt;!-- start::Call vendor ( initialize vendor javascript ) --&gt;
                        &lt;script src="src/js/vendor.js"&gt;&lt;/script&gt;
                      </code>
                    </pre>
                  </div>

                  <div class="mb-8">
                    <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Development starter template</h2>
                    <p class="mb-4">Be sure to have your pages set up with the latest design and development standards. That means using an HTML5 doctype and including a viewport meta tag for proper responsive behaviors. Put it all together and your pages should look like this:</p>
                    <pre>
                      <code class="language-html" data-lang="html">
                        &lt;!doctype html&gt;
                        &lt;html lang="en"&gt;
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

                            &lt;!--Development css (used in all pages)--&gt;
                            &lt;link rel="stylesheet" href="src/css/style.css"&gt;
                          &lt;/head&gt;

                          &lt;body class="font-sans text-base font-normal text-gray-700"&gt;
                            &lt;h1&gt;Hello, world!&lt;/h1&gt;

                            &lt;!--start::Global javascript (used in all pages)--&gt;
                            &lt;script src="vendors/alpinejs/dist/cdn.min.js"&gt;&lt;/script&gt;
                            &lt;script src="vendors/flickity/dist/flickity.pkgd.min.js"&gt;&lt;/script&gt;
                            &lt;script src="vendors/chart.js/dist/chart.min.js"&gt;&lt;/script&gt;
                            &lt;script src="vendors/flatpickr/dist/flatpickr.min.js"&gt;&lt;/script&gt;
                            &lt;script src="vendors/flatpickr/dist/plugins/rangePlugin.js"&gt;&lt;/script&gt;
                            &lt;script src="vendors/simple-datatables/dist/umd/simple-datatables.js"&gt;&lt;/script&gt;
                            &lt;script src="vendors/@yaireo/tagify/dist/tagify.min.js"&gt;&lt;/script&gt;
                            &lt;script src="vendors/pristinejs/dist/pristine.min.js"&gt;&lt;/script&gt;
                            &lt;script src="vendors/glightbox/dist/js/glightbox.min.js"&gt;&lt;/script&gt;
                            &lt;!--end::Global javascript (used in all pages)--&gt;

                            &lt;!--start::Vendor javascript (only on this page)--&gt;
                            &lt;script src="vendors/dropzone/dist/min/dropzone.min.js"&gt;&lt;/script&gt;
                            &lt;script src="vendors/simplemde/dist/simplemde.min.js"&gt;&lt;/script&gt;
                            &lt;script src="vendors/jsvectormap/dist/js/jsvectormap.min.js"&gt;&lt;/script&gt;
                            &lt;script src="vendors/jsvectormap/dist/maps/world.js"&gt;&lt;/script&gt;
                            &lt;!--end::Vendor javascript (only on this page)--&gt;

                            &lt;!-- start::Demo javascript ( initialize global javascript ) --&gt;
                            &lt;script src="src/js/demo.js"&gt;&lt;/script&gt;

                            &lt;!-- start::Call vendor ( initialize vendor javascript ) --&gt;
                            &lt;script src="src/js/vendor.js"&gt;&lt;/script&gt;
                          &lt;/body&gt;
                        &lt;/html&gt;
                        </x-admin-layout>
                      </code>
                    </pre>
                  </div>

                  <div class="mb-8">
                    <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Starter template</h2>
                    <p class="mb-4">This is starter template with production files.</p>
                    <pre>
                      <code class="language-html" data-lang="html">
                        &lt;!doctype html&gt;
                        &lt;html lang="en"&gt;
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
                    <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">RTL starter template</h2>
                    <p class="mb-4">This is starter template with rtl production files.</p>
                    <pre>
                      <code class="language-html" data-lang="html">
                        &lt;!doctype html&gt;
                        &lt;html lang="ar" dir="ltr"&gt;
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
</x-admin-layout>