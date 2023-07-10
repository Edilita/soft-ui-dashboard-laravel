@extends('layouts.app')

@section('member')
<div class="mx-2">
    <div class="container position-sticky z-index-sticky top-0">
        @include('layouts.navbars.member.nav')
    </div>
</div>
<section class="min-vh-50 mb-8 mt-1">
    <div class="page-header align-items-start min-vh-20 pt-5 pb-11 mx-1 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="p-4">
        </div>
    </div>
    <div class="container mt-n11">
        <div class="row">
            <div class="col">
                <div class="card z-index-0 p-md-3 p-lg-5 p-xl-7 pt-xl-5">
                    <div class="card-header text-left pt-4">
                        <h3>@yield('title')</h3>
                    </div>
                    <div class="card-body card-text text-justify">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footers.guest.footer')

@endsection