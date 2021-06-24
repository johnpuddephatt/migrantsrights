<div class="relative pt-4 -mb-40 md:pt-8 md:pt-16 text-violet-900">
  <div class="absolute inset-0 bg-gray-950 clip-bottom-slant"></div>
  <div
    class="container relative z-10 flex flex-col-reverse items-center gap-4 px-4 mx-auto max-w-7xl min-h-header md:gap-8 md:flex-row">

    <div class="flex-1 flex-grow max-w-5xl pb-20 md:pb-40 md:my-auto">
      @if(isset($parent))
      <a class="inline-flex items-center pb-2 mb-4 text-3xl font-extrabold border-b-4 md:mb-8 text-violet-200 border-violet-300"
        href="{{ $parent->permalink}}">{{ $parent->title}}</a>
      @else
      <hr class="mb-4 md:mb-8 border-violet-300">
      @endif


      <div class="flex items-center">
        @if(has_post_thumbnail(isset($post->ID) ? $post->ID : ''))
        <div class="p-6 mr-4 bg-white rounded-full">
          {!! get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', 'square-s', ['class' => "w-20 h-20 xl:w-28
          xl:h-28"])
          !!}
        </div>
        @endif
        <x-heading size="4"
          :class="strlen($title) < 35 ? 'text-5xl md:text-6xl tracking-tighter 2xl:text-8xl text-white' : 'md:text-5xl tracking-tighter xl:text-6xl text-white'">
          {!! $title !!}
        </x-heading>
      </div>

      @if(!empty($post->post_excerpt))
      <p
        class="max-w-xl text-gray-200 text-xl font-extrabold leading-snug tracking-tight md:text-2xl @if(has_post_thumbnail(isset($post->ID) ? $post->ID : '')) ml-28 xl:ml-40 mt-4 @else mt-8 @endif">
        {!! $post->post_excerpt
        !!}</p>
      @endif
    </div>


  </div>
</div>