@extends('layouts.dash')
@section('title', 'Home')

@section('content')
    <div class="page-dash-home">
        <h1 class="text-left mt-4">Dashboard</h1>

        @include('components/logo_icon_svg', ['width' => 100, 'color' => 'green'])
        @include('components/logo_icon_svg', ['width' => 200, 'color' => 'red'])
        @include('components/logo_icon_svg', ['width' => 300, 'color' => 'blue'])
        @include('components/logo_icon_svg', ['width' => 400, 'color' => 'orange'])

        @include('components/logo_svg', ['width' => 100, 'color' => 'green'])
        @include('components/logo_svg', ['width' => 200, 'color' => 'red'])
        @include('components/logo_svg', ['width' => 300, 'color' => 'blue'])
        @include('components/logo_svg', ['width' => 400, 'color' => 'orange'])
    </div>
@endsection