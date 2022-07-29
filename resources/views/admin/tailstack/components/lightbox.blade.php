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
                <p class="text-xl font-bold mt-3 mb-5">Glightbox</p>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="relative">
                        <div class="mb-6">
                            <p class="leading-relaxed font-light text-lg mx-auto pb-2">Documentation and examples
                                for glightbox. Simple lightbox plugin, supported images, videos with autoplay,
                                inline content and iframes</p>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
                            <p class="mb-4">Example glightbox.</p>
                            <!-- example -->
                            <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                <div class="p-4 w-1/2">
                                    <a href="/img/products/blue.jpg" class="glightbox3 max-w-full w-full h-auto" data-gallery="gallery1">
                                        <img src="/img/products/blue.jpg" alt="image">
                                    </a>
                                    <ul class="py-4 text-left">
                                        <li class="inline-block">
                                            <a href="/img/products/purple.jpg" class="glightbox3" data-gallery="gallery1"><img src="/img/products/purple-small.jpg" class="w-20 h-auto mr-1"></a>
                                        </li>
                                        <li class="inline-block">
                                            <a href="/img/products/green.jpg" class="glightbox3" data-gallery="gallery1"><img src="/img/products/green-small.jpg" class="w-20 h-auto mr-1"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <pre>
			                <code class="language-html" data-lang="html">
                        &lt;div class="p-4"&gt;
                          &lt;a href="/img/products/blue.jpg" class="glightbox3 max-w-full w-full h-auto" data-gallery="gallery1"&gt;
                            &lt;img src="/img/products/blue.jpg" alt="image"&gt;
                          &lt;/a&gt;
                          &lt;ul class="py-4 text-left"&gt;
                            &lt;li class="inline-block"&gt;
                              &lt;a href="/img/products/purple.jpg" class="glightbox3" data-gallery="gallery1"&gt;&lt;img src="/img/products/purple-small.jpg" class="w-20 h-auto mr-1"&gt;&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="inline-block"&gt;
                              &lt;a href="/img/products/green.jpg" class="glightbox3" data-gallery="gallery1"&gt;&lt;img src="/img/products/green-small.jpg" class="w-20 h-auto mr-1"&gt;&lt;/a&gt;
                            &lt;/li&gt;
                          &lt;/ul&gt;
                        &lt;/div&gt;
			                </code>
			              </pre>
                            <p class="mb-4">Demo config available in <code class="text-pink-700">src/js/demo.js</code> function <code class="text-pink-700">myLightbox();</code></p>
                            <p class="mb-4 font-light">For more documentation please check in here <a target="_blank" href="https://github.com/biati-digital/glightbox" class="text-indigo-500 hover:underline">https://github.com/biati-digital/glightbox</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>