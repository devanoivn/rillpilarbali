@extends('layouts.apps')

@section('container')

@section('product', 'bg-amber-400 text-white')
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="flex-shrink-0">
    <form action="/product" role="search">
        <input name="search" id="search" type="search" placeholder="Search..." autofocus required />
        <button type="submit" class="btn btn-outline-success">Search</button>
    </form>
</div>
<div class="bg-grey-100">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-xl font-bold text-gray-900">Customers also bought</h2>

        <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($products as $pro)

            <div>


                <div class="relative">
                    <div class="relative w-full h-72 rounded-lg overflow-hidden">

                        <a href="/product/{{$pro['id']}} ">
                            {{-- <img src="/images/{{$pro['image']}}" class="w-full h-full object-center object-cover">
                            --}}
                            <img src="{{ asset('storage/' .$pro->Product) }}">

                        </a>

                    </div>
                    <div class="relative mt-4">
                        <h3 class="text-sm font-medium text-gray-900">{{$pro['name']}}</h3>
                        {{-- @foreach($kayus as $kayu) --}}
                        <p class="mt-1 text-sm text-gray-500">{{$pro->kayu->kayu}}</p>
                        {{-- @endforeach --}}
                        {{-- @foreach($warnas as $warna) --}}
                        <p class="mt-1 text-sm text-gray-500">{{$pro->warna->warna}}</p>
                        <p class="mt-1 text-sm text-gray-500">{{$pro->jenis->jenis}}</p>

                        {{-- @endforeach --}}
                    </div>
                    <div
                        class="absolute top-0 inset-x-0 h-72 rounded-lg p-4 flex items-end justify-end overflow-hidden">
                        <div aria-hidden="true"
                            class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                        <p class="relative text-lg font-semibold text-white">${{$pro['price']}}</p>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="/product/{{$pro['id']}} "
                        class="relative flex bg-gray-400 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-gray-900 hover:bg-gray-200">Add
                        to bag<span class="sr-only">, Zip Tote Basket</span>
                    </a>
                </div>
            </div>



            <!-- More products... -->
            @endforeach

        </div>
    </div>

</div>
@include('layouts.footer')
@endsection