@extends('layouts.app')

@section('member')
<div class="mx-2">
    <div class="container position-sticky z-index-sticky top-0">
        @include('layouts.navbars.member.nav')
    </div>
</div>
<section class="min-vh-50 mb-8 mt-1">
    <div class="page-header align-items-start min-vh-20 pt-5 pb-5 mx-1 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
    </div>
    <div class="container mt-2">
        @yield('content')
    </div>
</section>

@include('layouts.footers.guest.footer')

@endsection