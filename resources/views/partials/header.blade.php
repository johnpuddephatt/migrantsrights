@if(get_theme_mod('banner_text'))

<div class="bg-violet-200 py-4 text-center text-xs md:hidden">
  <div class="container">
    {{ get_theme_mod('banner_text') }} @if(get_theme_mod('banner_link'))

    <a class="font-bold underline" href="{{ get_theme_mod('banner_link') }}"
      >{{ get_theme_mod('banner_link_text', 'Read more') }}</a
    >

@endif
  </div>
</div>

@endif @if(!empty($secondaryNavigation))


<header class="text-gray-800 body-font bg-violet-50">
  <div
    class="container flex flex-col flex-wrap items-center justify-end md:flex-row"
  >
    {!! $secondaryNavigation !!}
  </div>
</header>


@endif

<header class="body-font relative z-20 bg-black">
  <div
    class="container flex flex-col flex-wrap items-center px-0 py-4 md:flex-row"
  >
    <a
      href="{{ home_url('/') }}"
      class="text-gray-100 title-font mb-4 flex items-center font-extrabold md:mb-0"
    >
      <img
        height="48"
        width="48"
        alt=""
        class="mr-2 h-12 w-12"
        src="{{ $siteLogo }}"
      />
      <span class="ml-1 text-xl">{{ $siteName }}</span>
    </a>
    @if(!empty($primaryNavigation))


    <nav
      class="flex flex-wrap items-center justify-center text-xs lowercase text-white md:ml-auto md:text-sm lg:text-base 2xl:text-lg"
    >
      {!! $primaryNavigation !!}
    </nav>


@endif
  </div>
</header>
