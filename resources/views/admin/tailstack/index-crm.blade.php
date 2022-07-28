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
											<img src="src/img/avatar/avatar2.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
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
											<img src="src/img/avatar/avatar3.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
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
											<img src="src/img/avatar/avatar4.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
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
											<img src="src/img/avatar/avatar.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
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
											<img src="src/img/avatar/avatar6.png" class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
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
	</main>
</x-admin-layout>