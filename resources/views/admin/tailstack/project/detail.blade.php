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
                    <p class="text-xl font-bold mt-3 mb-5">Project details</p>
                </div>
            </div>

            <div class="flex flex-wrap flex-row">
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 h-full">
                        <div class="flex flex-row justify-between pb-4">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Web Development</h3>
                            </div>
                            <div x-data="{ open: false }" class="relative">
                                <button @click="open = ! open" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-three-dots" viewBox="0 0 16 16">
                                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                        </path>
                                    </svg>
                                </button>
                                <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded rounded-t-non bg-white dark:bg-gray-800 z-10 rounded border border-gray-200 dark:border-gray-700" style="min-width: 12rem; display: none;">
                                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="detail.html#">Update</a>
                                    <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="detail.html#">Delete</a>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col pb-4">
                            <div class="flex flex-row items-center">
                                <img src="..//img/brand/logo.png" class="w-20 h-auto max-w-full ltr:mr-3 rtl:ml-3">
                                <p class="text-sm text-gray-500">Creating a website redesign project plan is vital to
                                    making your redesign go smoothly.There’s who you think your customers are, who you
                                    want your customers to be. </p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mb-4">
                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-yellow-700 bg-yellow-200">On
                                Progress</span>
                            <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-red-400 border border-red-400  bg-white">Due
                                date: 15-11-2022</span>
                        </div>

                        <div class="relative mb-4">
                            <a href="detail.html#">
                                <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="..//img/avatar/avatar2.png" alt="Image Description">
                            </a>
                            <a href="detail.html#">
                                <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="..//img/avatar/avatar3.png" alt="Image Description">
                            </a>
                            <a href="detail.html#">
                                <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="..//img/avatar/avatar4.png" alt="Image Description">
                            </a>
                            <a href="detail.html#">
                                <span class="ltr:ml-5 rtl:mr-5 text-sm text-gray-500 font-semibold self-center">+2
                                    more</span>
                            </a>
                        </div>

                        <div class="w-full h-4 bg-gray-200 rounded-full mt-2">
                            <div class="h-full text-center text-xs text-white bg-indigo-500 rounded-full" style="width:55%">
                                <span class="text-xs text-white text-center">55%</span>
                            </div>
                        </div>

                        <div class="flex justify-between mt-3">
                            <div>
                                <span class="text-sm inline-block text-gray-500 dark:text-gray-100">Task done : <span class="text-gray-700 dark:text-white font-bold">26</span>/50</span>
                            </div>
                            <div>
                                <span class="px-2 py-1 text-xs rounded font-semibold text-green-500 bg-green-50">Front
                                    End</span>
                                <span class="px-2 py-1 text-xs rounded text-indigo-500 font-semibold bg-indigo-100">UI/UX</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 h-full">
                        <div class="flex flex-row justify-between pb-4">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Project Statistic</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex">
                                <ul class="p-2 mt-2 space-y-2 w-full">
                                    <li class="flex">
                                        <div class="inline-flex items-center w-full py-1 px-3 text-sm font-semibold rounded">
                                            <span class="self-center w-14 h-14 rounded-full bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 relative text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 text-indigo-500 bi bi-cash" viewBox="0 0 16 16">
                                                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path>
                                                    <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <div class="ltr:ml-6 ltr:pl-2 rtl:mr-6 rtl:pr-2 pt-1 text-base ltr:text-left rtl:text-right">
                                                <div class="mb-1 text-gray-800 dark:text-gray-300">Budget</div>
                                                <div class="text-gray-500 text-sm hidden sm:block">Total Project Budget
                                                </div>
                                            </div>
                                            <div class="ltr:ml-auto ltr:pl-2 pt-1 text-base ltr:text-right rtl:mr-auto rtl:pr-2 rtl:text-left">
                                                <div class="font-semibold text-green-500">$150,000</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-full py-1 px-3 text-sm font-semibold rounded">
                                            <span class="self-center w-14 h-14 rounded-full bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 relative text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 text-indigo-500 bi bi-list-task" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z">
                                                    </path>
                                                    <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z">
                                                    </path>
                                                    <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <div class="ltr:ml-6 ltr:pl-2 rtl:mr-6 rtl:pr-2 pt-1 text-base ltr:text-left rtl:text-right">
                                                <div class="mb-1 text-gray-800 dark:text-gray-300">Task</div>
                                                <div class="text-gray-500 text-sm hidden sm:block">All Task Progress
                                                </div>
                                            </div>
                                            <div class="ltr:ml-auto ltr:pl-2 pt-1 text-base ltr:text-right rtl:mr-auto rtl:pr-2 rtl:text-left">
                                                <div class="font-bold text-green-500">50 Task</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-full py-1 px-3 text-sm font-semibold rounded">
                                            <span class="self-center w-14 h-14 rounded-full bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 relative text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-8 h-8 text-indigo-500 bi bi-people-fill" viewBox="0 0 16 16">
                                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z">
                                                    </path>
                                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z">
                                                    </path>
                                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"></path>
                                                </svg>
                                            </span>
                                            <div class="ltr:ml-6 ltr:pl-2 rtl:mr-6 rtl:pr-2 pt-1 text-base ltr:text-left rtl:text-right">
                                                <div class="mb-1 text-gray-800 dark:text-gray-300">Team Member</div>
                                                <div class="text-gray-500 text-sm hidden sm:block">Total Team Member
                                                </div>
                                            </div>
                                            <div class="ltr:ml-auto ltr:pl-2 pt-1 text-base ltr:text-right rtl:mr-auto rtl:pr-2 rtl:text-left">
                                                <div class="font-bold text-green-500">5 Member</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6">
                        <div class="overflow-x-auto">
                            <table class="table-bordered w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead>
                                    <tr>
                                        <th>
                                            Task Title
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th class="hidden lg:table-cell">
                                            Assigned to
                                        </th>
                                        <th class="hidden lg:table-cell">
                                            Time spend
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
                                                <div class="leading-5 font-semibold dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                                                    Create landing page design with Figma
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-sm text-center px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">
                                                In progress</div>
                                        </td>
                                        <td class="hidden lg:table-cell">
                                            <div class="text-sm leading-5">Carlos Garcia</div>
                                        </td>
                                        <td class="hidden lg:table-cell">
                                            <div class="text-sm leading-5 text-gray-600">2D 11H 23min</div>
                                        </td>
                                        <td class="text-center text-sm leading-5 font-medium">
                                            <a href="detail.html#" class="text-sm">
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
                                            <div class="flex flex-wrap flex-row items-center">
                                                <div class="leading-5 font-semibold dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                                                    Create Gallery portfolio layout
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-sm text-center px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">
                                                Complete</div>
                                        </td>
                                        <td class="hidden lg:table-cell">
                                            <div class="text-sm leading-5">Roman Davis</div>
                                        </td>
                                        <td class="hidden lg:table-cell">
                                            <div class="text-sm leading-5 text-gray-600">2D 11H 23min</div>
                                        </td>
                                        <td class="text-center text-sm leading-5 font-medium">
                                            <a href="detail.html#" class="text-sm">
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
                                            <div class="flex flex-wrap flex-row items-center">
                                                <div class="leading-5 font-semibold dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                                                    Slicing Figma Header design to HTML code
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-sm text-center px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">
                                                Complete</div>
                                        </td>
                                        <td class="hidden lg:table-cell">
                                            <div class="text-sm leading-5">Daniel Esteban</div>
                                        </td>
                                        <td class="hidden lg:table-cell">
                                            <div class="text-sm leading-5 text-gray-600">2D 11H 23min</div>
                                        </td>
                                        <td class="text-center text-sm leading-5 font-medium">
                                            <a href="detail.html#" class="text-sm">
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
                                            <div class="flex flex-wrap flex-row items-center">
                                                <div class="leading-5 font-semibold dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                                                    Fix bugs on Comments form
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-sm text-center px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">
                                                Complete</div>
                                        </td>
                                        <td class="hidden lg:table-cell">
                                            <div class="text-sm leading-5">Veronika Westley</div>
                                        </td>
                                        <td class="hidden lg:table-cell">
                                            <div class="text-sm leading-5 text-gray-600">2D 11H 23min</div>
                                        </td>
                                        <td class="text-center text-sm leading-5 font-medium">
                                            <a href="detail.html#" class="text-sm">
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
                                            <div class="flex flex-wrap flex-row items-center">
                                                <div class="leading-5 font-semibold dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                                                    Fix bugs on Login page form
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-sm text-center px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">
                                                Complete</div>
                                        </td>
                                        <td class="hidden lg:table-cell">
                                            <div class="text-sm leading-5">John Doe</div>
                                        </td>
                                        <td class="hidden lg:table-cell">
                                            <div class="text-sm leading-5 text-gray-600">2D 11H 23min</div>
                                        </td>
                                        <td class="text-center text-sm leading-5 font-medium">
                                            <a href="detail.html#" class="text-sm">
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
                                            <div class="flex flex-wrap flex-row items-center">
                                                <div class="leading-5 font-semibold dark:text-gray-300 flex-shrink max-w-full w-full mb-1">
                                                    Convert Figma footer design to HTML file
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-sm text-center px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">
                                                Complete</div>
                                        </td>
                                        <td class="hidden lg:table-cell">
                                            <div class="text-sm leading-5">Carlos Garcia</div>
                                        </td>
                                        <td class="hidden lg:table-cell">
                                            <div class="text-sm leading-5 text-gray-600">2D 11H 23min</div>
                                        </td>
                                        <td class="text-center text-sm leading-5 font-medium">
                                            <a href="detail.html#" class="text-sm">
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
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
                        <div class="flex pb-4">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Productifity</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <canvas class="max-w-100" id="ProductifityLine" width="1257" height="628"></canvas>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
                        <div class="flex flex-row pb-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-bold">Latest Actifities</h3>
                            </div>
                        </div>
                        <div class="relative">
                            <ol class="h-72 overflow-y-auto scrollbars show mb-6">
                                <li class="flex mb-2">
                                    <div class="relative flex-shrink-0 w-12 text-center">
                                        <span class="absolute ltr:left-1/2 rtl:right-1/2 ltr:-ml-1 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
                                        <div class="mr-auto">
                                            <img src="..//img/avatar/avatar3.png" class="h-10 w-10 rounded-full border border-gray-300 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
                                        </div>
                                    </div>

                                    <div class="w-full ml-4 mb-4">
                                        <div class="flex flex-row justify-between pb-2">
                                            <h4 class="text-base font-semibold">Carlos Garcia</h4>
                                            <div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">Aug 26,
                                                2025 03.21 am</div>
                                        </div>
                                        <p class="text-sm">Assigned task <span class="itaic font-semibold text-gray-500">"Create landing page design
                                                with Figma"</span></p>
                                    </div>
                                </li>
                                <li class="flex mb-2">
                                    <div class="relative flex-shrink-0 w-12 text-center">
                                        <span class="absolute ltr:left-1/2 rtl:right-1/2 ltr:-ml-1 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
                                        <div class="mr-auto">
                                            <img src="..//img/avatar/avatar3.png" class="h-10 w-10 rounded-full border border-gray-300 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
                                        </div>
                                    </div>

                                    <div class="w-full ml-4 mb-4">
                                        <div class="flex flex-row justify-between pb-2">
                                            <h4 class="text-base font-semibold">Carlos Garcia</h4>
                                            <div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">Aug 26,
                                                2025 03.21 am</div>
                                        </div>
                                        <p class="text-sm">Completed <span class="itaic font-semibold text-gray-500">"Convert Figma footer design
                                                to HTML file"</span></p>
                                    </div>
                                </li>
                                <li class="flex mb-2">
                                    <div class="relative flex-shrink-0 w-12 text-center">
                                        <span class="absolute ltr:left-1/2 rtl:right-1/2 ltr:-ml-1 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
                                        <div class="mr-auto">
                                            <img src="..//img/avatar/avatar6.png" class="h-10 w-10 rounded-full border border-gray-300 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
                                        </div>
                                    </div>

                                    <div class="w-full ml-4 mb-4">
                                        <div class="flex flex-row justify-between pb-2">
                                            <h4 class="text-base font-semibold">John Doe</h4>
                                            <div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">Aug 26,
                                                2025 03.21 am</div>
                                        </div>
                                        <p class="text-sm">Completed <span class="itaic font-semibold text-gray-500">"Fix bugs on Login page
                                                form"</span></p>
                                    </div>
                                </li>
                                <li class="flex mb-2">
                                    <div class="relative flex-shrink-0 w-12 text-center">
                                        <span class="absolute ltr:left-1/2 rtl:right-1/2 ltr:-ml-1 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
                                        <div class="mr-auto">
                                            <img src="..//img/avatar/avatar7.png" class="h-10 w-10 rounded-full border border-gray-300 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
                                        </div>
                                    </div>

                                    <div class="w-full ml-4 mb-4">
                                        <div class="flex flex-row justify-between pb-2">
                                            <h4 class="text-base font-semibold">Veronika Westley</h4>
                                            <div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">Aug 26,
                                                2025 03.21 am</div>
                                        </div>
                                        <p class="text-sm">Assigned task <span class="itaic font-semibold text-gray-500">"Fix bugs on Comments
                                                form"</span></p>
                                    </div>
                                </li>
                                <li class="flex mb-2">
                                    <div class="relative flex-shrink-0 w-12 text-center">
                                        <span class="absolute ltr:left-1/2 rtl:right-1/2 ltr:-ml-1 rtl:-mr-1 top-10 -bottom-4 ltr:border-l-2 rtl:border-r-2 border-dashed border-gray-200 dark:border-gray-700"></span>
                                        <div class="mr-auto">
                                            <img src="..//img/avatar/avatar2.png" class="h-10 w-10 rounded-full border border-gray-300 bg-gray-700 dark:border-gray-200 dark:bg-gray-200">
                                        </div>
                                    </div>

                                    <div class="w-full ml-4 mb-4">
                                        <div class="flex flex-row justify-between pb-2">
                                            <h4 class="text-base font-semibold">Carlos Garcia</h4>
                                            <div class="text-xs text-gray-500 self-center ltr:mr-3 rtl:ml-3">Aug 26,
                                                2025 03.21 am</div>
                                        </div>
                                        <p class="text-sm">Completed <span class="itaic font-semibold text-gray-500">"Redesign Services
                                                page"</span></p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>