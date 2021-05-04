<?php if (!defined('ABSPATH')) exit;
/**
 * Customizer panels.
 *
 * @since 1.0.0
 */

/*------------------------------------------
 => Panel 
------------------------------------------*/


Kirki::add_panel('general_options', array(
	'priority'    => 5,
	'title'       => esc_html__('General Settings', 'political'),
));

Kirki::add_panel('header_options', array(
	'priority'    => 10,
	'title'       => esc_html__('Header Settings', 'political'),
));

Kirki::add_panel('page_options', array(
	'priority'    => 15,
	'title'       => esc_html__('Page Settings', 'political'),
));

Kirki::add_panel('blog_options', array(
	'priority'    => 20,
	'title'       => esc_html__('Blog Settings', 'political'),
));

Kirki::add_panel('typography', array(
	'priority'    => 25,
	'title'       => esc_html__('Typograhy', 'political'),
));

Kirki::add_panel('color_options', array(
	'priority'    => 30,
	'title'       => esc_html__('Color', 'political'),
));
Kirki::add_panel('footer_options', array(
	'priority'    => 35,
	'title'       => esc_html__('Footer', 'political'),
));

/*------------------------------------------
 => Sections 
------------------------------------------*/

Kirki::add_section('back_to_top', array(
	'title'       => esc_html__('Scroll Back to Top', 'political'),
	'priority'    => 3,
	'panel'       => 'general_options',
));
Kirki::add_section('preloader', array(
	'title'       => esc_html__('Preloader', 'political'),
	'priority'    => 5,
	'panel'       => 'general_options',
));

Kirki::add_section('blog_page_layout', array(
	'title'       => esc_html__('Blog', 'political'),
	'priority'    => 5,
	'panel'       => 'blog_options',
));
Kirki::add_section('read_more', array(
	'title'       => esc_html__('Read More', 'political'),
	'priority'    => 10,
	'panel'       => 'blog_options',
));
Kirki::add_section('excerpt_limit', array(
	'title'       => esc_html__('Excerpt Limit', 'political'),
	'priority'    => 15,
	'panel'       => 'blog_options',
));
Kirki::add_section('header_section', array(
	'title'       => esc_html__('Header Design', 'political'),
	'priority'    => 5,
	'panel'       => 'header_options',
));
Kirki::add_section('site_brand_section', array(
	'title'       => esc_html__('Site Brand', 'political'),
	'priority'    => 5,
	'panel'       => 'header_options',
));

Kirki::add_section('page_layout', array(
	'title'       => esc_html__('Page Layout', 'political'),
	'priority'    => 1,
	'panel'       => 'page_options',
));
Kirki::add_section('authors_page', array(
	'title'       => esc_html__('Authors Page', 'political'),
	'priority'    => 3,
	'panel'       => 'page_options',
));
Kirki::add_section('author_page', array(
	'title'       => esc_html__('Author Page', 'political'),
	'priority'    => 5,
	'panel'       => 'page_options',
));
Kirki::add_section('categories_page', array(
	'title'       => esc_html__('Categories Page', 'political'),
	'priority'    => 7,
	'panel'       => 'page_options',
));
Kirki::add_section('category_page', array(
	'title'       => esc_html__('Category Page', 'political'),
	'priority'    => 9,
	'panel'       => 'page_options',
));
Kirki::add_section('search_result', array(
	'title'       => esc_html__('Search Result', 'political'),
	'priority'    => 11,
	'panel'       => 'page_options',
));
Kirki::add_section('404_page', array(
	'title'       => esc_html__('404', 'political'),
	'priority'    => 13,
	'panel'       => 'page_options',
));


Kirki::add_section('body', array(
	'title'       => esc_html__('Body', 'political'),
	'priority'    => 1,
	'panel'       => 'typography',
));
Kirki::add_section('page_content', array(
	'title'       => esc_html__('Page Content', 'political'),
	'priority'    => 3,
	'panel'       => 'typography',
));
Kirki::add_section('heading', array(
	'title'       => esc_html__('Heading', 'political'),
	'priority'    => 5,
	'panel'       => 'typography',
));
Kirki::add_section('navbar', array(
	'title'       => esc_html__('Navbar', 'political'),
	'priority'    => 7,
	'panel'       => 'typography',
));
Kirki::add_section('post_card', array(
	'title'       => esc_html__('Post Card', 'political'),
	'priority'    => 11,
	'panel'       => 'typography',
));


