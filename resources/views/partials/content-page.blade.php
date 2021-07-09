<article @php(post_class())>


    @if($children && !$parent)
    <div class="pt-24 bg-gray-900 border-b border-gray-900">
        <div class="container max-w-5xl px-4 py-32 mx-auto">
            @foreach($children as $page)
            @include('partials.page-card')
            @endforeach
        </div>
    </div>
    @else
    <div class="container max-w-5xl pb-32 mx-auto md:pt-16">

        <div class="flex flex-col gap-8 md:gap-16 lg:flex-row-reverse">
            <div class="max-w-screen-sm pt-32 lg:w-1/4">
                <div class="sticky mx-auto mt-16 -z-10 top-16">
                    {!! do_shortcode('[toc]') !!}
                </div>
            </div>
            <div class="md:mt-24 lg:px-0 lg:w-3/4">
                <div class="prose xl:prose-lg">
                    @php(the_content())
                </div>
                @if($children && $parent)
                <div class="pt-24">

                    @foreach($children as $page)
                    @include('partials.subpage-card')
                    @endforeach

                </div>
                @endif

                @if( $related_posts )
                <div id="project-posts" class="pt-16 mb-12">
                    <x-heading size="6">Updates</x-heading>
                    <p class="mt-4 mb-8">Our latest articles relating to our work on {{ the_title() }}</p>
                    @foreach(array_slice($related_posts, 0, 3) as $related_post)
                    @include('partials.post-card', ['post_id' => $related_post->ID])
                    @endforeach

                    @if(count($related_posts) == 4)
                    <div class="mt-16 text-center">
                        <x-button href="{{ get_term_link($work_area, 'workareas') }}">
                            View
                            all {{ $post->post_title }} updates
                        </x-button>
                    </div>
                    @endif


                </div>
                @endif
            </div>
        </div>
    </div>
    @endif

    @if($siblings)
    <div class="bg-gray-900 clip-top-slant">
        <div class="container max-w-5xl px-4 py-32 mx-auto">
            <x-heading level="2" size="3" class="px-2 md:pb-4 text-violet-100 md:text-6xl ">{{ $parent->title}}
            </x-heading>
            <p class="px-2 pb-16 text-xl font-extrabold md:text-3xl text-violet-200">More pages in this section</p>
            @foreach($siblings as $page)
            @include('partials.page-card')
            @endforeach
        </div>
    </div>
    @endif

</article>