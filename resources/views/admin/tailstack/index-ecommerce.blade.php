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
					<p class="text-xl font-bold mt-3 mb-5">Hosting</p>
				</div>
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
							<h4 class="font-bold text-gray-800 dark:text-gray-200 text-2xl mb-3">Upgrade your
								Hosting<br> with Cloud Server!</h4>
							<p class="text-gray-500 mb-6">Very simple to upgrade your hosting package with Cloud Server.
								Discount <span class="font-semibold">30%</span> for first year subscription.</p>
							<a href="index-hosting.html#" class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Upgrade
								now</a>
						</div>
					</div>
				</div>
				<div class="flex-shrink max-w-full px-4 w-full lg:w-1/2">
					<div class="flex flex-wrap -mx-4 flex-row">
						<div class="flex-shrink max-w-full px-4 w-1/2 mb-6">
							<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
								<div class="flex flex-row">
									<div class="self-center w-16 h-16 rounded-full bg-transparent sm:bg-indigo-100 text-indigo-500 dark:bg-gray-900 dark:bg-opacity-20 relative text-center">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-hdd-stack" viewBox="0 0 16 16">
											<path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z" />
											<path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
											<path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
										</svg>
									</div>
									<div class="ltr:ml-3 rtl:mr-3">
										<h2 class="self-center mb-1">Services</h2>
										<p class="text-xl font-semibold">22</p>
									</div>
								</div>
							</div>
						</div>
						<div class="flex-shrink max-w-full px-4 w-1/2 mb-6">
							<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
								<div class="flex flex-row">
									<div class="self-center w-16 h-16 rounded-full bg-transparent sm:bg-green-100 text-green-500 dark:bg-gray-900 dark:bg-opacity-20 relative text-center">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-globe2" viewBox="0 0 16 16">
											<path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z" />
										</svg>
									</div>
									<div class="ltr:ml-3 rtl:mr-3">
										<h2 class="self-center mb-1">Domain</h2>
										<p class="text-xl font-semibold">132</p>
									</div>
								</div>
							</div>
						</div>
						<div class="flex-shrink max-w-full px-4 w-1/2 mb-6">
							<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
								<div class="flex flex-row">
									<div class="self-center w-16 h-16 rounded-full bg-transparent sm:bg-pink-100 text-pink-500 dark:bg-gray-900 dark:bg-opacity-20 relative text-center">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-life-preserver" viewBox="0 0 16 16">
											<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm6.43-5.228a7.025 7.025 0 0 1-3.658 3.658l-1.115-2.788a4.015 4.015 0 0 0 1.985-1.985l2.788 1.115zM5.228 14.43a7.025 7.025 0 0 1-3.658-3.658l2.788-1.115a4.015 4.015 0 0 0 1.985 1.985L5.228 14.43zm9.202-9.202-2.788 1.115a4.015 4.015 0 0 0-1.985-1.985l1.115-2.788a7.025 7.025 0 0 1 3.658 3.658zm-8.087-.87a4.015 4.015 0 0 0-1.985 1.985L1.57 5.228A7.025 7.025 0 0 1 5.228 1.57l1.115 2.788zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
										</svg>
									</div>
									<div class="ltr:ml-3 rtl:mr-3">
										<h2 class="self-center mb-1">Ticket</h2>
										<p class="text-xl font-semibold">16</p>
									</div>
								</div>
							</div>
						</div>
						<div class="flex-shrink max-w-full px-4 w-1/2 mb-6">
							<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
								<div class="flex flex-row">
									<div class="self-center w-16 h-16 rounded-full bg-transparent sm:bg-yellow-100 text-yellow-500 dark:bg-gray-900 dark:bg-opacity-20 relative text-center">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 bi bi-receipt" viewBox="0 0 16 16">
											<path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
											<path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
										</svg>
									</div>
									<div class="ltr:ml-3 rtl:mr-3">
										<h2 class="self-center mb-1">Invoice</h2>
										<p class="text-xl font-semibold">31</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- row -->
			<div class="flex flex-wrap flex-row">
				<div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
					<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
						<div class="flex flex-col pb-3">
							<h3 class="text-base font-bold">Storage</h3>
						</div>
						<div class="w-2/3 lg:w-full mx-auto relative mb-4">
							<canvas class="max-w-100" id="StorageChart"></canvas>
							<p class="text-2xl font-bold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
								63%</p>
						</div>
						<div class="text-center text-sm font-semibold text-gray-500">
							<p class="mb-2"><span class="inline-block w-4 h-4 bg-indigo-500 mr-2"></span>Used: 90,000
								<span class="ltr:ml-4 rtl:mr-4 inline-block w-4 h-4 bg-green-500 mr-2"></span>Free:
								52,000</span>
							</p>
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
								<h3 class="text-base font-bold">My Wallet</h3>
							</div>
						</div>
						<div class="relative text-center">
							<h4 class="font-bold text-2xl text-white mb-3">$250</h4>
							<p class="text-sm mb-3">Total credit</p>
						</div>
					</div>

					<a class="text-sm py-2 px-4 block text-center mb-6 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Top
						up</a>

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
								<h3 class="text-base font-bold">My Spend</h3>
							</div>
						</div>
						<div class="relative text-center">
							<h4 class="font-bold text-2xl text-white mb-3">$1,100/Year</h4>
							<p class="text-sm mb-3">All subscription fee</p>
						</div>
					</div>
				</div>
				<div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-6">
					<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
						<div class="flex flex-col pb-6">
							<h3 class="text-base font-bold">History</h3>
						</div>
						<div class="relative">
							<ol class="h-72 overflow-y-auto scrollbars show mb-6">
								<li class="flex mb-2">
									<div class="relative flex-shrink-0 w-12 text-center">
										<span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
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
											<div class="text-xs text-gray-500 self-center mr-3">
												Aug 17, 2025 02.21 am
											</div>
										</div>
										<p class="text-sm">Cancelled <span class="font-semibold">"USA Server B"</span>
										</p>
									</div>
								</li>
								<li class="flex mb-2">
									<div class="relative flex-shrink-0 w-12 text-center">
										<span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
										<div class="ltr:mr-auto rtl:ml-auto">
											<div class="flex items-center justify-center text-indigo-500 h-10 w-10 rounded-full border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
													<path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z">
													</path>
												</svg>
											</div>
										</div>
									</div>

									<div class="ltr:ml-4 rtl:mr-4 mb-4">
										<div class="flex flex-row justify-between pb-2">
											<div class="text-xs text-gray-500 self-center mr-3">
												Aug 19, 2025 02.21 am
											</div>
										</div>
										<p class="text-sm">Order domain <span class="font-semibold">"Mydomain.com"</span></p>
									</div>
								</li>
								<li class="flex mb-2">
									<div class="relative flex-shrink-0 w-12 text-center">
										<span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
										<div class="ltr:mr-auto rtl:ml-auto">
											<div class="flex items-center justify-center text-indigo-500 h-10 w-10 rounded-full border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
													<path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z">
													</path>
												</svg>
											</div>
										</div>
									</div>

									<div class="ltr:ml-4 rtl:mr-4 mb-4">
										<div class="flex flex-row justify-between pb-2">
											<div class="text-xs text-gray-500 self-center mr-3">
												Aug 21, 2025 20.10 pm
											</div>
										</div>
										<p class="text-sm">Order domain <span class="font-semibold">"Bestdomain.com"</span></p>
									</div>
								</li>
								<li class="flex mb-2">
									<div class="relative flex-shrink-0 w-12 text-center">
										<span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
										<div class="ltr:mr-auto rtl:ml-auto">
											<div class="flex items-center justify-center text-indigo-500 h-10 w-10 rounded-full border border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hdd-stack" viewBox="0 0 16 16">
													<path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z">
													</path>
													<path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z">
													</path>
													<path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z">
													</path>
												</svg>
											</div>
										</div>
									</div>

									<div class="ltr:ml-4 rtl:mr-4 mb-4">
										<div class="flex flex-row justify-between pb-2">
											<div class="text-xs text-gray-500 self-center mr-3">
												Aug 23, 2025 18.34 pm
											</div>
										</div>
										<p class="text-sm">Order Service <span class="font-semibold">"USA Server
												A"</span></p>
									</div>
								</li>
								<li class="flex mb-2">
									<div class="relative flex-shrink-0 w-12 text-center">
										<span class="absolute ltr:left-1/2 ltr:-ml-1 rtl:right-1/2 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
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
											<div class="text-xs text-gray-500 self-center mr-3">
												Aug 26, 2025 03.21 am
											</div>
										</div>
										<p class="text-sm">Canceled service <span class="font-semibold">"USA Server
												D"</span></p>
									</div>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!-- row -->
			<div class="flex flex-wrap flex-row">
				<div class="flex-shrink max-w-full px-4 w-full mb-6">
					<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
						<div class="relative">
							<div class="overflow-auto">
								<table class="table-sorter table-bordered-bottom w-full">
									<thead>
										<tr class="bg-gray-200 dark:bg-gray-900 dark:bg-opacity-40">
											<th>
												Services
											</th>
											<th class="hidden lg:table-cell">
												Yearly
											</th>
											<th class="hidden md:table-cell">
												Expired
											</th>
											<th>
												Status
											</th>
											<th data-sortable="false">
												Action
											</th>
										</tr>
									</thead>
									<tbody class="text-sm leading-5">
										<tr>
											<td>
												<div>
													<div class="font-semibold">
														USA Server A
													</div>
													<div class="italic">
														Hosting package
													</div>
												</div>
											</td>
											<td class="hidden lg:table-cell">
												250$
											</td>
											<td class="hidden md:table-cell">
												Oct 12, 2025
											</td>
											<td>
												<div class="inline-block leading-tight text-center text-sm font-semibold py-1 px-3 bg-green-100 text-green-700 dark:bg-opacity-80 rounded-full">
													Active</div>
											</td>
											<td>
												<a href="index-hosting.html#" class="text-sm py-2 px-3 text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
													<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
														<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
														</path>
														<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
														</path>
													</svg>
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<div>
													<div class="font-semibold">
														MyDomain.com
													</div>
													<div class="italic">
														Domain name
													</div>
												</div>
											</td>
											<td class="hidden lg:table-cell">
												20$
											</td>
											<td class="hidden md:table-cell">
												Sep 12, 2025
											</td>
											<td>
												<div class="inline-block leading-tight text-center text-sm font-semibold py-1 px-3 bg-yellow-100 text-yellow-700 dark:bg-opacity-80 rounded-full">
													Pending</div>
											</td>
											<td>
												<a href="index-hosting.html#" class="text-sm py-2 px-3 text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
													<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
														<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
														</path>
														<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
														</path>
													</svg>
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<div>
													<div class="font-semibold">
														YourDomain.com
													</div>
													<div class="italic">
														Domain name
													</div>
												</div>
											</td>
											<td class="hidden lg:table-cell">
												19$
											</td>
											<td class="hidden md:table-cell">
												Aug 12, 2025
											</td>
											<td>
												<div class="inline-block leading-tight text-center text-sm font-semibold py-1 px-3 bg-green-100 text-green-700 dark:bg-opacity-80 rounded-full">
													Active</div>
											</td>
											<td>
												<a href="index-hosting.html#" class="text-sm py-2 px-3 text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
													<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
														<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
														</path>
														<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
														</path>
													</svg>
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<div>
													<div class="font-semibold">
														Singapore Server D
													</div>
													<div class="italic">
														Hosting package
													</div>
												</div>
											</td>
											<td class="hidden lg:table-cell">
												200$
											</td>
											<td class="hidden md:table-cell">
												Jul 12, 2025
											</td>
											<td>
												<div class="inline-block leading-tight text-center text-sm font-semibold py-1 px-3 bg-green-100 text-green-700 dark:bg-opacity-80 rounded-full">
													Active</div>
											</td>
											<td>
												<a href="index-hosting.html#" class="text-sm py-2 px-3 text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
													<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
														<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
														</path>
														<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
														</path>
													</svg>
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<div>
													<div class="font-semibold">
														MyDomain.net
													</div>
													<div class="italic">
														Domain name
													</div>
												</div>
											</td>
											<td class="hidden lg:table-cell">
												15$
											</td>
											<td class="hidden md:table-cell">
												Jun 12, 2025
											</td>
											<td>
												<div class="inline-block leading-tight text-center text-sm font-semibold py-1 px-3 bg-green-100 text-green-700 dark:bg-opacity-80 rounded-full">
													Active</div>
											</td>
											<td>
												<a href="index-hosting.html#" class="text-sm py-2 px-3 text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
													<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
														<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
														</path>
														<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
														</path>
													</svg>
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<div>
													<div class="font-semibold">
														MyDomain.us
													</div>
													<div class="italic">
														Domain name
													</div>
												</div>
											</td>
											<td class="hidden lg:table-cell">
												25$
											</td>
											<td class="hidden md:table-cell">
												Jun 10, 2025
											</td>
											<td>
												<div class="inline-block leading-tight text-center text-sm font-semibold py-1 px-3 bg-pink-100 text-pink-700 dark:bg-opacity-80 rounded-full">
													Canceled</div>
											</td>
											<td>
												<a href="index-hosting.html#" class="text-sm py-2 px-3 text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
													<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
														<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
														</path>
														<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
														</path>
													</svg>
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<div>
													<div class="font-semibold">
														MyDomain.News
													</div>
													<div class="italic">
														Domain name
													</div>
												</div>
											</td>
											<td class="hidden lg:table-cell">
												25$
											</td>
											<td class="hidden md:table-cell">
												Jun 10, 2025
											</td>
											<td>
												<div class="inline-block leading-tight text-center text-sm font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">
													Expired</div>
											</td>
											<td>
												<a href="index-hosting.html#" class="text-sm py-2 px-3 text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
													<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
														<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
														</path>
														<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
														</path>
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
	</main>
</x-admin-layout>
</x-admin-layout> <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
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
		<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">
			Complete</div>
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
		<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">
			Complete</div>
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
		<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">
			Complete</div>
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
		<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">
			Complete</div>
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
		<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">
			Complete</div>
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
		<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">
			Complete</div>
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
		<div class="inline-block leading-tight text-center font-semibold py-1 px-3 bg-gray-100 text-gray-700 dark:bg-opacity-80 rounded-full">
			Complete</div>
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
</main>
</x-admin-layout>