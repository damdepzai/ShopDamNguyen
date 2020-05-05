@extends('layout.app')
@section('content')
    <!-- Add your site or application content here -->

    <!-- start home slider -->
    @include('components.slider')
    <!-- end home slider -->
    @include('layout.alert')
    <!-- product section start -->
    @include('components.product_new')
    <!-- product section end -->
    <!-- banner-area start -->
    @include('components.banner')
    <!-- banner-area end -->
    @include('components.content')
    <!-- latestpost area start -->
    @include('components.last_post')
    <!-- latestpost area end -->
    <!-- testimonial area start -->
    @include('components.testtimonial')
    <!-- testimonial area end -->
    <!-- block category area start -->
    @include('components.block_category')
    <!-- block category area end -->
@endsection
