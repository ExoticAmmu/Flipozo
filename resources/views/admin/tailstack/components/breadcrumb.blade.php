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
					    <p class="text-xl font-bold mt-3 mb-5">Breadcrumb</p>
					  </div>                                                 
          	<div class="flex-shrink max-w-full px-4 w-full mb-6">
          		<div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
	              <div class="relative">
	              	<div class="mb-6">
			              <p class="leading-relaxed font-light text-lg mx-auto pb-2">Indicate the current page’s location within a navigational hierarchy that automatically adds separators.</p>
			            </div>
			            
			            <div class="mb-8">
			              <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Example</h2>
			              <p class="mb-4">Use an ordered or unordered list with linked list items to create a minimally styled breadcrumb.</p>
			              <!-- example -->
			              <div class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
			                <nav aria-label="breadcrumb" class="mb-4">
			                  <ol class="flex flex-wrap justify-start bg-transparent text-sm mb-0 space-x-1">
			                    <li>
			                      <a href="breadcrumb.html#" class="hover:text-indigo-500">
			                        Home
			                      </a>
			                    </li>
			                  </ol>
			                </nav>

			                <nav aria-label="breadcrumb" class="mb-4">
			                  <ol class="flex flex-wrap justify-start bg-transparent text-sm mb-0 space-x-1">
			                    <li>
			                      <a href="breadcrumb.html#" class="hover:text-indigo-500">
			                        Home
			                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-1 transform ltr:rotate-0 rtl:rotate-180 inline-block" width="1rem" height="1rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline></svg>
			                      </a>
			                    </li>
			                    <li>
			                      <a href="breadcrumb.html#" class="hover:text-indigo-500">
			                        Category
			                      </a>
			                    </li>
			                  </ol>
			                </nav>

			                <nav aria-label="breadcrumb" class="mb-4">
			                  <ol class="flex flex-wrap justify-start bg-transparent text-sm mb-0 space-x-1">
			                    <li>
			                      <a href="breadcrumb.html#" class="hover:text-indigo-500">
			                        Home
			                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-1 transform ltr:rotate-0 rtl:rotate-180 inline-block" width="1rem" height="1rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline></svg>
			                      </a>
			                    </li>
			                    <li>
			                      <a href="breadcrumb.html#" class="hover:text-indigo-500">
			                        Category
			                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-1 transform ltr:rotate-0 rtl:rotate-180 inline-block" width="1rem" height="1rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline></svg>
			                      </a>
			                    </li>
			                    <li class="hidden md:block text-indigo-500" aria-current="page">Business</li>
			                  </ol>
			                </nav>
			              </div>
			              <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;nav aria-label="breadcrumb" class="mb-4"&gt;
			                    &lt;ol class="flex flex-wrap justify-start bg-transparent text-sm mb-0 space-x-1"&gt;
			                      &lt;li&gt;
			                        &lt;a href="#" class="hover:text-indigo-500"&gt;
			                          Home
			                        &lt;/a&gt;
			                      &lt;/li&gt;
			                    &lt;/ol&gt;
			                  &lt;/nav&gt;

			                  &lt;nav aria-label="breadcrumb" class="mb-4"&gt;
			                    &lt;ol class="flex flex-wrap justify-start bg-transparent text-sm mb-0 space-x-1"&gt;
			                      &lt;li&gt;
			                        &lt;a href="#" class="hover:text-indigo-500"&gt;
			                          Home
			                          &lt;svg xmlns="http://www.w3.org/2000/svg" class="mx-1 transform ltr:rotate-0 rtl:rotate-180 inline-block" width="1rem" height="1rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"&gt;&lt;/polyline&gt;&lt;/svg&gt;
			                        &lt;/a&gt;
			                      &lt;/li&gt;
			                      &lt;li&gt;
			                        &lt;a href="#" class="hover:text-indigo-500"&gt;
			                          Category
			                        &lt;/a&gt;
			                      &lt;/li&gt;
			                    &lt;/ol&gt;
			                  &lt;/nav&gt;

			                  &lt;nav aria-label="breadcrumb" class="mb-4"&gt;
			                    &lt;ol class="flex flex-wrap justify-start bg-transparent text-sm mb-0 space-x-1"&gt;
			                      &lt;li&gt;
			                        &lt;a href="#" class="hover:text-indigo-500"&gt;
			                          Home
			                          &lt;svg xmlns="http://www.w3.org/2000/svg" class="mx-1 transform ltr:rotate-0 rtl:rotate-180 inline-block" width="1rem" height="1rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"&gt;&lt;/polyline&gt;&lt;/svg&gt;
			                        &lt;/a&gt;
			                      &lt;/li&gt;
			                      &lt;li&gt;
			                        &lt;a href="#" class="hover:text-indigo-500"&gt;
			                          Category
			                          &lt;svg xmlns="http://www.w3.org/2000/svg" class="mx-1 transform ltr:rotate-0 rtl:rotate-180 inline-block" width="1rem" height="1rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"&gt;&lt;/polyline&gt;&lt;/svg&gt;
			                        &lt;/a&gt;
			                      &lt;/li&gt;
			                      &lt;li class="hidden md:block text-blue-700" aria-current="page"&gt;Business&lt;/li&gt;
			                    &lt;/ol&gt;
			                  &lt;/nav&gt;
			                </code>
			              </pre>
			            </div>

			            <div class="mb-8">
			              <h2 class="text-lg mb-2 font-semibold text-gray-800 dark:text-gray-300">Dark Breadcrumb</h2>
			              <!-- example -->
			              <div class="bg-blue-700 p-8 border border-gray-200">
			                <nav aria-label="breadcrumb" class="mb-4">
			                  <ol class="flex flex-wrap justify-start bg-transparent text-sm mb-0 space-x-1">
			                    <li>
			                      <a href="breadcrumb.html#" class="text-gray-200 hover:text-white">
			                        Home
			                      </a>
			                    </li>
			                  </ol>
			                </nav>

			                <nav aria-label="breadcrumb" class="mb-4">
			                  <ol class="flex flex-wrap justify-start bg-transparent text-sm mb-0 space-x-1">
			                    <li>
			                      <a href="breadcrumb.html#" class="text-gray-200 hover:text-white">
			                        Home
			                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-1 transform ltr:rotate-0 rtl:rotate-180 inline-block" width="1rem" height="1rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline></svg>
			                      </a>
			                    </li>
			                    <li>
			                      <a href="breadcrumb.html#" class="text-gray-200 hover:text-white">
			                        Category
			                      </a>
			                    </li>
			                  </ol>
			                </nav>

			                <nav aria-label="breadcrumb" class="mb-4">
			                  <ol class="flex flex-wrap justify-start bg-transparent text-sm mb-0 space-x-1">
			                    <li>
			                      <a href="breadcrumb.html#" class="text-gray-200 hover:text-white">
			                        Home
			                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-1 transform ltr:rotate-0 rtl:rotate-180 inline-block" width="1rem" height="1rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline></svg>
			                      </a>
			                    </li>
			                    <li>
			                      <a href="breadcrumb.html#" class="text-gray-200 hover:text-white">
			                        Category
			                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-1 transform ltr:rotate-0 rtl:rotate-180 inline-block" width="1rem" height="1rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline></svg>
			                      </a>
			                    </li>
			                    <li class="hidden md:block text-white" aria-current="page">Business</li>
			                  </ol>
			                </nav>
			              </div>
			              <pre>
			                <code class="language-html" data-lang="html">
			                  &lt;nav aria-label="breadcrumb" class="mb-4"&gt;
			                    &lt;ol class="flex flex-wrap justify-start bg-transparent text-sm mb-0 space-x-1"&gt;
			                      &lt;li&gt;
			                        &lt;a href="#" class="text-gray-200 hover:text-white"&gt;
			                          Home
			                        &lt;/a&gt;
			                      &lt;/li&gt;
			                    &lt;/ol&gt;
			                  &lt;/nav&gt;

			                  &lt;nav aria-label="breadcrumb" class="mb-4"&gt;
			                    &lt;ol class="flex flex-wrap justify-start bg-transparent text-sm mb-0 space-x-1"&gt;
			                      &lt;li&gt;
			                        &lt;a href="#" class="text-gray-200 hover:text-white"&gt;
			                          Home
			                          &lt;svg xmlns="http://www.w3.org/2000/svg" class="mx-1 transform ltr:rotate-0 rtl:rotate-180 inline-block" width="1rem" height="1rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"&gt;&lt;/polyline&gt;&lt;/svg&gt;
			                        &lt;/a&gt;
			                      &lt;/li&gt;
			                      &lt;li&gt;
			                        &lt;a href="#" class="text-gray-200 hover:text-white"&gt;
			                          Category
			                        &lt;/a&gt;
			                      &lt;/li&gt;
			                    &lt;/ol&gt;
			                  &lt;/nav&gt;

			                  &lt;nav aria-label="breadcrumb" class="mb-4"&gt;
			                    &lt;ol class="flex flex-wrap justify-start bg-transparent text-sm mb-0 space-x-1"&gt;
			                      &lt;li&gt;
			                        &lt;a href="#" class="text-gray-200 hover:text-white"&gt;
			                          Home
			                          &lt;svg xmlns="http://www.w3.org/2000/svg" class="mx-1 transform ltr:rotate-0 rtl:rotate-180 inline-block" width="1rem" height="1rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"&gt;&lt;/polyline&gt;&lt;/svg&gt;
			                        &lt;/a&gt;
			                      &lt;/li&gt;
			                      &lt;li&gt;
			                        &lt;a href="#" class="text-gray-200 hover:text-white"&gt;
			                          Category
			                          &lt;svg xmlns="http://www.w3.org/2000/svg" class="mx-1 transform ltr:rotate-0 rtl:rotate-180 inline-block" width="1rem" height="1rem" fill="currentColor" viewBox="0 0 512 512"&gt;&lt;polyline points="184 112 328 256 184 400" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"&gt;&lt;/polyline&gt;&lt;/svg&gt;
			                        &lt;/a&gt;
			                      &lt;/li&gt;
			                      &lt;li class="hidden md:block text-white" aria-current="page"&gt;Business&lt;/li&gt;
			                    &lt;/ol&gt;
			                  &lt;/nav&gt;
			                </code>
			              </pre>
			              <p class="my-4">Edit breadcrumb from left to center replace <code class="text-pink-700">justify-start</code> with <code class="text-pink-700">justify-center</code></p>
			            </div>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</main>

</x-admin-layout>