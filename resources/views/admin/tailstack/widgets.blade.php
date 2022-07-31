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
        <p class="text-xl font-bold mt-3 mb-5">Widgets</p>
      </div>
    </div>
    <div class="flex flex-wrap flex-row">
      <div class="flex-shrink max-w-full w-full">
        <div class="flex flex-wrap flex-row">
          <!-- csm statistic -->
          <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/3 mb-6">
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
                      <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"></path>
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
          <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/3 mb-6">
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
                      <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"></path>
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
          <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/3 mb-6">
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
                      <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"></path>
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

          <!-- visitor traffic -->
          <div class="flex-shrink max-w-full px-4 w-full lg:w-2/3 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-row justify-between pb-6">
                <div class="flex flex-col">
                  <h3 class="text-base font-bold">Visitor traffic</h3>
                </div>
                <div x-data="{ open: false }" class="relative">
                  <button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
                      <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                    </svg>
                  </button>
                  <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width: 12rem; display: none;">
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Daily</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Weekly</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Monthly</a>
                  </div>
                </div>
              </div>
              <div class="relative">
                <canvas class="max-w-100" id="PageView"></canvas>
              </div>
            </div>
          </div>
          <!-- project launch -->
          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-col text-center mb-6">
                <h3>Project Launch Date</h3>
                <h4 class="text-xl font-bold text-gray-800 dark:text-gray-300">28 days left</h4>
                <img class="mx-auto max-w-full w-36 h-36" src="/img/svg/flag.svg">
                <p class="text-sm text-gray-500">September 05, 2025</p>
              </div>
              <table class="table-sm text-xs w-full ltr:text-left rtl:text-right mt-4">
                <thead>
                  <tr class="border-b dark:border-gray-700">
                    <th>
                      Division
                    </th>
                    <th>
                      Progress
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>UI/UX</td>
                    <td>
                      <div class="flex items-center">
                        <span class="ltr:mr-2 rtl:ml-2">78%</span>
                        <div class="relative w-full">
                          <div class="overflow-hidden h-2 text-xs flex rounded bg-indigo-300">
                            <div style="width:78%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500">
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Front End</td>
                    <td>
                      <div class="flex items-center">
                        <span class="ltr:mr-2 rtl:ml-2">65%</span>
                        <div class="relative w-full">
                          <div class="overflow-hidden h-2 text-xs flex rounded bg-pink-300">
                            <div style="width:65%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500">
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Back End</td>
                    <td>
                      <div class="flex items-center">
                        <span class="ltr:mr-2 rtl:ml-2">55%</span>
                        <div class="relative w-full">
                          <div class="overflow-hidden h-2 text-xs flex rounded bg-yellow-300">
                            <div style="width:55%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-yellow-500">
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Development</td>
                    <td>
                      <div class="flex items-center">
                        <span class="ltr:mr-2 rtl:ml-2">40%</span>
                        <div class="relative w-full">
                          <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-400">
                            <div style="width:40%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gray-700">
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- sessions and bounce -->
          <div class="flex-shrink max-w-full px-4 w-full lg:w-2/3 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
              <div x-data="{ tabs: 1 }">
                <ul class="flex flex-col sm:flex-row  text-center sm:text-left bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 rounded-t-lg overflow-hidden">
                  <li @click="tabs = 1" :class="{ '-mb-px': tabs === 1 }" class="mr-1">
                    <a :class="{ '-mb-px bg-white dark:bg-gray-800': tabs === 1 }" class="block sm:inline-block py-4 px-2 md:px-4 font-semibold" href="javascript:;">
                      <div class="block text-center px-6">
                        <h6 class="text-sm font-semibold nowrap block">Sessions</h6>
                        <h5 class="text-xl xl:text-2xl font-bold block">6.3K</h5>
                        <div class="block items-center">
                          <h6 class="text-sm text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
                            </svg>
                            46.2%
                          </h6>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li @click="tabs = 2" :class="{ '-mb-px': tabs === 2 }" class="mr-1">
                    <a :class="{ '-mb-px bg-white dark:bg-gray-800': tabs === 2 }" class="block sm:inline-block py-4 px-2 md:px-4 font-semibold" href="javascript:;">
                      <div class="block text-center px-6">
                        <h6 class="text-sm font-semibold nowrap block">Sessions Duration</h6>
                        <h5 class="text-xl xl:text-2xl font-bold block">32m 20s</h5>
                        <div class="block items-center">
                          <h6 class="text-sm text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
                            </svg>
                            16.2%
                          </h6>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li @click="tabs = 3" :class="{ '-mb-px': tabs === 3 }" class="mr-1">
                    <a :class="{ '-mb-px bg-white dark:bg-gray-800': tabs === 3 }" class="block sm:inline-block py-4 px-2 md:px-4 font-semibold" href="javascript:;">
                      <div class="block text-center px-6">
                        <h6 class="text-sm font-semibold nowrap block">Bounce Rate</h6>
                        <h5 class="text-xl xl:text-2xl font-bold block">50.32%</h5>
                        <div class="block items-center">
                          <h6 class="text-sm text-pink-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-down-short" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                            </svg>
                            46.2%
                          </h6>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="w-full px-6 pt-6 pb-3">
                  <div class="relative">
                    <canvas x-show="tabs === 1" class="max-w-100" id="SesionLine"></canvas>
                    <canvas x-show="tabs === 2" class="max-w-100" id="SesionDuration"></canvas>
                    <canvas x-show="tabs === 3" class="max-w-100" id="BounceLine"></canvas>
                  </div>
                </div>
              </div>
              <div class="flex flex-row justify-between px-6 pb-6">
                <div x-data="{ open: false }" class="relative">
                  <button @click="open = ! open" class="flex border border-gray-300 dark:border-gray-500 px-4 py-2 rounded inline-block text-gray-600 hover:text-gray-600 dark:text-gray-400 dark:hover:text-gray-300 transition-colors duration-200 focus:outline-none hover:outline-none">
                    <span class="pr-2">Last 7 Days</span>
                    <svg class="fill-current transform rotate-180" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                      <path d="M7 10l5 5 5-5z" />
                      <path d="M0 0h24v24H0z" fill="none" />
                    </svg>
                  </button>
                  <div x-show="open" @click.away="open = false" class="origin-bottom-left absolute ltr:left-0 rtl:right-0 bottom-full rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Last 14 Days</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Last 28 Days</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Last 90 Days</a>
                  </div>
                </div>
                <a class="hover:text-indigo-500 self-center" href="widgets.html#">Full report...</a>
              </div>
            </div>
          </div>
          <!-- recent task -->
          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
              <div class="flex flex-row justify-between pb-6">
                <div class="flex flex-col">
                  <h3 class="text-base font-bold">Recent Task</h3>
                </div>
              </div>
              <div class="relative">
                <ul class="task-check h-80 overflow-y-auto scrollbars show mb-6">
                  <li class="relative py-2">
                    <label class="flex items-center">
                      <input type="checkbox" name="checked-1" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-2 rtl:ml-2">
                      <span>Add chart and tables</span>
                    </label>
                  </li>
                  <li class="relative py-2">
                    <label class="flex items-center">
                      <input type="checkbox" name="checked-1" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-2 rtl:ml-2">
                      <span>Add value in chart</span>
                    </label>
                  </li>
                  <li class="relative py-2">
                    <label class="flex items-center">
                      <input type="checkbox" name="checked-1" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-2 rtl:ml-2">
                      <span>Replace footer style</span>
                    </label>
                  </li>
                  <li class="relative py-2">
                    <label class="flex items-center">
                      <input type="checkbox" name="checked-2" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-2 rtl:ml-2" checked="">
                      <span>Create sidebar navigation</span>
                    </label>
                  </li>
                  <li class="relative py-2">
                    <label class="flex items-center">
                      <input type="checkbox" name="checked-3" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-2 rtl:ml-2" checked="">
                      <span>Fix bugs in dropdown</span>
                    </label>
                  </li>
                  <li class="relative py-2">
                    <label class="flex items-center">
                      <input type="checkbox" name="checked-2" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-2 rtl:ml-2" checked="">
                      <span>Create sidebar navigation</span>
                    </label>
                  </li>
                  <li class="relative py-2">
                    <label class="flex items-center">
                      <input type="checkbox" name="checked-3" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-2 rtl:ml-2" checked="">
                      <span>Fix bugs in dropdown</span>
                    </label>
                  </li>
                  <li class="relative py-2">
                    <label class="flex items-center">
                      <input type="checkbox" name="checked-2" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-2 rtl:ml-2" checked="">
                      <span>Create sidebar navigation</span>
                    </label>
                  </li>
                  <li class="relative py-2">
                    <label class="flex items-center">
                      <input type="checkbox" name="checked-3" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-2 rtl:ml-2" checked="">
                      <span>Fix bugs in dropdown</span>
                    </label>
                  </li>
                  <li class="relative py-2">
                    <label class="flex items-center">
                      <input type="checkbox" name="checked-2" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-2 rtl:ml-2" checked="">
                      <span>Create sidebar navigation</span>
                    </label>
                  </li>
                  <li class="relative py-2">
                    <label class="flex items-center">
                      <input type="checkbox" name="checked-3" value="1" class="form-checkbox h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none ltr:mr-2 rtl:ml-2" checked="">
                      <span>Fix bugs in dropdown</span>
                    </label>
                  </li>
                </ul>
                <div class="relative">
                  <button type="button" class="text-sm py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Submit Task</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Visitor by Country -->
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
          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-col pb-6">
                <h3 class="text-base font-bold">Visitor by Country</h3>
              </div>
              <div class="relative overflow-x-auto">
                <canvas class="max-w-100" id="CountryLine"></canvas>
              </div>
            </div>
          </div>

          <!-- Monthly Sales -->
          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
            <!-- visitor -->
            <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
              <div class="flex flex-row justify-between pb-6">
                <div class="flex flex-col">
                  <h3 class="text-base font-bold">Monthly Sales</h3>
                  <span class="text-gray-500 text-sm">Monthly Traffic and Sales</span>
                </div>
                <div x-data="{ open: false }" class="relative">
                  <button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
                      <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                    </svg>
                  </button>
                  <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Daily</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Weekly</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Yearly</a>
                  </div>
                </div>
              </div>
              <div class="relative">
                <canvas class="max-w-100" id="BarChart"></canvas>
              </div>
            </div>
          </div>
          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
            <!-- Paid ads -->
            <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
              <div class="relative">
                <table class="table-sm text-sm ltr:text-left rtl:text-right w-full">
                  <thead>
                    <tr class="border-b dark:border-gray-700">
                      <th>
                        Platform
                      </th>
                      <th>
                        Visitors
                      </th>
                      <th>
                        Ads budget
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        Facebook Ads
                      </td>
                      <td>
                        1,520
                      </td>
                      <td>
                        <div class="flex items-center">
                          <span class="ltr:mr-2 rtl:ml-2">78%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-indigo-300">
                              <div style="width:78%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500">
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Google Ads
                      </td>
                      <td>
                        980
                      </td>
                      <td>
                        <div class="flex items-center">
                          <span class="ltr:mr-2 rtl:ml-2">65%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-pink-300">
                              <div style="width:65%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500">
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Microsoft Ads
                      </td>
                      <td>
                        540
                      </td>
                      <td>
                        <div class="flex items-center">
                          <span class="ltr:mr-2 rtl:ml-2">55%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-yellow-300">
                              <div style="width:55%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-yellow-500">
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Tiktok Ads
                      </td>
                      <td>
                        350
                      </td>
                      <td>
                        <div class="flex items-center">
                          <span class="ltr:mr-2 rtl:ml-2">40%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-400">
                              <div style="width:40%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gray-700">
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- total order -->
          <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/3 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
              <div x-data="{ tooltips: false }" class="pt-6 px-6 relative text-sm font-semibold">
                Total Orders
                <div x-on:mouseover="tooltips = true" x-on:mouseleave="tooltips = false" class="ltr:float-right rtl:float-left text-green-500">
                  +12%
                  <div class="absolute top-auto bottom-full mb-3" x-show.transition.origin.top="tooltips" style="display: none;">
                    <div class="z-40 w-32 p-2 -mb-1 text-sm leading-tight text-white bg-black rounded-lg shadow-lg text-center">
                      Since last month
                    </div>
                    <div class="absolute transform -rotate-45 p-1 w-1 bg-black bottom-0 -mb-2 ml-6"></div>
                  </div>
                </div>
              </div>
              <div class="flex flex-row justify-between px-6 py-4">
                <div class="self-center w-14 h-14 rounded-full text-pink-500 bg-pink-100 dark:bg-pink-900 dark:bg-opacity-40 relative text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-cart3" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                  </svg>
                </div>
                <h2 class="self-center text-3xl">421</h2>
              </div>
              <div class="px-6 pb-6">
                <a class="hover:text-indigo-500 text-sm" href="widgets.html#">View more...</a>
              </div>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg">
              <div x-data="{ tooltips: false }" class="pt-6 px-6 relative text-sm font-semibold">
                New Customers
                <div x-on:mouseover="tooltips = true" x-on:mouseleave="tooltips = false" class="ltr:float-right rtl:float-left text-pink-500">
                  -5%
                  <div class="absolute top-auto bottom-full mb-3" x-show.transition.origin.top="tooltips" style="display: none;">
                    <div class="z-40 w-32 p-2 -mb-1 text-sm leading-tight text-white bg-black rounded-lg shadow-lg text-center">
                      Since last month
                    </div>
                    <div class="absolute transform -rotate-45 p-1 w-1 bg-black bottom-0 -mb-2 ml-6"></div>
                  </div>
                </div>
              </div>
              <div class="flex flex-row justify-between px-6 py-4">
                <div class="self-center w-14 h-14 rounded-full text-green-500 bg-green-100 dark:bg-green-900 dark:bg-opacity-40 relative text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                  </svg>
                </div>
                <h2 class="self-center text-3xl">1.2K</h2>
              </div>
              <div class="px-6 pb-6">
                <a class="hover:text-indigo-500 text-sm" href="widgets.html#">View more...</a>
              </div>
            </div>
          </div>
          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-6">
              <div class="flex flex-col pb-6">
                <h3 class="text-base font-bold">New Followers</h3>
              </div>
              <div class="relative">
                <a href="widgets.html#">
                  <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="/img/avatar/avatar.png" alt="Image Description">
                </a>
                <a href="widgets.html#">
                  <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="/img/avatar/avatar2.png" alt="Image Description">
                </a>
                <a href="widgets.html#">
                  <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="/img/avatar/avatar3.png" alt="Image Description">
                </a>
                <a href="widgets.html#">
                  <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="/img/avatar/avatar4.png" alt="Image Description">
                </a>
                <a href="widgets.html#">
                  <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="/img/avatar/avatar5.png" alt="Image Description">
                </a>

                <!-- more -->
                <a href="widgets.html#">
                  <span class="ltr:ml-5 rtl:mr-5 text-sm text-gray-500 font-semibold self-center">+232 more</span>
                </a>
              </div>
            </div>

            <div class="bg-indigo-500 text-indigo-100 rounded-lg shadow-lg p-6 relative overflow-hidden">
              <!-- circle -->
              <div class="absolute ltr:-right-10 rtl:-left-10 -top-10">
                <div class="bg-white opacity-10 w-36 h-36 rounded-full"></div>
              </div>
              <div class="absolute ltr:-right-8 rtl:-left-8 -top-8">
                <div class="bg-white opacity-20 w-24 h-24 rounded-full"></div>
              </div>

              <div class="flex flex-row justify-between pb-3">
                <div class="flex flex-col">
                  <h3 class="text-base font-bold">My Wallet</h3>
                </div>
              </div>
              <div class="relative text-center">
                <h4 class="font-bold text-2xl text-white mb-3">$250</h4>
                <p class="text-sm mb-3">Total credit</p>
              </div>
            </div>
          </div>
          <!-- seo chart -->
          <div class="flex-shrink max-w-full px-4 w-full sm:w-1/3 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-col pb-6">
                <h3 class="text-base font-bold">SEO score</h3>
              </div>
              <div class="relative" style="margin-top: -18%;margin-bottom:-18%">
                <canvas id="SeoChart" class="max-w-100"></canvas>
                <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 translate-y-full">85/100</div>
              </div>
              <div class="relative text-center">
                <div class="p-3 text-sm">
                  <div class="inline-block ltr:mr-2 rtl:ml-2">
                    <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-pink-500"></span> Bad (0 - 60)
                  </div>
                  <div class="inline-block ltr:mr-2 rtl:ml-2">
                    <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-yellow-500"></span> Medium (60+)
                  </div>
                  <div class="inline-block ltr:mr-2 rtl:ml-2">
                    <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-green-500"></span> Good (80+)
                  </div>
                  <div class="inline-block ltr:mr-2 rtl:ml-2">
                    <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-indigo-500"></span> Excelent (90+)
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- sessions -->
          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 xl:w-1/3 mb-6">
            <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
              <div class="flex flex-row justify-between pb-6">
                <div class="flex flex-col">
                  <h3 class="text-base font-bold">Sessions by Device</h3>
                </div>
                <div x-data="{ open: false }" class="relative">
                  <button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
                      <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                    </svg>
                  </button>
                  <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Daily</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Weekly</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Yearly</a>
                  </div>
                </div>
              </div>
              <div class="relative mx-auto text-center w-2/3 sm:w-1/2 lg:w-full">
                <canvas class="max-w-100" id="DeviceChart"></canvas>
              </div>
              <div class="relative">
                <div class="flex flex-row justify-between my-6">
                  <div class="block text-center px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mx-auto text-indigo-600 w-8 h-8 bi bi-laptop" viewBox="0 0 16 16">
                      <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                    </svg>
                    <h6 class="text-sm font-semibold nowrap block mt-1">Desktop</h6>
                    <h5 class="text-xl font-bold block py-2">74.2%</h5>
                    <div class="block items-center">
                      <h6 class="text-sm text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
                        </svg>
                        16.2%
                      </h6>
                    </div>
                  </div>
                  <div class="block text-center px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mx-auto text-pink-500 w-8 h-8 bi bi-tablet" viewBox="0 0 16 16">
                      <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                      <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    <h6 class="text-sm font-semibold nowrap block mt-1">Tabs</h6>
                    <h5 class="text-xl font-bold block py-2">8.3%</h5>
                    <div class="block items-center">
                      <h6 class="text-sm text-pink-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-down-short" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                        </svg>
                        8.2%
                      </h6>
                    </div>
                  </div>
                  <div class="block text-center px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mx-auto text-green-500 w-8 h-8 bi bi-phone" viewBox="0 0 16 16">
                      <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                      <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    <h6 class="text-sm font-semibold nowrap block mt-1">Mobile</h6>
                    <h5 class="text-xl font-bold block py-2">17.5%</h5>
                    <div class="block items-center">
                      <h6 class="text-sm text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
                        </svg>
                        5.2%
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 xl:w-1/3 mb-6">
            <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
              <div class="flex flex-row justify-between pb-6">
                <div class="flex flex-col">
                  <h3 class="text-base font-bold">Sessions by Browser</h3>
                </div>
                <div x-data="{ open: false }" class="relative">
                  <button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
                      <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                    </svg>
                  </button>
                  <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Daily</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Weekly</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Yearly</a>
                  </div>
                </div>
              </div>
              <div class="relative mx-auto text-center w-2/3 sm:w-1/2 lg:w-full">
                <canvas class="max-w-100" id="PieChart"></canvas>
              </div>
              <div class="relative">
                <table class="table-sm text-xs w-full ltr:text-left rtl:text-right mt-4">
                  <tbody>
                    <tr>
                      <th>
                        <img class="inline w-4 h4 ltr:mr-2 rtl:ml-2" src="/img/browser/chrome.png">Chrome
                      </th>
                      <td>
                        <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-indigo-600"></span>61%
                      </td>
                      <td>
                        <div class="flex items-center text-green-500">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
                          </svg>
                          <span>3.4%</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <img class="inline w-4 h4 ltr:mr-2 rtl:ml-2" src="/img/browser/firefox.png">Mozilla
                      </th>
                      <td>
                        <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-pink-500"></span>29%
                      </td>
                      <td>
                        <div class="flex items-center text-green-500">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
                          </svg>
                          <span>5.4%</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <img class="inline w-4 h4 ltr:mr-2 rtl:ml-2" src="/img/browser/safari.png">Safari
                      </th>
                      <td>
                        <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-yellow-400"></span>7.5%
                      </td>
                      <td>
                        <div class="flex items-center text-pink-500">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-down-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                          </svg>
                          <span>2.4%</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <img class="inline w-4 h4 ltr:mr-2 rtl:ml-2" src="/img/browser/browser.png">Others
                      </th>
                      <td>
                        <span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-green-500"></span>2.5%
                      </td>
                      <td>
                        <div class="flex items-center text-green-500">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
                          </svg>
                          <span>1.7%</span>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 xl:w-1/3 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-col pb-6">
                <h3 class="text-base font-bold">History</h3>
              </div>
              <div class="relative">
                <ol class="mb-6">
                  <li class="flex mb-2">
                    <div class="relative flex-shrink-0 w-12 text-center">
                      <span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 border-l-2 border-dashed border-gray-200 dark:border-gray-700"></span>
                      <div class="ltr:mr-auto rtl:ml-auto">
                        <div class="flex items-center justify-center text-indigo-500 h-10 w-10 rounded-full border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" fill="currentColor" />
                          </svg>
                        </div>
                      </div>
                    </div>

                    <div class="ltr:ml-4 rtl:mr-4 mb-4">
                      <div class="flex flex-row justify-between pb-2">
                        <div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">
                          Aug 17, 2025 02.21 am
                        </div>
                      </div>
                      <p class="text-sm">Cancelled <span class="font-semibold">"USA Server B"</span></p>
                    </div>
                  </li>
                  <li class="flex mb-2">
                    <div class="relative flex-shrink-0 w-12 text-center">
                      <span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 border-l-2 border-dashed border-gray-200 dark:border-gray-700"></span>
                      <div class="ltr:mr-auto rtl:ml-auto">
                        <div class="flex items-center justify-center text-indigo-500 h-10 w-10 rounded-full border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"></path>
                          </svg>
                        </div>
                      </div>
                    </div>

                    <div class="ltr:ml-4 rtl:mr-4 mb-4">
                      <div class="flex flex-row justify-between pb-2">
                        <div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">
                          Aug 19, 2025 02.21 am
                        </div>
                      </div>
                      <p class="text-sm">Order domain <span class="font-semibold">"Mydomain.com"</span></p>
                    </div>
                  </li>
                  <li class="flex mb-2">
                    <div class="relative flex-shrink-0 w-12 text-center">
                      <span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 border-l-2 border-dashed border-gray-200 dark:border-gray-700"></span>
                      <div class="ltr:mr-auto rtl:ml-auto">
                        <div class="flex items-center justify-center text-indigo-500 h-10 w-10 rounded-full border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"></path>
                          </svg>
                        </div>
                      </div>
                    </div>

                    <div class="ltr:ml-4 rtl:mr-4 mb-4">
                      <div class="flex flex-row justify-between pb-2">
                        <div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">
                          Aug 21, 2025 20.10 pm
                        </div>
                      </div>
                      <p class="text-sm">Order domain <span class="font-semibold">"Bestdomain.com"</span></p>
                    </div>
                  </li>
                  <li class="flex mb-2">
                    <div class="relative flex-shrink-0 w-12 text-center">
                      <span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 border-l-2 border-dashed border-gray-200 dark:border-gray-700"></span>
                      <div class="ltr:mr-auto rtl:ml-auto">
                        <div class="flex items-center justify-center text-indigo-500 h-10 w-10 rounded-full border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hdd-stack" viewBox="0 0 16 16">
                            <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z"></path>
                            <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"></path>
                            <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"></path>
                          </svg>
                        </div>
                      </div>
                    </div>

                    <div class="ltr:ml-4 rtl:mr-4 mb-4">
                      <div class="flex flex-row justify-between pb-2">
                        <div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">
                          Aug 23, 2025 18.34 pm
                        </div>
                      </div>
                      <p class="text-sm">Order Service <span class="font-semibold">"USA Server A"</span></p>
                    </div>
                  </li>
                  <li class="flex mb-2">
                    <div class="relative flex-shrink-0 w-12 text-center">
                      <span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 border-l-2 border-dashed border-gray-200 dark:border-gray-700"></span>
                      <div class="ltr:mr-auto rtl:ml-auto">
                        <div class="flex items-center justify-center text-indigo-500 h-10 w-10 rounded-full border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" fill="currentColor" />
                          </svg>
                        </div>
                      </div>
                    </div>

                    <div class="ltr:ml-4 rtl:mr-4 mb-4">
                      <div class="flex flex-row justify-between pb-2">
                        <div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">
                          Aug 26, 2025 03.21 am
                        </div>
                      </div>
                      <p class="text-sm">Canceled service <span class="font-semibold">"USA Server D"</span></p>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </div>

          <!-- project statistic -->
          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-row justify-between pb-6">
                <div class="flex flex-col">
                  <h3 class="text-base font-bold">Budgets</h3>
                </div>
              </div>
              <div class="relative">
                <canvas class="max-w-100" id="BudgetChart"></canvas>
              </div>
            </div>
          </div>
          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-row justify-between pb-6">
                <div class="flex flex-col">
                  <h3 class="text-base font-bold">Project Statistic</h3>
                </div>
                <div x-data="{ open: false }" class="relative">
                  <button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
                      <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                    </svg>
                  </button>
                  <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Daily</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Weekly</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Yearly</a>
                  </div>
                </div>
              </div>
              <div class="relative">
                <div class="flex">
                  <ul class="p-2 mt-2 space-y-2 w-full">
                    <li class="flex">
                      <div class="inline-flex items-center w-full py-1 px-3 text-sm font-semibold rounded">
                        <span class="self-center w-14 h-14 rounded-full sm:bg-gray-100 dark:sm:bg-gray-900 dark:bg-opacity-20 relative text-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 text-indigo-500 bi bi-cash" viewBox="0 0 16 16">
                            <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                            <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                          </svg>
                        </span>
                        <div class="ltr:ml-6 ltr:pl-2 rtl:mr-6 rtl:pr-2 pt-1 text-base ltr:text-left rtl:text-right">
                          <div class="mb-1 text-gray-800 dark:text-gray-300">Budget</div>
                          <div class="text-gray-500 text-sm hidden sm:block">Total Project Budget</div>
                        </div>
                        <div class="ltr:ml-auto ltr:pl-2 rtl:mr-auto rtl:pr-2 pt-1 text-base text-right">
                          <div class="font-bold text-green-500">$150,000</div>
                        </div>
                      </div>
                    </li>
                    <li class="flex">
                      <div class="inline-flex items-center w-full py-1 px-3 text-sm font-semibold rounded">
                        <span class="self-center w-14 h-14 rounded-full sm:bg-gray-100 dark:sm:bg-gray-900 dark:bg-opacity-20 relative text-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 text-indigo-500 bi bi-list-task" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z" />
                            <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z" />
                            <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z" />
                          </svg>
                        </span>
                        <div class="ltr:ml-6 ltr:pl-2 rtl:mr-6 rtl:pr-2 pt-1 text-base ltr:text-left rtl:text-right">
                          <div class="mb-1 text-gray-800 dark:text-gray-300">Task</div>
                          <div class="text-gray-500 text-sm hidden sm:block">All Task Progress</div>
                        </div>
                        <div class="ltr:ml-auto ltr:pl-2 rtl:mr-auto rtl:pr-2 pt-1 text-base text-right">
                          <div class="font-bold text-green-500">789 Task</div>
                        </div>
                      </div>
                    </li>
                    <li class="flex">
                      <div class="inline-flex items-center w-full py-1 px-3 text-sm font-semibold rounded">
                        <span class="self-center w-14 h-14 rounded-full sm:bg-gray-100 dark:sm:bg-gray-900 dark:bg-opacity-20 relative text-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 text-indigo-500 bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                          </svg>
                        </span>
                        <div class="ltr:ml-6 ltr:pl-2 rtl:mr-6 rtl:pr-2 pt-1 text-base ltr:text-left rtl:text-right">
                          <div class="mb-1 text-gray-800 dark:text-gray-300">Team</div>
                          <div class="text-gray-500 text-sm hidden sm:block">Total Team Member</div>
                        </div>
                        <div class="ltr:ml-auto ltr:pl-2 rtl:mr-auto rtl:pr-2 pt-1 text-base text-right">
                          <div class="font-bold text-green-500">17 Member</div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- pipeline -->
          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
              <div class="flex flex-row justify-between pb-3">
                <div class="flex flex-col">
                  <h3 class="text-base font-bold">Deal Pipeline</h3>
                </div>
                <div x-data="{ open: false }" class="relative">
                  <button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
                      <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                    </svg>
                  </button>
                  <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Daily</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Weekly</a>
                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="widgets.html#">Yearly</a>
                  </div>
                </div>
              </div>
              <div class="relative">
                <canvas class="max-w-100" id="PipelineChart"></canvas>
              </div>
            </div>
          </div>
          <!-- banner -->
          <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg px-8 py-6 relative overflow-hidden">
              <div class="absolute ltr:-right-8 rtl:-left-8 -bottom-8 text-indigo-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="opacity-10 w-36 h-auto bi bi-hdd-stack" viewBox="0 0 16 16">
                  <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z" />
                  <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                  <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                </svg>
              </div>
              <div class="relative">
                <h4 class="font-bold text-gray-800 dark:text-gray-200 text-2xl mb-3">Upgrade your Hosting<br> with Cloud Server!</h4>
                <p class="text-gray-500 mb-6">Very simple to upgrade your hosting package with Cloud Server. Discount <span class="font-semibold">30%</span> for first year subscription.</p>
                <a href="widgets.html#" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Upgrade now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mx-auto p-2">
		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full">
				<p class="text-xl font-bold mt-3 mb-5">CRM</p>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-3">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Monthly Revenue</h3>
						</div>
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
									<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Daily</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Weekly</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Yearly</a>
							</div>
						</div>
					</div>
					<div class="relative">
						<h4 class="font-bold text-2xl text-green-500 mb-3">$4,250</h4>
						<div class="w-full h-4 bg-green-100 rounded-full mt-2">
							<div class="h-full text-center text-xs text-white bg-green-500 rounded-full" style="width:86%">
								<span class="text-xs text-white text-center">86%</span>
							</div>
						</div>
						<p class="text-sm text-gray-500 mt-3">From target $5,000</p>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
				<div class="bg-indigo-500 text-indigo-100 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
					<div class="absolute ltr:-right-8 rtl:-left-8 -bottom-8 text-white">
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="opacity-10 w-36 h-auto bi bi-people" viewBox="0 0 16 16">
							<path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z">
							</path>
						</svg>
					</div>
					<div class="flex flex-row justify-between pb-3">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">New Lead</h3>
						</div>
					</div>
					<div class="flex flex-row justify-between py-3">
						<div class="self-center w-20 h-20 rounded-full bg-indigo-100 text-indigo-500 relative text-center">
							<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-people" viewBox="0 0 16 16">
								<path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z">
								</path>
							</svg>
						</div>
						<h2 class="self-center text-2xl font-bold">202</h2>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
				<div class="bg-pink-500 text-pink-100 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
					<div class="absolute ltr:-right-8 rtl:-left-8 -bottom-8 text-white">
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="opacity-10 w-36 h-auto bi bi-telephone" viewBox="0 0 16 16">
							<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
						</svg>
					</div>
					<div class="flex flex-row justify-between pb-3">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">New Contact</h3>
						</div>
					</div>
					<div class="flex flex-row justify-between py-3">
						<div class="self-center w-20 h-20 rounded-full bg-pink-100 text-pink-500 relative text-center">
							<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-telephone" viewBox="0 0 16 16">
								<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
							</svg>
						</div>
						<h2 class="self-center text-2xl font-bold">163</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-3">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Deal Statistic</h3>
						</div>
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
									<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Latest 30 Days</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Latest 90 Days</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Latest 150 Days</a>
							</div>
						</div>
					</div>
					<div class="relative">
						<canvas class="max-w-100" id="LineArea"></canvas>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-3">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Today Task</h3>
						</div>
					</div>
					<div class="relative">
						<ul class="task-check h-72 overflow-y-auto scrollbars show mb-6">
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-1" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none">
									<span>Send Email to Mr <span class="font-bold">Gabriel</span> at <span class="text-gray-500 text-xs">18.00 pm</span></span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-1" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none">
									<span>Call Mr <span class="font-bold">Theo Davis</span> at <span class="text-gray-500 text-xs">16.00 pm</span></span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-1" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none">
									<span>Meeting with Mr <span class="font-bold">Adreas Rose</span> at <span class="text-gray-500 text-xs">15.00 am</span> in Zoom</span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-2" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Call Mr <span class="font-bold">Toni Anderson</span> at <span class="text-gray-500 text-xs">12.00 am</span></span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-3" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Meeting with Mr <span class="font-bold">John Doe</span> at <span class="text-gray-500 text-xs">12.00 am</span> in Zoom</span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-2" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Call Mr <span class="font-bold">Adreas Rose</span> at <span class="text-gray-500 text-xs">12.00 am</span></span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-3" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Meeting with Mr <span class="font-bold">John Doe</span> at <span class="text-gray-500 text-xs">12.00 am</span> in Zoom</span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-2" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Call Mrs <span class="font-bold">Jenifer Tan</span> at <span class="text-gray-500 text-xs">12.00 am</span></span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-3" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Meeting with Mr <span class="font-bold">John Doe</span> at <span class="text-gray-500 text-xs">12.00 am</span> in Zoom</span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-2" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Call Mr <span class="font-bold">Adreas</span> at <span class="text-gray-500 text-xs">12.00 am</span></span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-3" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Meeting with Mr <span class="font-bold">John Doe</span> at <span class="text-gray-500 text-xs">12.00 am</span> in Zoom</span>
								</label>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-3">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Recent Leads</h3>
						</div>
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
									<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Show 7 user</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Show 20 user</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Show 50 user</a>
							</div>
						</div>
					</div>
					<div class="relative">
						<div class="h-60 overflow-auto scrollbars show">
							<table class="table-bordered-bottom table-sm w-full ltr:text-left rtl:text-right text-sm">
								<thead>
									<tr>
										<th>Client</th>
										<th>Call</th>
										<th>Email</th>
										<th>Meeting</th>
										<th>Scedule</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													John Thomas
												</div>
												<div class="italic text-gray-500 flex-shrink max-w-full w-full">
													One Company Inc
												</div>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="call">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-telephone" viewBox="0 0 16 16">
														<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="send email">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-envelope" viewBox="0 0 16 16">
														<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="Meeting with Zoom">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-camera-video" viewBox="0 0 16 16">
														<path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="Create Scedule">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-calendar-week" viewBox="0 0 16 16">
														<path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
														<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
													</svg>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													Carlos Garcia
												</div>
												<div class="italic text-gray-500 flex-shrink max-w-full w-full">
													Sales Manager
												</div>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="call">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-telephone" viewBox="0 0 16 16">
														<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="send email">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-envelope" viewBox="0 0 16 16">
														<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="Meeting with Zoom">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-camera-video" viewBox="0 0 16 16">
														<path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="Create Scedule">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-calendar-week" viewBox="0 0 16 16">
														<path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
														<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
													</svg>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													Daniel Esteban
												</div>
												<div class="italic text-gray-500 flex-shrink max-w-full w-full">
													Seven Corporate
												</div>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="call">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-telephone" viewBox="0 0 16 16">
														<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="send email">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-envelope" viewBox="0 0 16 16">
														<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="Meeting with Zoom">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-camera-video" viewBox="0 0 16 16">
														<path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="Create Scedule">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-calendar-week" viewBox="0 0 16 16">
														<path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
														<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
													</svg>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													Steven Rey
												</div>
												<div class="italic text-gray-500 flex-shrink max-w-full w-full">
													Lazaza Corporation
												</div>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="call">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-telephone" viewBox="0 0 16 16">
														<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="send email">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-envelope" viewBox="0 0 16 16">
														<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="Meeting with Zoom">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-camera-video" viewBox="0 0 16 16">
														<path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="Create Scedule">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-calendar-week" viewBox="0 0 16 16">
														<path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
														<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
													</svg>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													Roman Davis
												</div>
												<div class="italic text-gray-500 flex-shrink max-w-full w-full">
													Senior Sales
												</div>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="call">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-telephone" viewBox="0 0 16 16">
														<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="send email">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-envelope" viewBox="0 0 16 16">
														<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="Meeting with Zoom">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-camera-video" viewBox="0 0 16 16">
														<path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
													</svg>
												</a>
											</div>
										</td>
										<td>
											<div>
												<a href="index-crm.html#" class="hover:text-indigo-700" title="Create Scedule">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto bi bi-calendar-week" viewBox="0 0 16 16">
														<path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
														<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
													</svg>
												</a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-3">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Deal Pipeline</h3>
						</div>
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
									<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Daily</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Weekly</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Yearly</a>
							</div>
						</div>
					</div>
					<div class="relative">
						<canvas class="max-w-100" id="PipelineChart"></canvas>
					</div>
				</div>
			</div>
		</div>
		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-3">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Email Sent</h3>
						</div>
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
									<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Daily</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Weekly</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Yearly</a>
							</div>
						</div>
					</div>
					<div class="relative mx-auto text-center w-2/3 sm:w-1/2 lg:w-full">
						<canvas class="max-w-100" id="EmailChart"></canvas>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/3">
				<div class="bg-indigo-500 text-indigo-100 rounded-lg shadow-lg p-6 mb-6 relative overflow-hidden">
					<!-- circle -->
					<div class="absolute ltr:-right-10 rtl:-left-10 -top-10">
						<div class="bg-white opacity-10 w-36 h-36 rounded-full"></div>
					</div>
					<div class="absolute ltr:-right-8 rtl:-left-8 -top-8">
						<div class="bg-white opacity-20 w-24 h-24 rounded-full"></div>
					</div>

					<div class="flex flex-row justify-between pb-3">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Won Deals</h3>
						</div>
					</div>
					<div class="relative text-center">
						<h4 class="font-bold text-2xl text-white mb-3">$3,250</h4>
						<p class="text-sm mb-3">This week <span class="font-semibold">(6 Deal)</span></p>
						<div class="w-full h-4 bg-green-100 rounded-full mt-2">
							<div class="h-full text-center text-xs text-white bg-green-500 rounded-full" style="width:60%">
								<span class="text-xs text-white text-center">60%</span>
							</div>
						</div>
						<p class="text-sm mt-3">From target <span class="font-semibold">(10 Deal)</span></p>
					</div>
				</div>

				<div class="bg-pink-500 text-pink-100 rounded-lg shadow-lg p-6 mb-6 relative overflow-hidden">
					<!-- circle -->
					<div class="absolute ltr:-right-10 rtl:-left-10 -top-10">
						<div class="bg-white opacity-10 w-36 h-36 rounded-full"></div>
					</div>
					<div class="absolute ltr:-right-8 rtl:-left-8 -top-8">
						<div class="bg-white opacity-20 w-24 h-24 rounded-full"></div>
					</div>

					<div class="flex flex-row justify-between pb-3">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Lost Deals</h3>
						</div>
					</div>
					<div class="relative text-center">
						<h4 class="font-bold text-2xl text-white mb-3">$1,200</h4>
						<p class="text-sm mb-3">This week lost <span class="font-semibold">(2 Deal)</span></p>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-4">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Schedules</h3>
						</div>
						<div class="relative">
							<a href="calendar.html" class="hover:text-indigo-500" title="All Schedules">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline ltr:mr-1 rtl:ml-1 bi bi-calendar2" viewBox="0 0 16 16">
									<path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
									<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
								</svg>
							</a>
						</div>
					</div>
					<div class="relative">
						<ol class="h-72 overflow-y-auto scrollbars show mb-6">
							<li class="flex mb-2">
								<div class="relative flex-shrink-0 w-12 text-center">
									<span class="absolute ltr:left-1/2 ltr:-ml-1 top-10 -bottom-4 ltr:border-l-2 rtl:right-1/2 rtl:-mr-1 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
									<div class="ltr:mr-auto rtl:ml-auto">
										<img src="/img/avatar/avatar2.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
									</div>
								</div>

								<div class="ltr:ml-4 rtl:mr-4 mb-4">
									<div class="flex flex-row justify-between pb-2">
										<div class="text-xs text-gray-500 self-center mr-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline ltr:mr-1 rtl:ml-1 bi bi-calendar2" viewBox="0 0 16 16">
												<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
												<path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
											</svg>
											Aug 17, 2025 02.21 am
										</div>
									</div>
									<p class="text-sm">Meeting with <span class="font-semibold">"Mr Daniel"</span>
									</p>
								</div>
							</li>
							<li class="flex mb-2">
								<div class="relative flex-shrink-0 w-12 text-center">
									<span class="absolute ltr:left-1/2 ltr:-ml-1 top-10 -bottom-4 ltr:border-l-2 rtl:right-1/2 rtl:-mr-1 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
									<div class="ltr:mr-auto rtl:ml-auto">
										<img src="/img/avatar/avatar3.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
									</div>
								</div>

								<div class="ltr:ml-4 rtl:mr-4 mb-4">
									<div class="flex flex-row justify-between pb-2">
										<div class="text-xs text-gray-500 self-center mr-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline ltr:mr-1 rtl:ml-1 bi bi-calendar2" viewBox="0 0 16 16">
												<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
												<path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
											</svg>
											Aug 19, 2025 02.21 am
										</div>
									</div>
									<p class="text-sm">Meeting with <span class="font-semibold">"Mr Davin"</span>
									</p>
								</div>
							</li>
							<li class="flex mb-2">
								<div class="relative flex-shrink-0 w-12 text-center">
									<span class="absolute ltr:left-1/2 ltr:-ml-1 top-10 -bottom-4 ltr:border-l-2 rtl:right-1/2 rtl:-mr-1 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
									<div class="ltr:mr-auto rtl:ml-auto">
										<img src="/img/avatar/avatar4.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
									</div>
								</div>

								<div class="ltr:ml-4 rtl:mr-4 mb-4">
									<div class="flex flex-row justify-between pb-2">
										<div class="text-xs text-gray-500 self-center mr-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline ltr:mr-1 rtl:ml-1 bi bi-calendar2" viewBox="0 0 16 16">
												<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
												<path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
											</svg>
											Aug 21, 2025 20.10 pm
										</div>
									</div>
									<p class="text-sm">Meeting with <span class="font-semibold">"One Corporate
											Team"</span></p>
								</div>
							</li>
							<li class="flex mb-2">
								<div class="relative flex-shrink-0 w-12 text-center">
									<span class="absolute ltr:left-1/2 ltr:-ml-1 top-10 -bottom-4 ltr:border-l-2 rtl:right-1/2 rtl:-mr-1 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
									<div class="ltr:mr-auto rtl:ml-auto">
										<img src="/img/avatar/avatar.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
									</div>
								</div>

								<div class="ltr:ml-4 rtl:mr-4 mb-4">
									<div class="flex flex-row justify-between pb-2">
										<div class="text-xs text-gray-500 self-center mr-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline ltr:mr-1 rtl:ml-1 bi bi-calendar2" viewBox="0 0 16 16">
												<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
												<path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
											</svg>
											Aug 23, 2025 18.34 pm
										</div>
									</div>
									<p class="text-sm">Meeting with <span class="font-semibold">"Mr John Doe"</span>
									</p>
								</div>
							</li>
							<li class="flex mb-2">
								<div class="relative flex-shrink-0 w-12 text-center">
									<span class="absolute ltr:left-1/2 ltr:-ml-1 top-10 -bottom-4 ltr:border-l-2 rtl:right-1/2 rtl:-mr-1 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
									<div class="ltr:mr-auto rtl:ml-auto">
										<img src="/img/avatar/avatar6.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
									</div>
								</div>

								<div class="ltr:ml-4 rtl:mr-4 mb-4">
									<div class="flex flex-row justify-between pb-2">
										<div class="text-xs text-gray-500 self-center mr-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline ltr:mr-1 rtl:ml-1 bi bi-calendar2" viewBox="0 0 16 16">
												<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
												<path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
											</svg>
											Aug 26, 2025 03.21 am
										</div>
									</div>
									<p class="text-sm">Meeting with <span class="font-semibold">"Mr Patrick"</span>
									</p>
								</div>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-3">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Leaderboard</h3>
						</div>
					</div>
					<div class="relative">
						<div class="overflow-x-auto">
							<table class="table-bordered-bottom table-sm w-full ltr:text-left rtl:text-right text-sm">
								<thead>
									<tr>
										<th>
											Rank
										</th>
										<th>
											User
										</th>
										<th>
											Lead
										</th>
										<th>
											Deal
										</th>
										<th>
											Task
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div>#1</div>
										</td>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													John Thomas
												</div>
												<div class="italic text-gray-500 flex-shrink max-w-full w-full">
													Senior Sales
												</div>
											</div>
										</td>
										<td>
											<div>139</div>
										</td>
										<td>
											<div>101</div>
										</td>
										<td>
											<div>156</div>
										</td>
									</tr>
									<tr>
										<td>
											<div>#2</div>
										</td>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													Carlos Garcia
												</div>
												<div class="italic text-gray-500 flex-shrink max-w-full w-full">
													Senior Sales
												</div>
											</div>
										</td>
										<td>
											<div>122</div>
										</td>
										<td>
											<div>96</div>
										</td>
										<td>
											<div>132</div>
										</td>
									</tr>
									<tr>
										<td>
											<div>#3</div>
										</td>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													Daniel Esteban
												</div>
												<div class="italic text-gray-500 flex-shrink max-w-full w-full">
													Senior Sales
												</div>
											</div>
										</td>
										<td>
											<div>123</div>
										</td>
										<td>
											<div>92</div>
										</td>
										<td>
											<div>146</div>
										</td>
									</tr>
									<tr>
										<td>
											<div>#4</div>
										</td>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													Steven Rey
												</div>
												<div class="italic text-gray-500 flex-shrink max-w-full w-full">
													Senior Sales
												</div>
											</div>
										</td>
										<td>
											<div>110</div>
										</td>
										<td>
											<div>84</div>
										</td>
										<td>
											<div>106</div>
										</td>
									</tr>
									<tr>
										<td>
											<div>#5</div>
										</td>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													Roman Davis
												</div>
												<div class="italic text-gray-500 flex-shrink max-w-full w-full">
													Senior Sales
												</div>
											</div>
										</td>
										<td>
											<div>111</div>
										</td>
										<td>
											<div>79</div>
										</td>
										<td>
											<div>98</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-3">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Campaigns</h3>
						</div>
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
									<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Daily</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Weekly</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-crm.html#">Yearly</a>
							</div>
						</div>
					</div>
					<div class="relative">
						<div class="overflow-x-auto">
							<table class="table-bordered-bottom table-sm w-full ltr:text-left rtl:text-right text-sm">
								<thead>
									<tr>
										<th>
											Platform
										</th>
										<th>
											Spend
										</th>
										<th>
											CTR
										</th>
										<th>
											CPA
										</th>
										<th>
											Lead
										</th>
										<th>
											Action
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="text-sm leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 ltr:mr-1 rtl:ml-1 bi bi-facebook text-indigo-500" viewBox="0 0 16 16">
														<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
													</svg>
													Facebook Ads
												</div>
											</div>
										</td>
										<td>
											<div>$5,400</div>
										</td>
										<td>
											<div>43%</div>
										</td>
										<td>
											<div>$12.5</div>
										</td>
										<td>
											<div>350</div>
										</td>
										<td class="text-center">
											<a href="index-crm.html#" class="py-2 px-3 text-center mb-3 inline-block text-center mb-3 rounded leading-5 text-indigo-500 bg-transparent border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-800 focus:outline-none focus:ring-0">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
													<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
													<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
												</svg>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block ltr:mr-1 rtl:ml-1 w-4 h-4 bi bi-google text-red-400" viewBox="0 0 16 16">
														<path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
													</svg>
													Google Ads
												</div>
											</div>
										</td>
										<td>
											<div>$4,560</div>
										</td>
										<td>
											<div>23%</div>
										</td>
										<td>
											<div>$10.5</div>
										</td>
										<td>
											<div>250</div>
										</td>
										<td class="text-center">
											<a href="index-crm.html#" class="py-2 px-3 text-center mb-3 inline-block text-center mb-3 rounded leading-5 text-indigo-500 bg-transparent border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-800 focus:outline-none focus:ring-0">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
													<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
													<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
												</svg>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													<svg id="logo-microsoft" fill="currentColor" class="ionicon w-4 h-4 ltr:mr-1 rtl:ml-1 inline-block text-indigo-400" viewBox="0 0 512 512">
														<title>Logo Microsoft</title>
														<path d="M31.87 30.58H244.7v212.81H31.87zM266.89 30.58H479.7v212.81H266.89zM31.87 265.61H244.7v212.8H31.87zM266.89 265.61H479.7v212.8H266.89z">
														</path>
													</svg>
													Microsoft Ads
												</div>
											</div>
										</td>
										<td>
											<div>$2,400</div>
										</td>
										<td>
											<div>33%</div>
										</td>
										<td>
											<div>$16.5</div>
										</td>
										<td>
											<div>150</div>
										</td>
										<td class="text-center">
											<a href="index-crm.html#" class="py-2 px-3 text-center mb-3 inline-block text-center mb-3 rounded leading-5 text-indigo-500 bg-transparent border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-800 focus:outline-none focus:ring-0">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
													<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
													<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
												</svg>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="font-bold text-gray-900 dark:text-gray-300 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													<svg id="logo-tiktok" fill="currentColor" class="ionicon inline-block w-4 h-4 ltr:mr-1 rtl:ml-1" viewBox="0 0 512 512">
														<title>Logo Tiktok</title>
														<path d="M412.19 118.66a109.27 109.27 0 01-9.45-5.5 132.87 132.87 0 01-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14 23.9 350 16 350.13 16h-82.44v318.78c0 4.28 0 8.51-.18 12.69 0 .52-.05 1-.08 1.56 0 .23 0 .47-.05.71v.18a70 70 0 01-35.22 55.56 68.8 68.8 0 01-34.11 9c-38.41 0-69.54-31.32-69.54-70s31.13-70 69.54-70a68.9 68.9 0 0121.41 3.39l.1-83.94a153.14 153.14 0 00-118 34.52 161.79 161.79 0 00-35.3 43.53c-3.48 6-16.61 30.11-18.2 69.24-1 22.21 5.67 45.22 8.85 54.73v.2c2 5.6 9.75 24.71 22.38 40.82A167.53 167.53 0 00115 470.66v-.2l.2.2c39.91 27.12 84.16 25.34 84.16 25.34 7.66-.31 33.32 0 62.46-13.81 32.32-15.31 50.72-38.12 50.72-38.12a158.46 158.46 0 0027.64-45.93c7.46-19.61 9.95-43.13 9.95-52.53V176.49c1 .6 14.32 9.41 14.32 9.41s19.19 12.3 49.13 20.31c21.48 5.7 50.42 6.9 50.42 6.9v-81.84c-10.14 1.1-30.73-2.1-51.81-12.61z">
														</path>
													</svg>
													Tiktok Ads
												</div>
											</div>
										</td>
										<td>
											<div>$5,400</div>
										</td>
										<td>
											<div>53%</div>
										</td>
										<td>
											<div>$22.5</div>
										</td>
										<td>
											<div>120</div>
										</td>
										<td class="text-center">
											<a href="index-crm.html#" class="py-2 px-3 text-center mb-3 inline-block text-center mb-3 rounded leading-5 text-indigo-500 bg-transparent border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-800 focus:outline-none focus:ring-0">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
													<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
													<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
												</svg>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <div class="mx-auto p-2">
		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full">
				<p class="text-xl font-bold mt-3 mb-5">Projects</p>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-col text-center mb-6">
						<h3>Project Launch Date</h3>
						<h4 class="text-xl font-bold text-gray-800 dark:text-gray-300">28 days left</h4>
						<img class="mx-auto max-w-full w-36 h-36" src="/img/svg/flag.svg">
						<p class="text-sm text-gray-500">September 05, 2025</p>
					</div>
					<table class="table-sm text-xs w-full ltr:text-left rtl:text-right mt-4">
						<thead>
							<tr class="border-b dark:border-gray-700">
								<th>
									Division
								</th>
								<th>
									Progress
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>UI/UX</td>
								<td>
									<div class="flex items-center">
										<span class="ltr:mr-2 rtl:ml-2">78%</span>
										<div class="relative w-full">
											<div class="overflow-hidden h-2 text-xs flex rounded bg-indigo-300">
												<div style="width:78%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500">
												</div>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Front End</td>
								<td>
									<div class="flex items-center">
										<span class="ltr:mr-2 rtl:ml-2">65%</span>
										<div class="relative w-full">
											<div class="overflow-hidden h-2 text-xs flex rounded bg-pink-300">
												<div style="width:65%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500">
												</div>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Back End</td>
								<td>
									<div class="flex items-center">
										<span class="ltr:mr-2 rtl:ml-2">55%</span>
										<div class="relative w-full">
											<div class="overflow-hidden h-2 text-xs flex rounded bg-yellow-300">
												<div style="width:55%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-yellow-500">
												</div>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Development</td>
								<td>
									<div class="flex items-center">
										<span class="ltr:mr-2 rtl:ml-2">40%</span>
										<div class="relative w-full">
											<div class="overflow-hidden h-2 text-xs flex rounded bg-gray-400">
												<div style="width:40%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gray-700">
												</div>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-2/3 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-3">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Your Productivity</h3>
						</div>
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
									<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-projects.html#">Daily</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-projects.html#">Weekly</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-projects.html#">Yearly</a>
							</div>
						</div>
					</div>
					<div class="flex flex-col mb-3">
						<h3 class="mb-1">Welcome, <span class="font-bold text-gray-800 dark:text-gray-300">Ari Budin</span></h3>
						<p class="text-base">You have <span class="font-semibold text-pink-500">3 task</span> to finish all task today. Your already completed <span class="font-semibold text-green-500">76%</span> task. Your perform is <span class="font-semibold text-green-500">Very good</span>.</p>
					</div>
					<canvas class="max-w-100" id="ProductifityLine"></canvas>
				</div>
			</div>
		</div>
		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-6">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Recent Task</h3>
						</div>
					</div>
					<div class="relative">
						<ul class="task-check h-80 overflow-y-auto scrollbars show mb-6">
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-1" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none">
									<span>Add chart and tables</span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-1" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none">
									<span>Add value in chart</span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-1" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none">
									<span>Replace footer style</span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-2" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Create sidebar navigation</span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-3" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Fix bugs in dropdown</span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-2" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Create sidebar navigation</span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-3" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Fix bugs in dropdown</span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-2" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Create sidebar navigation</span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-3" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Fix bugs in dropdown</span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-2" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Create sidebar navigation</span>
								</label>
							</li>
							<li class="relative py-2">
								<label class="flex items-center">
									<input type="checkbox" name="checked-3" value="1" class="form-checkbox ltr:mr-2 rtl:ml-2 h-5 w-5 text-indigo-500 dark:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded focus:outline-none" checked="">
									<span>Fix bugs in dropdown</span>
								</label>
							</li>
						</ul>
						<div class="relative">
							<button type="button" class="text-sm py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Submit Task</button>
						</div>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
				<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div class="flex flex-row justify-between pb-6">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Team Progress</h3>
						</div>
					</div>
					<div class="relative mx-auto text-center w-2/3 sm:w-1/2 lg:w-full">
						<canvas class="max-w-100" id="TeamChart"></canvas>
						<p class="text-2xl font-bold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">74%</p>
					</div>
					<div class="relative">
						<div class="flex flex-row justify-between my-6">
							<div class="block text-center px-2">
								<h6 class="text-sm font-semibold nowrap block mt-1">Complete</h6>
								<h5 class="text-xl text-green-500 font-bold block py-2">74.2%</h5>
							</div>
							<div class="block text-center px-2">
								<h6 class="text-sm font-semibold nowrap block mt-1">In Progress</h6>
								<h5 class="text-xl text-indigo-500 font-bold block py-2">8.3%</h5>
							</div>
							<div class="block text-center px-2">
								<h6 class="text-sm font-semibold nowrap block mt-1">Not Finished</h6>
								<h5 class="text-xl text-pink-500 font-bold block py-2">17.5%</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-6">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Recent Actifities</h3>
						</div>
					</div>
					<div class="relative">
						<ol class="h-96 overflow-y-auto scrollbars show mb-6">
							<li class="flex">
								<div class="relative flex-shrink-0 w-12 text-center">
									<span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
									<div class="ltr:mr-auto rtl:ml-auto">
										<img src="/img/avatar/avatar2.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700">
									</div>
								</div>

								<div class="ltr:ml-4 rtl:mr-4 mb-4">
									<div class="flex flex-row justify-between pb-2">
										<div class="flex flex-col self-center">
											<h3 class="font-semibold text-gray-800 dark:text-gray-300">Daniel</h3>
										</div>
										<div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">Aug 7, 02.21 am</div>
									</div>
									<p class="text-sm">Assigned Task <span class="italic">"Redesign Homepage"</span></p>
								</div>
							</li>
							<li class="flex">
								<div class="relative flex-shrink-0 w-12 text-center">
									<span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
									<div class="ltr:mr-auto rtl:ml-auto">
										<img src="/img/avatar/avatar3.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700">
									</div>
								</div>

								<div class="ltr:ml-4 rtl:mr-4 mb-4">
									<div class="flex flex-row justify-between pb-2">
										<div class="flex flex-col self-center">
											<h3 class="font-semibold text-gray-800 dark:text-gray-300">Carlos</h3>
										</div>
										<div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">Aug 6, 02.21 am</div>
									</div>
									<p class="text-sm">Completed Task <span class="italic">"Fix Javascript bug"</span></p>
								</div>
							</li>
							<li class="flex">
								<div class="relative flex-shrink-0 w-12 text-center">
									<span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
									<div class="ltr:mr-auto rtl:ml-auto">
										<img src="/img/avatar/avatar4.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700">
									</div>
								</div>

								<div class="ltr:ml-4 rtl:mr-4 mb-4">
									<div class="flex flex-row justify-between pb-2">
										<div class="flex flex-col self-center">
											<h3 class="font-semibold text-gray-800 dark:text-gray-300">Steven</h3>
										</div>
										<div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">Aug 6, 20.10 pm</div>
									</div>
									<p class="text-sm">Completed Task <span class="italic">"Create dropdown"</span></p>
								</div>
							</li>
							<li class="flex">
								<div class="relative flex-shrink-0 w-12 text-center">
									<span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
									<div class="ltr:mr-auto rtl:ml-auto">
										<img src="/img/avatar/avatar.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700">
									</div>
								</div>

								<div class="ltr:ml-4 rtl:mr-4 mb-4">
									<div class="flex flex-row justify-between pb-2">
										<div class="flex flex-col self-center">
											<h3 class="font-semibold text-gray-800 dark:text-gray-300">Roman</h3>
										</div>
										<div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">Aug 6, 18.34 pm</div>
									</div>
									<p class="text-sm">Completed Task <span class="italic">"Add Tooltip and modal"</span></p>
								</div>
							</li>
							<li class="flex">
								<div class="relative flex-shrink-0 w-12 text-center">
									<span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
									<div class="ltr:mr-auto rtl:ml-auto">
										<img src="/img/avatar/avatar6.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700">
									</div>
								</div>

								<div class="ltr:ml-4 rtl:mr-4 mb-4">
									<div class="flex flex-row justify-between pb-2">
										<div class="flex flex-col self-center">
											<h3 class="font-semibold text-gray-800 dark:text-gray-300">John</h3>
										</div>
										<div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">Aug 6, 03.21 am</div>
									</div>
									<p class="text-sm">Completed Task <span class="italic">"Redesign About page"</span></p>
								</div>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-6">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Leaderboard</h3>
						</div>
					</div>
					<div class="relative">
						<div class="overflow-x-auto">
							<table class="table-bordered-bottom table-sm w-full text-sm ltr:text-left rtl:text-right">
								<thead>
									<tr>
										<th>Rank</th>
										<th>Users</th>
										<th>Progress</th>
										<th>Task</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="leading-5">#1</div>
										</td>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													John Thomas
												</div>
												<div class="leading-5 text-gray-500 flex-shrink max-w-full w-full">
													UI/UX
												</div>
											</div>
										</td>
										<td>
											<div class="flex items-center">
												<span class="ltr:mr-2 rtl:ml-2">78%</span>
												<div class="relative w-full">
													<div class="overflow-hidden h-2 text-xs flex rounded bg-green-300">
														<div style="width:78%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
														</div>
													</div>
												</div>
											</div>
										</td>
										<td>
											<div class="leading-5">39/50</div>
										</td>
										<td class="px-3 py-4 whitespace-no-wrap text-center leading-5 font-medium">
											<a href="index-projects.html#" class="py-2 px-3 text-center mb-3 inline-block text-center mb-3 rounded leading-5 text-indigo-500 bg-transparent border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
													<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
													<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
												</svg>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="leading-5">#2</div>
										</td>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													Carlos Garcia
												</div>
												<div class="leading-5 text-gray-500 flex-shrink max-w-full w-full">
													Front End
												</div>
											</div>
										</td>
										<td>
											<div class="flex items-center">
												<span class="ltr:mr-2 rtl:ml-2">70%</span>
												<div class="relative w-full">
													<div class="overflow-hidden h-2 text-xs flex rounded bg-indigo-300">
														<div style="width:70%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500">
														</div>
													</div>
												</div>
											</div>
										</td>
										<td>
											<div class="leading-5">35/50</div>
										</td>
										<td class="text-center">
											<a href="index-projects.html#" class="py-2 px-3 text-center mb-3 inline-block text-center mb-3 rounded leading-5 text-indigo-500 bg-transparent border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
													<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
													<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
												</svg>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="leading-5">#3</div>
										</td>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													Daniel Esteban
												</div>
												<div class="leading-5 text-gray-500 flex-shrink max-w-full w-full">
													Back End
												</div>
											</div>
										</td>
										<td>
											<div class="flex items-center">
												<span class="ltr:mr-2 rtl:ml-2">66%</span>
												<div class="relative w-full">
													<div class="overflow-hidden h-2 text-xs flex rounded bg-yellow-300">
														<div style="width:66%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-yellow-500">
														</div>
													</div>
												</div>
											</div>
										</td>
										<td>
											<div class="leading-5">33/50</div>
										</td>
										<td class="text-center">
											<a href="index-projects.html#" class="py-2 px-3 text-center mb-3 inline-block text-center mb-3 rounded leading-5 text-indigo-500 bg-transparent border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
													<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
													<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
												</svg>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="leading-5">#4</div>
										</td>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													Steven Rey
												</div>
												<div class="leading-5 text-gray-500 flex-shrink max-w-full w-full">
													Developer
												</div>
											</div>
										</td>
										<td>
											<div class="flex items-center">
												<span class="ltr:mr-2 rtl:ml-2">58%</span>
												<div class="relative w-full">
													<div class="overflow-hidden h-2 text-xs flex rounded bg-yellow-300">
														<div style="width:58%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-yellow-500">
														</div>
													</div>
												</div>
											</div>
										</td>
										<td>
											<div class="leading-5">29/50</div>
										</td>
										<td class="text-center">
											<a href="index-projects.html#" class="py-2 px-3 text-center mb-3 inline-block text-center mb-3 rounded leading-5 text-indigo-500 bg-transparent border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
													<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
													<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
												</svg>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="leading-5">#5</div>
										</td>
										<td>
											<div class="flex flex-wrap flex-row items-center">
												<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
													Roman Davis
												</div>
												<div class="leading-5 text-gray-500 flex-shrink max-w-full w-full">
													UI/UX
												</div>
											</div>
										</td>
										<td>
											<div class="flex items-center">
												<span class="ltr:mr-2 rtl:ml-2">54%</span>
												<div class="relative w-full">
													<div class="overflow-hidden h-2 text-xs flex rounded bg-pink-300">
														<div style="width:54%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500">
														</div>
													</div>
												</div>
											</div>
										</td>
										<td>
											<div class="leading-5">27/50</div>
										</td>
										<td class="text-center">
											<a href="index-projects.html#" class="py-2 px-3 text-center mb-3 inline-block text-center mb-3 rounded leading-5 text-indigo-500 bg-transparent border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:text-gray-100 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
													<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
													<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
												</svg>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-6">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Latest Project</h3>
						</div>
					</div>
					<div class="relative">
						<div class="overflow-x-auto overflow-y-auto scrollbars show" style="height:26rem">
							<div class="hidden-header hidden-sort-after">
								<table class="table-sorter table-bordered-bottom table-sm w-full text-sm ltr:text-left rtl:text-right">
									<thead>
										<tr>
											<th>Project</th>
											<th>Progress</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="flex flex-wrap flex-row items-center">
													<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
														Tailwindtemplate.net
													</div>
													<div class="leading-5 text-gray-500 flex-shrink max-w-full w-full">
														Redesign Website
													</div>
												</div>
											</td>
											<td>
												<div class="flex items-center">
													<span class="ltr:mr-2 rtl:ml-2">78%</span>
													<div class="relative w-full">
														<div class="overflow-hidden h-2 text-xs flex rounded bg-indigo-300">
															<div style="width:78%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500">
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												<div class="leading-5">In Progress</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="flex flex-wrap flex-row items-center">
													<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
														MyDomain.com
													</div>
													<div class="leading-5 text-gray-500 flex-shrink max-w-full w-full">
														Redesign Website
													</div>
												</div>
											</td>
											<td>
												<div class="flex items-center">
													<span class="ltr:mr-2 rtl:ml-2">100%</span>
													<div class="relative w-full">
														<div class="overflow-hidden h-2 text-xs flex rounded bg-green-300">
															<div style="width:100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												<div class="leading-5">Complete</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="flex flex-wrap flex-row items-center">
													<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
														MyDomain.com
													</div>
													<div class="leading-5 text-gray-500 flex-shrink max-w-full w-full">
														Build Mobile App
													</div>
												</div>
											</td>
											<td>
												<div class="flex items-center">
													<span class="ltr:mr-2 rtl:ml-2">100%</span>
													<div class="relative w-full">
														<div class="overflow-hidden h-2 text-xs flex rounded bg-green-300">
															<div style="width:100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												<div class="leading-5">Complete</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="flex flex-wrap flex-row items-center">
													<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
														MyDomain.com
													</div>
													<div class="leading-5 text-gray-500 flex-shrink max-w-full w-full">
														Redesign Back End
													</div>
												</div>
											</td>
											<td>
												<div class="flex items-center">
													<span class="ltr:mr-2 rtl:ml-2">100%</span>
													<div class="relative w-full">
														<div class="overflow-hidden h-2 text-xs flex rounded bg-green-300">
															<div style="width:100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												<div class="leading-5">Complete</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="flex flex-wrap flex-row items-center">
													<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
														MyDomain.com
													</div>
													<div class="leading-5 text-gray-500 flex-shrink max-w-full w-full">
														Development PWA
													</div>
												</div>
											</td>
											<td>
												<div class="flex items-center">
													<span class="ltr:mr-2 rtl:ml-2">100%</span>
													<div class="relative w-full">
														<div class="overflow-hidden h-2 text-xs flex rounded bg-green-300">
															<div style="width:100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												<div class="leading-5">Complete</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="flex flex-wrap flex-row items-center">
													<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
														MyDomain.com
													</div>
													<div class="leading-5 text-gray-500 flex-shrink max-w-full w-full">
														Redesign Mobile App
													</div>
												</div>
											</td>
											<td>
												<div class="flex items-center">
													<span class="ltr:mr-2 rtl:ml-2">100%</span>
													<div class="relative w-full">
														<div class="overflow-hidden h-2 text-xs flex rounded bg-green-300">
															<div style="width:100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												<div class="leading-5">Complete</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-6">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Budgets</h3>
						</div>
					</div>
					<div class="relative">
						<canvas class="max-w-100" id="BudgetChart"></canvas>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
					<div class="flex flex-row justify-between pb-6">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Project Statistic</h3>
						</div>
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
									<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-projects.html#">Daily</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-projects.html#">Weekly</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-projects.html#">Yearly</a>
							</div>
						</div>
					</div>
					<div class="relative">
						<div class="flex">
							<ul class="p-2 mt-2 space-y-2 w-full">
								<li class="flex">
									<div class="inline-flex items-center w-full py-1 px-3 text-sm font-semibold rounded">
										<span class="self-center w-14 h-14 rounded-full sm:bg-gray-100 dark:sm:bg-gray-900 dark:bg-opacity-20 relative text-center">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 text-indigo-500 bi bi-cash" viewBox="0 0 16 16">
												<path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
												<path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
											</svg>
										</span>
										<div class="ltr:ml-6 ltr:pl-2 rtl:mr-6 rtl:pr-2 pt-1 text-base ltr:text-left rtl:text-right">
											<div class="mb-1 text-gray-800 dark:text-gray-300">Budget</div>
											<div class="text-gray-500 text-sm hidden sm:block">Total Project Budget</div>
										</div>
										<div class="ltr:ml-auto ltr:pl-2 rtl:mr-auto rtl:pr-2 pt-1 text-base ltr:text-right rtl:text-left">
											<div class="font-bold text-green-500">$150,000</div>
										</div>
									</div>
								</li>
								<li class="flex">
									<div class="inline-flex items-center w-full py-1 px-3 text-sm font-semibold rounded">
										<span class="self-center w-14 h-14 rounded-full sm:bg-gray-100 dark:sm:bg-gray-900 dark:bg-opacity-20 relative text-center">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 text-indigo-500 bi bi-list-task" viewBox="0 0 16 16">
												<path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z" />
												<path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z" />
												<path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z" />
											</svg>
										</span>
										<div class="ltr:ml-6 ltr:pl-2 rtl:mr-6 rtl:pr-2 pt-1 text-base ltr:text-left rtl:text-right">
											<div class="mb-1 text-gray-800 dark:text-gray-300">Task</div>
											<div class="text-gray-500 text-sm hidden sm:block">All Task Progress</div>
										</div>
										<div class="ltr:ml-auto ltr:pl-2 rtl:mr-auto rtl:pr-2 pt-1 text-base ltr:text-right rtl:text-left">
											<div class="font-bold text-green-500">789 Task</div>
										</div>
									</div>
								</li>
								<li class="flex">
									<div class="inline-flex items-center w-full py-1 px-3 text-sm font-semibold rounded">
										<span class="self-center w-14 h-14 rounded-full sm:bg-gray-100 dark:sm:bg-gray-900 dark:bg-opacity-20 relative text-center">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 text-indigo-500 bi bi-people-fill" viewBox="0 0 16 16">
												<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
												<path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
												<path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
											</svg>
										</span>
										<div class="ltr:ml-6 ltr:pl-2 rtl:mr-6 rtl:pr-2 pt-1 text-base ltr:text-left rtl:text-right">
											<div class="mb-1 text-gray-800 dark:text-gray-300">Team</div>
											<div class="text-gray-500 text-sm hidden sm:block">Total Team Member</div>
										</div>
										<div class="ltr:ml-auto ltr:pl-2 rtl:mr-auto rtl:pr-2 pt-1 text-base ltr:text-right rtl:text-left">
											<div class="font-bold text-green-500">17 Member</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <div class="mx-auto p-2">
		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full">
				<p class="text-xl font-bold mt-3 mb-5">Analytics</p>
			</div>

			<!-- sessions and bounce -->
			<div class="flex-shrink max-w-full px-4 w-full lg:w-2/3 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div x-data="{ tabs: 1 }">
						<ul class="flex flex-col sm:flex-row  text-center sm:text-left bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 rounded-t-lg overflow-hidden">
							<li @click="tabs = 1" :class="{ '-mb-px': tabs === 1 }" class="ltr:mr-1 rtl:ml-1">
								<a :class="{ '-mb-px bg-white dark:bg-gray-800': tabs === 1 }" class="block sm:inline-block py-4 px-2 md:px-4 font-semibold" href="javascript:;">
									<div class="block text-center px-6">
										<h6 class="text-sm font-semibold nowrap block">Sessions</h6>
										<h5 class="text-xl xl:text-2xl font-bold block">6.3K</h5>
										<div class="block items-center">
											<h6 class="text-sm text-green-500">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
												</svg>
												46.2%
											</h6>
										</div>
									</div>
								</a>
							</li>
							<li @click="tabs = 2" :class="{ '-mb-px': tabs === 2 }" class="ltr:mr-1 rtl:ml-1">
								<a :class="{ '-mb-px bg-white dark:bg-gray-800': tabs === 2 }" class="block sm:inline-block py-4 px-2 md:px-4 font-semibold" href="javascript:;">
									<div class="block text-center px-6">
										<h6 class="text-sm font-semibold nowrap block">Sessions Duration</h6>
										<h5 class="text-xl xl:text-2xl font-bold block">32m 20s</h5>
										<div class="block items-center">
											<h6 class="text-sm text-green-500">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
												</svg>
												16.2%
											</h6>
										</div>
									</div>
								</a>
							</li>
							<li @click="tabs = 3" :class="{ '-mb-px': tabs === 3 }" class="ltr:mr-1 rtl:ml-1">
								<a :class="{ '-mb-px bg-white dark:bg-gray-800': tabs === 3 }" class="block sm:inline-block py-4 px-2 md:px-4 font-semibold" href="javascript:;">
									<div class="block text-center px-6">
										<h6 class="text-sm font-semibold nowrap block">Bounce Rate</h6>
										<h5 class="text-xl xl:text-2xl font-bold block">50.32%</h5>
										<div class="block items-center">
											<h6 class="text-sm text-pink-500">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-down-short" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
												</svg>
												46.2%
											</h6>
										</div>
									</div>
								</a>
							</li>
						</ul>
						<div class="w-full px-6 pt-6 pb-3">
							<div class="relative">
								<canvas x-show="tabs === 1" class="max-w-100" id="SesionLine"></canvas>
								<canvas x-show="tabs === 2" class="max-w-100" id="SesionDuration"></canvas>
								<canvas x-show="tabs === 3" class="max-w-100" id="BounceLine"></canvas>
							</div>
						</div>
					</div>
					<div class="flex flex-row justify-between px-6 pb-6">
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="flex border border-gray-300 dark:border-gray-500 px-4 py-2 rounded inline-block text-gray-600 hover:text-gray-600 dark:text-gray-400 dark:hover:text-gray-300 transition-colors duration-200 focus:outline-none hover:outline-none">
								<span class="pr-2">Last 7 Days</span>
								<svg class="fill-current transform rotate-180" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M7 10l5 5 5-5z" />
									<path d="M0 0h24v24H0z" fill="none" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-bottom-left absolute ltr:left-0 rtl:right-0 bottom-full rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Last 14 Days</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Last 28 Days</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Last 90 Days</a>
							</div>
						</div>
						<a class="hover:text-indigo-500 self-center" href="index-analytics.html#">Full report...</a>
					</div>
				</div>
			</div>

			<!-- users online -->
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div x-data="{ tooltips: false }" class="pt-6 px-6 relative">
						Users online right now <span class="ltr:float-right rtl:float-left w-2 h-2 rounded-full bg-green-500 mt-1 animate-pulse"></span>
					</div>
					<div class="flex flex-row justify-between p-6">
						<div class="self-center w-14 h-14 rounded-full bg-indigo-50 text-indigo-700 dark:bg-gray-900 dark:bg-opacity-20 relative text-center">
							<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-people" viewBox="0 0 16 16">
								<path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
							</svg>
						</div>
						<h2 class="self-center text-3xl">602</h2>
					</div>
					<div class="px-6">
						<div class="relative">
							<table class="table-bordered-bottom table-sm w-full text-sm ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
								<thead>
									<tr>
										<th>
											Active Pages
										</th>
										<th class="ltr:text-right rtl:text-left">
											User Count
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<a href="index-analytics.html#" target="_blank" class="hover:text-indigo-500 hover:underline">/</a>
										</td>
										<td class="ltr:text-right rtl:text-left">
											88
										</td>
									</tr>
									<tr>
										<td>
											<a href="index-analytics.html#" target="_blank" class="hover:text-indigo-500 hover:underline">/tailwind-template/</a>
										</td>
										<td class="ltr:text-right rtl:text-left">
											45
										</td>
									</tr>
									<tr>
										<td>
											<a href="index-analytics.html#" target="_blank" class="hover:text-indigo-500 hover:underline">/tailwind-admin/</a>
										</td>
										<td class="ltr:text-right rtl:text-left">
											32
										</td>
									</tr>
									<tr>
										<td>
											<a href="index-analytics.html#" target="_blank" class="hover:text-indigo-500 hover:underline">/tags/html5/</a>
										</td>
										<td class="ltr:text-right rtl:text-left">
											21
										</td>
									</tr>
									<tr>
										<td>
											<a href="index-analytics.html#" target="_blank" class="hover:text-indigo-500 hover:underline">/tailwind-admin//taildash/</a>
										</td>
										<td class="ltr:text-right rtl:text-left">
											18
										</td>
									</tr>
									<tr>
										<td>
											<a href="index-analytics.html#" target="_blank" class="hover:text-indigo-500 hover:underline">/tags/alpine/</a>
										</td>
										<td class="ltr:text-right rtl:text-left">
											8
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="p-6">
						<a class="hover:text-indigo-500" href="index-analytics.html#">Live report...</a>
					</div>
				</div>
			</div>
		</div>

		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full">
				<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
					<div class="flex flex-wrap flex-row">
						<!-- title -->
						<div class="flex-shrink max-w-full w-full">
							<div class="flex flex-row justify-between pb-6">
								<div class="flex flex-col">
									<h3 class="text-base font-bold">Sessions by Country</h3>
								</div>
								<div x-data="{ open: false }" class="relative">
									<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
										<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
											<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
										</svg>
									</button>
									<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
										<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Daily</a>
										<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Weekly</a>
										<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Yearly</a>
									</div>
								</div>
							</div>
						</div>

						<!-- maps -->
						<div class="flex-shrink max-w-full w-full xl:w-1/2">
							<div class="relative overflow-x-auto">
								<div id="worldmap" class="w-full" style="min-height: 18rem"></div>
							</div>
						</div>

						<!-- country -->
						<div class="flex-shrink max-w-full w-full lg:w-1/2">
							<canvas class="max-w-100" id="CountryLine"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 xl:w-1/3 mb-6">
				<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div class="flex flex-row justify-between pb-6">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Sessions by Device</h3>
						</div>
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
									<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Daily</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Weekly</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Yearly</a>
							</div>
						</div>
					</div>
					<div class="relative mx-auto text-center w-2/3 sm:w-1/2 lg:w-full">
						<canvas class="max-w-100" id="DeviceChart"></canvas>
					</div>
					<div class="relative">
						<div class="flex flex-row justify-between my-6">
							<div class="block text-center px-3">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mx-auto text-indigo-600 w-8 h-8 bi bi-laptop" viewBox="0 0 16 16">
									<path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
								</svg>
								<h6 class="text-sm font-semibold nowrap block mt-1">Desktop</h6>
								<h5 class="text-xl font-bold block py-2">74.2%</h5>
								<div class="block items-center">
									<h6 class="text-sm text-green-500">
										<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
										</svg>
										16.2%
									</h6>
								</div>
							</div>
							<div class="block text-center px-3">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mx-auto text-pink-500 w-8 h-8 bi bi-tablet" viewBox="0 0 16 16">
									<path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
									<path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
								</svg>
								<h6 class="text-sm font-semibold nowrap block mt-1">Tabs</h6>
								<h5 class="text-xl font-bold block py-2">8.3%</h5>
								<div class="block items-center">
									<h6 class="text-sm text-pink-500">
										<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-down-short" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
										</svg>
										8.2%
									</h6>
								</div>
							</div>
							<div class="block text-center px-3">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="mx-auto text-green-500 w-8 h-8 bi bi-phone" viewBox="0 0 16 16">
									<path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
									<path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
								</svg>
								<h6 class="text-sm font-semibold nowrap block mt-1">Mobile</h6>
								<h5 class="text-xl font-bold block py-2">17.5%</h5>
								<div class="block items-center">
									<h6 class="text-sm text-green-500">
										<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
										</svg>
										5.2%
									</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 xl:w-1/3 mb-6">
				<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div class="flex flex-row justify-between pb-6">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Sessions by Browser</h3>
						</div>
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
									<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Daily</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Weekly</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Yearly</a>
							</div>
						</div>
					</div>
					<div class="relative mx-auto text-center w-2/3 sm:w-1/2 lg:w-full">
						<canvas class="max-w-100" id="PieChart"></canvas>
					</div>
					<div class="relative">
						<table class="table-sm text-xs w-full ltr:text-left rtl:text-right mt-4">
							<tbody>
								<tr>
									<th>
										<img class="inline w-4 h4 ltr:mr-2 rtl:ml-2" src="/img/browser/chrome.png">Chrome
									</th>
									<td>
										<span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-indigo-600"></span>61%
									</td>
									<td>
										<div class="flex items-center text-green-500">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
												<path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
											</svg>
											<span>3.4%</span>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<img class="inline w-4 h4 ltr:mr-2 rtl:ml-2" src="/img/browser/firefox.png">Mozilla
									</th>
									<td>
										<span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-pink-500"></span>29%
									</td>
									<td>
										<div class="flex items-center text-green-500">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
												<path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
											</svg>
											<span>5.4%</span>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<img class="inline w-4 h4 ltr:mr-2 rtl:ml-2" src="/img/browser/safari.png">Safari
									</th>
									<td>
										<span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-yellow-400"></span>7.5%
									</td>
									<td>
										<div class="flex items-center text-pink-500">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-down-short" viewBox="0 0 16 16">
												<path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
											</svg>
											<span>2.4%</span>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<img class="inline w-4 h4 ltr:mr-2 rtl:ml-2" src="/img/browser/browser.png">Others
									</th>
									<td>
										<span class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1 rounded-full bg-green-500"></span>2.5%
									</td>
									<td>
										<div class="flex items-center text-green-500">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-arrow-up-short" viewBox="0 0 16 16">
												<path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
											</svg>
											<span>1.7%</span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 xl:w-1/3 mb-6">
				<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div class="flex flex-row justify-between pb-6">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Popular Pages</h3>
						</div>
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
									<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Daily</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Weekly</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Yearly</a>
							</div>
						</div>
					</div>
					<div class="relative">
						<table class="table-sm table-bordered-bottom w-full text-sm ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
							<thead class="thead-light">
								<tr>
									<th>
										Page
									</th>
									<th class="ltr:text-right rtl:text-left">
										Page views
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<a href="index-analytics.html#" target="_blank" class="text-gray-500 hover:text-indigo-500 hover:underline">/
									</td>
									<td class="ltr:text-right rtl:text-left">
										2188
									</td>
								</tr>
								<tr>
									<td>
										<a href="index-analytics.html#" target="_blank" class="text-gray-500 hover:text-indigo-500 hover:underline">/tailwind-template/</a>
									</td>
									<td class="ltr:text-right rtl:text-left">
										1745
									</td>
								</tr>
								<tr>
									<td>
										<a href="index-analytics.html#" target="_blank" class="text-gray-500 hover:text-indigo-500 hover:underline">/tailwind-admin/</a>
									</td>
									<td class="ltr:text-right rtl:text-left">
										1532
									</td>
								</tr>
								<tr>
									<td>
										<a href="index-analytics.html#" target="_blank" class="text-gray-500 hover:text-indigo-500 hover:underline">/tags/html5/</a>
									</td>
									<td class="ltr:text-right rtl:text-left">
										1221
									</td>
								</tr>
								<tr>
									<td>
										<a href="index-analytics.html#" target="_blank" class="text-gray-500 hover:text-indigo-500 hover:underline">/tailwind-admin//taildash/</a>
									</td>
									<td class="ltr:text-right rtl:text-left">
										1118
									</td>
								</tr>
								<tr>
									<td>
										<a href="index-analytics.html#" target="_blank" class="text-gray-500 hover:text-indigo-500 hover:underline">/tags/alpine/</a>
									</td>
									<td class="ltr:text-right rtl:text-left">
										988
									</td>
								</tr>
								<tr>
									<td>
										<a href="index-analytics.html#" target="_blank" class="text-gray-500 hover:text-indigo-500 hover:underline">/tags/gulp/</a>
									</td>
									<td class="ltr:text-right rtl:text-left">
										688
									</td>
								</tr>
								<tr>
									<td>
										<a href="index-analytics.html#" target="_blank" class="text-gray-500 hover:text-indigo-500 hover:underline">/tags/node-js/</a>
									</td>
									<td class="ltr:text-right rtl:text-left">
										262
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div x-data="{ tabs: 1 }">
						<ul class="flex bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 rounded-t-lg overflow-hidden">
							<li @click="tabs = 1" :class="{ '-mb-px': tabs === 1 }" class="ltr:mr-1 rtl:ml-1">
								<a :class="{ '-mb-px bg-white  dark:bg-gray-800': tabs === 1 }" class="inline-block py-6 px-2 md:px-4 font-semibold" href="javascript:;">
									<div class="block text-center px-6">
										<h6 class="text-sm font-semibold nowrap block">Traffic Channel</h6>
									</div>
								</a>
							</li>
							<li @click="tabs = 2" :class="{ '-mb-px': tabs === 2 }" class="ltr:mr-1 rtl:ml-1">
								<a :class="{ '-mb-px bg-white  dark:bg-gray-800': tabs === 2 }" class="inline-block py-6 px-2 md:px-4 font-semibold" href="javascript:;">
									<div class="block text-center px-6">
										<h6 class="text-sm font-semibold nowrap block">Referral</h6>
									</div>
								</a>
							</li>
						</ul>
						<div class="w-full px-6 pt-6 pb-3">
							<div class="relative">
								<canvas x-show="tabs === 1" class="max-w-100" id="TrafficChart"></canvas>
								<canvas x-show="tabs === 2" class="max-w-100" id="ReferralChart"></canvas>
							</div>
						</div>
					</div>
					<div class="flex flex-row justify-between px-6 pb-6">
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="flex border border-gray-300 dark:border-gray-500 px-4 py-2 rounded inline-block text-gray-600 hover:text-gray-600 dark:text-gray-400 dark:hover:text-gray-300 transition-colors duration-200 focus:outline-none hover:outline-none">
								<span class="pr-2">Last 7 Days</span>
								<svg class="fill-current transform rotate-180" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M7 10l5 5 5-5z" />
									<path d="M0 0h24v24H0z" fill="none" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-bottom-left absolute ltr:left-0 rtl:right-0 bottom-full rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Last 14 Days</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Last 28 Days</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Last 90 Days</a>
							</div>
						</div>
						<a class="hover:text-indigo-500 self-center" href="index-analytics.html#">Traffic
							report...</a>
					</div>
				</div>
			</div>

			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div class="flex flex-row justify-between pb-6">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Active users</h3>
						</div>
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
									<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Last 7 days</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Last 28 days</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-analytics.html#">Last 90 days</a>
							</div>
						</div>
					</div>
					<div class="relative">
						<canvas class="max-w-100" id="UserChart"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>

  <div class="mx-auto p-2">
		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full">
				<p class="text-xl font-bold mt-3 mb-5">Ecommerce</p>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div x-data="{ tooltips: false }" class="pt-6 px-6 relative text-sm font-semibold">
						Total Orders
						<div x-on:mouseover="tooltips = true" x-on:mouseleave="tooltips = false" class="ltr:float-right rtl:float-left text-green-500">
							+12%
							<div class="absolute top-auto bottom-full mb-3" x-show.transition.origin.top="tooltips" style="display: none;">
								<div class="z-40 w-32 p-2 -mb-1 text-sm leading-tight text-white bg-black rounded-lg shadow-lg text-center">
									Since last month
								</div>
								<div class="absolute transform -rotate-45 p-1 w-1 bg-black bottom-0 -mb-2 ltr:ml-6 rtl:mr-6"></div>
							</div>
						</div>
					</div>
					<div class="flex flex-row justify-between px-6 py-4">
						<div class="self-center w-14 h-14 rounded-full text-pink-500 bg-pink-100 dark:bg-pink-900 dark:bg-opacity-40 relative text-center">
							<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-cart3" viewBox="0 0 16 16">
								<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
							</svg>
						</div>
						<h2 class="self-center text-3xl">421</h2>
					</div>
					<div class="px-6 pb-6">
						<a class="hover:text-indigo-500 text-sm" href="index-ecommerce.html#">View more...</a>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div x-data="{ tooltips: false }" class="pt-6 px-6 relative text-sm font-semibold">
						Total Sales
						<div x-on:mouseover="tooltips = true" x-on:mouseleave="tooltips = false" class="ltr:float-right rtl:float-left text-green-500">
							+15%
							<div class="absolute top-auto bottom-full mb-3" x-show.transition.origin.top="tooltips" style="display: none;">
								<div class="z-40 w-32 p-2 -mb-1 text-sm leading-tight text-white bg-black rounded-lg shadow-lg text-center">
									Since last month
								</div>
								<div class="absolute transform -rotate-45 p-1 w-1 bg-black bottom-0 -mb-2 ltr:ml-6 rtl:mr-6"></div>
							</div>
						</div>
					</div>
					<div class="flex flex-row justify-between px-6 py-4">
						<div class="self-center w-14 h-14 rounded-full text-yellow-500 bg-yellow-100 dark:bg-yellow-900 dark:bg-opacity-40 relative text-center">
							<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-credit-card" viewBox="0 0 16 16">
								<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
								<path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
							</svg>
						</div>
						<h2 class="self-center text-3xl"><span>$</span>31K</h2>
					</div>
					<div class="px-6 pb-6">
						<a class="hover:text-indigo-500 text-sm" href="index-ecommerce.html#">View more...</a>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div x-data="{ tooltips: false }" class="pt-6 px-6 relative text-sm font-semibold">
						New Customers
						<div x-on:mouseover="tooltips = true" x-on:mouseleave="tooltips = false" class="ltr:float-right rtl:float-left text-pink-500">
							-5%
							<div class="absolute top-auto bottom-full mb-3" x-cloak x-show.transition.origin.top="tooltips">
								<div class="z-40 w-32 p-2 -mb-1 text-sm leading-tight text-white bg-black rounded-lg shadow-lg text-center">
									Since last month
								</div>
								<div class="absolute transform -rotate-45 p-1 w-1 bg-black bottom-0 -mb-2 ltr:ml-6 rtl:mr-6"></div>
							</div>
						</div>
					</div>
					<div class="flex flex-row justify-between px-6 py-4">
						<div class="self-center w-14 h-14 rounded-full text-green-500 bg-green-100 dark:bg-green-900 dark:bg-opacity-40 relative text-center">
							<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-person" viewBox="0 0 16 16">
								<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
							</svg>
						</div>
						<h2 class="self-center text-3xl">1.2K</h2>
					</div>
					<div class="px-6 pb-6">
						<a class="hover:text-indigo-500 text-sm" href="index-ecommerce.html#">View more...</a>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
				<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div x-data="{ tooltips: false }" class="pt-6 px-6 relative text-sm font-semibold">
						Users Online <span class="ltr:float-right rtl:float-left w-2 h-2 rounded-full bg-green-500 mt-1 animate-pulse"></span>
					</div>
					<div class="flex flex-row justify-between px-6 py-4">
						<div class="self-center w-14 h-14 rounded-full text-indigo-500 bg-indigo-100 dark:bg-indigo-900 dark:bg-opacity-40 relative text-center">
							<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-people" viewBox="0 0 16 16">
								<path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
							</svg>
						</div>
						<h2 class="self-center text-3xl">602</h2>
					</div>
					<div class="px-6 pb-6">
						<a class="hover:text-indigo-500 text-sm" href="index-ecommerce.html#">View more...</a>
					</div>
				</div>
			</div>
		</div>

		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<!-- visitor -->
				<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
					<div class="flex flex-row justify-between pb-6">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Monthly Sales</h3>
							<span class="text-gray-500 text-sm">Monthly Traffic and Sales</span>
						</div>
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
									<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-ecommerce.html#">Daily</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-ecommerce.html#">Weekly</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-ecommerce.html#">Yearly</a>
							</div>
						</div>
					</div>
					<div class="relative">
						<canvas class="max-w-100" id="BarChart"></canvas>
					</div>
				</div>

				<!-- Paid ads -->
				<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
					<div class="relative">
						<table class="table-sm text-sm ltr:text-left rtl:text-right w-full">
							<thead>
								<tr class="border-b dark:border-gray-700">
									<th>
										Platform
									</th>
									<th>
										Visitors
									</th>
									<th>
										Ads budget
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										Facebook Ads
									</td>
									<td>
										1,520
									</td>
									<td>
										<div class="flex items-center">
											<span class="ltr:mr-2 rtl:ml-2">78%</span>
											<div class="relative w-full">
												<div class="overflow-hidden h-2 text-xs flex rounded bg-indigo-300">
													<div style="width:78%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500">
													</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										Google Ads
									</td>
									<td>
										980
									</td>
									<td>
										<div class="flex items-center">
											<span class="ltr:mr-2 rtl:ml-2">65%</span>
											<div class="relative w-full">
												<div class="overflow-hidden h-2 text-xs flex rounded bg-pink-300">
													<div style="width:65%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500">
													</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										Microsoft Ads
									</td>
									<td>
										540
									</td>
									<td>
										<div class="flex items-center">
											<span class="ltr:mr-2 rtl:ml-2">55%</span>
											<div class="relative w-full">
												<div class="overflow-hidden h-2 text-xs flex rounded bg-yellow-300">
													<div style="width:55%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-yellow-500">
													</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										Tiktok Ads
									</td>
									<td>
										350
									</td>
									<td>
										<div class="flex items-center">
											<span class="ltr:mr-2 rtl:ml-2">40%</span>
											<div class="relative w-full">
												<div class="overflow-hidden h-2 text-xs flex rounded bg-gray-400">
													<div style="width:40%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gray-700">
													</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
				<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div class="flex flex-row justify-between pb-6">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Traffic Source</h3>
							<span class="text-gray-500 text-sm">Monthly traffic source</span>
						</div>
						<div x-data="{ open: false }" class="relative">
							<button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
									<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
								</svg>
							</button>
							<div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width:12rem">
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-ecommerce.html#">Daily</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-ecommerce.html#">Weekly</a>
								<a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="index-ecommerce.html#">Yearly</a>
							</div>
						</div>
					</div>
					<div class="relative mx-auto text-center w-full sm:w-2/3 lg:w-full">
						<canvas class="max-w-100" id="DoughnutChart"></canvas>
					</div>
				</div>
			</div>
		</div>

		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<!-- revenue -->
			<div class="flex-shrink max-w-full px-4 w-full lg:w-2/3 mb-6">
				<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div class="flex flex-row justify-between pb-6">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Revenue</h3>
							<span class="text-gray-500 font-semibold text-sm">Today's Earning: <span class="text-green-500">$1,570.30</span></span>
						</div>
					</div>
					<div class="relative">
						<canvas class="max-w-100" id="LineChart"></canvas>
					</div>
				</div>
			</div>
			<!-- product -->
			<div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
				<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div class="mb-2">
						<table class="table-sm text-sm ltr:text-left rtl:text-right w-full">
							<thead>
								<tr class="border-b dark:border-gray-700">
									<th>
										Best Seller
									</th>
									<th>
										Sales
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<a href="index-ecommerce.html#" class="hover:text-indigo-500">
											<div class="flex items-center">
												<div class="flex-shrink-0 h-10 w-10">
													<img class="h-10 w-10 rounded-full" src="/img/products/product1.jpg" alt="product images">
												</div>
												<div class="ltr:ml-4 rtl:mr-4">
													<div class="leading-5">
														Nike Women's Race Running Shoe
													</div>
													<div class="text-xs leading-5 text-gray-500">
														Women shoes
													</div>
												</div>
											</div>
										</a>
									</td>
									<td>
										<div class="leading-5 text-green-700">$4,345</div>
									</td>
								</tr>
								<tr>
									<td>
										<a href="index-ecommerce.html#" class="hover:text-indigo-500">
											<div class="flex items-center">
												<div class="flex-shrink-0 h-10 w-10">
													<img class="h-10 w-10 rounded-full" src="/img/products/product2.jpg" alt="product images">
												</div>
												<div class="ltr:ml-4 rtl:mr-4">
													<div class="leading-5">
														Nike Womens Free RN Flyknit 2018
													</div>
													<div class="text-xs leading-5 text-gray-500">
														Women shoes
													</div>
												</div>
											</div>
										</a>
									</td>
									<td>
										<div class="leading-5 text-green-700">$3,235</div>
									</td>
								</tr>
								<tr>
									<td>
										<a href="index-ecommerce.html#" class="hover:text-indigo-500">
											<div class="flex items-center">
												<div class="flex-shrink-0 h-10 w-10">
													<img class="h-10 w-10 rounded-full" src="/img/products/product3.jpg" alt="product images">
												</div>
												<div class="ltr:ml-4 rtl:mr-4">
													<div class="leading-5">
														Nike Women's Sneaker Running Shoes
													</div>
													<div class="text-xs leading-5 text-gray-500">
														Women shoes
													</div>
												</div>
											</div>
										</a>
									</td>
									<td>
										<div class="leading-5 text-green-700">$1,545</div>
									</td>
								</tr>
								<tr>
									<td>
										<a href="index-ecommerce.html#" class="hover:text-indigo-500">
											<div class="flex items-center">
												<div class="flex-shrink-0 h-10 w-10">
													<img class="h-10 w-10 rounded-full" src="/img/products/product4.jpg" alt="product images">
												</div>
												<div class="ltr:ml-4 rtl:mr-4">
													<div class="leading-5">
														Nike Women's Gymnastics Tennis Shoes
													</div>
													<div class="text-xs leading-5 text-gray-500">
														Women shoes
													</div>
												</div>
											</div>
										</a>
									</td>
									<td>
										<div class="leading-5 text-green-700">$1,045</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!-- row -->
		<div class="flex flex-wrap flex-row">
			<div class="flex-shrink max-w-full px-4 w-full mb-6">
				<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
					<div class="flex flex-row justify-between pb-2">
						<div class="flex flex-col">
							<h3 class="text-base font-bold">Latest Orders</h3>
						</div>
					</div>
					<div class="overflow-x-auto">
						<table class="table-sorter table-bordered-bottom w-full text-gray-500 dark:text-gray-400">
							<thead>
								<tr class="bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40">
									<th>
										Order ID
									</th>
									<th class="hidden lg:table-cell">
										Customer
									</th>
									<th>
										Status
									</th>
									<th class="hidden lg:table-cell">
										Date Added
									</th>
									<th>
										Total
									</th>
									<th data-sortable="false">
										Action
									</th>
								</tr>
							</thead>
							<tbody class="text-sm">
								<tr>
									<td>
										<div class="leading-5 uppercase">#inv12637</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="flex flex-wrap flex-row items-center">
											<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
												John Thomas
											</div>
											<div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
												California, USA
											</div>
										</div>
									</td>
									<td>
										<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-pink-100 text-pink-700 dark:bg-opacity-80 rounded-full">Paid</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="leading-5">May 09, 2025</div>
									</td>
									<td>
										<div class="leading-5 font-bold text-green-700">$79</div>
									</td>
									<td class="text-center">
										<a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
											</svg>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="leading-5 uppercase">#inv12636</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="flex flex-wrap flex-row items-center">
											<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
												Daniel
											</div>
											<div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
												San Francisco, USA
											</div>
										</div>
									</td>
									<td>
										<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-purple-100 text-purple-700 dark:bg-opacity-80 rounded-full">Processing</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="leading-5">May 09, 2025</div>
									</td>
									<td>
										<div class="leading-5 font-bold text-green-700">$119</div>
									</td>
									<td class="text-center">
										<a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
											</svg>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="leading-5 uppercase">#inv12635</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="flex flex-wrap flex-row items-center">
											<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
												Vinjay Khan
											</div>
											<div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
												New Delhi, India
											</div>
										</div>
									</td>
									<td>
										<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-yellow-100 text-yellow-700 dark:bg-opacity-80 rounded-full">Packing</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="leading-5">May 09, 2025</div>
									</td>
									<td>
										<div class="leading-5 font-bold text-green-700">$58</div>
									</td>
									<td class="text-center">
										<a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
											</svg>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="leading-5 uppercase">#inv12634</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="flex flex-wrap flex-row items-center">
											<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
												David Arya
											</div>
											<div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
												Jakarta, Indonesia
											</div>
										</div>
									</td>
									<td>
										<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-green-100 text-green-700 dark:bg-opacity-80 rounded-full">Shipped</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="leading-5">May 09, 2025</div>
									</td>
									<td>
										<div class="leading-5 font-bold text-green-700">$79</div>
									</td>
									<td class="text-center">
										<a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
											</svg>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="leading-5 uppercase">#inv12633</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="flex flex-wrap flex-row items-center">
											<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
												William Stone
											</div>
											<div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
												London, UK
											</div>
										</div>
									</td>
									<td>
										<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="leading-5">May 09, 2025</div>
									</td>
									<td>
										<div class="leading-5 font-bold text-green-700">$158</div>
									</td>
									<td class="text-center">
										<a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
											</svg>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="leading-5 uppercase">#inv12632</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="flex flex-wrap flex-row items-center">
											<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
												Danile
											</div>
											<div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
												California, US
											</div>
										</div>
									</td>
									<td>
										<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="leading-5">May 08, 2025</div>
									</td>
									<td>
										<div class="leading-5 font-bold text-green-700">$128</div>
									</td>
									<td class="text-center">
										<a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
											</svg>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="leading-5 uppercase">#inv12631</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="flex flex-wrap flex-row items-center">
											<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
												Romano
											</div>
											<div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
												California, US
											</div>
										</div>
									</td>
									<td>
										<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="leading-5">May 08, 2025</div>
									</td>
									<td>
										<div class="leading-5 font-bold text-green-700">$98</div>
									</td>
									<td class="text-center">
										<a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
											</svg>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="leading-5 uppercase">#inv12630</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="flex flex-wrap flex-row items-center">
											<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
												Yonanda
											</div>
											<div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
												California, US
											</div>
										</div>
									</td>
									<td>
										<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="leading-5">May 08, 2025</div>
									</td>
									<td>
										<div class="leading-5 font-bold text-green-700">$138</div>
									</td>
									<td class="text-center">
										<a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
											</svg>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="leading-5 uppercase">#inv12629</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="flex flex-wrap flex-row items-center">
											<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
												Danile
											</div>
											<div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
												California, US
											</div>
										</div>
									</td>
									<td>
										<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="leading-5">May 08, 2025</div>
									</td>
									<td>
										<div class="leading-5 font-bold text-green-700">$128</div>
									</td>
									<td class="text-center">
										<a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
											</svg>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="leading-5 uppercase">#inv12628</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="flex flex-wrap flex-row items-center">
											<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
												Romano
											</div>
											<div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
												California, US
											</div>
										</div>
									</td>
									<td>
										<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="leading-5">May 08, 2025</div>
									</td>
									<td>
										<div class="leading-5 font-bold text-green-700">$98</div>
									</td>
									<td class="text-center">
										<a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
											</svg>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="leading-5 uppercase">#inv12627</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="flex flex-wrap flex-row items-center">
											<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
												Yonanda
											</div>
											<div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
												California, US
											</div>
										</div>
									</td>
									<td>
										<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="leading-5">May 08, 2025</div>
									</td>
									<td>
										<div class="leading-5 font-bold text-green-700">$138</div>
									</td>
									<td class="text-center">
										<a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
											</svg>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="leading-5 uppercase">#inv12626</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="flex flex-wrap flex-row items-center">
											<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
												Danile
											</div>
											<div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
												California, US
											</div>
										</div>
									</td>
									<td>
										<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="leading-5">May 08, 2025</div>
									</td>
									<td>
										<div class="leading-5 font-bold text-green-700">$128</div>
									</td>
									<td class="text-center">
										<a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
											</svg>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="leading-5 uppercase">#inv12625</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="flex flex-wrap flex-row items-center">
											<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
												Romano
											</div>
											<div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
												California, US
											</div>
										</div>
									</td>
									<td>
										<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="leading-5">May 08, 2025</div>
									</td>
									<td>
										<div class="leading-5 font-bold text-green-700">$98</div>
									</td>
									<td class="text-center">
										<a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
											</svg>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="leading-5 uppercase">#inv12624</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="flex flex-wrap flex-row items-center">
											<div class="leading-5 font-bold text-gray-900 dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
												Yonanda
											</div>
											<div class="italic leading-5 text-gray-500 flex-shrink max-w-full w-full">
												California, US
											</div>
										</div>
									</td>
									<td>
										<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">Complete</div>
									</td>
									<td class="hidden lg:table-cell">
										<div class="leading-5">May 08, 2025</div>
									</td>
									<td>
										<div class="leading-5 font-bold text-green-700">$138</div>
									</td>
									<td class="text-center">
										<a href="index-ecommerce.html#" class="py-2 px-3 text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
											</svg>
										</a>
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