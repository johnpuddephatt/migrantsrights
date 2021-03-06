<div class="py-4 text-xs text-center bg-violet-200 md:hidden">
  <div class="container">
    Your support is vital for our work.
    <a class="font-bold underline" href="/donate-migrants-rights/">Donate now</a
    >.
  </div>
</div>

@if(!empty($secondaryNavigation))


<header class="text-gray-800 body-font bg-violet-50">
  <div
    class="container flex flex-col flex-wrap items-center justify-end md:flex-row"
  >
    {!! $secondaryNavigation !!}
  </div>
</header>


@endif

<header class="relative z-20 bg-black body-font">
  <div
    class="container flex flex-col flex-wrap items-center px-0 py-4 md:flex-row"
  >
    <a
      href="{{ home_url('/') }}"
      class="flex items-center mb-4 font-extrabold text-gray-100 title-font md:mb-0"
    >
      <img
        height="48"
        width="48"
        alt=""
        class="w-12 h-12 mr-2"
        src="{{ $siteLogo }}"
      />
      <span class="ml-1 text-xl">{{ $siteName }}</span>
    </a>
    @if(!empty($primaryNavigation))


    <nav
      class="flex flex-wrap items-center justify-center text-xs text-white lowercase md:ml-auto md:text-sm lg:text-base 2xl:text-lg"
    >
      {!! $primaryNavigation !!}
    </nav>


@endif
  </div>
</header>