Kirki::add_section('footer_design', array(
	'title'       => esc_html__('Footer Design', 'political'),
	'priority'    => 1,
	'panel'       => 'footer_options',
));
Kirki::add_section('footer_column', array(
	'title'       => esc_html__('Footer Widget Layout', 'political'),
	'priority'    => 5,
	'panel'       => 'footer_options',
));
Kirki::add_section('footer_copyright', array(
	'title'       => esc_html__('Footer Copyright', 'political'),
	'priority'    => 10,
	'panel'       => 'footer_options',
));
Kirki::add_section('footer_subscribe', array(
	'title'       => esc_html__('Subscribe', 'political'),
	'priority'    => 15,
	'panel'       => 'footer_options',
));

/*------------------------------------------
 => Fields 
------------------------------------------*/

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'switch',
		'settings'    => 'back_to_top_settings',
		'label'       => esc_html__('Enable/Disable Scroll Back to Top', 'political'),
		'section'     => 'back_to_top',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => array(
			'on'  => esc_html__('Enable', 'political'),
			'off' => esc_html__('Disable', 'political'),
		),
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'switch',
		'settings'    => 'preloader_settings',
		'label'       => esc_html__('Enable/Disable Preloader', 'political'),
		'section'     => 'preloader',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => array(
			'on'  => esc_html__('Enable', 'political'),
			'off' => esc_html__('Disable', 'political'),
		),
	)
);


Kirki::add_field(
	'political_config',
	array(
		'type'        => 'radio-image',
		'settings'    => 'blog_single_page_layout',
		'label'       => esc_html__('Content Page Layout', 'political'),
		'section'     => 'blog_page_layout',
		'default'     => '1',
		'priority'    => 15,
		'choices'     => array(
			'3'   => POLITICAL_IMG_URL . '/layout3.png',
			'1'   => POLITICAL_IMG_URL . '/layout1.png',
			'2'   => POLITICAL_IMG_URL . '/layout2.png',
		)
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'switch',
		'settings'    => 'readmore_switch',
		'label'       => esc_html__('Enable/Disable Read More', 'political'),
		'description' => esc_html__('You can show or hide your read more button.', 'political'),
		'section'     => 'read_more',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => array(
			'on'  => esc_html__('Enable', 'political'),
			'off' => esc_html__('Disable', 'political'),
		),
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'     => 'text',
		'settings' => 'read_more_label',
		'label'    => esc_html__('Read More Label', 'political'),
		'section'  => 'read_more',
		'default'  => esc_html__('Read More', 'political'),
		'priority' => 5,
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'     => 'text',
		'settings' => 'featured_post_excerpt_limit',
		'label'    => esc_html__('Featured Post Excerpt Limit', 'political'),
		'section'  => 'excerpt_limit',
		'default'  => 35,
		'priority' => 5,
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'     => 'text',
		'settings' => 'post_excerpt_limit',
		'label'    => esc_html__('Post Excerpt Limit', 'political'),
		'section'  => 'excerpt_limit',
		'default'  => 10,
		'priority' => 10,
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'     => 'text',
		'settings' => 'archive_excerpt_limit',
		'label'    => esc_html__('Archive Post Excerpt Limit', 'political'),
		'section'  => 'excerpt_limit',
		'default'  => 10,
		'priority' => 15,
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'select',
		'settings'    => 'select_header_setting',
		'label'       => esc_html__('Select header', 'political'),
		'section'     => 'header_section',
		'default'     => '1',
		'placeholder' => esc_html__('Select an option...', 'political'),
		'description' => esc_html__('Note: This option works for globally. If you select header from pages then this dose not work for that indivisual pages..', 'political'),
		'priority'    => 1,
		'multiple'    => 1,
		'choices'     => array(
			'1' => esc_html__('Header 01', 'political'),
			'2' => esc_html__('Header 02', 'political'),
			'3' => esc_html__('Header 03', 'political'),
			'4' => esc_html__('Header 04', 'political'),
		),
	)
);
Kirki::add_field('political_config', array(
	'type'        => 'toggle',
	'settings'    => 'header_location_toggle_settings',
	'label'       => esc_html__('Header Location', 'kirki'),
	'section'     => 'header_section',
	'default'     => '1',
	'priority'    => 2,
));

