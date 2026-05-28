<?php if(!function_exists('proactive_configs')){
    function proactive_configs($value){
        $primary_darker = proactive()->get_opt('primary_color', '#5f2dde');
        $primary_darker_10 = pxl_darker_color($primary_darker, $primary_darker_10=1);
        $primary_darker_20 = pxl_darker_color($primary_darker, $primary_darker_20=1.3);
        $primary_darker_30 = pxl_darker_color($primary_darker, $primary_darker_30=3);
        $primary_darker_40 = pxl_darker_color($primary_darker, $primary_darker_40=4);

        $configs = [
            'theme_colors' => [
                'primary'   => [
                    'title' => esc_html__('Primary', 'proactive'), 
                    'value' => proactive()->get_opt('primary_color', '#5f2dde')
                ],
                'gradient-first'   => [
                    'title' => esc_html__('Gradient First', 'proactive'), 
                    'value' => proactive()->get_opt('gradient_first_color', '#ffa800')
                ],
                'secondary'   => [
                    'title' => esc_html__('Secondary', 'proactive'), 
                    'value' => proactive()->get_opt('secondary_color', '#000000')
                ],
                'third'   => [
                    'title' => esc_html__('Third', 'proactive'), 
                    'value' => proactive()->get_opt('third_color', '#00c5fe')
                ],
                'dark'   => [
                    'title' => esc_html__('Dark', 'proactive'), 
                    'value' => proactive()->get_opt('dark_color', '#000')
                ],
                'body-bg'   => [
                    'title' => esc_html__('Body Background Color', 'proactive'), 
                    'value' => proactive()->get_page_opt('body_bg_color', '#fff')
                ],
                'primary-darker-10'   => [
                    'title' => esc_html__('Primary Darker Color 10', 'proactive'),
                    'value' => $primary_darker_10
                ],
                'primary-darker-20'   => [
                    'title' => esc_html__('Primary Darker Color 20', 'proactive'), 
                    'value' => $primary_darker_20
                ],
                'primary-darker-30'   => [
                    'title' => esc_html__('Primary Darker Color 30', 'proactive'), 
                    'value' => $primary_darker_30
                ],
                'primary-darker-40'   => [
                    'title' => esc_html__('Primary Darker Color 40', 'proactive'), 
                    'value' => $primary_darker_40
                ]
            ],
            'link' => [
                'color' => proactive()->get_opt('link_color', ['regular' => '#6000ff'])['regular'],
                'color-hover'   => proactive()->get_opt('link_color', ['hover' => '#fe0054'])['hover'],
                'color-active'  => proactive()->get_opt('link_color', ['active' => '#fe0054'])['active'],
            ],
            'gradient' => [
                'color-from' => proactive()->get_opt('gradient_color', ['from' => '#6000ff'])['from'],
                'color-to' => proactive()->get_opt('gradient_color', ['to' => '#fe0054'])['to'],
            ],
            'gradient2' => [
                'color-from' => proactive()->get_opt('gradient_color2', ['from' => '#8c92f6'])['from'],
                'color-to' => proactive()->get_opt('gradient_color2', ['to' => '#f9d78f'])['to'],
            ],
               
        ];
        return $configs[$value];
    }
}
if(!function_exists('proactive_inline_styles')) {
    function proactive_inline_styles() {  
        
        $theme_colors      = proactive_configs('theme_colors');
        $link_color        = proactive_configs('link');
        $gradient_color    = proactive_configs('gradient');
        $gradient_color2   = proactive_configs('gradient2');

        ob_start();
        echo ':root{';
            
            foreach ($theme_colors as $color => $value) {
                printf('--%1$s-color: %2$s;', str_replace('#', '',$color),  $value['value']);
            }
            foreach ($theme_colors as $color => $value) {
                printf('--%1$s-color-rgb: %2$s;', str_replace('#', '',$color),  proactive_hex_rgb($value['value']));
            }
            foreach ($link_color as $color => $value) {
                printf('--link-%1$s: %2$s;', $color, $value);
            }
            foreach ($gradient_color as $color => $value) {
                printf('--gradient-%1$s: %2$s;', $color, $value);
            }
            foreach ($gradient_color2 as $color => $value) {
                printf('--gradient-%1$s2: %2$s;', $color, $value);
            }

        echo '}';

        return ob_get_clean();
         
    }
}
 