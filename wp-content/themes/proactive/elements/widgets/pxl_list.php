<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_list',
        'title' => esc_html__('Case List', 'proactive'),
        'icon' => 'eicon-editor-list-ul',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'section_content',
                    'label' => esc_html__('Content', 'proactive'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'lists',
                            'label' => esc_html__('Content', 'proactive'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'controls' => array(
                                array(
                                    'name' => 'label',
                                    'label' => esc_html__('Label', 'proactive' ),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'rows' => 10,
                                    'show_label' => false,
                                ),
                                array(
                                    'name' => 'content',
                                    'label' => esc_html__('Content', 'proactive' ),
                                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                                    'rows' => 10,
                                    'show_label' => false,
                                ),
                            ),
                            'title_field' => '{{{ content }}}',
                        ),
                        array(
                            'name' => 'icon_type',
                            'label' => esc_html__('Icon Type', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'icon' => 'Icon',
                                'image' => 'Image',
                            ],
                            'default' => 'icon',
                        ),
                        array(
                            'name' => 'pxl_icon',
                            'label' => esc_html__('Icon', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::ICONS,
                            'fa4compatibility' => 'icon',
                            'condition' => [
                                'icon_type' => 'icon',
                            ],
                        ),
                        array(
                            'name' => 'icon_image',
                            'label' => esc_html__( 'Icon Image', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::MEDIA,
                            'condition' => [
                                'icon_type' => 'image',
                            ],
                        ),
                    ),
                ),
                array(
                    'name' => 'section_style',
                    'label' => esc_html__('Style', 'proactive' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array_merge(
                        proactive_widget_color_type([
                            'label' => 'Icon',
                            'prefix' => 'icon',
                            'selectors_class' => '.pxl-list1 .pxl-item--icon',
                        ]),
                        array(
                            array(
                                'name' => 'icon_margin',
                                'label' => esc_html__('Icon Margin', 'proactive' ),
                                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                                'size_units' => [ 'px' ],
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-list .pxl-item--icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                ],
                                'control_type' => 'responsive',
                            ),
                            array(
                                'name' => 'icon_font_size',
                                'label' => esc_html__('Icon Font Size', 'proactive' ),
                                'type' => \Elementor\Controls_Manager::SLIDER,
                                'control_type' => 'responsive',
                                'size_units' => [ 'px' ],
                                'range' => [
                                    'px' => [
                                        'min' => 0,
                                        'max' => 3000,
                                    ],
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-list .pxl-item--icon' => 'font-size: {{SIZE}}{{UNIT}};',
                                ],
                            ),
                            array(
                                'name' => 'label_min_width',
                                'label' => esc_html__('Label Min Width', 'proactive' ),
                                'type' => \Elementor\Controls_Manager::SLIDER,
                                'control_type' => 'responsive',
                                'size_units' => [ 'px', '%' ],
                                'range' => [
                                    'px' => [
                                        'min' => 0,
                                        'max' => 3000,
                                    ],
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-list label' => 'min-width: {{SIZE}}{{UNIT}};',
                                ],
                            ),
                            array(
                                'name' => 'label_color',
                                'label' => esc_html__('Label Color', 'proactive' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-list label' => 'color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'label_typography',
                                'label' => esc_html__('Label Typography', 'proactive' ),
                                'type' => \Elementor\Group_Control_Typography::get_type(),
                                'control_type' => 'group',
                                'selector' => '{{WRAPPER}} .pxl-list label',
                            ),

                            array(
                                'name' => 'content_color',
                                'label' => esc_html__('Content Color', 'proactive' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-list .pxl-item--content' => 'color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'content_typography',
                                'label' => esc_html__('Content Typography', 'proactive' ),
                                'type' => \Elementor\Group_Control_Typography::get_type(),
                                'control_type' => 'group',
                                'selector' => '{{WRAPPER}} .pxl-list .pxl-item--content',
                            ),
                            array(
                                'name' => 'item_spacer',
                                'label' => esc_html__('Item Spacer', 'proactive' ),
                                'type' => \Elementor\Controls_Manager::SLIDER,
                                'control_type' => 'responsive',
                                'size_units' => [ 'px' ],
                                'range' => [
                                    'px' => [
                                        'min' => 0,
                                        'max' => 3000,
                                    ],
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-list .pxl--item + .pxl--item' => 'margin-top: {{SIZE}}{{UNIT}};',
                                ],
                            ),
                            array(
                                'name' => 'align_items',
                                'label' => esc_html__('Align Items', 'proactive' ),
                                'type' => \Elementor\Controls_Manager::CHOOSE,
                                'control_type' => 'responsive',
                                'options' => [
                                    'flex-start' => [
                                        'title' => esc_html__( 'Flex Start', 'proactive' ),
                                        'icon' => 'far fa-arrow-alt-to-top',
                                    ],
                                    'Center' => [
                                        'title' => esc_html__( 'Center', 'proactive' ),
                                        'icon' => 'far fa-arrows-alt-v',
                                    ],
                                    'flex-end' => [
                                        'title' => esc_html__( 'Flex End', 'proactive' ),
                                        'icon' => 'far fa-arrow-alt-to-bottom',
                                    ],
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-list .pxl--item' => 'align-items: {{VALUE}};',
                                ],
                            ),
                        )
                    ),
                ),
                proactive_widget_animation_settings(),
            ),
        ),
    ),
    proactive_get_class_widget_path()
);