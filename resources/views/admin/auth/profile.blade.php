<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="mx-auto p-2">
        <!-- row -->
        <div class="flex flex-wrap flex-row">
            <div class="flex-shrink max-w-full px-4 w-full mb-6">
                <div class="p-8 mb-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                    <div class="relative">

                        <div class="mb-8">
                            <h2 class="text-lg mb-6 font-semibold text-gray-800 dark:text-gray-300">Update Admin Details</h2>
                            <div
                                class="bg-white p-8 border border-gray-200 dark:bg-gray-900 dark:bg-opacity-20 dark:border-gray-800">
                                <form class="flex flex-wrap flex-row -mx-4">
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                        <label for="username" class="inline-block mb-2">Admin UserName</label>
                                        <input type="name" value=""
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                        <label for="inputEmail4" class="inline-block mb-2">Email</label>
                                        <input type="email"
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            id="inputEmail4">
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                        <label for="Password" class="inline-block mb-2">Password</label>
                                        <input type="name"
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            id="password4">
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                        <label for="Password" class="inline-block mb-2">Confirm Password</label>
                                        <input type="password"
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            id="password4">
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-full">
                                        <button type="submit"
                                            class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
