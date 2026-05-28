<?php

class PxlLanguageSwitcher_Widget extends Pxltheme_Core_Widget_Base{
    protected $name = 'pxl_language_switcher';
    protected $title = 'Case Language Switcher';
    protected $icon = 'eicon-editor-list-ul';
    protected $categories = array( 'pxltheme-core' );
    protected $params = '{"sections":[{"name":"section_list","label":"Content","tab":"content","controls":[{"name":"active","label":"Active","type":"number","separator":"after","default":"1"},{"name":"menu_item","label":"Item","type":"repeater","controls":[{"name":"text","label":"Text","type":"text","label_block":true},{"name":"link","label":"Link","type":"url","label_block":true}],"title_field":"{{{ text }}}"}]}]}';
    protected $styles = array(  );
    protected $scripts = array(  );
}