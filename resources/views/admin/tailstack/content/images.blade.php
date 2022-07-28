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
                    <p class="text-xl font-bold mt-3 mb-5 text-gray-800 dark:text-gray-300">Images</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="relative">
                            <div class="mb-6">
                                <p class="leading-relaxed font-light text-lg mx-auto pb-2">Documentation and examples
                                    for opting images into responsive behavior (so they never become larger than their
                                    parent elements).</p>
                            </div>

                            <div class="mb-8">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Responsive
                                    images</h2>
                                <p class="mb-4">This applies max-width: 100%; and height: auto; to the image so that it
                                    scales with the parent element.</p>
                                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-700 dark:border-gray-700">
                                    <img src="../src/img/project/project_1.jpg" class="max-w-full h-auto"
                                        alt="images title">
                                </div>
                                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;img src="src/img/project/project_1.jpg" class="max-w-full h-auto" alt="images title"&gt;
                      </code>
                    </pre>
                                <p class="my-6">Image also can add style like <code
                                        class="text-pink-700">rounded and border</code></p>
                            </div>

                            <div class="mb-6">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Aligning images
                                </h2>
                                <p class="mb-4">Align images with float left, center or right.</p>
                                <div class="clear-both"></div>
                                <div class="relative p-8">
                                    <figure class="text-center mb-6">
                                        <img class="max-w-full w-36 h-auto mx-auto"
                                            src="../src/img/project/project_1.jpg" alt="Image description">
                                        <figcaption>Align center images</figcaption>
                                    </figure>

                                    <figure
                                        class="lg:ltr:float-left lg:rtl:float-right text-center lg:ltr:text-left lg:rtl:text-right ltr:ml-0 rtl:mr-0 ltr:mr-7 rtl:ml-7 mb-7">
                                        <img class="max-w-full w-36 h-auto mx-auto"
                                            src="../src/img/project/project_2.jpg" alt="Image description">
                                        <figcaption>Align left images</figcaption>
                                    </figure>

                                    <figure
                                        class="lg:ltr:float-right lg:rtl:float-left text-center lg:ltr:text-right lg:rtl:text-left ltr:mr-0 rtl:ml-0 ltr:ml-7 rtl:mr-7 mb-7">
                                        <img class="max-w-full w-36 h-auto mx-auto"
                                            src="../src/img/project/project_3.jpg" alt="Image description">
                                        <figcaption>Align right images</figcaption>
                                    </figure>
                                </div>
                                <div class="clear-both"></div>
                                <pre>
                      <code class="language-html" data-lang="html">
                        &lt;figure class="text-center mb-6"&gt;
                          &lt;img class="max-w-full h-auto mx-auto" src="src/img/project/project_1.jpg" alt="Image description"&gt;
                          &lt;figcaption&gt;Align center images&lt;/figcaption&gt;
                        &lt;/figure&gt;

                        &lt;figure class="lg:ltr:float-left lg:rtl:float-right text-center lg:ltr:text-left lg:rtl:text-right ltr:ml-0 rtl:mr-0 ltr:mr-7 rtl:ml-7 mb-7"&gt;
                          &lt;img class="max-w-full h-auto mx-auto" src="src/img/project/project_2.jpg" alt="Image description"&gt;
                          &lt;figcaption&gt;Align left images&lt;/figcaption&gt;
                        &lt;/figure&gt;

                        &lt;figure class="lg:ltr:float-right lg:rtl:float-left text-center lg:ltr:text-right lg:rtl:text-left ltr:mr-0 rtl:ml-0 ltr:ml-7 rtl:mr-7 mb-7"&gt;
                          &lt;img class="max-w-full h-auto mx-auto" src="src/img/project/project_3.jpg" alt="Image description"&gt;
                          &lt;figcaption&gt;Align right images&lt;/figcaption&gt;
                        &lt;/figure&gt;
                      </code>
                    </pre>
                                <p class="my-6">Image also can add style like <code
                                        class="text-pink-700">rounded and border</code></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>