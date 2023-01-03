<!--
 This example requires Tailwind CSS v2.0+
 
 This example requires some changes to your config:
 
 ```
 // tailwind.config.js
 module.exports = {
 // ...
 plugins: [
 // ...
 require('@tailwindcss/forms'),
 ],
 }
 ```
-->
@extends('layouts.apps')

@section('container')

@section('product', 'bg-amber-400 text-white')
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="bg-white">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-0">
        <h1 class="text-3xl font-extrabold text-center tracking-tight text-gray-900 sm:text-4xl">Shopping Cart</h1>

        <form class="mt-12">
            <section aria-labelledby="cart-heading">
                <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>
                <?php
                    $total=0;
                ?>
                <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200">
                    @foreach ($cart as $c)
                        <?php
                            $subtotal = $c->price * $c->quantity;
                        ?>
                        <li class="flex py-6">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('storage/' .$c->image) }}"
                                    
                                    class="w-24 h-24 rounded-md object-center object-cover sm:w-32 sm:h-32">
                            </div>

                            <div class="ml-4 flex-1 flex flex-col sm:ml-6">
                                <div>
                                    <div class="flex justify-between">
                                        <h4 class="text-sm">
                                            <a href="#" class="font-medium text-gray-700 hover:text-gray-800">
                                                {{ $c->product_title }}
                                            </a>
                                        </h4>
                                        <p class="ml-4 text-sm font-medium text-gray-900">${{ $subtotal }}</p>
                                    </div>

                                    <div class="flex justify-between">
                                        <h4 class="text-sm">
                                            <a href="#" class="mt-1 text-sm text-gray-500"> Color
                                            </a>
                                        </h4>
                                        <p class="ml-4 text-sm font-medium text-gray-900">{{ $c->price }}</p>
                                    </div>

                                    <div class="flex justify-between">
                                        <h4 class="text-sm">
                                            <a href="#" class="mt-1 text-sm text-gray-500">Quantity
                                            </a>
                                        </h4>
                                        <p class="ml-4 text-sm font-medium text-gray-900">{{ $c->quantity }}</p>
                                    </div>

                                </div>

                                <div class="mt-4 flex-1 flex items-end justify-between">
                                    <p class="flex items-center text-sm text-gray-700 space-x-2">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-green-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>In stock</span>
                                    </p>
                                    <div class="ml-4">
                                        <a href="{{ url('deletecart', $c->id) }}">
                                            <button type="button"
                                                class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                                <span>Remove</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php
                        $total+=$subtotal;
                        ?> 
                    @endforeach



                    <!-- More products... -->
                </ul>
            </section>

            <!-- Order summary -->
            <section aria-labelledby="summary-heading" class="mt-10">
                <h2 id="summary-heading" class="sr-only">Order summary</h2>

                <div>
                    <dl class="space-y-4">
                        <div class="flex items-center justify-between">
                            <dt class="text-base font-medium text-gray-900">Subtotal</dt>
                            <dd class="ml-4 text-base font-medium text-gray-900">${{ $total }}</dd>
                        </div>
                    </dl>
                    <p class="mt-1 text-sm text-gray-500">Shipping and taxes will be calculated at checkout.</p>
                </div>

                <div class="mt-10">
                    <a href="/checkout">
                        <button type="button" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Checkout</button>
                    </a>
                </div>

                <div class="mt-6 text-sm text-center">
                    <p>
                        or <a href="/product" class="text-indigo-600 font-medium hover:text-indigo-500">Continue
                            Shopping<span aria-hidden="true"> &rarr;</span></a>
                    </p>
                </div>
            </section>
        </form>
    </div>
</div>
@include('layouts.footer')
@endsection