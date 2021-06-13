@include('partials.header')

<div class="min-h-screen mx-auto">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>


  <main id="main" class="main">
    @yield('content')
  </main>

  @hasSection('sidebar')
  <aside class="sidebar">
    @yield('sidebar')
  </aside>
  @endif

</div>
@include('partials.footer')