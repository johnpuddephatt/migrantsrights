@php($has_image = isset($post->ID) && has_post_thumbnail($post->ID) &&
isset(wp_get_attachment_metadata(get_post_thumbnail_id($post->ID))['sizes']['square']))

<div class="text-violet-900 relative -mb-44 pt-4 md:pt-8 md:pt-16">
  <div class="bg-violet-100 clip-bottom-slant absolute inset-0"></div>
  <div
    class="min-h-header-sm lg:min-h-header container relative z-10 mx-auto flex max-w-7xl flex-col-reverse items-center gap-4 px-4 md:flex-row md:gap-8"
  >
    <div
      class="@if(!$has_image && is_singular())
 @elseif(!$has_image) @else
@endif my-auto mx-auto mx-auto max-w-5xl max-w-6xl max-w-5xl px-8 px-4 pb-28 md:flex-1 md:pb-40"
    >
      @if($post && $post->post_type == 'post')


      <div class="text-violet-800 mb-4 text-xl font-bold md:mb-8 md:text-2xl">
        {{ get_the_date() }}
      </div>


@endif @if(isset($parent))


      <a
        class="text-violet-600 border-violet-500 mb-4 inline-flex items-center border-b-4 pb-2 text-3xl font-extrabold md:mb-8"
        href="{{ $parent->permalink }}"
        >{{ $parent->title }}</a
      >
      @elseif(is_category() || is_tax())
      <a
        class="text-violet-600 border-violet-500 mb-4 inline-flex items-center border-b-4 pb-2 text-3xl font-extrabold md:mb-8"
        href="{{ get_permalink( get_option( 'page_for_posts' )) }}"
        >{{ get_the_title( get_option( 'page_for_posts' )) }}</a
      >@else
      <hr class="border-violet-500 mb-4 md:mb-8" />


@endif

      <x-heading
        size="4"
        :class="strlen($title) < 35 ? 'text-5xl md:text-6xl tracking-tighter 2xl:text-8xl text-violet-800' : 'md:text-5xl tracking-tighter xl:text-6xl text-violet-800'"
      >
        {!! $title !!}
      </x-heading>

      @if(!empty($post->post_excerpt))


      <p
        class="mt-8 max-w-xl text-xl font-extrabold leading-snug tracking-tight md:text-2xl"
      >
        {!! $post->post_excerpt !!}
      </p>


@endif
    </div>

    @if($has_image)


    <div class="-mr-16 flex-1 md:-mr-16">
      {!! get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', 'square-s',
      ['class' => "-mb-6 md:mb-0 clip-pentagon ml-auto w-full -mt-12 md:mt-0
      md:w-full"]) !!}
    </div>


@endif
  </div>
</div>
