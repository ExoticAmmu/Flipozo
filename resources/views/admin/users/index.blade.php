<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Page') }}
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
                                <th class="font-semibold text-sm uppercase px-6 py-4"> Id </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4"> Name </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Email </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Action </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ( $users as $item )
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-3">

                                        <div>
                                            <p> {{ $item->id }} </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <p class=""> {{ $item->name }} </p>
                                </td>
                                <td class="px-6 py-4 text-center"> {{ $item->email }} </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex item-center justify-center">
                                        <a href ="{{ url('admin/view-user/'.$item->id) }}">View</a>
                                            </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>