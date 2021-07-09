<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Blog extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'index',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {      
        return [
            'blogNavigation' => $this->navigation('blog_navigation', [
                'depth' => 1,
                'menu_class' => 'flex flex-row lg:flex-col'
            ], [
                'active' => 'bg-violet-200 rounded',
                'level-0-link' => 'block hover:bg-violet-300'
            ]),
        ];     
    }

    public function navigation($name, $args = [], $styles = []) {
        if (has_nav_menu($name)) {
            return wp_nav_menu(array_merge([
                'theme_location' => $name,
                'walker' => new \App\Navwalker($styles),
                'menu_class' => 'nav flex',
                'echo' => false
            ], $args));
        }
    }
}
