@extends('layouts.app')

@section('content')
@include('partials.page-header')

<div class="container max-w-5xl pt-40 mx-auto mb-32 min-h-header">

  @if (! have_posts())
  <x-alert type="warning">
    {!! __('Sorry, no results were found.', 'sage') !!}
  </x-alert>


  @endif

  <div class="mt-8 text-xl">
    {!! get_search_form(false) !!}
  </div>

  @while(have_posts()) @php(the_post())
  @include('partials.post-card')
  @endwhile

  {!! get_the_posts_navigation() !!}
  @endsection

</div>