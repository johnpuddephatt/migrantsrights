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

    public function with() {
        return [
           "attachments" => $this->attachments(),
           "posts" => $this->posts()
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

    public function attachments() {
        return new \Attachments( 'project_resources' );
    }

    public function posts() {
        return get_posts([
            'post_type'        => 'post',
            'numberposts' => 3,
            'meta_query' => array(
                array(
                    'key' => 'project',
                    'value' => '"' . get_the_ID() . '"',
                    'compare' => 'LIKE'
                )
            )
        ]);
    }
}