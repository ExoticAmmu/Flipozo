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
                  <img class="mx-auto max-w-full w-36 h-36" src="src/img/svg/flag.svg">
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
                    <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="src/img/avatar/avatar.png" alt="Image Description">
                  </a>
                  <a href="widgets.html#">
                    <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="src/img/avatar/avatar2.png" alt="Image Description">
                  </a>
                  <a href="widgets.html#">
                    <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="src/img/avatar/avatar3.png" alt="Image Description">
                  </a>
                  <a href="widgets.html#">
                    <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="src/img/avatar/avatar4.png" alt="Image Description">
                  </a>
                  <a href="widgets.html#">
                    <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 border-gray-200 bg-gray-300 dark:bg-gray-900 dark:border-gray-700 transform hover:-translate-y-1" src="src/img/avatar/avatar5.png" alt="Image Description">
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
                          <img class="inline w-4 h4 ltr:mr-2 rtl:ml-2" src="src/img/browser/chrome.png">Chrome
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
                          <img class="inline w-4 h4 ltr:mr-2 rtl:ml-2" src="src/img/browser/firefox.png">Mozilla
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
                          <img class="inline w-4 h4 ltr:mr-2 rtl:ml-2" src="src/img/browser/safari.png">Safari
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
                          <img class="inline w-4 h4 ltr:mr-2 rtl:ml-2" src="src/img/browser/browser.png">Others
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
  </main>
</x-admin-layout>