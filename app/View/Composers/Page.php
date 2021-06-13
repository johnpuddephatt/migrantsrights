<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Page extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        // 'partials.page-header',
        // 'partials.content',
        'partials.content-page',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        global $post;

        return [
            'children' => $this->children(),
            'siblings' => $this->siblings(),
        ];
    }

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            // 'title' => $this->title(),
        ];
    }

    public function children() {
        global $post; 

        return get_posts([
            'post_type'        => 'page',
            'post_parent'    => $post->ID,

        ]);
    }

    public function siblings() {
        global $post; 
        if (!$post->post_parent ) return null;
        
        return get_posts([
            'post_type'        => 'page',
            'post_parent'    => $post->post_parent,
        ]);
    }
}
