<?php

class PxlPricing_Widget extends Pxltheme_Core_Widget_Base{
    protected $name = 'pxl_pricing';
    protected $title = 'Case Pricing';
    protected $icon = 'eicon-settings';
    protected $categories = array( 'pxltheme-core' );
    protected $params = '{"sections":[{"name":"section_layout","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"http:\/\/localhost:8000\/wp-content\/themes\/proactive\/elements\/assets\/img\/pxl_pricing\/layout1.jpg"}}}]},{"name":"section_content","label":"Content","tab":"content","controls":[{"name":"popular","label":"Popular","type":"text","label_block":true},{"name":"title","label":"Title","type":"text","label_block":true},{"name":"sub_title","label":"Sub Title","type":"text","label_block":true},{"name":"currency","label":"Currency","type":"text"},{"name":"price","label":"Price","type":"text"},{"name":"btn_text","label":"Button Text","type":"text","label_block":true},{"name":"btn_link","label":"Button Link","type":"url","label_block":true},{"name":"feature","label":"Feature","type":"repeater","controls":[{"name":"feature_text","label":"Text","type":"text","label_block":true},{"name":"feature_active","label":"Active","type":"select","options":{"yes":"Yes","no":"No"},"default":"yes"}],"title_field":"{{{ feature_text }}}"}]}]}';
    protected $styles = array(  );
    protected $scripts = array(  );
}