@extends('layouts.apps')

@section('container')
@section('product', 'bg-amber-400 text-gray-100 text-white')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="bg-white">
  <div class="mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <!-- Product -->
    <div class="lg:grid lg:grid-rows-1 lg:grid-cols-7 lg:gap-x-8 lg:gap-y-10 xl:gap-x-16">
      <!-- Product image -->
      <div class="lg:row-end-1 lg:col-span-4">
        <div class="aspect-w-4 aspect-h-3 rounded-lg bg-gray-100 overflow-hidden">
          <img src="{{ asset('storage/' .$product->image) }}"
            alt="Sample of 30 icons with friendly and fun details in outline, filled, and brand color styles."
            class="object-center object-cover">
        </div>
      </div>

      <!-- Product details -->
      <div class="max-w-2xl mx-auto mt-14 sm:mt-16 lg:max-w-none lg:mt-0 lg:row-end-2 lg:row-span-2 lg:col-span-3">
        <div class="flex flex-col-reverse">
          <div class="mt-4">
            <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">{{$product->name}}</h1>

          </div>

          <div>
            <h3 class="sr-only">Reviews</h3>
            <div class="flex items-center">
              <!--
  Heroicon name: solid/star
 
  Active: "text-yellow-400", Default: "text-gray-300"
  -->
              <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>

              <!-- Heroicon name: solid/star -->
              <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>

              <!-- Heroicon name: solid/star -->
              <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>

              <!-- Heroicon name: solid/star -->
              <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>

              <!-- Heroicon name: solid/star -->
              <svg class="text-gray-300 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>
            </div>
            <p class="sr-only">4 out of 5 stars</p>
          </div>
        </div>

        <h2 class="mt-4 text-xl font-bold">${{$product['price']}}</h2>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
          <button type="button"
            class="w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Add To Cart</button>
          </div>

        <div class="border-t border-gray-200 mt-10 pt-10">
          <h3 class="text-sm font-medium text-gray-900">Detail Product</h3>
          <div class="mt-4 prose prose-sm text-gray-500">
            <ul role="list">
              <li>Category : {{$product->jenis->jenis}}</li>
              <li>Material : {{$product->kayu->kayu}}</li>
              <li>Color : {{$product->warna->warna}}</li>
            </ul>
          </div>
        </div>

        <div class="border-t border-gray-200 mt-10 pt-10">
          <h3 class="text-sm font-medium text-gray-900">Description</h3>
          <p class="mt-4 font-medium text text-sm text-indigo-600">{{$product['deskripsi']}} </p>
        </div>

        
      </div>

        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')
@endsection