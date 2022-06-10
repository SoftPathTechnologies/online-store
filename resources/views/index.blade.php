@extends('layouts.master')
@section('title', 'Home')
@section('content')

  @include('components/cart')
  @include('components/main-slider')
  @include('components/category')
  @include('components/product-tap')


@endsection
