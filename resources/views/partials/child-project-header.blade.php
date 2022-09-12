<div class="text-orange-300 relative py-6 pb-16 md:py-12">
  <div class="container relative z-10 mx-auto max-w-5xl">
    <div class="mt-24">
      <a
        class="text-violet-800 mb-8 inline-block text-lg"
        href="{{ get_permalink($post->post_parent) }}"
        >&larr; {{ get_post($post->post_parent)->post_title }}</a
      >
      <h1
        class="tracking-tighter mb-2 text-5xl font-black text-black lg:text-6xl 2xl:text-7xl"
      >
        {!! $title !!}
      </h1>
    </div>
  </div>
</div>
