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
                    <p class="text-xl font-bold mt-3 mb-5">Carousel</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="relative">
                            <div class="mb-6">
                                <p class="leading-relaxed font-light text-lg mx-auto pb-2">A slideshow component for
                                    cycling through elements—images or slides of text—like a carousel.</p>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">How to install
                                </h2>
                                <p class="mb-4">
                                    By default Tailwind css doesnot support carousel, so we need to depend on other
                                    third parties library to achieve this. So we will achieve tailwind carousel using
                                    Flickity js.
                                </p>
                                <p class="mb-4 font-semibold">
                                    Step 1: Add Flickity js before <code class="text-pink-700">&lt;/body&gt;</code> html
                                </p>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;script src="vendors/flickity/dist/flickity.pkgd.min.js"&gt;&lt;/script&gt;
			                </code>
			              </pre>
                                <p class="mb-4 font-semibold">
                                    Step 2: Add slider code in html
                                </p>
                                <!-- example -->
                                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <div id="thumbnail-slider" class="mb-12 lg:mb-6 nav-inset-button carousel -mx-2" data-flickity='{ "cellAlign": "left", "rightToLeft": false, "wrapAround": true, "draggable": false, "adaptiveHeight": true, "prevNextButtons": true , "imagesLoaded": true }'>
                                        <div class="max-w-full w-full px-2">
                                            <img alt="title" class="w-full h-auto max-w-auto" src="..//img/project/project_1.jpg">
                                        </div>
                                        <div class="max-w-full w-full px-2">
                                            <img alt="title" class="w-full h-auto max-w-auto" src="..//img/project/project_2.jpg">
                                        </div>
                                        <div class="max-w-full w-full px-2">
                                            <img alt="title" class="w-full h-auto max-w-auto" src="..//img/project/project_3.jpg">
                                        </div>
                                    </div>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- carousel slider --&gt;
			                  &lt;div id="thumbnail-slider" class="mb-12 lg:mb-6 nav-inset-button carousel -mx-2" data-flickity='{ "cellAlign": "left", "wrapAround": true, "draggable": false, "adaptiveHeight": true, "prevNextButtons": true , "imagesLoaded": true }'&gt;
			                    &lt;div class="max-w-full w-full px-2"&gt;
			                      &lt;img alt="title" class="w-full h-auto max-w-auto" src="/img/project/project_1.jpg"&gt;
			                    &lt;/div&gt;
			                    &lt;div class="max-w-full w-full px-2"&gt;
			                      &lt;img alt="title" class="w-full h-auto max-w-auto" src="/img/project/project_2.jpg"&gt;
			                    &lt;/div&gt;
			                    &lt;div class="max-w-full w-full px-2"&gt;
			                      &lt;img alt="title" class="w-full h-auto max-w-auto" src="/img/project/project_3.jpg"&gt;
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
                                <p class="mb-4 font-semibold">
                                    Step 3: Edit responsive slider code with editing <code class="text-pink-700">&lt;div class="max-w-full w-full px-2"&gt;</code> replace
                                    with other responsive width class, For example <code class="text-pink-700">&lt;div class="max-w-full w-full md:w-1/2 lg:w-1/3 px-2"&gt;</code>.
                                </p>
                                <p class="mb-4">
                                    For more documentation about Flickity slider read in here <a class="text-blue-500" target="_blank" href="https://flickity.metafizzy.co/">Flickity</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>