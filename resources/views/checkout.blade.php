@extends('layouts.apps')

@section('container')

@section('product', 'bg-amber-400 text-white')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="mx-auto mt-10">
    <h1 class="text-3xl font-bold font-serif text-center">CHECK OUT</h1>
</div>
<br>
<div style="" class="flex justify-center">
<form method="POST" action="{{ route('checkouts.store') }}" class="w-full max-w-lg ml-10 first-letter:mt-5">
    @csrf

   
        <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>
        <?php
        $total = 0;
        ?>
        <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200">
            @foreach ($cart as $c)
            <?php
                $subtotal = $c->price * $c->quantity;
                ?>
            <li class="flex py-6">
                <div class="flex-shrink-0">
                    <img src="{{ asset('storage/' .$c->image) }}"
                        alt="Front side of mint cotton t-shirt with wavey lines pattern."
                        class="w-24 h-24 rounded-md object-center object-cover sm:w-32 sm:h-32">
                </div>

                <div class="ml-4 flex-1 flex flex-col sm:ml-6">
                    <div>
                        <div class="flex justify-between">
                            <h4 class="text-sm">

                                <input name="product_name" style="border:0;outline:0;"
                                    class="bg- bg-transparent text-sm font-medium text-gray-900" type="text" readonly
                                    value="{{ $c->product_title }}">
                            </h4>
                            <input name="subtotal" style="border:0;outline:0;"
                                class="bg- bg-transparent text-sm font-medium text-gray-900" type="text" readonly
                                value="${{ $subtotal }}">

                        </div>

                        <div class="flex justify-between">
                            <h4 class="text-sm">
                                <input style="border:0;outline:0;"
                                    class="bg- bg-transparent text-sm font-medium text-gray-900" type="text" readonly
                                    value="Price">

                            </h4>
                            <input name="price" style="border:0;outline:0;"
                                class="bg- bg-transparent text-sm font-medium text-gray-900" type="text" readonly
                                value="${{ $c->price }}">
                        </div>

                        <div class="flex justify-between">
                            <h4 class="text-sm">
                                <input style="border:0;outline:0;"
                                    class="bg- bg-transparent text-sm font-medium text-gray-900" type="text" readonly
                                    value="Quantity">

                            </h4>
                            <input name="quantity" style="border:0;outline:0;"
                                class="bg- bg-transparent text-sm font-medium text-gray-900" type="text" readonly
                                value="{{ $c->quantity }}">


                        </div>

                    </div>

                    <div class="mt-4 flex-1 flex items-end justify-between">
                        <p class="flex items-center text-sm text-gray-700 space-x-2">
                            <!-- Heroicon name: solid/check -->
                            <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>In stock</span>
                        </p>
                        <div class="ml-4">
                            <a href="{{ url('deletecart', $c->id) }}">
                                <button type="button" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                    <span>Remove</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <?php
                $total += $subtotal;
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
                        <input name="total" style="border:0;outline:0;"
                            class="bg- bg-transparent text-sm font-medium text-gray-900" type="text" readonly
                            value="${{ $total }}">
                    </div>
                </dl>
                <p class="mt-1 text-sm text-gray-500">Shipping and taxes will be calculated at checkout.</p>
            </div>
        </section>

        <div class="mt-5 -mx-3 mb-6 flex flex-wrap">
            <div class="w-full px-3">
                <label class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-700" for="grid-name">
                    Name </label>
                <input value="{{ Auth::user()->name }}" required name="name"
                    class="mb-3 block w-full appearance-none rounded border border-gray-200 bg-gray-200 py-3 px-4 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                    id="name" type="text" />
            </div>
        </div>
        <div class="-mx-3 mb-6 flex flex-wrap">
            <div class="w-full px-3">
                <label class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-700" for="grid-email">
                    Email </label>
                <input value="{{ Auth::user()->email }}" name="email"
                    class="mb-3 block w-full appearance-none rounded border border-gray-200 bg-gray-200 py-3 px-4 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                    id="grid-email" type="email" />
            </div>
        </div>
        <div class="-mx-3 mb-6 flex flex-wrap">
            <div class="w-full px-3">
                <label class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-700" for="grid-email">
                    Phone </label>
                <input required name="phone"
                    class="mb-3 block w-full appearance-none rounded border border-gray-200 bg-gray-200 py-3 px-4 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                    id="grid-password" type="text" />
            </div>
        </div>
        <div class="-mx-3 mb-6 flex flex-wrap">
            <div class="w-full px-3">
                <label class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-700" for="grid-address">
                    Address </label>
                <input required name="address"
                    class="mb-3 block w-full appearance-none rounded border border-gray-200 bg-gray-200 py-3 px-4 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                    id="grid-password" type="text" />
            </div>
        </div>
        <div class="-mx-3 mb-2 flex flex-wrap">
            <div class="mb-6 w-full px-3 md:mb-0 md:w-1/3">
                <label class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-700" for="grid-city">
                    City </label>
                <input required name="city"
                    class="block w-full appearance-none rounded border border-gray-200 bg-gray-200 py-3 px-4 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                    id="grid-city" type="text" />
            </div>
            <div class="mb-6 w-full px-3 md:mb-0 md:w-1/3">
                <label class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-700" for="grid-state">
                    Province </label>
                <input required name="province"
                    class="block w-full appearance-none rounded border border-gray-200 bg-gray-200 py-3 px-4 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                    id="grid-city" type="text" />
            </div>
            <div class="mb-6 w-full px-3 md:mb-0 md:w-1/3">
                <label class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-700" for="grid-zip">
                    Zip Code </label>
                <input required name="zip"
                    class="block w-full appearance-none rounded border border-gray-200 bg-gray-200 py-3 px-4 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                    id="grid-zip" type="number" />
            </div>
            <div class="mt-6">
                <div class="mx-3 mb-6 flex flex-wrap">
                    <label class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-700" for="grid-ei">
                        Extra
                        Information </label>
                    <textarea id="about" name="deskripsi" rows="3"
                        class="mt-1 block w-full rounded-md border-gray-200 bg-gray-200 shadow-sm sm:text-sm"></textarea>
                </div>
            </div>
            <div class="mt-6 mx-3 md:w-2/3 ">

                <button
                    class="text-center focus:shadow-outline rounded bg-amber-500 py-2 px-4 font-bold text-white shadow hover:bg-amber-400 focus:outline-none"
                    type="submit">Check Out</button>

            </div>
        </div>

</form>
</div>

@endsection