Kirki::add_field(
	'political_config',
	array(
		'type'     => 'text',
		'settings' => 'header_location_settings',
		'label'    => esc_html__('Header Location', 'political'),
		'section'  => 'header_section',
		'default'  => esc_html__('New York, USA', 'political'),
		'priority' => 3,
		'active_callback' => array(
			array(
				'setting'  => 'header_location_toggle_settings',
				'operator' => '==',
				'value'    => '1',
			)
		),
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'toggle',
		'settings'    => 'header_social_settings',
		'label'       => esc_html__('Enable/Disable Header Social', 'political'),
		'section'     => 'header_section',
		'default'     => '1',
		'priority'    => 4,
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'toggle',
		'settings'    => 'header_search_options',
		'label'       => esc_html__('Enable/Disable Header Search', 'political'),
		'section'     => 'header_section',
		'default'     => '1',
		'priority'    => 4,
	)
);


Kirki::add_field(
	'political_config',
	array(
		'type'     => 'link',
		'settings' => 'facebook_link_setting',
		'label'    => __('Facebook Link', 'political'),
		'section'  => 'header_section',
		'default'  => 'https://facebook.com/themeix',
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'header_social_settings',
				'operator' => '==',
				'value'    => '1',
			)
		),
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'     => 'link',
		'settings' => 'twitter_link_setting',
		'label'    => __('Twitter Link', 'political'),
		'section'  => 'header_section',
		'default'  => 'https://twitter.com/themeix',
		'priority' => 6,
		'active_callback' => array(
			array(
				'setting'  => 'header_social_settings',
				'operator' => '==',
				'value'    => '1',
			)
		),
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'     => 'link',
		'settings' => 'instagram_link_setting',
		'label'    => __('Instagram Link', 'political'),
		'section'  => 'header_section',
		'default'  => 'https://instagram.com/themeix',
		'priority' => 7,
		'active_callback' => array(
			array(
				'setting'  => 'header_social_settings',
				'operator' => '==',
				'value'    => '1',
			)
		),
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'     => 'link',
		'settings' => 'pinterest_link_setting',
		'label'    => __('Pinterest Link', 'political'),
		'section'  => 'header_section',
		'default'  => 'https://pinterest.com/themeix',
		'priority' => 8,
		'active_callback' => array(
			array(
				'setting'  => 'header_social_settings',
				'operator' => '==',
				'value'    => '1',
			)
		),
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'slider',
		'settings'    => 'site_brand',
		'label'       => esc_html__('Logo Brand Width(px)', 'political'),
		'description'       => esc_html__('You can set your header logo image width', 'political'),
		'section'     => 'site_brand_section',
		'default'     => 200,
		'choices'     => array(
			'min'  => 1,
			'max'  => 275,
			'step' => 1,
		)
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'radio-image',
		'settings'    => 'political_page_layout',
		'label'       => esc_html__('Political Page Layout', 'political'),
		'section'     => 'page_layout',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => array(
			'3'   => POLITICAL_IMG_URL . '/layout3.png',
			'1'   => POLITICAL_IMG_URL . '/layout1.png',
			'2'   => POLITICAL_IMG_URL . '/layout2.png',
		)
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'image',
		'settings'    => 'author_banner_bg',
		'label'       => esc_html__('Banner Background', 'political'),
		'description'       => esc_html__('Upload you banner background image', 'political'),
		'section'     => 'author_page',
		'default'     => '',
		'priority'    => 1,
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'color',
		'settings'    => 'author_bg_overlay',
		'label'       => esc_html__('Background Overlay', 'political'),
		'description'       => esc_html__('Upload you banner background image', 'political'),
		'section'     => 'author_page',
		'default'     => '',
		'priority'    => 3,
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'radio-image',
		'settings'    => 'author_page_layout',
		'label'       => esc_html__('Layout', 'political'),
		'section'     => 'author_page',
		'default'     => '1',
		'priority'    => 5,
		'choices'     => array(
			'3'   => POLITICAL_IMG_URL . '/layout3.png',
			'1'   => POLITICAL_IMG_URL . '/layout1.png',
			'2'   => POLITICAL_IMG_URL . '/layout2.png',
		)
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'image',
		'settings'    => 'categories_banner_bg',
		'label'       => esc_html__('Banner Background', 'political'),
		'description'       => esc_html__('Upload you banner background image', 'political'),
		'section'     => 'categories_page',
		'default'     => '',
		'priority'    => 1,
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'color',
		'settings'    => 'categories_bg_overlay',
		'label'       => esc_html__('Background Overlay', 'political'),
		'description'       => esc_html__('Upload you banner background image', 'political'),
		'section'     => 'categories_page',
		'default'     => '',
		'priority'    => 3,
	)
);

