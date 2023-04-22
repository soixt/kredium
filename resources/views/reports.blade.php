<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <span class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Reports') }}
            </span>
            
            <div>
                <x-link download href="{{ route('products.export') }}" class="text-gray-500 transition-colors duration-200 hover:text-red-500 focus:outline-none bg-orange-700">
                    {{ __('Export') }}
                </x-link>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="container px-4 mx-auto">
                        <div class="flex items-center gap-x-3">
                            <h2 class="text-lg font-medium text-gray-800">Products</h2>
                    
                            <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full">{{ $products->count() }}</span>
                        </div>
                    
                        <div class="flex flex-col mt-6">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Product type</th>
                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Product value</th>
                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">Creation date</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @if ($products->count())
                                                    @foreach ($products as $product)
                                                        <tr>
                                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $product->type }}</td>
                                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $product->value }}</td>
                                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $product->date }}</td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="7" class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap text-center bg-white">There are zero products.</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                        {!! $products->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
