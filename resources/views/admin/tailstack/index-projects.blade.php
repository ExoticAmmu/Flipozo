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

</x-admin-layout>