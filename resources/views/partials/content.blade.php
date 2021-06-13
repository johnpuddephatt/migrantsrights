<article @php(post_class('text-gray-600 body-font'))>
  <div class="container flex flex-col items-center py-8 mx-auto md:flex-row">
    <div class="w-5/6 lg:max-w-sm lg:w-full md:w-1/2">
      <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
    </div>
    <div
      class="flex flex-col items-center text-center lg:flex-grow md:w-1/2 lg:pl-12 md:pl-8 md:items-start md:text-left">
      <h1 class="mb-4 text-3xl font-medium text-gray-900 title-font sm:text-4xl">
        <a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h1>
      <div class="leading-relaxed">
        @php(the_excerpt())
      </div>
    </div>
  </div>
</article>