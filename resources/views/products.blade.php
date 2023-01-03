@extends('layouts.apps')

@section('container')

@section('product', 'bg-amber-400 text-white')
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="text-center hero-section mt-5" data-type="type-1">
    <header class="entry-header">

        <nav class="ct-breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList"><span class="first-item"
                itemscope="" itemprop="itemListElement" itemtype="https://schema.org/ListItem">
                <meta itemprop="position" content="1"><a class="text-aku-suka font-medium" href="/"
                    itemprop="item"><span itemprop="name">Home </span></a>
                <meta itemprop="url" content="https://pilarbalifurnitures.com/"><span class="separator">/</span>
            </span><span class="last-item" itemscope="" itemprop="itemListElement"
                itemtype="https://schema.org/ListItem">
                <meta itemprop="position" content="2"><span itemprop="name"> Product</span>
                <meta itemprop="url" content="https://pilarbalifurnitures.com/contact-us-pilar-bali-furniture/">
            </span> </nav>

        <h1 class="mt-3 font-semibold font-serif page-title text-3xl" title="Contact us" itemprop="headline">All Product
        </h1>

    </header>
</div>
<div class="flex justify-end mt-5">
    <form style="" action="/product" role="search" class="form-inline w-25">
        <input name="search" id="search" type="search" placeholder="Search..." autofocus required />
        <button hidden type="submit" class="btn btn-outline-success">Search</button>
    </form>
</div>
<div class="bg-grey-100">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-xl font-bold text-gray-900">Our Products</h2>

        <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-3 xl:gap-x-8">
            @foreach ($products as $pro)

            <div>

                <a href="/product/{{$pro['id']}} ">
                    <div class="relative">

                        <div class="relative w-150 h-150 rounded-lg overflow-hidden">

                            {{-- <img src="/images/{{$pro['image']}}" class="w-full h-full object-center object-cover">
                            --}}
                            <img class="mx-auto" src="{{ asset('storage/' .$pro->image) }}">


                        </div>
                        <div class="relative mt-5 text-center">
                            <h1 class="text-sm font-medium text-gray-900">{{$pro['name']}}</h1>
                            <h3 class="text-sm pt-3 font-medium text-gray-900">${{$pro['price']}}</h3>

                            {{-- <h3 class="text-sm font-medium text-gray-900">${{$pro['price']}}</h3> --}}
                            {{-- @foreach($kayus as $kayu) --}}
                            {{-- <p class="mt-1 text-sm text-gray-500">{{$pro->kayu->kayu}}</p> --}}
                            {{-- @endforeach --}}
                            {{-- @foreach($warnas as $warna) --}}
                            {{-- <p class="mt-1 text-sm text-gray-500">{{$pro->warna->warna}}</p>
                            <p class="mt-1 text-sm text-gray-500">{{$pro->jenis->jenis}}</p> --}}

                            {{-- @endforeach --}}
                        </div>
                        {{-- <div class="absolute top-0 inset-x-0 h-72 rounded-lg p-4 flex items-end justify-end overflow-hidden">
                            <div aria-hidden="true"
                                class="absolute inset-x-0 bottom-0 h-36"></div>
                            <p class="relative text-lg font-semibold text-white">**</p>
                        </div> --}}
                    </div>
                </a>
                    <div class="mt-6">
                        <form action="{{url ('addcart', $pro->id)}}" method="POST">
                            @csrf
                            <input type="number" value="1" min="1" class="rounded-xl form-control mx-auto mb-3" style="width:80px"
                                name="quantity">
                            <a href="/product/{{$pro['id']}} ">
                                <button type="submit"
                                    class="mx-auto no-underline hover:bg-stone-700 mb-5 text-white relative flex bg-aku-suka border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium">Add</button>
                            </a>
                        </form>
                    </div>
            </div>
            <!-- More products... -->
            @endforeach
        </div>
    </div>

    <div class="mb-5 d-flex justify-content-center">
        {{$products->links()}}
    </div>
</div>

@include('layouts.footer')
@endsection