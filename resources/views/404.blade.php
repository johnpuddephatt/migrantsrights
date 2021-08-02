@extends('layouts.app')

@section('content')
@include('partials.page-header')

@if (! have_posts())
<div class="container max-w-5xl pt-40 mx-auto mb-32 min-h-header">
  {!! get_search_form(false) !!}
</div>
@endif
@endsection