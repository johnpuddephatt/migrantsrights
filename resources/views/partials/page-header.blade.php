@php($has_image = isset($post->ID) && has_post_thumbnail($post->ID) &&
isset(wp_get_attachment_metadata(get_post_thumbnail_id($post->ID))['sizes']['square']))

<div class="relative pt-4 -mb-44 md:pt-8 md:pt-16 text-violet-900">
  <div class="absolute inset-0 bg-violet-100 clip-bottom-slant"></div>
  <div
    class="container relative z-10 flex flex-col-reverse items-center gap-4 px-4 mx-auto max-w-7xl min-h-header-sm lg:min-h-header md:gap-8 md:flex-row">
    <div
      class=" my-auto pb-28 md:flex-1 md:pb-40
    @if(!$has_image && is_singular()) mx-auto max-w-5xl px-8 @elseif(!$has_image) mx-auto max-w-6xl px-4 @else max-w-5xl @endif">
      @if($post && $post->post_type == 'post')
      <div class="mb-4 text-xl font-bold md:text-2xl md:mb-8 text-violet-800">{{ get_the_date() }}</div>
      @endif


      @if(isset($parent) && is_singular())
      <a class="inline-flex items-center pb-2 mb-4 text-3xl font-extrabold border-b-4 md:mb-8 text-violet-600 border-violet-500"
        href="{{ $parent->permalink}}">{{ $parent->title}}</a>
      @elseif(is_category() || is_tax())
      <a class="inline-flex items-center pb-2 mb-4 text-3xl font-extrabold border-b-4 md:mb-8 text-violet-600 border-violet-500"
        href="{{ get_permalink( get_option( 'page_for_posts' )) }}">News &amp; reports</a>
      @else
      <hr class="mb-4 md:mb-8 border-violet-500">
      @endif


      <x-heading size="4"
        :class="strlen($title) < 35 ? 'text-5xl md:text-6xl tracking-tighter 2xl:text-8xl text-violet-800' : 'md:text-5xl tracking-tighter xl:text-6xl text-violet-800'">
        {!! $title !!}
      </x-heading>

      @if(!empty($post->post_excerpt))
      <p class="max-w-xl mt-8 text-xl font-extrabold leading-snug tracking-tight md:text-2xl">{!! $post->post_excerpt
        !!}</p>
      @endif
    </div>

    @if($has_image)
    <div class="flex-1 -mr-16 md:-mr-16">
      {!! get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', 'square-s', ['class' => "-mb-6 md:mb-0
      clip-pentagon ml-auto w-full -mt-12 md:mt-0
      md:w-full"]) !!}
    </div>
    @endif
  </div>
</div>