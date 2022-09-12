<article @php(post_class(''))>
  <div class="container min-h-header prose max-w-4xl mt-16 pb-32 mx-auto">
     <a class="mb-4"
        href="{{ get_permalink($post->post_parent) }}">&larr; Back to {{ get_post($post->post_parent)->post_title }}</a>
    
    @php(the_content())
  </div>
</article>