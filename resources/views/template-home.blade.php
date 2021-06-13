{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
<section class="relative mx-auto bg-orange-300 body-font">
  <div class="container">
    <div class="flex flex-col items-center mx-auto md:flex-row">
      <div class="pt-16 mb-8 md:py-28 2xl:py-48 md:w-1/2 md:pr-12 md:mb-0">
        <h1 class="mb-4 text-4xl font-extrabold text-violet-700 sm:text-5xl sm:leading-tight l">
          We believe everyone has the right to live in a society free from oppression and discrimination.
        </h1>

        <a href="/about"
          class="flex items-center font-extrabold leading-relaxed lowercase text-md md:text-2xl text-violet-800"><span
            class="py-2 border-b border-violet-800">Learn more about our work</span>
          <x-icon.arrow-right class="w-16 h-16 md:w-32 md:h-32" />
        </a>

      </div>
      <div class="relative flex self-stretch flex-grow mb-6 md:mb-0 md:static md:w-1/2">
        {!! $hero_image !!}
      </div>
    </div>
  </div>
</section>


<section class="text-white bg-black clip-top-right-corner">
  <div class="container items-center pt-32 pb-16">
    <x-heading size="3" class="text-white">Latest news &amp; comment</x-heading>
    <div class="grid grid-cols-1 gap-8 mt-6 text-left md:grid-cols-4">
      <a href="{{ get_permalink($posts[0]->ID) }}"
        class="relative z-10 block col-auto bg-black md:-mb-24 md:col-span-2">
        {!! get_the_post_thumbnail($posts[0]->ID, '16by9-m', ['class' => "object-cover object-center w-full
        mb-4 md:mb-8 lg:h-80"]) !!}
        <div class="md:px-8 md:pb-8">
          <p class="mb-4 text-xs font-semibold tracking-widest uppercase">
            {{get_the_date('', $posts[0]->ID) }}
          </p>
          <h3 class="mx-auto mb-4 text-xl font-extrabold leading-none lg:text-3xl">
            {{ $posts[0]->post_title }}</h3>
          <p class="inline-flex items-center mt-auto font-semibold text-orange-400 lowercase lg:mb-0 hover:text-white"
            title="read more">Read More</p>
        </div>
      </a>
      @foreach(array_slice($posts, 1) as $post)
      <a class="block" href="{{ get_permalink($post->ID) }}">
        {!! get_the_post_thumbnail($post->ID, '16by9-m', ['class' => " object-cover object-center w-full mb-4 md:mb-8
        lg:h-48"])
        !!}
        <p class="mb-4 text-xs font-extrabold tracking-widest uppercase">{{get_the_date('', $post->ID) }}
        </p>
        <h3 class="mx-auto mb-4 text-xl font-extrabold leading-none lg:text-2xl">
          {{ $post->post_title }}</h3>
        <p class="inline-flex items-center mt-auto font-semibold text-orange-400 lowercase lg:mb-0 hover:text-white"
          title="read more">Read More</p>
      </a>

      @endforeach
    </div>
  </div>
</section>

<section class="relative text-white bg-right-top bg-no-repeat bg-violet-100 bg-hexagons">
  <div class="container pb-24 pt-36 2xl:pt-48">
    <div class="md:w-1/2 2xl:w-2/5">

      <p class="relative pl-20 mb-8 text-2xl font-extrabold text-orange">
        <span class="absolute left-0 font-extrabold text-orange-400 text-9xl -top-8">“</span>
        Faraza’s story
      </p>
      <h2 class="relative text-3xl font-extrabold md:text-4xl xl:text-5xl text-violet-800">Ipsum dolor sit amet,
        consectetuer adipiscing elit,
        sed diam nonummy nibh
        euismod.&nbsp;
        <span class="absolute right-0 font-extrabold text-orange-400 text-9xl -b-24 md:-r-12 md:b-0">”</span>
      </h2>

      <p
        class="flex items-center justify-end mt-12 text-lg font-extrabold leading-relaxed lowercase md:-mr-8 md:mt-20 md:text-2xl text-orange">
        <span class="py-2 border-b border-orange">Learn more about our work</span>
        <x-icon.arrow-right class="w-16 h-16 md:w-32 md:h-32" />
      </p>
    </div>
    <img class="absolute right-0 w-3/4 md:w-1/2 clip-hexagon md:-bottom-32" src="@asset('/images/faraza.jpg')">
  </div>
</section>

<section class="relative z-10">
  <div class="container items-center max-w-5xl 2xl:max-w-6xl md:px-0 pt-36">
    <a href="/projects">
      <x-heading size="5"
        class="inline-flex items-end mb-16 md:items-center md:text-7xl text-violet-700 2xl:-mx-32 md:-mx-16"><span
          class="py-4 border-b border-violet-700">Our projects</span>
        <x-icon.arrow-right class="w-20 h-20 md:w-32 md:h-32" />
      </x-heading>
    </a>

    @foreach($projects as $key => $project)
    @include('partials.project-card')
    @endforeach

  </div>
</section>

<section class="relative pt-24 -mt-32 bg-orange-300 bg-left-top bg-no-repeat md:pt-64 md:-mt-64 bg-orange-hexagons">
  <div class="container flex items-center justify-end pt-48 pb-24">
    <div class="md:w-1/2">


      <h2 class="relative mb-10 text-5xl font-extrabold md:text-7xl text-violet-700">
        Support us
      </h2>

      <p class="xl:w-5/6">From donations to volunteering, there are many ways to support us. Your support is vital to
        keep us reaching for justice and equality for all migrants</p>

      <a href="/about/support-migrants-rights/"
        class="flex items-center font-extrabold leading-relaxed lowercase text-md md:text-2xl text-violet-800"><span
          class="py-2 border-b border-violet-800">Find out how you can help</span>
        <x-icon.arrow-right class="w-16 h-16 md:w-32 md:h-32" />
      </a>
    </div>
  </div>
</section>


@endsection