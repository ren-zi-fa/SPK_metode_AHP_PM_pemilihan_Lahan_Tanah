<x-app-layout>
    @section('title', 'My Favorite')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('My Favorite') }}
            </h2>

        </div>
    </x-slot>
    <p class="text-gray-500 dark:text-white font-medium text-lg mb-4">Hello <span class="text-red-600">{{
            auth()->user()->name }}</span>,Disini Kamu Bisa Atur Favorite Mu </p>

    <a class="text-white bg-gradient-to-r mt-4 from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
        href="{{ route('search.index') }}">
        <x-eos-add class="flex-shrink-0 w-6 h-6 text-gray-200 inline-block" /> Add Product
    </a>
    <div class="relative overflow-x-auto">

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-4">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama </th>
                    <th scope="col" class="px-6 py-3">Harga</th>
                    <th scope="col" class="px-6 py-3">Deskripsi</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            @foreach ($products as $product)
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="col" class="px-6 py-3">{{ ++$i }}</td>
                    <td class="px-6 py-4"><x-eos-products class="flex-shrink-0 w-6 h-6 inline-block text-green-600" /> {{ $product->name }}</td>
                    <td class="px-6 py-4"> Rp{{ number_format($product->harga,0,",",".") }}</td>
                    <td class="px-6 py-4">{{ $product->detail }}</td>
                    <td class="px-6 py-4">
                        <form action="{{ route('myfavorites.destroy',$product->id) }}" method="POST">
                            <a class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" href="{{ route('myfavorites.show',$product->id) }}">Detail</a>
    
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 inline-block">Remove</button>
    
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</x-app-layout>