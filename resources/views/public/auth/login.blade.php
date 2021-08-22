@extends('layouts.public')
@section('title', 'Login')

@section('content')
    <div class="md:container md:mx-auto page-login">
        <form id="form-login" class="bg-white shadow-md rounded px-8 pt-3 pb-8 mb-4">
            <h1 class="text-center mt-4">List-A-Dom</h1>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email">
                <p id="error-message" class="text-red-500 text-xs italic mt-1"></p>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
            </div>
            <div class="flex items-center justify-between">
                <button class="btn-cta btn-primary" type="submit">
                Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/forgot">
                    Forgot Password?
                </a>
            </div>
        </form>

    </div>
@endsection