Kirki::add_field('applin_config', [
	'type'        => 'select',
	'settings'    => 'category_layout',
	'label'       => esc_html__('Category Layout', 'political'),
	'section'     => 'categories_page',
	'default'     => '1',
	'placeholder' => esc_html__('Select your Category layout option', 'political'),
	'priority'    => 5,
	'choices'     => [
		'1' => esc_html__('col-4 | col-4 | col-4', 'political'),
		'5' => esc_html__('col-6 | col-6', 'political'),
	],
]);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'image',
		'settings'    => 'category_banner_bg',
		'label'       => esc_html__('Banner Background', 'political'),
		'description'       => esc_html__('Upload you banner background image', 'political'),
		'section'     => 'category_page',
		'default'     => '',
		'priority'    => 1,
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'color',
		'settings'    => 'category_bg_overlay',
		'label'       => esc_html__('Background Overlay', 'political'),
		'description'       => esc_html__('Upload you banner background image', 'political'),
		'section'     => 'category_page',
		'default'     => '',
		'priority'    => 3,
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'image',
		'settings'    => 'search_result_bg',
		'label'       => esc_html__('Banner Background', 'political'),
		'description'       => esc_html__('Upload you banner background image', 'political'),
		'section'     => 'search_result',
		'default'     => '',
		'priority'    => 1,
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'color',
		'settings'    => 'search_result_overlay',
		'label'       => esc_html__('Background Overlay', 'political'),
		'description'       => esc_html__('Upload you banner background image', 'political'),
		'section'     => 'search_result',
		'default'     => '',
		'priority'    => 2,
	)
);


Kirki::add_field(
	'political_config',
	array(
		'type'        => 'text',
		'settings'    => 'search_nothing_found_text',
		'label'       => esc_html__('Nothing Found Text', 'political'),
		'section'     => 'search_result',
		'default'     => esc_html__('Noting Found', 'political'),
		'priority'    => 3
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'textarea',
		'settings'    => 'search_nothing_found_description_text',
		'label'       => esc_html__('Nothing Found Description', 'political'),
		'section'     => 'search_result',
		'default'     => esc_html__('Sorry, nothing matched your search terms. Please try again with some different keywords.', 'political'),
		'priority'    => 4
	)
);


Kirki::add_field(
	'political_config',
	array(
		'type'        => 'image',
		'settings'    => '404_page_bg',
		'label'       => esc_html__('Banner Background', 'political'),
		'description'       => esc_html__('Upload you banner background image', 'political'),
		'section'     => '404_page',
		'default'     => '',
		'priority'    => 1,
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'color',
		'settings'    => '404_page_overlay',
		'label'       => esc_html__('Background Overlay', 'political'),
		'description'       => esc_html__('Upload you banner background image', 'political'),
		'section'     => '404_page',
		'default'     => '',
		'priority'    => 3,
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'text',
		'settings'    => '404_nothing_found_text',
		'label'       => esc_html__('Nothing Found Text', 'political'),
		'section'     => '404_page',
		'default'     => '404 - Noting Found',
		'priority'    => 4
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'textarea',
		'settings'    => '404_nothing_found_description_text',
		'label'       => esc_html__('Nothing Found Description Text', 'political'),
		'section'     => '404_page',
		'default'     => esc_html__('We\'re sorry, the page you were looking for isn\'t found here. The link you followed may either be broken or no longer exists. Please try again, or take a look at our site.','political'),
		'priority'    => 5
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'text',
		'settings'    => '404_back_to_home_text',
		'label'       => esc_html__('Back to home', 'political'),
		'section'     => '404_page',
		'default'     => esc_html__('Back to home','political'),
		'priority'    => 6
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'typography',
		'settings'    => 'bodytypography',
		'label'       => esc_html__('Body Typography', 'political'),
		'section'     => 'body',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('body'),
			),
		),
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'typography',
		'settings'    => 'page_content',
		'label'       => esc_html__('Page Content', 'political'),
		'section'     => 'page_content',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.entry-content p'),
			),
		),
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'typography',
		'settings'    => 'heading1',
		'label'       => esc_html__('Heading', 'political'),
		'section'     => 'heading',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.entry-content p'),
			),
		),
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin2',
		'label'       => esc_html__('Heading 2', 'political'),
		'section'     => 'heading',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h2'),
			),
		),
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin3',
		'label'       => esc_html__('Heading 3', 'political'),
		'section'     => 'heading',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h3'),
			),
		),
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin4',
		'label'       => esc_html__('Heading 4', 'political'),
		'section'     => 'heading',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h4'),
			),
		),
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin5',
		'label'       => esc_html__('Heading 5', 'political'),
		'section'     => 'heading',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h5'),
			),
		),
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin6',
		'label'       => esc_html__('Heading 6', 'political'),
		'section'     => 'heading',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h6'),
			),
		),
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'typography',
		'settings'    => 'navbar_item',
		'label'       => esc_html__('Navbar', 'political'),
		'section'     => 'navbar',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.themeix-menu #main-menu li>a'),
			),
		),
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'typography',
		'settings'    => 'postcard_title',
		'label'       => esc_html__('Post Title', 'political'),
		'section'     => 'post_card',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.blog-post .desc h4'),
			),
		),
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'typography',
		'settings'    => 'postcard_meta',
		'label'       => esc_html__('Post Meta', 'political'),
		'section'     => 'post_card',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.blog-post .desc .meta-info span'),
			),
		),
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'typography',
		'settings'    => 'postcard_cat',
		'label'       => esc_html__('Post Category', 'political'),
		'section'     => 'post_card',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.blog-post .feature-btn'),
			),
		),
	)
);



