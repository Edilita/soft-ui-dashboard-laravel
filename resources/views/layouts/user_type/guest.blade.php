@extends('layouts.app')

@section('guest')
    @if(\Request::is('login/forgot-password')) 
        @include('layouts.navbars.guest.nav')
        @yield('content') 
    @else
        <div class="mx-2">
            <div class="container position-sticky z-index-sticky top-0">
                @include('layouts.navbars.guest.nav')
            </div>
        </div>
        @yield('content')        
        @include('layouts.footers.guest.footer')
    @endif
@endsection