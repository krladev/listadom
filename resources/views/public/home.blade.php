@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <div class="md:container md:mx-auto">
        <h1 class="text-center mt-4">List-A-Dom</h1>

        <p class="quote text-center mt-4 mb-4"">Easily sell your domain in 4 steps</p>

        <div class="flex flex-wrap overflow-hidden">
            <div class="w-full overflow-hidden sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4">
                <div class="card-buy-step">
                    <div><i class="fas fa-user-plus"></i></div>
                    <div>Create an account</div>
                </div>
            </div>

            <div class="w-full overflow-hidden sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4">
                <div class="card-buy-step">
                    <div><i class="fas fa-cog"></i></div>
                    <div>Setup your domain</div>
                </div>
            </div>

            <div class="w-full overflow-hidden sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4">
                <div class="card-buy-step">
                    <div><i class="fas fa-palette"></i></div>
                    <div>Look and feel</div>
                </div>
            </div>

            <div class="w-full overflow-hidden sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4">
                <div class="card-buy-step">
                    <div><i class="fas fa-comment-dollar"></i></div>
                    <div>Get bids</div>
                </div>
            </div>
        </div>

    </div>
@endsection