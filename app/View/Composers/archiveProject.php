<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class archiveProject extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'archive-project',
    ];

    public function with() {
        return [
           "post" => get_post(55),
           "projects" => $this->projects()
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
            "title" => get_post(55)->post_title,
        ];
    }

    public function projects() {
        return get_posts([
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'post_type' => 'project',
            'numberposts' => -1
        ]);
    }
}