<?php

/**
 * Theme admin.
 */

namespace App;

use WP_Customize_Manager;

use function Roots\asset;

/**
 * Register the `.brand` selector to the blogname.
 *
 * @param  \WP_Customize_Manager $wp_customize
 * @return void
 */
add_action('customize_register', function (WP_Customize_Manager $wp_customize) {
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        },
    ]);

    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('custom_css');
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

    /*
     ** Home
     */

    $wp_customize->add_panel('home_panel', [
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => 'Homepage',
        'description' => 'Settings relating to the homepage',
    ]);

    // Home hero

    $wp_customize->add_section('home_hero', [
        'title' => 'Hero',
        'description' => '',
        'priority' => 15,
        'panel' => 'home_panel',
    ]);

    $wp_customize->add_setting('home_hero_image');

    $wp_customize->add_control(
        new \WP_Customize_Media_Control($wp_customize, 'home_hero_image', [
            'label' => 'Image',
            'section' => 'home_hero',
            'settings' => 'home_hero_image',
            'transport' => 'postMessage',
        ])
    );

    $wp_customize->add_section('home_projects', [
        'title' => 'Projects',
        'description' => '',
        'priority' => 15,
        'panel' => 'home_panel',
    ]);

    $wp_customize->add_setting(
        'home_projects',

        [
            'transport' => 'refresh',
            'default' => '',
            'sanitize_callback' => 'absint',
        ]
    );

    /*
     ** Contact details
     */

    $wp_customize->add_section('contact', [
        'title' => 'Contact details',
        'description' => '',
        'priority' => 35,
    ]);

    // Address
    $wp_customize->add_setting('contact_address', [
        'default' =>
            'The People’s Place, 80 – 92  High Street, London, E15 2NE',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->selective_refresh->add_partial('contact_address', [
        'selector' => '.contact-address',
        'container_inclusive' => false,
        'fallback_refresh' => false,
        'render_callback' => function () {
            echo get_theme_mod('contact_address');
        },
    ]);

    $wp_customize->get_setting('contact_address')->transport = 'postMessage';

    $wp_customize->add_control('contact_address', [
        'type' => 'textarea',
        'label' => 'Address',
        'section' => 'contact',
        'settings' => 'contact_address',
    ]);

    // Phone
    $wp_customize->add_setting('contact_phone', [
        'default' => '00442074247386',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->add_control('contact_phone', [
        'type' => 'text',
        'label' => 'Phone (machine readable)',
        'section' => 'contact',
        'settings' => 'contact_phone',
    ]);

    // Phone (human readable)
    $wp_customize->add_setting('contact_phone_human', [
        'default' => '+44 (0)20 7424 7386',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->selective_refresh->add_partial('contact_phone_human', [
        'selector' => '.contact-phone',
        'container_inclusive' => false,
        'fallback_refresh' => false,
        'render_callback' => function () {
            echo get_theme_mod('contact_phone_human');
        },
    ]);

    $wp_customize->get_setting('contact_phone_human')->transport =
        'postMessage';

    $wp_customize->add_control('contact_phone_human', [
        'type' => 'text',
        'label' => 'Phone (human readable)',
        'section' => 'contact',
        'settings' => 'contact_phone_human',
    ]);

    // Email
    $wp_customize->add_setting('contact_email', [
        'default' => 'info@migrantsrights.org.uk',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->selective_refresh->add_partial('contact_email', [
        'selector' => '.contact-email',
        'container_inclusive' => false,
        'fallback_refresh' => false,
        'render_callback' => function () {
            echo get_theme_mod('contact_email');
        },
    ]);

    $wp_customize->get_setting('contact_email')->transport = 'postMessage';

    $wp_customize->add_control('contact_email', [
        'type' => 'text',
        'label' => 'Email',
        'section' => 'contact',
        'settings' => 'contact_email',
    ]);

    // Facebook
    $wp_customize->add_setting('facebook', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->selective_refresh->add_partial('facebook', [
        'selector' => '.social-icon__facebook',
        'container_inclusive' => false,
        'fallback_refresh' => false,
        'render_callback' => function () {
            echo get_theme_mod('facebook');
        },
    ]);

    $wp_customize->get_setting('facebook')->transport = 'postMessage';

    $wp_customize->add_control('facebook', [
        'type' => 'text',
        'label' => 'Facebook',
        'section' => 'contact',
        'settings' => 'facebook',
    ]);

    // Twitter
    $wp_customize->add_setting('twitter', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->selective_refresh->add_partial('twitter', [
        'selector' => '.social-icon__twitter',
        'container_inclusive' => false,
        'fallback_refresh' => false,
        'render_callback' => function () {
            echo get_theme_mod('twitter');
        },
    ]);

    $wp_customize->get_setting('twitter')->transport = 'postMessage';

    $wp_customize->add_control('twitter', [
        'type' => 'text',
        'label' => 'Twitter',
        'section' => 'contact',
        'settings' => 'twitter',
    ]);

    // YouTube
    $wp_customize->add_setting('youtube', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->selective_refresh->add_partial('youtube', [
        'selector' => '.social-icon__youtube',
        'container_inclusive' => false,
        'fallback_refresh' => false,
        'render_callback' => function () {
            echo get_theme_mod('youtube');
        },
    ]);

    $wp_customize->get_setting('youtube')->transport = 'postMessage';

    $wp_customize->add_control('youtube', [
        'type' => 'text',
        'label' => 'YouTube',
        'section' => 'contact',
        'settings' => 'youtube',
    ]);

    // Instagram
    $wp_customize->add_setting('instagram', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->selective_refresh->add_partial('instagram', [
        'selector' => '.social-icon__instagram',
        'container_inclusive' => false,
        'fallback_refresh' => false,
        'render_callback' => function () {
            echo get_theme_mod('instagram');
        },
    ]);

    $wp_customize->get_setting('instagram')->transport = 'postMessage';

    $wp_customize->add_control('instagram', [
        'type' => 'text',
        'label' => 'Instagram',
        'section' => 'contact',
        'settings' => 'instagram',
    ]);

    // Linkedin
    $wp_customize->add_setting('linkedin', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->selective_refresh->add_partial('linkedin', [
        'selector' => '.social-icon__linkedin',
        'container_inclusive' => false,
        'fallback_refresh' => false,
        'render_callback' => function () {
            echo get_theme_mod('linkedin');
        },
    ]);

    $wp_customize->get_setting('linkedin')->transport = 'postMessage';

    $wp_customize->add_control('linkedin', [
        'type' => 'text',
        'label' => 'Linkedin',
        'section' => 'contact',
        'settings' => 'linkedin',
    ]);

    /*
     ** Banner
     */

    $wp_customize->add_section('banner', [
        'title' => 'Mobile banner',
        'description' => '',
        'priority' => 40,
    ]);

    // Banner text
    $wp_customize->add_setting('banner_text', [
        'default' => null,
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->add_control('banner_text', [
        'type' => 'textarea',
        'label' => 'Banner text',
        'section' => 'banner',
        'settings' => 'banner_text',
    ]);

    // Banner link
    $wp_customize->add_setting('banner_link', [
        'default' => null,
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->add_control('banner_link', [
        'type' => 'text',
        'label' => 'Banner link (URL)',
        'section' => 'banner',
        'settings' => 'banner_link',
    ]);

    // Banner link text
    $wp_customize->add_setting('banner_link_text', [
        'default' => null,
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->add_control('banner_link_text', [
        'type' => 'text',
        'label' => 'Banner link text',
        'section' => 'banner',
        'settings' => 'banner_link_text',
    ]);

    /*
     ** Company info
     */

    $wp_customize->add_section('company', [
        'title' => 'Company info',
        'description' => '',
        'priority' => 40,
    ]);

    // Address
    $wp_customize->add_setting('company_info', [
        'default' =>
            'Migrants’ Rights Network Ltd. is a registered company in England and Wales (#06024396) and a registered charity (#1125746).',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->selective_refresh->add_partial('company_info', [
        'selector' => '.company-info',
        'container_inclusive' => false,
        'fallback_refresh' => false,
        'render_callback' => function () {
            echo get_theme_mod('company_info');
        },
    ]);

    $wp_customize->get_setting('company_info')->transport = 'postMessage';

    $wp_customize->add_control('company_info', [
        'type' => 'textarea',
        'label' => 'Company info',
        'section' => 'company',
        'settings' => 'company_info',
    ]);

    // Home hero

    $wp_customize->add_section('home_case_study', [
        'title' => 'Case study',
        'description' => '',
        'priority' => 25,
        'panel' => 'home_panel',
    ]);

    $wp_customize->add_setting('home_case_study_image');

    $wp_customize->add_control(
        new \WP_Customize_Media_Control(
            $wp_customize,
            'home_case_study_image',
            [
                'label' => 'Image',
                'section' => 'home_case_study',
                'settings' => 'home_case_study_image',
                'transport' => 'postMessage',
            ]
        )
    );

    $wp_customize->add_setting('home_case_study_text', [
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->add_control('home_case_study_text', [
        'type' => 'textarea',
        'label' => 'Case study text',
        'section' => 'home_case_study',
        'settings' => 'home_case_study_text',
    ]);

    $wp_customize->add_setting('home_case_study_name', [
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->add_control('home_case_study_name', [
        'type' => 'text',
        'label' => 'Case study name',
        'section' => 'home_case_study',
        'settings' => 'home_case_study_name',
    ]);

    $wp_customize->add_setting('home_projects_title', [
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ]);

    $wp_customize->add_control('home_projects_title', [
        'type' => 'text',
        'label' => 'Title',
        'section' => 'home_projects',
        'settings' => 'home_projects_title',
    ]);

    $wp_customize->add_section('home_donate', [
        'title' => 'Donate',
        'description' => '',
        'priority' => 25,
        'panel' => 'home_panel',
    ]);

    $wp_customize->add_setting('home_donate_title');

    $wp_customize->add_control('home_donate_title', [
        'type' => 'text',
        'label' => 'Title',
        'section' => 'home_donate',
        'settings' => 'home_donate_title',
    ]);
});

/**
 * Register the customizer assets.
 *
 * @return void
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script(
        'sage/customizer.js',
        asset('scripts/customizer.js')->uri(),
        ['customize-preview'],
        null,
        true
    );
});

\Kirki::add_config('theme_config_id', [
    'capability' => 'edit_theme_options',
    'option_type' => 'option',
    'option_name' => 'home_projects',
]);

$choices = array_reduce(
    get_posts('post_type=project&posts_per_page=-1&post_parent=0'),
    function ($result, $item) {
        $result[$item->ID] = $item->post_title;
        return $result;
    }
);

\Kirki::add_field('home_donate_description', [
    'type' => 'editor',
    'label' => 'Description',
    'section' => 'home_donate',
    'priority' => 10,
    'settings' => 'home_donate_description',
]);

\Kirki::add_field('theme_config_id', [
    'type' => 'repeater',
    'label' => esc_attr__('Repeater Control', 'kirki'),
    'section' => 'home_projects',
    'priority' => 10,
    'row_label' => [
        'type' => 'field',
        'value' => esc_html__('Your Custom Value.', 'kirki'),
        'field' => 'page',
    ],
    'settings' => 'projects',
    'fields' => [
        'page' => [
            'type' => 'select',
            // 'label'       => esc_html__( 'Link Text', 'kirki' ),
            'default' => array_key_first($choices),
            'choices' => $choices,
        ],
    ],
    'choices' => [
        'limit' => 3,
    ],
]);

// /**
//  * Registers the control and whitelists it for JS templating.
//  *
//  * @since 1.0
//  * @param WP_Customize_Manager $wp_customize The WP_Customize_Manager object.
//  * @return void
//  */
// add_action( 'customize_register', function( $wp_customize ) {
// 	$wp_customize->register_control_type( '\Kirki\Control\Repeater' );
// } );

// /**
//  * Add Customizer settings & controls.
//  *
//  * @since 1.0
//  * @param WP_Customize_Manager $wp_customize The WP_Customize_Manager object.
//  * @return void
//  */
// add_action( 'customize_register', function( $wp_customize ) {

// 	// Add settings.
// 	$wp_customize->add_setting( new \Kirki\Settings\Repeater( $wp_customize, 'my_repeater_setting', [
// 		'default'           => [
// 			[
// 				'link_text'   => esc_html__( 'Kirki Site', 'theme_textdomain' ),
// 				'link_url'    => 'https://aristath.github.io/kirki/',
// 				'link_target' => '_self',
// 			],
// 			[
// 				'link_text'   => esc_html__( 'Kirki Repository', 'theme_textdomain' ),
// 				'link_url'    => 'https://github.com/aristath/kirki',
// 				'link_target' => '_self',
// 			],
// 		],
// 		'type'              => 'theme_mod',
// 		'capability'        => 'edit_theme_options',
// 		'transport'         => 'refresh',
// 		'sanitize_callback' => function( $value ) { // Custom sanitization callback.
// 			$value = ( is_array( $value ) ) ? $value : json_decode( urldecode( $value ), true );
// 			$value = ( empty( $value ) || ! is_array( $value ) ) ? [] : $value;

// 			foreach ( $value as $row_index => $row_data ) {
// 				$value[ $row_index ]['link_text'] = isset( $row_data['link_text'] ) ? sanitize_text_field( $row_data['link_text'] ) : '';
// 				$value[ $row_index ]['link_url'] = isset( $row_data['link_url'] ) ? esc_url( $row_data['link_url'] ) : '';
// 				$value[ $row_index ]['link_target'] = isset( $row_data['link_target'] ) && in_array( $row_data['link_target'], [ '_self', '_blank', '_parent', '_top' ], true ) ? $row_data['link_target'] : '_self';
// 			}
// 		},
// 	] ) );

// 	// Add controls.
// 	$wp_customize->add_control( new \Kirki\Control\Repeater( $wp_customize, 'my_repeater_setting', [
// 		'label'   => esc_html__( 'My Control', 'theme_textdomain' ),
// 		'section' => 'home_projects',
// 		'fields'  => [
// 			'link_text'   => [
// 				'type'        => 'text',
// 				'label'       => esc_html__( 'Link Text', 'theme_textdomain' ),
// 				'description' => esc_html__( 'This will be the label for your link', 'theme_textdomain' ),
// 				'default'     => '',
// 			],
// 			'link_url'    => [
// 				'type'        => 'text',
// 				'label'       => esc_html__( 'Link URL', 'theme_textdomain' ),
// 				'description' => esc_html__( 'This will be the link URL', 'theme_textdomain' ),
// 				'default'     => '',
// 			],
// 			'link_target' => [
// 				'type'        => 'radio',
// 				'label'       => esc_html__( 'Link Target', 'theme_textdomain' ),
// 				'description' => esc_html__( 'This will be the link target', 'theme_textdomain' ),
// 				'default'     => '_self',
// 				'choices'     => [
// 					'_blank' => esc_html__( 'New Window', 'theme_textdomain' ),
// 					'_self'  => esc_html__( 'Same Frame', 'theme_textdomain' ),
// 				],
// 			],
// 		],
// 	] ) );
// } );
