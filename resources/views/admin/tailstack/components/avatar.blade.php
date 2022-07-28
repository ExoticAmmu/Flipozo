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
                    <p class="text-xl font-bold mt-3 mb-5">Avatars</p>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                        <div class="relative">
                            <div class="mb-6">
                                <p class="leading-relaxed font-light text-lg mx-auto pb-2">An example of a simple avatar
                                    component for your site.</p>
                            </div>

                            <div class="mb-0">
                                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
                                <p class="mb-4">Examples avatar with size and style</p>
                                <!-- example -->
                                <div class="dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <img class="inline-block w-8 h-8 max-w-full bg-gray-300 dark:bg-gray-800"
                                        src="../src/img/avatar/avatar.png" alt="Image Description">
                                    <img class="inline-block w-12 h-12 max-w-full bg-gray-300 dark:bg-gray-800"
                                        src="../src/img/avatar/avatar.png" alt="Image Description">
                                    <img class="inline-block w-20 h-20 max-w-full bg-gray-300 dark:bg-gray-800"
                                        src="../src/img/avatar/avatar.png" alt="Image Description">
                                    <img class="inline-block w-32 h-32 max-w-full bg-gray-300 dark:bg-gray-800"
                                        src="../src/img/avatar/avatar.png" alt="Image Description">
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;img class="inline-block w-8 h-8 max-w-full bg-gray-300 dark:bg-gray-800" src="src/img/avatar/avatar1.png" alt="Image Description"&gt;
			                  &lt;img class="inline-block w-12 h-12 max-w-full bg-gray-300 dark:bg-gray-800" src="src/img/avatar/avatar1.png" alt="Image Description"&gt;
			                  &lt;img class="inline-block w-20 h-20 max-w-full bg-gray-300 dark:bg-gray-800" src="src/img/avatar/avatar1.png" alt="Image Description"&gt;
			                  &lt;img class="inline-block w-32 h-32 max-w-full bg-gray-300 dark:bg-gray-800" src="src/img/avatar/avatar1.png" alt="Image Description"&gt;
			                </code>
			              </pre>

                                <h2 class="text-lg mb-4 font-semibold text-gray-800">Avatar rounded</h2>
                                <!-- example -->
                                <div class="dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full bg-gray-300 dark:bg-gray-800"
                                        src="../src/img/avatar/avatar.png" alt="Image Description">
                                    <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full bg-gray-300 dark:bg-gray-800"
                                        src="../src/img/avatar/avatar.png" alt="Image Description">
                                    <img class="inline-block rounded-full shadow-xl w-20 h-20 max-w-full bg-gray-300 dark:bg-gray-800"
                                        src="../src/img/avatar/avatar.png" alt="Image Description">
                                    <img class="inline-block rounded-full shadow-xl w-32 h-32 max-w-full bg-gray-300 dark:bg-gray-800"
                                        src="../src/img/avatar/avatar.png" alt="Image Description">
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;img class="inline-block rounded-full shadow-xl w-8 h-8 max-w-full bg-gray-300 dark:bg-gray-800" src="src/img/avatar/avatar.png" alt="Image Description"&gt;
			                  &lt;img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full bg-gray-300 dark:bg-gray-800" src="src/img/avatar/avatar.png" alt="Image Description"&gt;
			                  &lt;img class="inline-block rounded-full shadow-xl w-20 h-20 max-w-full bg-gray-300 dark:bg-gray-800" src="src/img/avatar/avatar.png" alt="Image Description"&gt;
			                  &lt;img class="inline-block rounded-full shadow-xl w-32 h-32 max-w-full bg-gray-300 dark:bg-gray-800" src="src/img/avatar/avatar.png" alt="Image Description"&gt;
			                </code>
			              </pre>

                                <h2 class="text-lg mb-4 font-semibold text-gray-800">Avatar group</h2>
                                <!-- example -->
                                <div class="dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                    <div class="relative">
                                        <a href="avatar.html#">
                                            <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full bg-gray-300 dark:bg-gray-800 ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 transform hover:-translate-y-1"
                                                src="../src/img/avatar/avatar.png" alt="Image Description">
                                        </a>
                                        <a href="avatar.html#">
                                            <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full bg-gray-300 dark:bg-gray-800 ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 transform hover:-translate-y-1"
                                                src="../src/img/avatar/avatar2.png" alt="Image Description">
                                        </a>
                                        <a href="avatar.html#">
                                            <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full bg-gray-300 dark:bg-gray-800 ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 transform hover:-translate-y-1"
                                                src="../src/img/avatar/avatar3.png" alt="Image Description">
                                        </a>
                                    </div>
                                </div>
                                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;div class="relative"&gt;
			                    &lt;a href="#"&gt;
			                      &lt;img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full bg-gray-300 dark:bg-gray-800 ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 transform hover:-translate-y-1" src="src/img/avatar/avatar.png" alt="Image Description"&gt;
			                    &lt;/a&gt;
			                    &lt;a href="#"&gt;
			                      &lt;img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full bg-gray-300 dark:bg-gray-800 ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 transform hover:-translate-y-1" src="src/img/avatar/avatar2.png" alt="Image Description"&gt;
			                    &lt;/a&gt;
			                    &lt;a href="#"&gt;
			                      &lt;img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full bg-gray-300 dark:bg-gray-800 ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 transform hover:-translate-y-1" src="src/img/avatar/avatar3.png" alt="Image Description"&gt;
			                    &lt;/a&gt;
			                  &lt;/div&gt;
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