
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
              <p class="text-xl font-bold mt-3 mb-5">Services</p>
            </div>                                                 
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
              <div class="p-12 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                <div class="relative">
                  <!-- section header -->
                  <header class="text-center mx-auto mb-12">
                    <h1 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"><span class="font-light">Our</span> Services</h1>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                  </header><!-- end section header -->

                  <!-- row -->
                  <div class="flex flex-wrap flex-row -mx-4 text-center">
                    <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 xl:w-1/3">
                      <!-- service block -->
                      <div class="px-4 mb-12">
                        <div class="relative w-20 h-20 mx-auto text-indigo-500 p-6 bg-gray-50 rounded-lg border border-gray-100 dark:bg-gray-900 dark:bg-opacity-40 dark:border-gray-700 mb-6">
                          <!-- icon -->
                          <div class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="32" height="32" viewBox="0 0 512 512"><rect stroke="currentColor" x="32" y="64" width="448" height="320" rx="32" ry="32" style="fill:none;stroke-linejoin:round;stroke-width:32px"/><polygon fill="currentColor" points="304 448 296 384 216 384 208 448 304 448" style="stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line stroke="currentColor" x1="368" y1="448" x2="144" y2="448" style="fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path fill="currentColor" d="M32,304v48a32.09,32.09,0,0,0,32,32H448a32.09,32.09,0,0,0,32-32V304Zm224,64a16,16,0,1,1,16-16A16,16,0,0,1,256,368Z"/></svg>
                          </div>
                        </div>
                        <h3 class="text-lg font-semibold dark:text-gray-300 mb-1">Web Development</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div> <!-- end service block -->
                    </div>

                    <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 xl:w-1/3">
                      <!-- service block -->
                      <div class="px-4 mb-12">
                        <div class="relative w-20 h-20 mx-auto text-indigo-500 p-6 bg-gray-50 rounded-lg border border-gray-100 dark:bg-gray-900 dark:bg-opacity-40 dark:border-gray-700 mb-6">
                          <!-- icon -->
                          <div class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="2rem" height="2rem" fill="currentColor" viewBox="0 0 512 512"><rect x="64" y="320" width="48" height="160" rx="8" ry="8" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><rect x="288" y="224" width="48" height="256" rx="8" ry="8" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><rect x="400" y="112" width="48" height="368" rx="8" ry="8" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><rect x="176" y="32" width="48" height="448" rx="8" ry="8" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                          </div>
                        </div>
                        <h3 class="text-lg font-semibold dark:text-gray-300 mb-1">Digital Marketing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div><!-- end service block -->
                    </div>

                    <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 xl:w-1/3">
                      <!-- service block -->
                      <div class="px-4 mb-12">
                        <div class="relative w-20 h-20 mx-auto text-indigo-500 p-6 bg-gray-50 rounded-lg border border-gray-100 dark:bg-gray-900 dark:bg-opacity-40 dark:border-gray-700 mb-6">
                          <!-- icon -->
                          <div class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="2rem" height="2rem" fill="currentColor" viewBox="0 0 512 512"><path d="M256,48C141.13,48,48,141.13,48,256s93.13,208,208,208,208-93.13,208-208S370.87,48,256,48Z" style="fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:32px"/><path d="M256,48c-58.07,0-112.67,93.13-112.67,208S197.93,464,256,464s112.67-93.13,112.67-208S314.07,48,256,48Z" style="fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:32px"/><path d="M117.33,117.33c38.24,27.15,86.38,43.34,138.67,43.34s100.43-16.19,138.67-43.34" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M394.67,394.67c-38.24-27.15-86.38-43.34-138.67-43.34s-100.43,16.19-138.67,43.34" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="48" x2="256" y2="464" style="fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:32px"/><line x1="464" y1="256" x2="48" y2="256" style="fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:32px"/></svg>
                          </div>
                        </div>
                        <h3 class="text-lg font-semibold dark:text-gray-300 mb-1">Search Engine Optimization</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div><!-- end service block -->
                    </div>

                    <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 xl:w-1/3">
                      <!-- service block -->
                      <div class="px-4 mb-12">
                        <div class="relative w-20 h-20 mx-auto text-indigo-500 p-6 bg-gray-50 rounded-lg border border-gray-100 dark:bg-gray-900 dark:bg-opacity-40 dark:border-gray-700 mb-6">
                          <!-- icon -->
                          <div class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="2rem" height="2rem" fill="currentColor" viewBox="0 0 512 512"><rect x="48" y="80" width="416" height="272" rx="32" ry="32" style="fill:none;stroke:currentColor;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="416" x2="256" y2="352" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="256" y1="80" x2="256" y2="48" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="400" y1="464" x2="368" y2="352" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="112" y1="464" x2="144" y2="352" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                          </div>
                        </div>
                        <h3 class="text-lg font-semibold dark:text-gray-300 mb-1">Brand Identity</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div><!-- end service block -->
                    </div>

                    <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 xl:w-1/3">
                      <!-- service block -->
                      <div class="px-4 mb-12">
                        <div class="relative w-20 h-20 mx-auto text-indigo-500 p-6 bg-gray-50 rounded-lg border border-gray-100 dark:bg-gray-900 dark:bg-opacity-40 dark:border-gray-700 mb-6">
                          <!-- icon -->
                          <div class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="2rem" height="2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"/></svg>
                          </div>
                        </div>
                        <h3 class="text-lg font-semibold dark:text-gray-300 mb-1">Social Media Marketing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div><!-- end service block -->
                    </div>

                    <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 xl:w-1/3">
                      <!-- service block -->
                      <div class="px-4 mb-12">
                        <div class="relative w-20 h-20 mx-auto text-indigo-500 p-6 bg-gray-50 rounded-lg border border-gray-100 dark:bg-gray-900 dark:bg-opacity-40 dark:border-gray-700 mb-6">
                          <!-- icon -->
                          <div class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="2rem" height="2rem" viewBox="0 0 512 512"><rect stroke="currentColor" x="128" y="16" width="256" height="480" rx="48" ry="48" style="fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path stroke="currentColor" d="M176,16h24a8,8,0,0,1,8,8h0a16,16,0,0,0,16,16h64a16,16,0,0,0,16-16h0a8,8,0,0,1,8-8h24" style="fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                          </div>
                        </div>
                        <h3 class="text-lg font-semibold dark:text-gray-300 mb-1">Mobile Apps Development</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div><!-- end service block -->
                    </div>
                  </div><!-- end row -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
</x-admin-layout>