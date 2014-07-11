<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Admin
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

/**
 * 
 */
abstract class Genesis_Customizer_Base {

	/**
	 * Define defaults, call the `register` method, add css to head.
	 */
	public function __construct() {
		
		//** Register new customizer elements
		if ( method_exists( $this, 'register' ) ) {
			add_action( 'customize_register', array( $this, 'register'), 15 );
		} else {
			_doing_it_wrong( 'Genesis_Customizer_Base', __( 'When extending Genesis_Customizer_Base, you must create a register method.', 'genesis' ) );
		}

		//* Customizer scripts
		if ( method_exists( $this, 'scripts' ) ) {
			add_action( 'customize_preview_init', 'scripts' );
		}
		
	}

	protected function get_field_name( $name ) {
		return sprintf( '%s[%s]', $this->settings_field, $name );
	}
	
	protected function get_field_id( $id ) {
		return sprintf( '%s[%s]', $this->settings_field, $id );
	}
	
	protected function get_field_value( $key ) {
		return genesis_get_option( $key, $this->settings_field );		
	}
	
}

/**
 * 
 */
class Genesis_Customizer extends Genesis_Customizer_Base {

	/**
	 * Settings field.
	 */
	public $settings_field = 'genesis-settings';

	/**
	 *
	 */
	public function register( $wp_customize ) {

		$this->color_scheme( $wp_customize );
		$this->layout( $wp_customize );

		if ( current_theme_supports( 'genesis-breadcrumbs' ) ) {
			$this->breadcrumbs( $wp_customize );
		}

		$this->comments( $wp_customize );
		$this->archives( $wp_customize );
		
	}

	private function color_scheme( $wp_customize ) {
		
		//** Color Selector
		if ( ! current_theme_supports( 'genesis-style-selector' ) )
			return;

		//** Add Section
		$wp_customize->add_section(
			'genesis_color_scheme',
			array(
				'title'    => 'Color Scheme',
				'priority' => 150,
			)
		);

		$wp_customize->add_setting(
			$this->get_field_name( 'style_selection' ),
			array(
				'default' => '',
				'type'    => 'option',
			)
		);

		$wp_customize->add_control(
			'genesis_color_scheme',
			array(
				'label'    => 'Select Color Style',
				'section'  => 'genesis_color_scheme',
				'settings' => $this->get_field_name( 'style_selection' ),
				'type'     => 'select',
				'choices'  => array_merge(
					array( '' => 'Default' ),
					array_shift( get_theme_support( 'genesis-style-selector' ) )
				),
			)
		);
		
	}
	
	private function layout( $wp_customize ) {
		
		$wp_customize->add_section(
			'genesis_layout',
			array(
				'title'    => 'Site Layout',
				'priority' => 150,
			)
		);

		$wp_customize->add_setting(
			$this->get_field_name( 'site_layout' ),
			array(
				'default' => genesis_get_default_layout(),
				'type'    => 'option',
			)
		);

		$wp_customize->add_control(
			'genesis_layout',
			array(
				'label'    => 'Select Default Layout',
				'section'  => 'genesis_layout',
				'settings' => $this->get_field_name( 'site_layout' ),
				'type'     => 'select',
				'choices'  => genesis_get_layouts_for_customizer(),
			)
		);
		
	}

	private function breadcrumbs( $wp_customize ) {

		$wp_customize->add_section(
			'genesis_breadcrumbs',
			array(
				'title'    => 'Breadcrumbs',
				'priority' => 150,
			)
		);

		$settings = array(
			'breadcrumb_home'       => 'Homepage',
			'breadcrumb_front_page' => 'Front Page',
			'breadcrumb_posts_page' => 'Posts Page',
			'breadcrumb_single'     => 'Single',
			'breadcrumb_page'       => 'Page',
			'breadcrumb_archive'    => 'Archive',
			'breadcrumb_404'        => '404',
			'breadcrumb_attachment' => 'Attachment/Media',
		);

		$priority = 1;

		foreach ( $settings as $setting => $label ) {

			$wp_customize->add_setting(
				$this->get_field_name( $setting ),
				array(
					'default' => 0,
					'type'    => 'option',
				)
			);

			$wp_customize->add_control(
				'genesis_' . $setting,
				array(
					'priority' => $priority,
					'label'    => $label,
					'section'  => 'genesis_breadcrumbs',
					'settings' => $this->get_field_name( $setting ),
					'type'     => 'checkbox',
				)
			);

			$priority++;

		}

	}

