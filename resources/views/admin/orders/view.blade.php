<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders View') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <!-- Table -->
                <div class='overflow-x-auto w-full'>

                    <table class='mx-auto w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                        <thead class="bg-gray-900">
                            <tr class="text-white text-left">
                                <th class="font-semibold text-sm uppercase px-6 py-4"> Name </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4"> Email </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4"> Address </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4"> State </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4"> city </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4"> zip </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-3">
                                        <div>
                                            <p> {{ $orders->fname }} </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <p class=""> {{ $orders->email }} </p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class=""> {{ $orders->address }} </p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class=""> {{ $orders->state }} </p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class=""> {{ $orders->city }} </p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class=""> {{ $orders->zip }} </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>