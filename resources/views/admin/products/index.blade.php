<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <!-- Table -->
                <div class='overflow-x-auto w-full'>

                    <button class="flex bg-black text-white px-4 py-2 my-4 float-right rounded">
                        <a href="/admin/product/create"> {{ __('Add Products') }}</a>
                    </button>
                    <table class='mx-auto w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                        <thead class="bg-gray-900">
                            <tr class="text-white text-left">
                                <th class="font-semibold text-sm uppercase px-6 py-4"> Id </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4"> Category Name </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4"> Name </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4"> Slug </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4 text-center">Short Desc </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Descr </th>
                                <!-- <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Image </th> -->
                                <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Regular price </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Sale price </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Quantity </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Action </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ( $products as $product )
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-3">

                                        <div>
                                            <p> {{ $product->id }} </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <p class=""> {{ $product->category->name }} </p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class=""> {{ $product->name }} </p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class=""> {{ $product->slug }} </p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class=""> {{ $product->short_description }} </p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class=""> {{ $product->description }} </p>
                                </td>
                                <!-- <td class="px-6 py-4">
                        <p class=""> {{ $product->image }} </p>
                    </td> -->
                                <td class="px-6 py-4">
                                    <p class=""> {{ $product->regular_price }} </p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class=""> {{ $product->sale_price }} </p>
                                </td>
                                <td class="px-6 py-4 text-center"> {{ $product->quantity }} </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <a href="{{route('admin.products.edit', ['id'=>$product->id] )}}" class="text-purple-800 hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <a href="{{route('admin.products.destroy', $product->id)}}" class="text-purple-800 hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </a>
                                        </div>
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