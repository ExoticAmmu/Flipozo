<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create Products') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 rounded">


      <div class="mt-10 sm:mt-0">
        <div class="md:grid md:gap-6">
          <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{route('admin.products.create')}}" method="POST">
              @csrf
              <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">
                      <label for="first-name" class="block text-sm font-medium text-gray-700">Product name</label>
                      <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6">
                      <label for="first-name" class="block text-sm font-medium text-gray-700">Slug</label>
                      <input type="text" name="slug" id="slug" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6">
                      <label for="last-name" class="block text-sm font-medium text-gray-700">Short Description</label>
                      <textarea name="short_description" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="2"></textarea>
                    </div>

                    <div class="col-span-6">
                      <label for="email-address" class="block text-sm font-medium text-gray-700">Description</label>
                      <textarea name="description" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"></textarea>
                    </div>

                    <div class="col-span-6">
                      <label for="country" class="block text-sm font-medium text-gray-700">Category</label>
                      <select id="category_id" name="category_id" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @foreach ( $category as $category )
                        <option value="{{ $category->id }}"> {{$category->name}} </option>
                        @endforeach
                      </select>
                    </div>

                    <!-- <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" id="image">
              </div> -->

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                      <label for="city" class="block text-sm font-medium text-gray-700">Regular Price</label>
                      <input type="text" name="regular_price" id="regular_price" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                      <label for="region" class="block text-sm font-medium text-gray-700">Sales Price</label>
                      <input type="text" name="sale_price" id="sale_price" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                      <label for="street-address" class="block text-sm font-medium text-gray-700">Quantity</label>
                      <input type="text" name="quantity" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                      <label for="postal-code" class="block text-sm font-medium text-gray-700">Meta Titles</label>
                      <input type="text" name="meta_title" id="postal-code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                      <label for="postal-code" class="block text-sm font-medium text-gray-700">Meta Description</label>
                      <input type="text" name="meta_description" id="postal-code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                  </div>
                </div>

                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>


    </div>
  </div>
</x-admin-layout>