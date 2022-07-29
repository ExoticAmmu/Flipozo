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

</x-admin-layout>