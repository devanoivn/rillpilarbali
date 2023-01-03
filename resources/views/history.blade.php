@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="grid grid-cols-11 bg-grey-100 ">

    <div class="col-span-2 bg-indigo-700">
        <div class="pt-5 mb-5 overflow-y-auto">
            <nav class=" flex-1 px-2" aria-label="Sidebar">
                <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600 hover:bg-opacity-75" -->
                <a href="/"
                    class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <!-- Heroicon name: outline/home -->
                    <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="flex-1"> Back to home </span>
                </a>

                <a href="{{route('profile.edit')}}"
                    class="text-indigo-100 hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <!-- Heroicon name: outline/users -->
                    <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span class="flex-1"> Edit </span>

                    <!-- Current: "bg-indigo-600", Default: "bg-indigo-800" -->
                    <span class="ml-3  py-0.5 px-3 text-xs font-medium rounded-full"></span>
                </a>

                <a target="_blank" href="/cart"
                    class="text-indigo-100 hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <!-- Heroicon name: outline/folder -->
                    <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                    </svg>
                    <span class="flex-1"> Cart </span>

                    <span class=" ml-3 inline-block py-0.5 px-3 text-xs font-medium rounded-full"> </span>
                </a>
                <a target="_blank" href="/cart"
                    class="bg-indigo-800 text-indigo-100 hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <!-- Heroicon name: outline/chart-bar -->
                    <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    <span class="flex-1"> Order</span>
                </a>



            </nav>
        </div>
        <div class="pt-5 flex-shrink-0 flex border-t border-indigo-800 p-4">
            <a href="/logout" class="flex-shrink-0 w-full group block">
                @method('POST')
                <div class="flex items-center">
                    <div>
                        <img class="inline-block h-9 w-9 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </div>
                    <div class="ml-3">
                        @auth
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit"
                                class="relative inline-flex items-center px-4 py-2  text-sm font-medium rounded-md text-white  hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">Log
                                Out</button>
                        </form>
                        @endauth
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class=" col-span-9 bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:pb-24 lg:px-8">
            <div class="max-w-xl">
                <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">Order history</h1>
                <p class="mt-2 text-sm text-gray-500">Check the status of recent orders, manage returns, and download
                    invoices.</p>
            </div>

            <div class="mt-16">
                <h2 class="sr-only">Recent orders</h2>

                <div class="space-y-20">
                    <div>
                        <h3 class="sr-only">Order placed on <time datetime="2021-01-22">January 22, 2021</time></h3>

                        <div
                            class="bg-gray-50 rounded-lg py-6 px-4 sm:px-6 sm:flex sm:items-center sm:justify-between sm:space-x-6 lg:space-x-8">
                            <dl
                                class="divide-y divide-gray-200 space-y-6 text-sm text-gray-600 flex-auto sm:divide-y-0 sm:space-y-0 sm:grid sm:grid-cols-3 sm:gap-x-6 lg:w-1/2 lg:flex-none lg:gap-x-8">
                                <div class="flex justify-between sm:block">
                                    <dt class="font-medium text-gray-900">Date placed</dt>
                                    <dd class="sm:mt-1">
                                        <time datetime="2021-01-22">January 22, 2021</time>
                                    </dd>
                                </div>
                                <div class="flex justify-between pt-6 sm:block sm:pt-0">
                                    <dt class="font-medium text-gray-900">Order number</dt>
                                    <dd class="sm:mt-1">WU88191111</dd>
                                </div>
                                <div class="flex justify-between pt-6 font-medium text-gray-900 sm:block sm:pt-0">
                                    <dt>Total amount</dt>
                                    <dd class="sm:mt-1">$238.00</dd>
                                </div>
                            </dl>
                            <a href="#"
                                class="w-full flex items-center justify-center bg-white mt-6 py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:w-auto sm:mt-0">
                                View Invoice
                                <span class="sr-only">for order WU88191111</span>
                            </a>
                        </div>

                        <table class="mt-4 w-full text-gray-500 sm:mt-6">
                            <caption class="sr-only">
                                Products
                            </caption>
                            <thead class="sr-only text-sm text-gray-500 text-left sm:not-sr-only">
                                <tr>
                                    <th scope="col" class="sm:w-2/5 lg:w-1/3 pr-8 py-3 font-normal">Product</th>
                                    <th scope="col" class="hidden w-1/5 pr-8 py-3 font-normal sm:table-cell">Price</th>
                                    <th scope="col" class="hidden pr-8 py-3 font-normal sm:table-cell">Status</th>
                                    <th scope="col" class="w-0 py-3 font-normal text-right">Info</th>
                                </tr>
                            </thead>
                            <tbody class="border-b border-gray-200 divide-y divide-gray-200 text-sm sm:border-t">
                                <tr>
                                    <td class="py-6 pr-8">
                                        <div class="flex items-center">
                                            <img src="https://tailwindui.com/img/ecommerce-images/order-history-page-02-product-01.jpg"
                                                alt="Detail of mechanical pencil tip with machined black steel shaft and chrome lead tip."
                                                class="w-16 h-16 object-center object-cover rounded mr-6">
                                            <div>
                                                <div class="font-medium text-gray-900">Machined Pen and Pencil Set</div>
                                                <div class="mt-1 sm:hidden">$70.00</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="hidden py-6 pr-8 sm:table-cell">$70.00</td>
                                    <td class="hidden py-6 pr-8 sm:table-cell">Delivered Jan 25, 2021</td>
                                    <td class="py-6 font-medium text-right whitespace-nowrap">
                                        <a href="#" class="text-indigo-600">View<span class="hidden lg:inline">
                                                Product</span><span class="sr-only">, Machined Pen and Pencil
                                                Set</span></a>
                                    </td>
                                </tr>

                                <!-- More products... -->
                            </tbody>
                        </table>
                    </div>

                    <!-- More orders... -->
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="">
        @include('layouts.footer')
    </div>