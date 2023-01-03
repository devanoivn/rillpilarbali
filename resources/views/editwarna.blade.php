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
    <title>Edit Color</title>
    @vite('resources/css/app.css')
</head>

@section('welcome', 'bg-white text-aku-suka')
@vite(['resources/css/app.css', 'resources/js/app.js'])
@if (Auth::check()&& Auth::user()->status == 'admin')

<form action="{{ route('warnas.update', $warna->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-5">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Add Color</h3>
    </div>
    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
        <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Color Name
        </label>
        <div class="mt-1 sm:mt-0 sm:col-span-2">
            <div class="max-w-lg flex rounded-md shadow-sm">

                <input type="text" name="warna" id="username" autocomplete="username"
                    class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"  value="{{ $warna->warna }}">
                @if($errors->has('warna'))
                <p class="text-danger">{{ $errors->first('warna') }}</p>
                @endif
            </div>
        </div>
    </div>
    <div class="pt-5">
        <a href="/admin/listwarna">
            <div>
                <button type="button"
                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
        </a>
        <button type="submit"
            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
    </div>
    </div>
</form>
@endif