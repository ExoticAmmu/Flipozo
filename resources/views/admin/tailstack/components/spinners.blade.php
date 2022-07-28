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
          <p class="text-xl font-bold mt-3 mb-5">Spinners</p>
        </div>
        <div class="flex-shrink max-w-full px-4 w-full mb-6">
          <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
            <div class="relative">
              <div class="mb-6">
                <p class="leading-relaxed font-light text-lg mx-auto pb-2">Indicate the loading state of
                  a component or page with spinners, built entirely with HTML, CSS, and no JavaScript.
                </p>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Example spinner
                  and Ping</h2>
                <!-- example -->
                <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                  <div class="inline-block mr-6">
                    <svg class="animate-spin h-5 w-5 text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                      </path>
                    </svg>
                  </div>

                  <div class="inline-block mr-6">
                    <svg class="animate-spin h-5 w-5 text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                      </path>
                    </svg>
                  </div>

                  <div class="inline-block mr-6">
                    <svg class="animate-spin h-5 w-5 text-yellow-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                      </path>
                    </svg>
                  </div>

                  <div class="inline-block mr-6">
                    <svg class="animate-spin h-5 w-5 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                      </path>
                    </svg>
                  </div>

                  <div class="inline-block mr-6">
                    <span class="relative flex h-5 w-5">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-5 w-5 bg-blue-500"></span>
                    </span>
                  </div>

                  <div class="inline-block mr-6">
                    <span class="relative flex h-5 w-5">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-5 w-5 bg-red-500"></span>
                    </span>
                  </div>

                  <div class="inline-block mr-6">
                    <span class="relative flex h-5 w-5">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-5 w-5 bg-yellow-500"></span>
                    </span>
                  </div>

                  <div class="inline-block mr-6">
                    <span class="relative flex h-5 w-5">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-5 w-5 bg-green-500"></span>
                    </span>
                  </div>
                </div>
                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;div class="inline-block"&gt;
			                    &lt;svg class="animate-spin h-5 w-5 text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"&gt;
			                      &lt;circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"&gt;&lt;/circle&gt;
			                      &lt;path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"&gt;&lt;/path&gt;
			                    &lt;/svg&gt;
			                  &lt;/div&gt;

			                  &lt;div class="inline-block"&gt;
			                    &lt;svg class="animate-spin h-5 w-5 text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"&gt;
			                      &lt;circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"&gt;&lt;/circle&gt;
			                      &lt;path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"&gt;&lt;/path&gt;
			                    &lt;/svg&gt;
			                  &lt;/div&gt;

			                  &lt;div class="inline-block"&gt;
			                    &lt;svg class="animate-spin h-5 w-5 text-yellow-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"&gt;
			                      &lt;circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"&gt;&lt;/circle&gt;
			                      &lt;path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"&gt;&lt;/path&gt;
			                    &lt;/svg&gt;
			                  &lt;/div&gt;

			                  &lt;div class="inline-block"&gt;
			                    &lt;svg class="animate-spin h-5 w-5 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"&gt;
			                      &lt;circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"&gt;&lt;/circle&gt;
			                      &lt;path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"&gt;&lt;/path&gt;
			                    &lt;/svg&gt;
			                  &lt;/div&gt;

			                  &lt;div class="inline-block"&gt;
			                    &lt;span class="relative flex h-5 w-5"&gt;
			                      &lt;span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"&gt;&lt;/span&gt;
			                      &lt;span class="relative inline-flex rounded-full h-5 w-5 bg-blue-500"&gt;&lt;/span&gt;
			                    &lt;/span&gt;
			                  &lt;/div&gt;

			                  &lt;div class="inline-block"&gt;
			                    &lt;span class="relative flex h-5 w-5"&gt;
			                      &lt;span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"&gt;&lt;/span&gt;
			                      &lt;span class="relative inline-flex rounded-full h-5 w-5 bg-red-500"&gt;&lt;/span&gt;
			                    &lt;/span&gt;
			                  &lt;/div&gt;

			                  &lt;div class="inline-block"&gt;
			                    &lt;span class="relative flex h-5 w-5"&gt;
			                      &lt;span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"&gt;&lt;/span&gt;
			                      &lt;span class="relative inline-flex rounded-full h-5 w-5 bg-yellow-500"&gt;&lt;/span&gt;
			                    &lt;/span&gt;
			                  &lt;/div&gt;

			                  &lt;div class="inline-block"&gt;
			                    &lt;span class="relative flex h-5 w-5"&gt;
			                      &lt;span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"&gt;&lt;/span&gt;
			                      &lt;span class="relative inline-flex rounded-full h-5 w-5 bg-green-500"&gt;&lt;/span&gt;
			                    &lt;/span&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
                <p class="my-4"><span class="text-red-700 font-bold uppercase">Note:</span> You can edit
                  spinner size with change <code class="text-pink-700">h-5 w-5</code> classes</p>
              </div>

              <div class="mb-8">
                <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Preloader</h2>
                <p class="mb-4">Preloader is the what you see on some sites before the main content of
                  the web page is loaded.</p>
                <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;!-- preloader --&gt;
			                  &lt;div class="preloader loaded-success fixed inset-0 bg-gray-100"&gt;
			                    &lt;div class="absolute left-1/2 top-1/2 transform -translate-y-1/2"&gt;
			                      &lt;div class="relative mx-auto my-12"&gt;
			                        &lt;div class="inline-block"&gt;
			                          &lt;svg class="animate-spin h-8 w-8 text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"&gt;
			                            &lt;circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"&gt;&lt;/circle&gt;
			                            &lt;path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"&gt;&lt;/path&gt;
			                          &lt;/svg&gt;
			                        &lt;/div&gt;
			                      &lt;/div&gt;
			                    &lt;/div&gt;
			                  &lt;/div&gt;
			                </code>
			              </pre>
                <p class="my-4">Add loader-wrapper just below the <code class="text-pink-700">body</code> tag</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</x-admin-layout>