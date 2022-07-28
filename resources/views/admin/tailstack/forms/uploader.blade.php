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
              <p class="text-xl font-bold mt-3 mb-5">Uploader</p>
            </div>                                                 
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
              <div class="p-8 mb-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                <div class="relative">
                  <p class="text-lg mb-6 font-light">Upload any files with drag and drop features with Dropzone. Dropzone is an easy to use drag'n'drop library. It supports image previews and shows nice progress bars.</p>
                  <!-- Example input -->
                  <div class="p-6 mb-6 border border-gray-200 bg-gray-100 dark:bg-gray-900 dark:border-gray-800 dark:bg-opacity-20">
                    <p class="text-lg font-bold mb-6">Multiple upload</p>
                    <div class="mb-6">
                      <div id="imageUpload" class="dropzone multiple-dropzone mb-6">
                        <div class="dz-message" data-dz-message>
                          <div class="pre-upload flex flex-col justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto text-gray-500 inline-block w-10 h-10 bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"></path>
                              <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"></path>
                            </svg>
                            <div class="py-3"><span>Drag &amp; drop images here</span></div>
                          </div>
                          <div class="pre-upload text-center">
                            <button class="py-1.5 px-3 inline-block text-center rounded leading-normal text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-2 dark:bg-gray-300">Browse file</button>
                          </div>
                          <span class="after-upload">+</span>
                        </div>
                      </div>
                    </div>
                    <p class="text-lg font-bold mb-6">Single upload</p>
                    <div class="mb-6">
                      <div id="imageSingle" class="dropzone single-dropzone mb-6">
                        <div class="dz-message" data-dz-message>
                          <div class="pre-upload flex flex-col justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto text-gray-500 inline-block w-10 h-10 bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"></path>
                              <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"></path>
                            </svg>
                            <div class="py-3"><span>Drag &amp; drop images here</span></div>
                          </div>
                          <div class="pre-upload text-center">
                            <button class="py-1.5 px-3 inline-block text-center rounded leading-normal text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-2 dark:bg-gray-300">Browse file</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <pre class="mb-8">
                    <code class="language-html" data-lang="html">
                    &lt;p class="text-lg font-bold mb-6">Multiple upload&lt;/p&gt;
                    &lt;div class="mb-6"&gt;
                      &lt;div id="imageUpload" class="dropzone multiple-dropzone mb-6"&gt;
                        &lt;div class="dz-message" data-dz-message&gt;
                          &lt;div class="pre-upload flex flex-col justify-center"&gt;
                            &lt;svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto text-gray-500 inline-block w-10 h-10 bi bi-cloud-arrow-up" viewBox="0 0 16 16"&gt;
                              &lt;path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"&gt;&lt;/path&gt;
                              &lt;path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"&gt;&lt;/path&gt;
                            &lt;/svg&gt;
                            &lt;div class="py-3"&gt;&lt;span&gt;Drag &amp; drop images here&lt;/span&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="pre-upload text-center"&gt;
                            &lt;button class="py-1.5 px-3 inline-block text-center rounded leading-normal text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-2 dark:bg-gray-300"&gt;Browse file&lt;/button&gt;
                          &lt;/div&gt;
                          &lt;span class="after-upload"&gt;+&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;p class="text-lg font-bold mb-6"&gt;Single upload&lt;/p&gt;
                    &lt;div class="mb-6"&gt;
                      &lt;div id="imageSingle" class="dropzone single-dropzone mb-6"&gt;
                        &lt;div class="dz-message" data-dz-message&gt;
                          &lt;div class="pre-upload flex flex-col justify-center"&gt;
                            &lt;svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto text-gray-500 inline-block w-10 h-10 bi bi-cloud-arrow-up" viewBox="0 0 16 16"&gt;
                              &lt;path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"&gt;&lt;/path&gt;
                              &lt;path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"&gt;&lt;/path&gt;
                            &lt;/svg&gt;
                            &lt;div class="py-3"&gt;&lt;span&gt;Drag &amp; drop images here&lt;/span&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="pre-upload text-center"&gt;
                            &lt;button class="py-1.5 px-3 inline-block text-center rounded leading-normal text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-2 dark:bg-gray-300"&gt;Browse file&lt;/button&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    </code>
                  </pre>
                  <p class="my-4">Demo config available in <code class="text-pink-700">src/js/vendor.js</code> function <code class="text-pink-700">myUploader();</code></p>
                  <p class="mt-6">More information about Dropzone please read <a target="_blank" href="https://github.com/dropzone/dropzone" class="text-indigo-500">on here</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
</x-admin-layout>