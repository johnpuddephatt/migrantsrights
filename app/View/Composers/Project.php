<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Project extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        // 'partials.page-header',
        // 'partials.content',
        'partials.content-single-project',
    ];

    public function with()
    {
        return [
            'attachments' => $this->attachments(),
            'posts' => $this->posts(),
            'children' => $this->children(),
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
                //    "foo" => 'bar',
            ];
    }

    public function attachments()
    {
        return new \Attachments('project_resources');
    }

    public function posts()
    {
        return get_posts([
            'post_type' => 'post',
            'numberposts' => 3,
            'meta_query' => [
                [
                    'key' => 'project',
                    'value' => '"' . get_the_ID() . '"',
                    'compare' => 'LIKE',
                ],
            ],
        ]);
    }

    public function children()
    {
        global $post;

        if ($post) {
            return get_posts([
                'post_type' => 'project',
                'post_parent' => $post->ID,
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'numberposts' => -1,
            ]);
        }
    }
}
