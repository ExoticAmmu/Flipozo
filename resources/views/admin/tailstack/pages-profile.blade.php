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
                    <p class="text-xl font-bold mt-3 mb-5">Profile</p>
                </div>
                <div x-data="{ open: false }" class="flex-shrink max-w-full px-4 w-full mb-6">
                    <div class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg mb-8">
                        <div class="group h-40 overflow-hidden relative">
                            <img src="src/img/blog/bg.jpg" class="w-full">
                            <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                <button @click="open = true" type="button" class="group-hover:opacity-80 opacity-0 py-1.5 px-3 inline-block text-center mb-3 rounded leading-5 text-gray-800 bg-gray-200 border border-gray-200 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0">Edit
                                    cover <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block bi bi-camera" viewBox="0 0 16 16">
                                        <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                                        <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                    </svg></button>
                            </div>
                        </div>
                        <div class="flex justify-center -mt-10 relative">
                            <a @click="open = true" class="z-30 group" href="javascript:;">
                                <img src="src/img/avatar/avatar.png" class="rounded-full w-24 h-24 bg-gray-200 border-solid border-white border-2 -mt-3">
                                <div title="Change avatar" class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 text-white dark:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-6 h-6 bi bi-camera" viewBox="0 0 16 16">
                                        <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                                        <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="text-center px-3 pb-6 pt-2">
                            <h3 class="text-gray-800 dark:text-gray-100 font-bold text-lg">Ari Budin</h3>
                            <p class="mt-2 font-light">Hello, i'm professional front end developer!</p>
                        </div>
                        <div class="flex justify-center pb-6">
                            <div class="text-center px-2.5">
                                <p class="text-gray-500">14</p>
                                <span>Projects</span>
                            </div>
                            <div class="text-center px-2.5">
                                <p class="text-gray-500">12</p>
                                <span>Team</span>
                            </div>
                            <div class="text-center px-2.5">
                                <p class="text-gray-500">221</p>
                                <span>Tasks</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap flex-row -mx-4">
                        <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-8">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full p-6">
                                <div class="flex flex-row justify-between pb-3">
                                    <div class="flex flex-col">
                                        <h3 class="text-base font-bold">Information</h3>
                                    </div>
                                    <div class="relative">
                                        <a @click="open = true" href="javascript:;" title="edit information" class="text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200 focus:outline-none hover:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="py-3">
                                    <p class="text-gray-500 mb-2">
                                        Hey, I'm Ari Budin. I love making quality website template designs. Contact me
                                        for any questions
                                    </p>
                                    <div class="border-t border-gray-200 my-3 dark:border-gray-700"></div>
                                    <div class="ltr:text-left rtl:text-right">
                                        <p class="mb-2"><strong>Full Name :</strong><span class="ml-2">Ari Budin</span>
                                        </p>
                                        <p class="mb-2"><strong>Mobile :</strong><span class="ml-2">(+21) 123 1234
                                                567</span></p>
                                        <p class="mb-2"><strong>Email :</strong><span class="ml-2">yourmail@gmail.com</span></p>
                                        <p class="mb-2"><strong>Location :</strong><span class="ml-2">USA</span></p>
                                        <p class="mb-2"><strong>Languages :</strong><span class="ml-2"> English</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink max-w-full px-4 w-full lg:w-2/3 mb-8">
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
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="pages-profile.html#">Daily</a>
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="pages-profile.html#">Weekly</a>
                                            <a class="block px-3 py-2 hover:bg-gray-100 focus:bg-gray-100 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 dark:focus:bg-gray-900" href="pages-profile.html#">Yearly</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col mb-3">
                                    <h3 class="mb-1">Welcome, <span class="font-bold text-gray-800 dark:text-gray-300">Ari Budin</span></h3>
                                    <p class="text-base">You have <span class="font-semibold text-red-500">3 task</span>
                                        to finish all task today. Your already completed <span class="font-semibold text-green-500">76%</span> task. Your perform is <span class="font-semibold text-green-500">Very good</span>.</p>
                                </div>
                                <canvas class="max-w-100" id="ProductifityLine"></canvas>
                            </div>
                        </div>
                        <div class="flex-shrink max-w-full px-4 w-full lg:w-1/3 mb-8">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                                <div class="flex flex-row justify-between pb-3">
                                    <div class="flex flex-col">
                                        <h3 class="text-base font-bold">Messages</h3>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="pages-profile.html#" class="flex my-6">
                                            <div class="block relative">
                                                <img alt="profil" src="src/img/avatar/avatar6.png" class="mx-auto object-cover rounded-full h-10 w-10 ">
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-sm text-gray-900 font-semibold dark:text-white ltr:ml-2 rtl:mr-2 mb-1">Carlos
                                                    Garcia</span>
                                                <span class="text-sm text-gray-400 dark:text-gray-300 ltr:ml-2 rtl:mr-2">What
                                                    do you think about this project?</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-profile.html#" class="flex my-6">
                                            <div class="block relative">
                                                <img alt="profil" src="src/img/avatar/avatar3.png" class="mx-auto object-cover rounded-full h-10 w-10 ">
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-sm text-gray-900 font-semibold dark:text-white ltr:ml-2 rtl:mr-2 mb-1">Roman
                                                    davis</span>
                                                <span class="text-sm text-gray-400 dark:text-gray-300 ltr:ml-2 rtl:mr-2">What
                                                    do you think about this project?</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-profile.html#" class="flex my-6">
                                            <div class="block relative">
                                                <img alt="profil" src="src/img/avatar/avatar7.png" class="mx-auto object-cover rounded-full h-10 w-10 ">
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-sm text-gray-900 font-semibold dark:text-white ltr:ml-2 rtl:mr-2 mb-1">Jessica
                                                    jane</span>
                                                <span class="text-sm text-gray-400 dark:text-gray-300 ltr:ml-2 rtl:mr-2">What
                                                    do you think about this project?</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex-shrink max-w-full px-4 w-full lg:w-2/3 mb-8">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-6">
                                <div class="flex flex-row justify-between pb-3">
                                    <div class="flex flex-col">
                                        <h3 class="text-base font-bold">Tailnet Inc</h3>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between my-3">
                                    <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-yellow-700 bg-yellow-200">On
                                        Progress</span>
                                    <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-red-400 border border-red-400  bg-white">Due
                                        date: 15-11-2022</span>
                                </div>
                                <div class="relative mb-4">
                                    <a href="pages-profile.html#">
                                        <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="src/img/avatar/avatar2.png" alt="Image Description">
                                    </a>
                                    <a href="pages-profile.html#">
                                        <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="src/img/avatar/avatar3.png" alt="Image Description">
                                    </a>
                                    <a href="pages-profile.html#">
                                        <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="src/img/avatar/avatar5.png" alt="Image Description">
                                    </a>
                                </div>
                                <div class="w-full h-2 bg-gray-200 rounded-full mt-2">
                                    <div class="h-full text-center text-xs text-white bg-indigo-500 rounded-full" style="width:86%">
                                    </div>
                                </div>
                                <div class="flex justify-between mt-3">
                                    <div>
                                        <span class="text-sm inline-block text-gray-500 dark:text-gray-100">Task done :
                                            <span class="text-gray-700 dark:text-white font-bold">43</span>/50</span>
                                    </div>
                                    <div>
                                        <span class="px-2 py-1 text-xs rounded font-semibold text-green-500 bg-green-50">Front
                                            End</span>
                                        <span class="px-2 py-1 text-xs rounded text-blue-500 font-semibold bg-blue-100">UI/UX</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-6">
                                <div class="flex flex-row justify-between pb-3">
                                    <div class="flex flex-col">
                                        <h3 class="text-base font-bold">Google Inc</h3>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between my-3">
                                    <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-gray-500 bg-gray-200">Complete</span>
                                    <span class="px-2 py-1 flex items-center font-semibold text-xs rounded text-gray-500 bg-gray-200">Due
                                        date: 1-08-2022</span>
                                </div>
                                <div class="relative mb-4">
                                    <a href="pages-profile.html#">
                                        <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="src/img/avatar/avatar.png" alt="Image Description">
                                    </a>
                                    <a href="pages-profile.html#">
                                        <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="src/img/avatar/avatar2.png" alt="Image Description">
                                    </a>
                                    <a href="pages-profile.html#">
                                        <img class="inline-block rounded-full shadow-xl w-12 h-12 max-w-full ltr:-mr-4 rtl:-ml-4 border-2 bg-gray-300 border-gray-200 transform hover:-translate-y-1" src="src/img/avatar/avatar3.png" alt="Image Description">
                                    </a>
                                </div>
                                <div class="w-full h-2 bg-gray-200 rounded-full mt-2">
                                    <div class="h-full text-center text-xs text-white bg-green-500 rounded-full" style="width:100%">
                                    </div>
                                </div>
                                <div class="flex justify-between mt-3">
                                    <div>
                                        <span class="text-sm inline-block text-gray-500 dark:text-gray-100">Task done :
                                            <span class="text-gray-700 dark:text-white font-bold">50</span>/50</span>
                                    </div>
                                    <div>
                                        <span class="px-2 py-1 text-xs rounded font-semibold text-green-500 bg-green-50">Front
                                            End</span>
                                        <span class="px-2 py-1 text-xs rounded text-blue-500 font-semibold bg-blue-100">UI/UX</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div x-show="open" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6">
                        <div class="z-50 relative p-3 mx-auto my-0 max-w-full" style="max-width:600px;display:none;" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                            <form class="valid-form bg-white dark:bg-gray-800 rounded-lg shadow-lg border dark:border-gray-800 flex flex-col overflow-hidden">
                                <button @click="open = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
                                <!-- modal title -->
                                <div class="px-6 py-3 text-xl border-b dark:border-gray-800 font-bold">Edit profile
                                </div>
                                <!-- modal content -->
                                <div class="p-6 flex-grow">
                                    <div class="flex flex-wrap flex-row -mx-4">
                                        <div class="flex-shrink max-w-full px-4 w-full">
                                            <div class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden pb-8">
                                                <div class="h-40 overflow-hidden relative">
                                                    <img src="src/img/blog/bg.jpg" class="w-full">
                                                </div>
                                                <div class="flex justify-center -mt-10 relative">
                                                    <img src="src/img/avatar/avatar.png" class="rounded-full w-24 h-24 bg-gray-200 border-solid border-white border-2 -mt-3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <div class="inline-block mb-2">Avatar (80x80)</div>
                                            <div id="avatar-upload" class="dropzone single-dropzone mb-6">
                                                <div class="dz-message" data-dz-message>
                                                    <div class="pre-upload flex flex-col justify-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto text-gray-500 inline-block w-10 h-10 bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z">
                                                            </path>
                                                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z">
                                                            </path>
                                                        </svg>
                                                        <div class="py-3"><span>Drag &amp; drop images here</span></div>
                                                    </div>
                                                    <div class="pre-upload text-center">
                                                        <button class="py-1.5 px-3 inline-block text-center rounded leading-normal text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2 dark:bg-gray-300">Browse
                                                            file</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <div class="inline-block mb-2">Cover (1287x160)</div>
                                            <div id="cover-upload" class="dropzone single-dropzone mb-6">
                                                <div class="dz-message" data-dz-message>
                                                    <div class="pre-upload flex flex-col justify-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-auto text-gray-500 inline-block w-10 h-10 bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z">
                                                            </path>
                                                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z">
                                                            </path>
                                                        </svg>
                                                        <div class="py-3"><span>Drag &amp; drop images here</span></div>
                                                    </div>
                                                    <div class="pre-upload text-center">
                                                        <button class="py-1.5 px-3 inline-block text-center rounded leading-normal text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2 dark:bg-gray-300">Browse
                                                            file</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <label for="inputname" class="inline-block mb-2">Firs name</label>
                                            <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputname" required>
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <label for="inputlast" class="inline-block mb-2">Last name</label>
                                            <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputlast">
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <label for="inputEmail4" class="inline-block mb-2">Email</label>
                                            <input type="email" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputEmail4" required>
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <label for="inputPassword4" class="inline-block mb-2">Password</label>
                                            <input type="password" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputPassword4" required>
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <label for="inputnumber" class="inline-block mb-2">Phone number</label>
                                            <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputnumber">
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <label for="inputlocation" class="inline-block mb-2">Location</label>
                                            <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputlocation">
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full mb-6">
                                            <label for="inputshort" class="inline-block mb-2">Short description</label>
                                            <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputshort">
                                        </div>
                                        <div class="form-group flex-shrink max-w-full px-4 w-full mb-6">
                                            <label for="inputlong" class="inline-block mb-2">About description</label>
                                            <textarea type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputlong"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-6 py-3 border-t dark:border-gray-800 flex justify-end">
                                    <button @click="open = false" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">Close</button>
                                    <button type="submit" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Saves</button>
                                </div>
                            </form>
                        </div>
                        <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>