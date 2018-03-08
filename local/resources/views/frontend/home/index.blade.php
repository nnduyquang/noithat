@extends('frontend.master')
@section('title')
    Nội Thất
@stop
@section('description')
    Nội Thất
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('slider')
    @include('frontend.common.slider')
@stop
@section('container')
    @include('frontend.home.h_product')
    @include('frontend.home.h_plan')
    @include('frontend.home.h_news')
    @include('frontend.home.h_example')
    @include('frontend.home.h_register')
@stop