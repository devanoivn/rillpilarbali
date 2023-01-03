@if (Auth::check()&& Auth::user()->status == 'member')
<main class="min-h-full bg-cover bg-top sm:bg-top"
    style="background-image: url('https://images.unsplash.com/photo-1545972154-9bb223aac798?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=3050&q=80&exp=8&con=-15&sat=-75')">
    <div class="max-w-7xl mx-auto px-4 py-16 text-center sm:px-6 sm:py-24 lg:px-8 lg:py-48">
        <p class="text-sm font-semibold text-black text-opacity-50 uppercase tracking-wide">404 error</p>
        <h1 class="mt-2 text-4xl font-extrabold text-white tracking-tight sm:text-5xl">Uh oh! I think you’re lost.</h1>
        <p class="mt-2 text-lg font-medium text-black text-opacity-50">It looks like the page you’re looking for doesn't
            exist.</p>
        <div class="mt-6">
            <a href="/"
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-black text-opacity-75 bg-white bg-opacity-75 sm:bg-opacity-25 sm:hover:bg-opacity-50">
                Go back home </a>
        </div>
    </div>
</main>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

@section('welcome', 'bg-white text-aku-suka')
@vite(['resources/css/app.css', 'resources/js/app.js'])
@if (Auth::check()&& Auth::user()->status == 'admin')
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-5">
        <h1 class="text-lg leading-6 font-medium text-gray-900">Add New Product</h1>
    </div>
    {{-- <div class="mb-3">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
        @if($errors->has('name'))
        <p class="text-danger">{{ $errors->first('name') }}</p>
        @endif
    </div> --}}
    <div class="mb-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
        <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Product Name
        </label>
        <div class="mt-1 sm:mt-0 sm:col-span-2">
            <div class="max-w-lg flex rounded-md shadow-sm">

                <input type="text" name="name" id="username" autocomplete="username"
                    class="form-control flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                @if($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
                @endif
            </div>
        </div>
    </div>
    <div class="mb-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
        <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Category
        </label>
        <div class="mt-1 sm:mt-0 sm:col-span-2">
            <div class="max-w-lg flex rounded-md shadow-sm">
                <select name="jenis_id"
                    class="form-select flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                    @foreach($jenis as $jen)
                    <option value="{{$jen['id']}}">{{$jen['jenis']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    {{-- <div class="mb-3">
        <label for="">Category</label>
        <select name="jenis_id" class="form-select">
            @foreach($jenis as $jen)
            <option value="{{$jen['id']}}">{{$jen['jenis']}}</option>
            @endforeach
        </select>
    </div> --}}<div class="mb-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
        <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Material Wood
        </label>
        <div class="mt-1 sm:mt-0 sm:col-span-2">
            <div class="max-w-lg flex rounded-md shadow-sm">
                <select name="kayu_id"
                    class="form-select flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                    @foreach($kayus as $kayu)
                    <option value="{{$kayu['id']}}">{{$kayu['kayu']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    {{-- <div class="mb-3">
        <label for="">Material</label>
        <select name="kayu_id" class="form-select">
            @foreach($kayus as $kayu)
            <option value="{{$kayu['id']}}">{{$kayu['kayu']}}</option>
            @endforeach
        </select>
    </div> --}}
    <div class="mb-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
        <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Color
        </label>
        <div class="mt-1 sm:mt-0 sm:col-span-2">
            <div class="max-w-lg flex rounded-md shadow-sm">
                <select name="warna_id"
                    class="form-select flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                    @foreach($warnas as $warna)
                    <option value="{{$warna['id']}}">{{$warna['warna']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    {{-- <div class="mb-3">
        <label for="">Color</label>
        <select name="warna_id" class="form-select">
            @foreach($warnas as $warna)
            <option value="{{$warna['id']}}">{{$warna['warna']}}</option>
            @endforeach
        </select>
    </div> --}}
    <div class="mb-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
        <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Price
        </label>
        <div class="mt-1 sm:mt-0 sm:col-span-2">
            <div class="max-w-lg flex rounded-md shadow-sm">

                <input type="text" name="price" id="username" autocomplete="username"
                    class="form-control flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                @if($errors->has('price'))
                <p class="text-danger">{{ $errors->first('price') }}</p>
                @endif
            </div>
        </div>
    </div>
    {{-- <div class="mb-3">
        <label for="">Price</label>
        <input type="text" name="price" class="form-control">
        @if($errors->has('price'))
        <p class="text-danger">{{ $errors->first('price') }}</p>
        @endif
    </div> --}}
    <div class="mb-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
        <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Description
        </label>
        <div class="mt-1 sm:mt-0 sm:col-span-2">
            <div class="max-w-lg flex rounded-md shadow-sm">

                <input type="text" name="deskripsi" id="username" autocomplete="username"
                    class="form-control flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                @if($errors->has('deskripsi'))
                <p class="text-danger">{{ $errors->first('deskripsi') }}</p>
                @endif
            </div>
        </div>
    </div>
    {{-- <div class="mb-3">
        <label for="">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control">
        @if($errors->has('deskripsi'))
        <p class="text-danger">{{ $errors->first('deskripsi') }}</p>
        @endif
    </div> --}}

    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5 mb-3">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control">
        @if($errors->has('image'))
        <p class="text-danger">{{ $errors->first('image') }}</p>
        @endif
    </div>


    <div class="pt-5">
        <a href="/admin/listproduct"><div class="">
            <button type="button"
                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
            </a>
                <button type="submit"
                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
        </div>
    </div>
</form>
@endif
{{-- <form class="space-y-8 divide-y divide-gray-200 pl-5">

    <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
        <div>
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">Add Product</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">This information will be displayed publicly so be
                    careful what you share.</p>
            </div>

            <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Product Name
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg flex rounded-md shadow-sm">

                            <input type="text" name="username" id="username" autocomplete="username"
                                class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                        </div>
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Category
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg flex rounded-md shadow-sm">

                            <input type="text" name="username" id="username" autocomplete="username"
                                class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                        </div>
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Jenis Kayu
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg flex rounded-md shadow-sm">

                            <input type="text" name="username" id="username" autocomplete="username"
                                class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                        </div>
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Color
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg flex rounded-md shadow-sm">

                            <input type="text" name="username" id="username" autocomplete="username"
                                class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                        </div>
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Description
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <textarea id="about" name="about" rows="3"
                            class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                        <p class="mt-2 text-sm text-gray-500">Write a few sentences about the product.</p>
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Cover
                        photo </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div
                            class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                    viewBox="0 0 48 48" aria-hidden="true">
                                    <path
                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button type="button"
                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                <button type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
            </div>
        </div>
</form> --}}