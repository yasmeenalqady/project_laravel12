@extends('frontend.layout.main')

@section('title', 'الصفحة الرئيسية')

@section('content')
    @include('frontend.homepage.hero')
    @include('frontend.homepage.about')
    @include('frontend.homepage.services')
    @include('frontend.homepage.Partners')
@endsection
