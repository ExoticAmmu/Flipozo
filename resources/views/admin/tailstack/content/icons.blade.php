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
                <p class="text-xl font-bold mt-3 mb-5 text-gray-800 dark:text-gray-300">Icons</p>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="relative">
                        <div class="mb-6">
                            <p class="leading-relaxed font-light text-lg mx-auto pb-2">By default Taildash uses the
                                svg icon from Bootstrap icons and for Brand logo we use icon from ionicons.</p>
                            <h2 class="text-lg mb-4 font-semibold text-gray-800 dark:text-gray-300">Why do we use
                                the svg icon?</h2>
                            <p class="text-lg mb-b font-light">Actually, we have many reasons, for more details,
                                please read the comparison article between svg vs font icon <a target="_blank" href="https://www.lambdatest.com/blog/its-2019-lets-end-the-debate-on-icon-fonts-vs-svg-icons/" class="text-blue-500">in here</a>.</p>
                            <p class="text-lg mb-6 font-light">But don't worry, for you font icon users we still
                                make fontawesome html comments on every svg icon.</p>
                            <!-- example -->
                            <div class="bg-gray-100 dark:bg-gray-700 dark:border-gray-700 p-8 mb-6 border border-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 mr-2 bi bi-house-door" viewBox="0 0 16 16">
                                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                                </svg><!-- <i class="fas fa-home"></i> -->
                            </div>
                            <pre class="mb-8">
                      <code class="language-html" data-lang="html">
                        &lt;svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 mr-2 bi bi-house-door" viewBox="0 0 16 16"&gt;
                          &lt;path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/&gt;
                        &lt;/svg&gt;&lt;!-- &lt;i class="fas fa-home"&gt;&lt;/i&gt; --&gt;
                      </code>
                    </pre>
                            <h2 class="text-lg mb-3 font-semibold text-gray-800 dark:text-gray-300">Recommendation
                                Svg icon</h2>
                            <a href="https://icons.getbootstrap.com/" target="_blank" class="block text-lg mb-2 font-light text-blue-500">Bootstrap Icons</a>
                            <a href="https://ionic.io/ionicons" target="_blank" class="block text-lg mb-6 font-light text-blue-500">Ionicons</a>

                            <h2 class="text-lg mb-3 font-semibold text-gray-800 dark:text-gray-300">Recommendation
                                Font icon</h2>
                            <a href="https://fontawesome.com/" target="_blank" class="block text-lg mb-2 font-light text-blue-500">Fontawesome</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>