	private function comments( $wp_customize ) {

		$wp_customize->add_section(
			'genesis_comments',
			array(
				'title'    => __( 'Comments and Trackbacks', 'genesis' ),
				'priority' => 150,
			)
		);

		$settings = array(
			'comments_posts'   => __( 'Enable Comments on Posts?', 'genesis' ),
			'comments_pages'   => __( 'Enable Comments on Pages?', 'genesis' ),
			'trackbacks_posts' => __( 'Enable Trackbacks on Posts?', 'genesis' ),
			'trackbacks_pages' => __( 'Enable Trackbacks on Pages?', 'genesis' ),
		);

		foreach ( $settings as $setting => $label ) {

			$wp_customize->add_setting(
				$this->get_field_name( $setting ),
				array(
					'default' => 0,
					'type'    => 'option',
				)
			);

			$wp_customize->add_control(
				'genesis_' . $setting,
				array(
					'label'    => $label,
					'section'  => 'genesis_comments',
					'settings' => $this->get_field_name( $setting ),
					'type'     => 'checkbox',
				)
			);		

		}

	}

	private function archives( $wp_customize ) {

		$wp_customize->add_section(
			'genesis_archives',
			array(
				'title'       => __( 'Content Archives', 'genesis' ),
				'description' => __( 'These options will affect any blog listings page, including archive, author, blog, category, search, and tag pages.', 'genesis' ),
				'priority'    => 150,
			)
		);

		//* Setting key and default value array
		$settings = array(
			'content_archive'           => 'full',
			'content_archive_limit'     => '',
			'content_archive_thumbnail' => 0,
			'image_size'                => '',
			'image_alignment'           => 'alignleft',
			'posts_nav'                 => 'numeric',
		);

		foreach ( $settings as $setting => $default ) {

			$wp_customize->add_setting(
				$this->get_field_name( $setting ),
				array(
					'default' => $default,
					'type'    => 'option',
				)
			);

		}

		$wp_customize->add_control(
			'genesis_content_archive',
			array(
				'priority' => 1,
				'label'    => __( 'Select one of the following', 'genesis' ),
				'section'  => 'genesis_archives',
				'settings' => $this->get_field_name( 'content_archive' ),
				'type'     => 'select',
				'choices'  => array(
					'full'     => __( 'Display post content', 'genesis' ),
					'excerpts' => __( 'Display post excerpts', 'genesis' ),
				),
			)
		);

		$wp_customize->add_control(
			'genesis_content_archive_limit',
			array(
				'label'    => __( 'Limit content to how many characters? (0 for no limit)', 'genesis' ),
				'section'  => 'genesis_archives',
				'settings' => $this->get_field_name( 'content_archive_limit' ),
			)
		);

		$wp_customize->add_control(
			'genesis_content_archive_thumbnail',
			array(
				'label'    => __( 'Display the featured image?', 'genesis' ),
				'section'  => 'genesis_archives',
				'settings' => $this->get_field_name( 'content_archive_thumbnail' ),
				'type'     => 'checkbox',
			)
		);

		$wp_customize->add_control(
			'genesis_image_size',
			array(
				'label'    => __( 'Featured image size', 'genesis' ),
				'section'  => 'genesis_archives',
				'settings' => $this->get_field_name( 'image_size' ),
				'type'     => 'select',
				'choices'  => genesis_get_image_sizes_for_customizer(),
			)
		);

		$wp_customize->add_control(
			'genesis_image_alignment',
			array(
				'label'    => __( 'Featured image alignment', 'genesis' ),
				'section'  => 'genesis_archives',
				'settings' => $this->get_field_name( 'image_alignment' ),
				'type'     => 'select',
				'choices'  => array(
					''           => __( '- None -', 'genesis' ),
					'alignleft'  => __( 'Left', 'genesis' ),
					'alignright' => __( 'Right', 'genesis' ),
				),
			)
		);

		$wp_customize->add_control(
			'genesis_posts_nav',
			array(
				'label'    => __( 'Post Navigation Type', 'genesis' ),
				'section'  => 'genesis_archives',
				'settings' => $this->get_field_name( 'posts_nav' ),
				'type'     => 'select',
				'choices'  => array(
					'prev-next' => __( 'Previous / Next', 'genesis' ),
					'numeric'   => __( 'Numeric', 'genesis' ),
				),
			)
		);

	}

}

add_action( 'init', 'genesis_customizer_init' );
/**
 * 
 */
function genesis_customizer_init() {
	new Genesis_Customizer;
}

