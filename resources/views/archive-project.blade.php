@extends('layouts.app')

@section('content')
@include('partials.page-header')

<div class="container max-w-5xl pt-48 pb-24 2xl:max-w-6xl md:px-0">
  @foreach($projects as $key => $project)
  @include('partials.project-card', ['classes' => 'mb-8'])
  @endforeach
</div>

@endsection