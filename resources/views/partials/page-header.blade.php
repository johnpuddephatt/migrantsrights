<div class="relative pt-4 -mb-40 md:pt-8 md:pt-16 text-violet-900">
  <div class="absolute inset-0 bg-violet-100 clip-bottom-slant"></div>
  <div class="container relative z-10 flex flex-col-reverse gap-4 px-4 mx-auto md:gap-12 max-w-7xl md:flex-row">

    <div class="flex-1 flex-grow max-w-5xl pb-20 md:pb-40 md:my-auto">
      @if($post->post_type == 'post')
      <div class="mb-4 text-xl font-bold md:text-2xl md:mb-8 text-violet-800">{{ get_the_date() }}</div>
      @endif
      <hr class="mb-4 mb-8 md:mb-8 border-violet-400">

      <x-heading size="4"
        :class="strlen($title) < 35 ? 'text-5xl md:text-6xl tracking-tighter 2xl:text-8xl text-violet-800' : 'md:text-5xl tracking-tighter xl:text-6xl text-violet-800'">
        {!! $title !!}
      </x-heading>

      @if(!empty($post->post_excerpt))
      <p class="mt-8 text-xl font-extrabold leading-snug tracking-tight md:text-2xl">{!! $post->post_excerpt !!}</p>
      @endif
    </div>

    @if(has_post_thumbnail(isset($post->ID) ? $post->ID : '') &&
    isset(wp_get_attachment_metadata(get_post_thumbnail_id($post->ID))['sizes']['square']))
    <div class="flex-1">
      {!! get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', 'square-s', ['class' => "-mb-6 md:mb-0
      clip-pentagon ml-auto w-full -mr-16 md:-mr-4 -mt-12 md:mt-0
      md:w-full"]) !!}
    </div>
    @endif
  </div>
</div>