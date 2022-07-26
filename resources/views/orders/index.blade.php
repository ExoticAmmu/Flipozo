<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Orders') }}
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
                                <th class="font-semibold text-sm uppercase px-6 py-4"> Tracking Number </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4"> Total Price </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4"> Status </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4"> Action </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ( $orders as $item )
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-3">

                                        <div>
                                            <p> {{ $item->tracking_no }} </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <p class=""> {{ $item->total_price }} </p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class=""> {{ $item->status =='0' ?'pending' : 'completed' }} </p>
                                </td>
                                <td class="px-6 py-4">
                                <a href ="{{ url('view-order/'.$item->id) }}">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>