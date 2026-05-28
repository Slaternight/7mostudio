<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_language_switch',
        'title' => esc_html__('Case Language Switch', 'proactive'),
        'icon' => 'eicon-kit-parts',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'section_content',
                    'label' => esc_html__('Content', 'proactive'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'language',
                            'label' => esc_html__('Language', 'proactive'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'controls' => array(
                                array(
                                    'name' => 'name',
                                    'label' => esc_html__('Name', 'proactive' ),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'rows' => 10,
                                    'show_label' => false,
                                ),
                                array(
                                    'name' => 'link',
                                    'label' => esc_html__('Link', 'proactive'),
                                    'type' => \Elementor\Controls_Manager::URL,
                                    'label_block' => true,
                                ),
                            ),
                            'title_field' => '{{{ name }}}',
                        ),
                        array(
                            'name' => 'active',
                            'label' => esc_html__('Active', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::NUMBER,
                            'separator' => 'after',
                            'default' => '1',
                        ),
                    ),
                ),
                proactive_widget_animation_settings(),
            ),
        ),
    ),
    proactive_get_class_widget_path()
);