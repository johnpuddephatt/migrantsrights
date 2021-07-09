@extends('layouts.app')

@section('content')
@include('partials.page-header')

<div class="container max-w-6xl px-1 py-48 mx-auto">
  @if (! have_posts())
  <x-alert type="warning">
    {!! __('Sorry, no results were found.', 'sage') !!}
  </x-alert>

  {!! get_search_form(false) !!}
  @endif

  <div class="flex flex-col lg:flex-row lg:space-x-8">
    @if(isset($blogNavigation))
    <div class="mb-8 overflow-x-auto lg:mb-0 lg:w-60 whitespace-nowrap">
      {!! $blogNavigation !!}
    </div>
    @endif

    <div>

      @while(have_posts()) @php(the_post())
      @include('partials.post-card')
      @endwhile
      {!! get_the_posts_navigation() !!}
    </div>

  </div>
</div>

@endsection