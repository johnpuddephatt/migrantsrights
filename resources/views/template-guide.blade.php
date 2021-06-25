{{--
  Template Name: Guide Template
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
@include('partials.guide-header')
@include('partials.content-page')
@endwhile
@endsection