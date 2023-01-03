


@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- This example requires Tailwind CSS v2.0+ -->
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
                class="text-indigo-100 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
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
            <a target="_blank" href="/order"
                class="text-indigo-100 hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
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
  <div class="col-span-9 bg-grey-100">
    <section class=" bg-grey-100">
      <div class="w-full lg:w-4/12 px-4 mx-auto">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
          <div class="px-6">
            <div class="flex flex-wrap justify-center">
              <div class="w-full px-4 flex justify-center">
                <div class="relative">
                </div>
                <div class="w-full px-4 text-center mt-10">
                  <div class="flex justify-center py-4 lg:pt-4 pt-8">
                    <img src="/images/user.png" class="w-50">
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-12">
              <h3 class="text-xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                Hi, {{ Auth::user()->name }}
              </h3>
              <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                {{ Auth::user()->email }}
              </div>

            </div>
            <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
              <div class="flex flex-wrap justify-center">
                <div class="w-full lg:w-9/12 px-4">
                  <p class="mb-4 text-lg leading-relaxed text-blueGray-700">

                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="relative  pt-8 pb-6 mt-8">
        <div class="container mx-auto px-4">

        </div>
      </footer>
    </section>
  </div>
</div>
<div class="  "></div>
<div class="">
  @include('layouts.footer')
</div>