Kirki::add_field(
	'political_config',
	array(
		'type'        => 'color',
		'settings'    => 'primary_color',
		'label'       => esc_html__('Primary Color', 'political'),
		'section'     => 'colors',
		'priority'    => 1,
		'default'     => '#f44336',
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'color',
		'settings'    => 'secondary_color',
		'label'       => esc_html__('Secondary Color', 'political'),
		'section'     => 'colors',
		'priority'    => 2,
		'default'     => '#333333',
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'color',
		'settings'    => 'text_color',
		'label'       => esc_html__('Text Color', 'political'),
		'section'     => 'colors',
		'priority'    => 3,
		'default'     => '#383143',
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'select',
		'settings'    => 'footer_design_settings',
		'label'       => esc_html__('Select footer', 'political'),
		'section'     => 'footer_design',
		'default'     => '1',
		'placeholder' => esc_html__('Select an option...', 'political'),
		'description' => esc_html__('Note: This option works for globally. If you select footer from pages then this dose not work for that indivisual pages..', 'political'),
		'priority'    => 1,
		'multiple'    => 1,
		'choices'     => array(
			'1' => esc_html__('Footer 01', 'political'),
			'2' => esc_html__('Footer 02', 'political'),
			'3' => esc_html__('Footer 03', 'political'),
			'4' => esc_html__('Footer 04', 'political'),
		),
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'editor',
		'settings'    => 'footer_address_content',
		'label'       => esc_html__('Footer Address Content', 'political'),
		'section'     => 'footer_design',
		'default'     => '<a href="' . esc_url(site_url()) . '" class="footer-brand mb-2"><img src="' . POLITICAL_IMG_URL . '/footer-brand.png" alt="image"></a>
		<ul class="contact-nav mt-2 list-inline">
		  <li><i class="im im-location"></i>4732 Elk Creek Road, GA, <br>30085, USA</li>
		  <li><i class="im im-phone"></i>666 777 888</li>
		  <li><i class="im im-mail"></i>support@themeix.com</li>
		</ul>',
		'priority'    => 2,
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'editor',
		'settings'    => 'footer_copyright_text',
		'label'       => esc_html__('Copyright Text', 'political'),
		'section'     => 'footer_copyright',
		'default'     => '© 2021 Political - WordPress Theme <i class="im im-heart">  Developed by Themeix ',
		'priority'    => 2,
	)
);

Kirki::add_field(
	'political_config',
	array(
		'type'        => 'text',
		'settings'    => 'subscribe_title',
		'label'       => esc_html__('Title', 'political'),
		'section'     => 'footer_subscribe',
		'default'     => esc_html__('Subscribe', 'political'),
		'priority'    => 2,
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'textarea',
		'settings'    => 'subscribe_desc',
		'label'       => esc_html__('Subtitle', 'political'),
		'section'     => 'footer_subscribe',
		'default'     => esc_html__('Stay up to date! Get all the latest posts delivered straight to your inbox.', 'political'),
		'priority'    => 3,
	)
);
Kirki::add_field(
	'political_config',
	array(
		'type'        => 'textarea',
		'settings'    => 'form_shortcode',
		'label'       => esc_html__('Form Shortcode', 'political'),
		'section'     => 'footer_subscribe',
		'priority'    => 5,
	)
);
