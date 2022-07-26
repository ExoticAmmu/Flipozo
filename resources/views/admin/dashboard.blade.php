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
        <p class="text-xl font-bold mt-3 mb-5">{{ __('Admin Dashboard') }}</p>
      </div>
    </div>
    <div class="flex flex-wrap flex-row">
      <div class="flex-shrink max-w-full w-full order-2 md:order-1 xl:w-2/3">
        <div class="flex flex-wrap flex-row">
          <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-wrap flex-row items-center">
                <div class="flex-shrink max-w-full w-1/2">
                  <h5 class="text-gray-500 mb-1">Total view</h5>
                  <h3 class="text-lg font-bold mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 -mt-1 bi bi-eye" viewBox="0 0 16 16">
                      <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                      <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg> 143.210
                  </h3>
                  <p class="text-sm text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z">
                      </path>
                    </svg>
                    46.2%
                  </p>
                </div>
                <div class="flex-shrink max-w-full w-1/2">
                  <canvas class="max-w-100" id="LineAreaSm"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-wrap flex-row items-center">
                <div class="flex-shrink max-w-full w-1/2">
                  <h5 class="text-gray-500 mb-1">Total likes</h5>
                  <h3 class="text-lg font-bold mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 -mt-1 bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                      <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                    </svg> 24.310
                  </h3>
                  <p class="text-sm text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z">
                      </path>
                    </svg>
                    16.2%
                  </p>
                </div>
                <div class="flex-shrink max-w-full w-1/2">
                  <canvas class="max-w-100" id="BarChartSm"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-wrap flex-row items-center">
                <div class="flex-shrink max-w-full w-1/2">
                  <h5 class="text-gray-500 mb-1">Total Comments</h5>
                  <h3 class="text-lg font-bold mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 -mt-1 bi bi-chat-left-text" viewBox="0 0 16 16">
                      <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                      <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    </svg> 54.350
                  </h3>
                  <p class="text-sm text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z">
                      </path>
                    </svg>
                    11.2%
                  </p>
                </div>
                <div class="flex-shrink max-w-full w-1/2">
                  <canvas class="max-w-100" id="BarComments"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-wrap flex-row items-center">
                <div class="flex-shrink max-w-full w-1/2">
                  <h5 class="text-gray-500 mb-1">Total Share</h5>
                  <h3 class="text-lg font-bold mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 -mt-1 bi bi-share" viewBox="0 0 16 16">
                      <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                    </svg> 9.110
                  </h3>
                  <p class="text-sm text-pink-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-down-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z">
                      </path>
                    </svg>
                    6.2%
                  </p>
                </div>
                <div class="flex-shrink max-w-full w-1/2">
                  <canvas class="max-w-100" id="BarShare"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="flex-shrink max-w-full px-4 w-full mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-row justify-between pb-6">
                <div class="flex flex-col">
                  <h3 class="text-base font-bold">Visitor traffic</h3>
                </div>
                <div x-data="{ open: false }" class="relative">
                  <button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
                      <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                      </path>
                    </svg>
                  </button>
                  <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 border border-gray-200 dark:border-gray-700" style="min-width: 12rem; display: none;">
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index.html#">Daily</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index.html#">Weekly</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index.html#">Monthly</a>
                  </div>
                </div>
              </div>
              <div class="relative">
                <canvas class="max-w-100" id="PageView"></canvas>
              </div>
            </div>
          </div>

          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-col pb-6">
                <h3 class="text-base font-bold">Most search</h3>
              </div>
              <div class="relative w-full text-sm">
                <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="index.html#">Tailwind Css</a>
                <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="index.html#">Taildash</a>
                <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="index.html#">Js</a>
                <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="index.html#">CSS</a>
                <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="index.html#">HTML</a>
                <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="index.html#">UI UX</a>
                <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="index.html#">Web Design</a>
                <a class="inline-block py-1.5 px-3 ltr:mr-2 rtl:ml-2 mb-3 border bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-90 dark:border-gray-700" href="index.html#">Alpine js</a>
              </div>
            </div>
          </div>
          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-col pb-6">
                <h3 class="text-base font-bold">Visitor by Country</h3>
              </div>
              <div class="relative overflow-x-auto">
                <div id="worldmap" class="w-full" style="min-height: 10rem"></div>
              </div>
            </div>
          </div>

          <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg h-full shadow-lg p-6">
              <div class="flex flex-col pb-6">
                <h3 class="text-base font-bold">Status</h3>
              </div>
              <div class="relative" style="margin-top: -18%;margin-bottom:-18%">
                <canvas id="GaugeChart" class="max-w-100"></canvas>
                <div class="absolute ltr:left-1/2 rtl:right-1/2 top-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 translate-y-full">
                  80%</div>
              </div>
              <div class="relative text-center">
                <div class="p-3">
                  <div class="inline-block ltr:mr-2 rtl:ml-2">
                    Articles:
                  </div>
                  <div class="inline-block ltr:mr-2 rtl:ml-2">
                    <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-indigo-500"></span>
                    Published
                  </div>
                  <div class="inline-block ltr:mr-2 rtl:ml-2">
                    <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-pink-500"></span>
                    Draft
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
              <div class="flex flex-col pb-6">
                <h3 class="text-base font-bold">SEO score</h3>
              </div>
              <div class="relative" style="margin-top: -18%;margin-bottom:-18%">
                <canvas id="SeoChart" class="max-w-100"></canvas>
                <div class="absolute ltr:left-1/2 rtl:right-1/2 top-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 translate-y-full">
                  85/100</div>
              </div>
              <div class="relative text-center">
                <div class="p-3">
                  <div class="inline-block ltr:mr-2 rtl:ml-2">
                    <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-pink-500"></span>
                    Bad (0 - 60)
                  </div>
                  <div class="inline-block ltr:mr-2 rtl:ml-2">
                    <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-yellow-500"></span>
                    Medium (60+)
                  </div>
                  <div class="inline-block ltr:mr-2 rtl:ml-2">
                    <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-green-500"></span>
                    Good (80+)
                  </div>
                  <div class="inline-block ltr:mr-2 rtl:ml-2">
                    <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-indigo-500"></span>
                    Excelent (90+)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex-shrink max-w-full px-4 w-full order-1 md:order-2 xl:w-1/3 mb-6">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-6">
          <div class="flex justify-between mb-3">
            <a href="index.html#" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 bi bi-plus-lg" viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z">
                </path>
              </svg>Add Post
            </a>
            <a href="index.html#" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-pink-500 border border-pink-500 hover:text-white hover:bg-pink-600 hover:ring-0 hover:border-pink-600 focus:bg-pink-600 focus:border-pink-600 focus:outline-none focus:ring-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 bi bi-plus-lg" viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z">
                </path>
              </svg><span class="xl:hidden">Add</span> Pages
            </a>
          </div>

          <div class="hidden-header hidden-sort-after">
            <table class="table-sorter table-bordered-bottom w-full text-sm ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
              <thead>
                <tr class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
                  <th>
                    Title
                  </th>
                  <th>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                      <title>Total view</title>
                      <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z">
                      </path>
                      <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                      </path>
                    </svg>
                  </th>
                  <th>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                      <title>Total like</title>
                      <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z">
                      </path>
                    </svg>
                  </th>
                  <th>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                      <title>Total comment</title>
                      <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z">
                      </path>
                      <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z">
                      </path>
                    </svg>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <a href="index.html#" target="_blank" class="hover:text-indigo-500 hover:underline">How to get started with
                      Tailwind Css ?</a>
                  </td>
                  <td>
                    934
                  </td>
                  <td>
                    136
                  </td>
                  <td>
                    121
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="index.html#" target="_blank" class="hover:text-indigo-500 hover:underline">Best Html admin template for
                      Tailwind</a>
                  </td>
                  <td>
                    789
                  </td>
                  <td>
                    132
                  </td>
                  <td>
                    98
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="index.html#" target="_blank" class="hover:text-indigo-500 hover:underline">Introducing Tailwind UI/UX
                      Ecommerce</a>
                  </td>
                  <td>
                    629
                  </td>
                  <td>
                    92
                  </td>
                  <td>
                    87
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="index.html#" target="_blank" class="hover:text-indigo-500 hover:underline">The Next Generation of
                      Tailwind CSS</a>
                  </td>
                  <td>
                    609
                  </td>
                  <td>
                    82
                  </td>
                  <td>
                    83
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="index.html#" target="_blank" class="hover:text-indigo-500 hover:underline">W3C TPAC 2021 Exhibition Space
                      opens for registration</a>
                  </td>
                  <td>
                    600
                  </td>
                  <td>
                    90
                  </td>
                  <td>
                    72
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="index.html#" target="_blank" class="hover:text-indigo-500 hover:underline">Minecraft Wild Update's Deep
                      Cities Turn It Into A Horror Game</a>
                  </td>
                  <td>
                    529
                  </td>
                  <td>
                    72
                  </td>
                  <td>
                    81
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="index.html#" target="_blank" class="hover:text-indigo-500 hover:underline">How Long Is A Day On Mars</a>
                  </td>
                  <td>
                    509
                  </td>
                  <td>
                    62
                  </td>
                  <td>
                    77
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="index.html#" target="_blank" class="hover:text-indigo-500 hover:underline">Why The Moon Sequel Isn't
                      Happening</a>
                  </td>
                  <td>
                    500
                  </td>
                  <td>
                    52
                  </td>
                  <td>
                    57
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="index.html#" target="_blank" class="hover:text-indigo-500 hover:underline">How Far Away Is It From The
                      Sun?</a>
                  </td>
                  <td>
                    489
                  </td>
                  <td>
                    62
                  </td>
                  <td>
                    66
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="index.html#" target="_blank" class="hover:text-indigo-500 hover:underline">Mars is a cold planet filled
                      with rocks & sand</a>
                  </td>
                  <td>
                    489
                  </td>
                  <td>
                    62
                  </td>
                  <td>
                    57
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="index.html#" target="_blank" class="hover:text-indigo-500 hover:underline">Why Mars Has Longer Days Than
                      Earth?</a>
                  </td>
                  <td>
                    329
                  </td>
                  <td>
                    42
                  </td>
                  <td>
                    47
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="index.html#" target="_blank" class="hover:text-indigo-500 hover:underline">Mars Dunes Look Massive In
                      This Stunning Perseverance Photo</a>
                  </td>
                  <td>
                    249
                  </td>
                  <td>
                    32
                  </td>
                  <td>
                    34
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-admin-layout>