<div class="relative py-6 pb-16 text-orange-300 md:py-12">
  <div class="absolute inset-0 bg-gray-950 clip-project-header"></div>
  <div class="mt-12 lg:mt-0 container relative z-10 flex flex-col items-center justify-between min-h-header mx-auto max-w-8xl md:flex-row">
  
    <div class="md:my-auto md:w-1/2 ">
      <a class="inline-flex items-center pb-2 mb-4 text-2xl font-extrabold md:mb-4 text-white "
        href="{{ get_permalink($post->post_parent) }}">{{ get_post($post->post_parent)->post_title }}</a>
      <hr class="mb-8">
      <h1 class="mb-2 text-4xl font-black tracking-tighter text-white 2xl:text-6xl lg:text-5xl">
        {!! $title !!}
      </h1>
      @if(!empty($post->post_excerpt))
      <p class="max-w-xl my-8 text-xl font-extrabold leading-snug md:text-2xl 2xl:w-5/6">{!! $post->post_excerpt
        !!}</p>
      @endif
    </div>
      <div class=" md:w-1/2 md:ml-16 max-w-md mb-8 -mr-4 md:mb-0 md:mr-none">
      {!! get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', 'square-xl', ['class' => "-mb-10
      md:-mb-12 w-full
      clip-hexagon"]) !!}
    </div>
  </div>
</div>