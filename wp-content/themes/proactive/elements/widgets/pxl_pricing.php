<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_pricing',
        'title' => esc_html__('Case Pricing', 'proactive'),
        'icon' => 'eicon-settings',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'section_layout',
                    'label' => esc_html__('Layout', 'proactive' ),
                    'tab' => \Elementor\Controls_Manager::TAB_LAYOUT,
                    'controls' => array(
                        array(
                            'name' => 'layout',
                            'label' => esc_html__('Templates', 'proactive' ),
                            'type' => 'layoutcontrol',
                            'default' => '1',
                            'options' => [
                                '1' => [
                                    'label' => esc_html__('Layout 1', 'proactive' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/img/pxl_pricing/layout1.jpg'
                                ],
                            ],
                        ),
                    ),
                ),
                array(
                    'name' => 'section_content',
                    'label' => esc_html__('Content', 'proactive'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'popular',
                            'label' => esc_html__('Popular', 'proactive'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'label_block' => true,
                        ),
                        array(
                            'name' => 'title',
                            'label' => esc_html__('Title', 'proactive'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'label_block' => true,
                        ),
                        array(
                            'name' => 'sub_title',
                            'label' => esc_html__('Sub Title', 'proactive'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'label_block' => true,
                        ),
                        array(
                            'name' => 'currency',
                            'label' => esc_html__('Currency', 'proactive'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                        ),
                        array(
                            'name' => 'price',
                            'label' => esc_html__('Price', 'proactive'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                        ),
                        array(
                            'name' => 'btn_text',
                            'label' => esc_html__('Button Text', 'proactive'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'label_block' => true,
                        ),
                        array(
                            'name' => 'btn_link',
                            'label' => esc_html__('Button Link', 'proactive'),
                            'type' => \Elementor\Controls_Manager::URL,
                            'label_block' => true,
                        ),
                        array(
                            'name' => 'feature',
                            'label' => esc_html__('Feature', 'proactive'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'controls' => array(
                                array(
                                    'name' => 'feature_text',
                                    'label' => esc_html__('Text', 'proactive'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'feature_active',
                                    'label' => esc_html__('Active', 'proactive' ),
                                    'type' => \Elementor\Controls_Manager::SELECT,
                                    'options' => [
                                        'yes' => 'Yes',
                                        'no' => 'No',
                                    ],
                                    'default' => 'yes',
                                ),
                            ),
                            'title_field' => '{{{ feature_text }}}',
                        ),
                    ),
                ),
            ),
        ),
    ),
    proactive_get_class_widget_path()
);