<div class="relative py-6 pb-16 text-orange-300 md:py-12">
  <div class="absolute inset-0 bg-gray-950 clip-project-header"></div>
  <div class="container relative z-10 grid mx-auto max-w-8xl md:grid-cols-2">
    <div class="mb-8 -mr-4 md:mb-0 md:mr-none">
      {!! get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', 'square-xl', ['class' => "-mb-10
      md:-mb-12 w-full
      clip-hexagon"]) !!}
    </div>
    <div class="md:ml-16 md:my-auto">
      <hr class="mb-8">
      <h1 class="mb-2 text-5xl font-black tracking-tighter text-white 2xl:text-7xl lg:text-6xl">
        {!! $title !!}
      </h1>
      @if(!empty($post->post_excerpt))
      <p class="max-w-xl my-8 text-xl font-extrabold leading-snug md:text-2xl 2xl:w-5/6">{!! $post->post_excerpt
        !!}</p>
      @endif
    </div>
  </div>
</div>