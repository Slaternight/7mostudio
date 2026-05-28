<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_icon',
        'title' => esc_html__('Case Icons', 'proactive'),
        'icon' => 'eicon-alert',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'section_content',
                    'label' => esc_html__('Content', 'proactive'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'icons',
                            'label' => esc_html__('Icons', 'proactive'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'controls' => array(
                                array(
                                    'name' => 'pxl_icon',
                                    'label' => esc_html__('Icon', 'proactive' ),
                                    'type' => \Elementor\Controls_Manager::ICONS,
                                    'fa4compatibility' => 'icon',
                                ),
                                array(
                                    'name' => 'icon_link',
                                    'label' => esc_html__('Link', 'proactive'),
                                    'type' => \Elementor\Controls_Manager::URL,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'label',
                                    'label' => esc_html__('Label', 'proactive'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'label_position',
                                    'label' => esc_html__('Label Position', 'proactive' ),
                                    'type' => \Elementor\Controls_Manager::SELECT,
                                    'options' => [
                                        'ps-top' => 'Top',
                                        'ps-bottom' => 'Bottom',
                                    ],
                                    'default' => 'ps-top',
                                ),
                                array(
                                    'name' => 'color_item',
                                    'label' => esc_html__( 'Color', 'proactive' ),
                                    'type' => \Elementor\Controls_Manager::COLOR,
                                    'default' => '',
                                    'selectors' => [
                                        '{{WRAPPER}} .pxl-icon1 {{CURRENT_ITEM}}' => 'color: {{VALUE}};',
                                    ],
                                ),
                                array(
                                    'name' => 'color_item_hover',
                                    'label' => esc_html__( 'Color Hover', 'proactive' ),
                                    'type' => \Elementor\Controls_Manager::COLOR,
                                    'default' => '',
                                    'selectors' => [
                                        '{{WRAPPER}} .pxl-icon1 {{CURRENT_ITEM}}:hover' => 'color: {{VALUE}};',
                                    ],
                                ),
                            ),
                            'title_field' => '{{{ label }}}',
                        ),
                        array(
                          'name' => 'align',
                            'label' => esc_html__( 'Alignment', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::CHOOSE,
                            'control_type' => 'responsive',
                            'options' => [
                                'left' => [
                                    'title' => esc_html__( 'Left', 'proactive' ),
                                    'icon' => 'eicon-text-align-left',
                                ],
                                'center' => [
                                    'title' => esc_html__( 'Center', 'proactive' ),
                                    'icon' => 'eicon-text-align-center',
                                ],
                                'right' => [
                                    'title' => esc_html__( 'Right', 'proactive' ),
                                    'icon' => 'eicon-text-align-right',
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon1' => 'text-align: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'icon_arrange',
                            'label' => esc_html__( 'Arrange', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'icon-horizontal' => esc_html__( 'Horizontal', 'proactive' ),
                                'icon-vertical' => esc_html__( 'Vertical', 'proactive' ),
                            ],
                            'default' => 'icon-horizontal'
                        ),
                    ),
                ),
                
                array(
                    'name' => 'section_style',
                    'label' => esc_html__('Style', 'proactive'),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'style',
                            'label' => esc_html__('Style', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'style-1' => 'Style 1',
                                'style-2' => 'Style 2 - Box Gradient',
                            ],
                            'default' => 'style-1',
                        ),
                        array(
                            'name' => 'color',
                            'label' => esc_html__( 'Color', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon1 a' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'color_hover',
                            'label' => esc_html__( 'Icon Color Hover', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon1 a:hover' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'box_color',
                            'label' => esc_html__( 'Box Color', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon1 a, {{WRAPPER}} .pxl-icon1 a:before' => 'background-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'box_color_hover',
                            'label' => esc_html__( 'Box Color Hover', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon1 a:hover' => 'background-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'box_width',
                            'label' => esc_html__('Box Width', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon1 a' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'box_height',
                            'label' => esc_html__('Box Height', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon1 a' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name'         => 'icon_box_shadow',
                            'label' => esc_html__( 'Box Shadow', 'proactive' ),
                            'type'         => \Elementor\Group_Control_Box_Shadow::get_type(),
                            'control_type' => 'group',
                            'selector'     => '{{WRAPPER}} .pxl-icon1 a',
                        ),
                        array(
                            'name' => 'icon_font_size',
                            'label' => esc_html__('Font Size', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon1 a' => 'font-size: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'border_type',
                            'label' => esc_html__( 'Border Type', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                '' => esc_html__( 'None', 'proactive' ),
                                'solid' => esc_html__( 'Solid', 'proactive' ),
                                'double' => esc_html__( 'Double', 'proactive' ),
                                'dotted' => esc_html__( 'Dotted', 'proactive' ),
                                'dashed' => esc_html__( 'Dashed', 'proactive' ),
                                'groove' => esc_html__( 'Groove', 'proactive' ),
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon1 a' => 'border-style: {{VALUE}} !important;',
                            ],
                        ),
                        array(
                            'name' => 'border_width',
                            'label' => esc_html__( 'Border Width', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon1 a' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                            ],
                            'condition' => [
                                'border_type!' => '',
                            ],
                            'responsive' => true,
                        ),
                        array(
                            'name' => 'border_color',
                            'label' => esc_html__( 'Border Color', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon1 a' => 'border-color: {{VALUE}} !important;',
                            ],
                            'condition' => [
                                'border_type!' => '',
                            ],
                        ),
                        array(
                            'name' => 'border_color_hover',
                            'label' => esc_html__( 'Border Color Hover', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon1 a:hover' => 'border-color: {{VALUE}} !important;',
                            ],
                            'condition' => [
                                'border_type!' => '',
                            ],
                        ),
                        array(
                            'name' => 'icon_border_radius',
                            'label' => esc_html__('Border Radius', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon1 a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'icon_margin',
                            'label' => esc_html__('Margin', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon1 a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .pxl-icon1' => 'margin-left: -{{LEFT}}{{UNIT}};margin-right: -{{RIGHT}}{{UNIT}};',
                            ],
                            'control_type' => 'responsive',
                        ),
                    ),
                ),
                proactive_widget_animation_settings(),
            ),
        ),
    ),
    proactive_get_class_widget_path()
);