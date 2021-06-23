<article @php(post_class())>
  <div class="container max-w-5xl mx-auto mb-32">
    <div class="flex flex-col px-4 md:gap-16 lg:flex-row">
      <div class="w-full mt-48 lg:w-3/4">
        <div class="prose xl:prose-lg">
          @php(the_content())
        </div>
      </div>
      {{-- <div class="w-full max-w-screen-sm m-auto mt-12 lg:w-1/4">
        @include('partials/entry-meta')
      </div> --}}
    </div>
  </div>
  @if(count($projects))
  <div class="pb-32 clip-top-slant bg-violet-100">
    <div class="container max-w-5xl mx-auto md:px-0 2xl:max-w-6xl">

      <x-heading level="2" class="mt-8 mb-10 text-5xl text-violet-800">Find out more</x-heading>
      @foreach($projects as $key => $project)
      @include('partials.project-card')
      @endforeach
    </div>
  </div>
  @endif

  @php(comments_template())
</article>