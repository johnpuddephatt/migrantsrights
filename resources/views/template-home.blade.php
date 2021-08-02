{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
<section class="relative mx-auto bg-orange-300 body-font">
  <div class="container">
    <div class="flex flex-col items-center mx-auto md:flex-row">
      <div class="pt-16 mb-8 md:py-24 2xl:py-48 md:w-1/2 md:pr-12 md:mb-0">
        <h1 class="text-4xl font-extrabold text-violet-700 sm:text-5xl sm:leading-tight">
          We believe everyone has the right to live in a society free from oppression and discrimination.
        </h1>

        <a href="/about"
          class="flex items-center font-extrabold leading-relaxed lowercase text-md md:text-2xl text-violet-800">
          <span class="py-2 border-b border-violet-800">Learn more about our work</span>
          <x-icon.arrow-right class="w-16 h-16 md:w-32 md:h-32" />
        </a>

        <a href="/know-your-rights"
          class="flex items-center -mt-2 font-extrabold leading-relaxed lowercase md:-mt-14 text-md md:text-2xl text-violet-800">
          <span class="py-2 border-b border-violet-800">Know your rights guide</span>
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
    <x-heading size="3" level="2" class="text-white">Latest news &amp; comment</x-heading>
    <div class="grid grid-cols-1 gap-8 mt-6 text-left md:grid-cols-4">
      @foreach($posts as $key => $post)
      <a class="block @if($key == 0) relative z-10 col-auto bg-black md:-mb-24 md:col-span-2 @endif"
        href="{{ get_permalink($post->ID) }}">
        {!! get_the_post_thumbnail($post->ID, '16by9-m', ['class' =>
        ($key == 0) ? "object-cover object-center w-full mb-4 md:mb-8 lg:h-80" : "object-cover object-center w-full mb-4
        md:mb-8 lg:h-48", 'sizes' => ($key == 0) ? "(min-width: 1536px) 704px, (min-width: 1280px) 592px, (min-width:
        1024px) 464px, (min-width: 768px) 344px, (min-width: 640px) 592px, 100vw" : "(min-width: 1536px) 336px,
        (min-width: 1280px) 280px, (min-width: 1024px) 216px, (min-width: 768px) 156px, (min-width:
        640px) 592px, 100vw"
        ])
        !!}
        <div class="@if($key == 0) md:px-8 md:pb-8 @endif">
          <p class="mb-4 text-xs font-extrabold tracking-widest uppercase">{{get_the_date('', $post->ID) }}
          </p>
          <h3
            class="mx-auto mb-4 text-xl font-extrabold leading-none @if($key == 0) lg:text-3xl @else lg:text-2xl @endif">
            {{ $post->post_title }}</h3>
          <p class="inline-flex items-center mt-auto font-semibold text-orange-400 lowercase lg:mb-0 hover:text-white"
            title="read more">Read More</p>
        </div>
      </a>

      @endforeach
    </div>
  </div>
</section>

@if(get_theme_mod('home_case_study_text') && get_theme_mod('home_case_study_image') &&
get_theme_mod('home_case_study_name'))
<section class="relative text-white bg-right-top bg-no-repeat bg-violet-100 bg-hexagons">
  <div class="container pt-48 pb-24 2xl:pt-60">
    <div class="md:w-1/2 2xl:w-2/5">

      <p class="relative pl-20 mb-8 text-2xl font-extrabold text-orange">
        <span class="absolute left-0 font-extrabold text-orange-400 text-9xl -top-8">“</span>
        {{ get_theme_mod('home_case_study_name') }}
      </p>
      <h2 class="relative text-2xl font-extrabold md:text-3xl xl:text-4xl text-violet-800">
        {{ get_theme_mod('home_case_study_text') }}
        <span class="absolute right-0 z-30 font-extrabold text-orange-400 text-9xl -bottom-28 md:-bottom-32">”</span>
      </h2>

      <p
        class="flex items-center justify-end mt-12 text-lg font-extrabold leading-relaxed lowercase md:-mr-8 md:mt-20 md:text-2xl text-orange">
        <a href="/about" class="py-2 border-b border-orange">Learn more about our work</a>
        <x-icon.arrow-right class="w-16 h-16 md:w-32 md:h-32" />
      </p>
    </div>
    {!! $case_study_image !!}

  </div>
</section>
@endif

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

<section x-data="{ amount: '10.00', isRecurring: false }"
  class="relative pt-24 -mt-32 bg-orange-300 bg-left-top bg-no-repeat md:pt-64 md:-mt-64 bg-orange-hexagons">
  <div class="container flex items-center justify-end pb-24 pt-60">
    <div class="md:w-1/2">


      <h2 class="relative mb-8 text-5xl font-extrabold md:text-7xl text-violet-700">
        Support us
      </h2>

      <p class="mb-12 xl:w-4/6">From making a donation to volunteering your time, there are <a class="underline"
          href="/about/support-migrants/rights/">lots of
          ways you can help</a>. Your support is vital to keep us reaching for justice and equality for all migrants.
      </p>


      <div>
        <div class="inline-flex mb-3">
          <button x-on:click="amount = 10"
            x-bind:class="amount == '10.00' ? 'text-white bg-violet-700 hover:bg-violet-800' : 'text-gray-800 bg-white hover:text-white hover:bg-violet-500'"
            class="px-6 py-3 text-lg font-bold">
            £10
          </button>
          <button x-on:click="amount = '20.00'"
            x-bind:class="amount == '20.00' ? 'text-white bg-violet-700 hover:bg-violet-800' : 'text-gray-800 bg-white hover:text-white hover:bg-violet-500'"
            class="px-6 py-3 text-lg font-bold">
            £20
          </button>
          <button x-on:click="amount = '50.00'"
            x-bind:class="amount == '50.00' ? 'text-white bg-violet-700 hover:bg-violet-800' : 'text-gray-800 bg-white hover:text-white hover:bg-violet-500'"
            class="px-6 py-3 text-lg font-bold">
            £50
          </button>
        </div>
        <div class="inline-flex mb-3 md:pl-2">
          <button x-on:click="isRecurring = false"
            x-bind:class="isRecurring == false ? 'text-white bg-violet-700 hover:bg-violet-800' : 'text-gray-800 bg-white hover:text-white hover:bg-violet-500'"
            class="px-6 py-3 text-lg font-bold"> One-off
          </button>
          <button x-on:click="isRecurring = true"
            x-bind:class="isRecurring == true ? 'text-white bg-violet-700 hover:bg-violet-800' : 'text-gray-800 bg-white hover:text-white hover:bg-violet-500'"
            class="px-6 py-3 text-lg font-bold">
            Monthly
          </button>
        </div>
      </div>

      <a rel="noopener" target="_blank"
        href="http://link.justgiving.com/v1/charity/donate/charityId/231474?isRecurring=false&amount=10.00&currency=GBP&tipScheme=TipJar2.1&reference=MRN-WEB"
        x-bind:href="`http://link.justgiving.com/v1/charity/donate/charityId/231474?isRecurring=${isRecurring}&amount=${amount}&currency=GBP&tipScheme=TipJar2.1&reference=MRN-WEB`"
        class="flex items-center font-extrabold leading-relaxed lowercase text-md md:text-3xl text-violet-800"><span
          class="py-2 border-b border-violet-800">Make your donation</span>
        <x-icon.arrow-right class="w-16 h-16 md:w-32 md:h-32" />
      </a>
    </div>
  </div>
</section>


@endsection