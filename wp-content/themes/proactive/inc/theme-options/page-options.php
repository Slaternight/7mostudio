<?php
 
add_action( 'pxl_post_metabox_register', 'proactive_page_options_register' );
function proactive_page_options_register( $metabox ) {
 
	$panels = [
		'post' => [
			'opt_name'            => 'post_option',
			'display_name'        => esc_html__( 'Post Options', 'proactive' ),
			'show_options_object' => false,
			'context'  => 'advanced',
			'priority' => 'default',
			'sections'  => [
				'post_settings' => [
					'title'  => esc_html__( 'Post Options', 'proactive' ),
					'icon'   => 'el el-cog',
					'fields' => array_merge(
						proactive_sidebar_pos_opts(['prefix' => 'post_', 'default' => true, 'default_value' => '-1']),
						array(
							array(
					            'id'=> 'post_video_link',
					            'type' => 'text',
					            'title' => esc_html__('Video Link', 'proactive'),
					            'validate' => 'url',
					            'default' => '',
					        ),
					        array(
								'id'             => 'content_spacing',
								'type'           => 'spacing',
								'output'         => array( '#pxl-wapper #pxl-main' ),
								'right'          => false,
								'left'           => false,
								'mode'           => 'padding',
								'units'          => array( 'px' ),
								'units_extended' => 'false',
								'title'          => esc_html__( 'Spacing Top/Bottom', 'proactive' ),
								'default'        => array(
									'padding-top'    => '',
									'padding-bottom' => '',
									'units'          => 'px',
								)
							),
					    )
					)
				]
			]
		],
		'page' => [
			'opt_name'            => 'pxl_page_options',
			'display_name'        => esc_html__( 'Page Options', 'proactive' ),
			'show_options_object' => false,
			'context'  => 'advanced',
			'priority' => 'default',
			'sections'  => [
				'header' => [
					'title'  => esc_html__( 'Header', 'proactive' ),
					'icon'   => 'el-icon-website',
					'fields' => array_merge(
				        proactive_header_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						proactive_header_mobile_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						array(
							array(
				                'id'       => 'header_display',
				                'type'     => 'button_set',
				                'title'    => esc_html__('Header Display', 'proactive'),
				                'options'  => array(
				                    'show' => esc_html__('Show', 'proactive'),
				                    'hide'  => esc_html__('Hide', 'proactive'),
				                ),
				                'default'  => 'show',
				            ),
				            array(
				                'id'       => 'page_mobile_style',
				                'type'     => 'button_set',
				                'title'    => esc_html__('Mobile Style', 'proactive'),
				                'options'  => array(
				                    'inherit'  => esc_html__('Inherit', 'proactive'),
				                    'light'  => esc_html__('Light', 'proactive'),
				                    'dark'  => esc_html__('Dark', 'proactive'),
				                ),
				                'default'  => 'inherit',
				            ),
				            array(
				           		'id'       => 'logo_m',
					            'type'     => 'media',
					            'title'    => esc_html__('Mobile Logo Dark', 'proactive'),
					            'default'  => '',
					            'url'      => false,
					        ),
					        array(
				           		'id'       => 'logo_light_m',
					            'type'     => 'media',
					            'title'    => esc_html__('Mobile Logo Light', 'proactive'),
					            'default'  => '',
					            'url'      => false,
					        ),
					        array(
				                'id'       => 'p_menu',
				                'type'     => 'select',
				                'title'    => esc_html__( 'Menu', 'proactive' ),
				                'options'  => proactive_get_nav_menu_slug(),
				                'default' => '',
				                'description' => 'When you select Custom Menu. The custom menu will apply to the entire layout when you use Case Nav Menu widget in Elementor and Menu on header layout in Mobile.'
				            ),
					    ),
					    array(
				            array(
				                'id'       => 'sticky_scroll',
				                'type'     => 'button_set',
				                'title'    => esc_html__('Sticky Scroll', 'proactive'),
				                'options'  => array(
				                    '-1' => esc_html__('Inherit', 'proactive'),
				                    'pxl-sticky-stt' => esc_html__('Scroll To Top', 'proactive'),
				                    'pxl-sticky-stb'  => esc_html__('Scroll To Bottom', 'proactive'),
				                ),
				                'default'  => '-1',
				            ),
				            array(
				                'id'       => 'header_margin',
				                'type'     => 'spacing',
				                'mode'     => 'margin',
				                'title'    => esc_html__('Margin', 'proactive'),
				                'width'    => false,
				                'unit'     => 'px',
				                'output'    => array('#pxl-header-elementor .pxl-header-elementor-main'),
				            ),
				        )
				    )
					 
				],
				'page_title' => [
					'title'  => esc_html__( 'Page Title', 'proactive' ),
					'icon'   => 'el el-indent-left',
					'fields' => array_merge(
				        proactive_page_title_opts([
							'default'         => true,
							'default_value'   => '-1'
						])
				    )
				],
				'content' => [
					'title'  => esc_html__( 'Content', 'proactive' ),
					'icon'   => 'el-icon-pencil',
					'fields' => array_merge(
						proactive_sidebar_pos_opts(['prefix' => 'page_', 'default' => false, 'default_value' => '0']),
						array(
					        array(
								'id'             => 'content_spacing',
								'type'           => 'spacing',
								'output'         => array( '#pxl-wapper #pxl-main' ),
								'right'          => false,
								'left'           => false,
								'mode'           => 'padding',
								'units'          => array( 'px' ),
								'units_extended' => 'false',
								'title'          => esc_html__( 'Spacing Top/Bottom', 'proactive' ),
								'default'        => array(
									'padding-top'    => '',
									'padding-bottom' => '',
									'units'          => 'px',
								)
							), 
					    )
					)
				],
				'footer' => [
					'title'  => esc_html__( 'Footer', 'proactive' ),
					'icon'   => 'el el-website',
					'fields' => array_merge(
				        proactive_footer_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						array(
							array(
				                'id'       => 'footer_display',
				                'type'     => 'button_set',
				                'title'    => esc_html__('Footer Display', 'proactive'),
				                'options'  => array(
				                    'show' => esc_html__('Show', 'proactive'),
				                    'hide'  => esc_html__('Hide', 'proactive'),
				                ),
				                'default'  => 'show',
				            ),
							array(
				                'id'       => 'p_footer_fixed',
				                'type'     => 'button_set',
				                'title'    => esc_html__('Footer Fixed', 'proactive'),
				                'options'  => array(
				                    'inherit' => esc_html__('Inherit', 'proactive'),
				                    'on' => esc_html__('On', 'proactive'),
				                    'off' => esc_html__('Off', 'proactive'),
				                ),
				                'default'  => 'inherit',
				            ),
				            array(
				                'id'       => 'back_top_top_style',
				                'type'     => 'button_set',
				                'title'    => esc_html__('Back to Top Style', 'proactive'),
				                'options'  => array(
				                    'style-default' => esc_html__('Default', 'proactive'),
				                    'style-round' => esc_html__('Round', 'proactive'),
				                ),
				                'default'  => 'style-default',
				            ),
						)
				    )
				],
				'colors' => [
					'title'  => esc_html__( 'Colors', 'proactive' ),
					'icon'   => 'el el-website',
					'fields' => array_merge(
				        array(
				        	array(
							    'id'        => 'page_body_color',
							    'type'      => 'color',
							    'title'     => esc_html__('Body Background Color', 'proactive'),
							    'default'   => '',
							    'transparent' => false,
							    'output'    => array(
							        'background-color' => 'body',
							    )
							),
				        	array(
					            'id'          => 'primary_color',
					            'type'        => 'color',
					            'title'       => esc_html__('Primary Color', 'proactive'),
					            'transparent' => false,
					            'default'     => ''
					        ),
					        array(
					            'id'          => 'gradient_color',
					            'type'        => 'color_gradient',
					            'title'       => esc_html__('Gradient Color', 'proactive'),
					            'transparent' => false,
					            'default'  => array(
					                'from' => '',
					                'to'   => '', 
					            ),
					        ),
					    )
				    )
				],
				'extra' => [
					'title'  => esc_html__( 'Extra', 'proactive' ),
					'icon'   => 'el el-website',
					'fields' => array_merge(
				        array(
				        	array(
					            'id' => 'body_custom_class',
					            'type' => 'text',
					            'title' => esc_html__('Body Custom Class', 'proactive'),
					        ),
					    )
				    )
				]
			]
		],
		'portfolio' => [
			'opt_name'            => 'pxl_portfolio_options',
			'display_name'        => esc_html__( 'Portfolio Options', 'proactive' ),
			'show_options_object' => false,
			'context'  => 'advanced',
			'priority' => 'default',
			'sections'  => [
				'header' => [
					'title'  => esc_html__( 'General', 'proactive' ),
					'icon'   => 'el-icon-website',
					'fields' => array_merge(
						array(
							array(
					            'id'=> 'portfolio_excerpt',
					            'type' => 'textarea',
					            'title' => esc_html__('Excerpt', 'proactive'),
					            'validate' => 'html_custom',
					            'default' => '',
					        ),
					        array(
								'id'             => 'content_spacing',
								'type'           => 'spacing',
								'output'         => array( '#pxl-wapper #pxl-main' ),
								'right'          => false,
								'left'           => false,
								'mode'           => 'padding',
								'units'          => array( 'px' ),
								'units_extended' => 'false',
								'title'          => esc_html__( 'Content Spacing Top/Bottom', 'proactive' ),
								'default'        => array(
									'padding-top'    => '',
									'padding-bottom' => '',
									'units'          => 'px',
								)
							),
						)
				    )
				],
			]
		],
		'service' => [
			'opt_name'            => 'pxl_service_options',
			'display_name'        => esc_html__( 'Service Options', 'proactive' ),
			'show_options_object' => false,
			'context'  => 'advanced',
			'priority' => 'default',
			'sections'  => [
				'header' => [
					'title'  => esc_html__( 'General', 'proactive' ),
					'icon'   => 'el-icon-website',
					'fields' => array_merge(
						array(
							array(
					            'id'=> 'service_external_link',
					            'type' => 'text',
					            'title' => esc_html__('External Link', 'proactive'),
					            'validate' => 'url',
					            'default' => '',
					        ),
							array(
					            'id'=> 'service_excerpt',
					            'type' => 'textarea',
					            'title' => esc_html__('Excerpt', 'proactive'),
					            'validate' => 'html_custom',
					            'default' => '',
					        ),
					        array(
					            'id'       => 'service_icon_type',
					            'type'     => 'button_set',
					            'title'    => esc_html__('Icon Type', 'proactive'),
					            'options'  => array(
					                'icon'  => esc_html__('Icon', 'proactive'),
					                'image'  => esc_html__('Image', 'proactive'),
					            ),
					            'default'  => 'icon'
					        ),
					        array(
					            'id'       => 'service_icon_font',
					            'type'     => 'pxl_iconpicker',
					            'title'    => esc_html__('Icon', 'proactive'),
					            'required' => array( 0 => 'service_icon_type', 1 => 'equals', 2 => 'icon' ),
            					'force_output' => true
					        ),
					        array(
					            'id'       => 'service_icon_img',
					            'type'     => 'media',
					            'title'    => esc_html__('Icon Image', 'proactive'),
					            'default' => '',
					            'required' => array( 0 => 'service_icon_type', 1 => 'equals', 2 => 'image' ),
				            	'force_output' => true
					        ),
					        array(
								'id'             => 'content_spacing',
								'type'           => 'spacing',
								'output'         => array( '#pxl-wapper #pxl-main' ),
								'right'          => false,
								'left'           => false,
								'mode'           => 'padding',
								'units'          => array( 'px' ),
								'units_extended' => 'false',
								'title'          => esc_html__( 'Content Spacing Top/Bottom', 'proactive' ),
								'default'        => array(
									'padding-top'    => '',
									'padding-bottom' => '',
									'units'          => 'px',
								)
							),
						),
						proactive_footer_opts([
							'default'         => true,
							'default_value'   => '-1'
						])
				    )
				],
			]
		],

		'pxl-template' => [ //post_type
			'opt_name'            => 'pxl_hidden_template_options',
			'display_name'        => esc_html__( 'Template Options', 'proactive' ),
			'show_options_object' => false,
			'context'  => 'advanced',
			'priority' => 'default',
			'sections'  => [
				'header' => [
					'title'  => esc_html__( 'General', 'proactive' ),
					'icon'   => 'el-icon-website',
					'fields' => array(
						array(
							'id'    => 'template_type',
							'type'  => 'select',
							'title' => esc_html__('Type', 'proactive'),
				            'options' => [
				            	'df'       	   => esc_html__('Select Type', 'proactive'), 
								'header'       => esc_html__('Header Desktop', 'proactive'),
								'header-mobile'       => esc_html__('Header Mobile', 'proactive'),
								'footer'       => esc_html__('Footer', 'proactive'), 
								'mega-menu'    => esc_html__('Mega Menu', 'proactive'), 
								'page-title'   => esc_html__('Page Title', 'proactive'), 
								'tab' => esc_html__('Tab', 'proactive'),
								'hidden-panel' => esc_html__('Hidden Panel', 'proactive'),
								'popup' => esc_html__('Popup', 'proactive'),
								'page' => esc_html__('Page', 'proactive'),
								'slider' => esc_html__('Slider', 'proactive'),
				            ],
				            'default' => 'df',
				        ),
				        array(
							'id'    => 'header_type',
							'type'  => 'select',
							'title' => esc_html__('Header Type', 'proactive'),
				            'options' => [
				            	'px-header--default'       	   => esc_html__('Default', 'proactive'), 
								'px-header--transparent'       => esc_html__('Transparent', 'proactive'),
								'px-header--left_sidebar'       => esc_html__('Left Sidebar', 'proactive'),
				            ],
				            'default' => 'px-header--default',
				            'indent' => true,
                			'required' => array( 0 => 'template_type', 1 => 'equals', 2 => 'header' ),
				        ),

				        array(
							'id'    => 'header_mobile_type',
							'type'  => 'select',
							'title' => esc_html__('Header Type', 'proactive'),
				            'options' => [
				            	'px-header--default'       	   => esc_html__('Default', 'proactive'), 
								'px-header--transparent'       => esc_html__('Transparent', 'proactive'),
				            ],
				            'default' => 'px-header--default',
				            'indent' => true,
                			'required' => array( 0 => 'template_type', 1 => 'equals', 2 => 'header-mobile' ),
				        ),

				        array(
							'id'    => 'hidden_panel_position',
							'type'  => 'select',
							'title' => esc_html__('Hidden Panel Position', 'proactive'),
				            'options' => [
				            	'top'       	   => esc_html__('Top', 'proactive'),
				            	'right'       	   => esc_html__('Right', 'proactive'),
				            ],
				            'default' => 'right',
				            'required' => array( 0 => 'template_type', 1 => 'equals', 2 => 'hidden-panel' ),
				        ),
				        array(
				            'id'          => 'hidden_panel_height',
				            'type'        => 'text',
				            'title'       => esc_html__('Hidden Panel Height', 'proactive'),
				            'subtitle'       => esc_html__('Enter number.', 'proactive'),
				            'transparent' => false,
				            'default'     => '',
				            'force_output' => true,
				            'required' => array( 0 => 'hidden_panel_position', 1 => 'equals', 2 => 'top' ),
				        ),
				        array(
				            'id'          => 'hidden_panel_boxcolor',
				            'type'        => 'color',
				            'title'       => esc_html__('Box Color', 'proactive'),
				            'transparent' => false,
				            'default'     => '',
				            'required' => array( 0 => 'template_type', 1 => 'equals', 2 => 'hidden-panel' ),
				        ),
				        array(
				            'id'          => 'header_sidebar_width',
				            'type'        => 'slider',
				            'title'       => esc_html__('Header Sidebar Width', 'proactive'),
				            "default"   => 300,
						    "min"       => 50,
						    "step"      => 1,
						    "max"       => 900,
				            'force_output' => true,
				            'required' => array( 0 => 'header_type', 1 => 'equals', 2 => 'px-header--left_sidebar' ),
				        ),

				        array(
							'id'    => 'header_sidebar_style',
							'type'  => 'select',
							'title' => esc_html__('Header Sidebar Style', 'proactive'),
				            'options' => [
				            	'px-header-sidebar-style1'      => esc_html__('Style 1', 'proactive'), 
								'px-header-sidebar-style2'      => esc_html__('Style 2', 'proactive'),
				            ],
				            'default' => 'px-header-sidebar-style1',
				            'indent' => true,
                			'required' => array( 0 => 'header_type', 1 => 'equals', 2 => 'px-header--left_sidebar' ),
				        ),
					),
				    
				],
			]
		],
	];
 
	$metabox->add_meta_data( $panels );
}
 