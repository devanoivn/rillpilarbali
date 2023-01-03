@extends('layouts.apps')

@section('container')
@section('welcome', 'bg-amber-400 text-white')
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="bg-gray-100">
    <main>
        <!-- Hero section -->
        <div class="relative">

            <div class="mt-5 mx-auto sm:px-6 lg:px-8">
                <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                    <div class="absolute inset-0">
                        <img class="h-full w-full object-cover" src="images/22.png" alt="People working on laptops">
                        <div class="absolute inset-0 from-purple-800 to-indigo-700 mix-blend-multiply"></div>
                    </div>
                    <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                        <p class="mb-10 text-amber-300">NEW COLLECTION</p>
                        <h3 class="text-left text-4xl font-extrabold tracking-tight sm:text-4xl lg:text-5xl">
                            <span class="block text-white font-serif">Teak wood furniture that is beautiful</span>
                            <span class="block text-white font-serif">and has the best quality</span>
                        </h3>
                        <p class="mt-6 max-w-lg text-left text-xl text-amber-700 sm:max-w-3xl text-white">You can customize the
                            goods according to your wishes</p>
                        <div class="mt-10 max-w-sm sm:max-w-none sm:flex ">
                            <div class="space-y-4 sm:space-y-0  sm:inline-grid sm:grid-cols-2 sm:gap-5">
                                <a target="_blank"
                                    href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=pilarbalifurniture@gmail.com"
                                    class="flex items-left px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-black bg-amber-300 hover:bg-amber-100 sm:px-8">
                                    Get started </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Cloud -->
        <div class="bg-gray-100">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                <p class="text-center text-sm font-semibold uppercase text-gray-500 tracking-wide">Trusted by over 3
                     large businesses</p>
                <div class="flex justify-center items-center">
                    <div class="mt-6 grid grid-cols-3 gap-60 md:grid-cols-3 lg:grid-cols-3">
                        <div>
                            <div class="col-span-2 flex justify-center md:col-span-2 lg:col-span-1">
                                <img class="h-12"
                                    src="https://pilarbalifurnitures.com/wp-content/uploads/2021/04/icon-warranty.svg"
                                    alt="Mirage">
                            </div>
                            <div class="mt-5">
                                <h3 class="text-center">Pilar Bali use high quality and dry teak wood, during
                                    manufacture we use an oven to make the wood drier</h3>
                            </div>
                        </div>
                        <div>
                            <div class="col-span-1 flex justify-center md:col-span-2 md:col-start-2 lg:col-span-1">
                                <img class="h-12"
                                    src="https://pilarbalifurnitures.com/wp-content/uploads/2021/04/icon-delivery.svg"
                                    alt="Transistor">
                            </div>
                            <div class="mt-5">
                                <h3 class="text-center">Pilar Bali use high quality and dry teak wood, during
                                    manufacture we use an oven to make the wood drier</h3>
                            </div>
                        </div>
                        <div>
                            <div class="col-span-2 flex justify-center md:col-span-2 md:col-start-4 lg:col-span-1">
                                <img class="h-12"
                                    src="https://pilarbalifurnitures.com/wp-content/uploads/2021/04/icon-quality.svg"
                                    alt="Workcation">

                            </div>
                            <div class="mt-5">
                                <h3 class="text-center">Pilar Bali use high quality and dry teak wood, during
                                    manufacture we use an oven to make the wood drier</h3>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>

        <section aria-labelledby="category-heading" class="pt-5 sm:pt-5 xl:max-w-7xl xl:mx-auto xl:px-8">
            <div class="px-4 sm:px-6 sm:flex sm:items-center sm:justify-between lg:px-8 xl:px-0">
                <h2 id="category-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Shop by Category
                </h2>
            </div>

            <div class="mt-4 flow-root">
                <div class="-my-2">
                    <div class="box-content py-2 relative h-80 overflow-x-auto xl:overflow-visible">
                        <div
                            class="absolute min-w-screen-xl px-4 flex space-x-8 sm:px-6 lg:px-8 xl:relative xl:px-0 xl:space-x-0 xl:grid xl:grid-cols-4 xl:gap-x-8">
                            <a name="chair"href="/product?search=kursi"
                                class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                                <span aria-hidden="true" class="absolute inset-0">
                                    <img src="/images/kursi.png"
                                        alt="" class="w-full h-full object-center object-cover">
                                </span>
                                <span aria-hidden="true"
                                    class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span class="relative mt-auto text-center text-xl font-bold text-white">Chair</span>
                            </a>

                            <a href="/product?search=meja"
                                class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                                <span aria-hidden="true" class="absolute inset-0">
                                    <img src="/images/meja.png"
                                        alt="" class="w-full h-full object-center object-cover">
                                </span>
                                <span aria-hidden="true"
                                    class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span class="relative mt-auto text-center text-xl font-bold text-white">Table</span>
                            </a>

                            <a href="/product?search=sofa"
                                class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                                <span aria-hidden="true" class="absolute inset-0">
                                    <img src="/images/sofa.png"
                                        alt="" class="w-full h-full object-center object-cover">
                                </span>
                                <span aria-hidden="true"
                                    class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span class="relative mt-auto text-center text-xl font-bold text-white">Sofa</span>
                            </a>

                            <a href="/product?search=lemari"
                                class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                                <span aria-hidden="true" class="absolute inset-0">
                                    <img src="/images/lemari.png"
                                        alt="" class="w-full h-full object-center object-cover">
                                </span>
                                <span aria-hidden="true"
                                    class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span class="relative mt-auto text-center text-xl font-bold text-white">Wardrobe</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section aria-labelledby="trending-heading">




            <!-- Trending products -->
            <section aria-labelledby="trending-heading" class="bg-grey mt-3">
                <div class="py-16 sm:py-24 lg:max-w-7xl lg:mx-auto lg:py-32 lg:px-8">
                    <div class="px-4 flex items-center justify-between sm:px-6 lg:px-0">
                        <h2 id="trending-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">
                            Trending products</h2>
                        <a href="#"
                            class="hidden sm:block text-sm font-semibold text-indigo-600 hover:text-indigo-500">See
                            everything<span aria-hidden="true"> &rarr;</span></a>
                    </div>

                    <div class="mt-8 relative">
                        <div class="relative w-full overflow-x-auto">
                            <ul role="list"
                                class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:space-x-0 lg:grid lg:grid-cols-4 lg:gap-x-8">
                                @foreach ($products as $pro)

                                <li class="w-64 inline-flex flex-col text-center lg:w-auto">

                                    <div class="group relative">

                                        <div
                                            class="w-full bg-gray-200 rounded-md overflow-hidden aspect-w-1 aspect-h-1">
                                            <a href="/product/{{$pro['id']}} ">
                                                <img class="w-full h-auto"
                                                    src="{{ asset('storage/' .$pro->image) }}"></a>
                                        </div>
                                        <div class="mt-6">
                                            <p class="text-sm text-gray-500"> {{$pro['name']}}</p>
                                        </div>
                                    </div>

                                </li>
                                @endforeach

                            </ul>

                        </div>
                    </div>

                    <div class="mt-12 px-4 sm:hidden">
                        <a href="/product" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">Check All
                            Products<span aria-hidden="true"> &rarr;</span></a>
                    </div>
                </div>
            </section>

            <!-- Sale and testimonials -->
            <div class="relative overflow-hidden">
                <!-- Decorative background image and gradient -->
                <div aria-hidden="true" class="absolute inset-0">
                    <div class="absolute inset-0 max-w-7xl mx-auto overflow-hidden xl:px-8">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-sale-full-width.jpg" alt=""
                            class="w-full h-full object-center object-cover">
                    </div>
                    <div class="absolute inset-0 bg-white bg-opacity-75"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-white via-white"></div>
                </div>

                <!-- Sale -->
                
                {{-- <div class="bg-white">
                    <div aria-hidden="true" class="relative">
                    <img src="/storage/product/vmPX6VsSD2WzouWOE8CT6RFtUdDQgekrKTWAZ0Iu.jpg" alt="" class="w-full h-96 object-center object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-white"></div>
                    </div>
                   
                    <div class="relative -mt-12 max-w-7xl mx-auto pb-16 px-4 sm:pb-24 sm:px-6 lg:px-8">
                    <div class="max-w-2xl mx-auto text-center lg:max-w-4xl">
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Check Out Now</h2>
                    <p class="mt-4 text-gray-500">Get
                        10% off during our one-time sale. Check Out Our New Arrivals And Get A
                        Special 10% Off Only Available December 1st - December 31st.</p>
                    </div>
                    </div> --}}

                    <div class="relative mt-0">
                        <div class="absolute inset-0">
                          <img class="h-full w-full object-cover" src="https://demo.creativethemes.com/elementor/homi/wp-content/uploads/2021/04/subscribe-section-bg@2x.jpg" alt="" />
                          <div class="absolute inset-0 bg-indigo-200 mix-blend-multiply" aria-hidden="true"></div>
                        </div>
                        <div class="relative mx-auto max-w-7xl py-24 px-4 sm:py-32">
                            <p class="mt-6 max-w-3xl text-center mx-auto text-xl text-indigo-100">Get
                                10% off during our one-time sale. Check Out Our New Arrivals And Get A
                                Special 10% Off Only Available December 1st - December 31st.</p>
                        </div>
                      </div>

                <!-- Testimonials -->
                <section aria-labelledby="testimonial-heading"
                    class="relative py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:py-32 lg:px-8">
                    <div class="max-w-2xl mx-auto lg:max-w-none">
                        <h2 id="testimonial-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">
                            What are customer saying?</h2>

                        <div class="mt-16 space-y-16 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-8">
                            <blockquote class="sm:flex lg:block">
                                <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                    <path
                                        d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z"
                                        fill="currentColor" />
                                </svg>
                                <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                                    <p class="text-lg text-gray-600">Highly recommended when you find some stuff and
                                        furniture for your house, vila, coffee shop, or even your hotel maybe.. Best
                                        regards from Gemolong.</p>
                                    <cite class="mt-4 block font-semibold not-italic text-gray-900"> Hidayat Wahyu
                                        Awaluddin </cite>
                                </div>
                            </blockquote>

                            <blockquote class="sm:flex lg:block">
                                <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                    <path
                                        d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z"
                                        fill="currentColor" />
                                </svg>
                                <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                                    <p class="text-lg text-gray-600">Pilar Bali was so great make the custom order, take
                                        a look at this finished jewelery stand, how beautiful it is and very much
                                        exceeded my expectations, I am very satisfied and recommend you all!!!</p>
                                    <cite class="mt-4 block font-semibold not-italic text-gray-900"> Fidelya Zanna
                                    </cite>
                                </div>
                            </blockquote>

                            <blockquote class="sm:flex lg:block">
                                <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                    <path
                                        d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z"
                                        fill="currentColor" />
                                </svg>
                                <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                                    <p class="text-lg text-gray-600">Fantastic service provided by Penny. Great
                                        communication and delivered exactly what we wanted. Great quality and good
                                        price. I highly recommend Pilar Bali Furniture👍🏼.</p>
                                    <cite class="mt-4 block font-semibold not-italic text-gray-900"> Nina Dattani
                                    </cite>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </section>
            </div>
    </main>

    <div class="mt-12 px-4 sm:hidden">
        <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">See
            everything<span aria-hidden="true"> &rarr;</span></a>
    </div>
</div>
</section>

</div>
@include('layouts.footer')
@endsection