<?php
// Register Call Phone Widget
pxl_add_custom_widget(
    array(
        'name' => 'pxl_call_phone',
        'title' => esc_html__('Case Call Phone', 'proactive' ),
        'icon' => 'eicon-call-to-action',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'section_content',
                    'label' => esc_html__('Content', 'proactive' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'title',
                            'label' => esc_html__('Title', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'label_block' => true,
                        ),
                        array(
                            'name' => 'number',
                            'label' => esc_html__('Number', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'label_block' => true,
                        ),
                        array(
                            'name' => 'phone_link',
                            'label' => esc_html__('Link', 'proactive'),
                            'type' => \Elementor\Controls_Manager::URL,
                            'label_block' => true,
                        ),
                        array(
                            'name' => 'pxl_icon',
                            'label' => esc_html__('Icon', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::ICONS,
                            'fa4compatibility' => 'icon',
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
                                'style-2' => 'Style 2',
                                'style-3' => 'Style 3',
                            ],
                            'default' => 'style-1',
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
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-call-phone1 .pxl-item--icon' => 'font-size: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'box_width',
                            'label' => esc_html__('Icon Box Width', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-call-phone1 .pxl-item--icon' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'box_height',
                            'label' => esc_html__('Icon Box Height', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-call-phone1 .pxl-item--icon' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'icon_margin',
                            'label' => esc_html__('Icon Margin', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-call-phone1 .pxl-item--icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'control_type' => 'responsive',
                        ),
                        array(
                            'name' => 'icon_box_color',
                            'label' => esc_html__('Icon Box Color', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-call-phone1 .pxl-item--icon' => 'background-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'icon_color',
                            'label' => esc_html__('Icon Color', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-call-phone1 .pxl-item--icon' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'title_color',
                            'label' => esc_html__('Title Color', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-call-phone1 .pxl-item--title' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'title_typography',
                            'label' => esc_html__('Title Typography', 'proactive' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-call-phone1 .pxl-item--title',
                        ),
                        array(
                            'name' => 'number_color',
                            'label' => esc_html__('Number Color', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-call-phone1 .pxl-item--number' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'number_typography',
                            'label' => esc_html__('Number Typography', 'proactive' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-call-phone1 .pxl-item--number',
                        ),
                    ),
                ),
                proactive_widget_animation_settings(),
            ),
        ),
    ),
    proactive_get_class_widget_path()
);