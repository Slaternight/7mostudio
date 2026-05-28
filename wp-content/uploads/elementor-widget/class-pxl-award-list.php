<?php

class PxlAwardList_Widget extends Pxltheme_Core_Widget_Base{
    protected $name = 'pxl_award_list';
    protected $title = 'Case Award List';
    protected $icon = 'eicon-library-upload';
    protected $categories = array( 'pxltheme-core' );
    protected $params = '{"sections":[{"name":"section_content","label":"Content","tab":"content","controls":[{"name":"award","label":"Content","type":"repeater","controls":[{"name":"title","label":"Title","type":"text","label_block":true},{"name":"sub_title","label":"Sub Title","type":"text","label_block":true},{"name":"image","label":"Image","type":"media","default":""}],"title_field":"{{{ title }}}"}]}]}';
    protected $styles = array(  );
    protected $scripts = array(  );
}