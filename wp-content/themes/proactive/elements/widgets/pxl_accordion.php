<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_accordion',
        'title' => esc_html__('Case Accordion', 'proactive' ),
        'icon' => 'eicon-accordion',
        'categories' => array('pxltheme-core'),
        'scripts' => array(
            'proactive-accordion'
        ),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'section_content',
                    'label' => esc_html__('Content', 'proactive' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'style',
                            'label' => esc_html__('Style', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'style-default' => 'Default',
                            ],
                            'default' => 'style-default',
                        ),
                        array(
                            'name' => 'active',
                            'label' => esc_html__('Active', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::NUMBER,
                            'separator' => 'after',
                            'default' => '1',
                        ),
                        array(
                            'name' => 'accordion',
                            'label' => esc_html__('Accordion', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'controls' => array(
                                array(
                                    'name' => 'title',
                                    'label' => esc_html__('Title', 'proactive' ),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'desc',
                                    'label' => esc_html__('Content', 'proactive' ),
                                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                                    'rows' => 10,
                                ),
                                array(
                                    'name' => 'pxl_icon',
                                    'label' => esc_html__('Icon', 'proactive' ),
                                    'type' => \Elementor\Controls_Manager::ICONS,
                                    'fa4compatibility' => 'icon',
                                ),
                                array(
                                    'name' => 'number',
                                    'label' => esc_html__('Number', 'proactive' ),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                            ),
                            'title_field' => '{{{ title }}}',
                            'separator' => 'after',
                        ),
                    ),
                ),
                array(
                    'name' => 'section_style_title',
                    'label' => esc_html__('Title', 'proactive' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'title_color',
                            'label' => esc_html__('Color', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-accordion .pxl-accordion--title' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'title_typography',
                            'label' => esc_html__('Typography', 'proactive' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-accordion .pxl-accordion--title',
                        ),
                        array(
                            'name' => 'title_tag',
                            'label' => esc_html__('HTML Tag', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'h1' => 'H1',
                                'h2' => 'H2',
                                'h3' => 'H3',
                                'h4' => 'H4',
                                'h5' => 'H5',
                                'h6' => 'H6',
                                'div' => 'div',
                                'span' => 'span',
                                'p' => 'p',
                            ],
                            'default' => 'h5',
                        ),
                    ),
                ),
                array(
                    'name' => 'section_style_content',
                    'label' => esc_html__('Content', 'proactive' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'content_color',
                            'label' => esc_html__('Color', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-accordion .pxl-accordion--content' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'desc_typography',
                            'label' => esc_html__('Typography', 'proactive' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-accordion .pxl-accordion--content',
                        ),
                    ),
                ),
                proactive_widget_animation_settings(),
            ),
        ),
    ),
    proactive_get_class_widget_path()
);