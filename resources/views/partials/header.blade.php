@if(!empty($secondaryNavigation))
<header class="text-gray-800 bg-violet-50 body-font">
  <div class="container flex flex-col flex-wrap items-center justify-end md:flex-row">
    {!! $secondaryNavigation !!}
  </div>
</header>
@endif

<header class="relative z-20 bg-black body-font">
  <div class="container flex flex-col flex-wrap items-center px-0 py-4 md:flex-row">
    <a href="{{ home_url('/') }}" class="flex items-center mb-4 font-extrabold text-gray-100 title-font md:mb-0">
      <img class="w-10 h-10 mr-2 " src="{{ $siteLogo }}" />
      <span class="ml-1 text-xl">{{ $siteName }}</span>
      {{-- <span class="px-2 ml-2 text-gray-700 bg-gray-100 rounded-full">@php global $wpdb; echo $wpdb->num_queries
        @endphp</span> --}}
    </a>
    @if(!empty($primaryNavigation))
    <nav
      class="flex flex-wrap items-center justify-center text-sm text-white lowercase 2xl:text-lg md:text-base md:ml-auto">
      {!! $primaryNavigation !!}
    </nav>
    @endif
  </div>
</header>