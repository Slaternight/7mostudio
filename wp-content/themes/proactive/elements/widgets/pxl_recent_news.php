<?php
$post_term_options = pxl_get_grid_term_options('post');
pxl_add_custom_widget(
    array(
        'name' => 'pxl_recent_news',
        'title' => esc_html__('Case Recent News', 'proactive' ),
        'icon' => 'eicon-posts-ticker',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'tab_source',
                    'label' => esc_html__('Source', 'proactive' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'source',
                            'label' => esc_html__('Select Categories', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SELECT2,
                            'multiple' => true,
                            'options' => $post_term_options,
                        ),
                        array(
                            'name' => 'orderby',
                            'label' => esc_html__('Order By', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => 'date',
                            'options' => [
                                'date' => esc_html__('Date', 'proactive' ),
                                'ID' => esc_html__('ID', 'proactive' ),
                                'author' => esc_html__('Author', 'proactive' ),
                                'title' => esc_html__('Title', 'proactive' ),
                                'rand' => esc_html__('Random', 'proactive' ),
                            ],
                        ),
                        array(
                            'name' => 'order',
                            'label' => esc_html__('Sort Order', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => 'desc',
                            'options' => [
                                'desc' => esc_html__('Descending', 'proactive' ),
                                'asc' => esc_html__('Ascending', 'proactive' ),
                            ],
                        ),
                        array(
                            'name' => 'limit',
                            'label' => esc_html__('Total items', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::NUMBER,
                            'default' => '4',
                        ),
                    ),
                ),
                array(
                    'name' => 'tab_display',
                    'label' => esc_html__('Display Options', 'proactive' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'show_date',
                            'label' => esc_html__('Show Date', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SWITCHER,
                            'default' => 'true',
                        ),
                        array(
                            'name' => 'show_author',
                            'label' => esc_html__('Show Author', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SWITCHER,
                            'default' => 'true',
                        ),
                        array(
                            'name' => 'show_comment',
                            'label' => esc_html__('Show Comment', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SWITCHER,
                            'default' => 'true',
                        ),
                        array(
                            'name' => 'show_excerpt',
                            'label' => esc_html__('Show Excerpt', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SWITCHER,
                            'default' => 'true',
                        ),
                        array(
                            'name' => 'num_words',
                            'label' => esc_html__('Number of Words', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::NUMBER,
                            'default' => 25,
                            'condition' => [
                                'show_excerpt' => ['true'],
                            ],
                        ),
                        array(
                            'name' => 'show_button',
                            'label' => esc_html__('Show Button Readmore', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::SWITCHER,
                            'default' => 'true',
                        ),
                        array(
                            'name' => 'button_text',
                            'label' => esc_html__('Button Text', 'proactive' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'condition' => [
                                'show_button' => ['true'],
                            ],
                        ),
                    ),
                ),
            ),
        ),
    ),
    proactive_get_class_widget_path()
);