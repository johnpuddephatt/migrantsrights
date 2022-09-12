@extends('layouts.app') @section('content') @while(have_posts())

@php(the_post()) @if(get_post()->post_parent)
 @includeFirst(['partials.child-' .
get_post_type() . '-header', 'partials.' . get_post_type() . '-header',
'partials.page-header']) @includeFirst(['partials.child-content-single-' .
get_post_type(), 'partials.content-single-' . get_post_type(),
'partials.content-single']) @else @includeFirst(['partials.' . get_post_type() .
'-header', 'partials.page-header']) @includeFirst(['partials.content-single-' .
get_post_type(), 'partials.content-single'])
@endif
@endwhile @endsection