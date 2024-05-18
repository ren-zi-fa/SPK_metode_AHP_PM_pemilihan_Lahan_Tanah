<x-app-layout>
    @section('title', 'My Favorite')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Cari Tanah') }}
            </h2>

        </div>
    </x-slot>
    <p class="text-gray-500 dark:text-white font-medium text-lg mb-4">Hello <span class="text-red-600">{{
            auth()->user()->name }}</span>, Disini Kamu Bisa Cari Seperti Apa Tanah Yang Kamu Inginkan</p>

  
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
                        @if ( !($product->fav_product_id) )

                        <form action="{{ route('myfavorites.store',$product->id) }}" method="POST">
                            <a class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" href="{{ route('search.show',$product->id) }}">Detail</a>
            
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            @csrf
                            <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">  <x-eos-star-purple500-o class="flex-shrink-0 w-5 h-5 inline-block " />Add to favorite</button>
                          
                        </form>
                    @else
                        <form action="{{ route('myfavorites.destroy',$product->id) }}" method="POST">
                            
                            <a class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" href="{{ route('search.show',$product->id) }}">Detail</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline"> <x-eos-delete  class="flex-shrink-0 w-5 h-5 inline-block " /> Remove from favorite</button>
            
                        </form>  
                    @endif
            
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</x-app-layout>