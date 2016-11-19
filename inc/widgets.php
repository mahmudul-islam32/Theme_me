<?php

function cluster_widget(){

register_sidebar(array(

  'name'=>'Footer-widget',
    'description'=>'use this widget for footer',
    'id'=>'footer_wid',
    'before_widget'=>' <div class="col-sm-4"><div class="st-pricing text-center">',
    'after_widget'=>'</div></div>',
    'before_title'=>'<h3>',
    'after_title'=>'</h3>'




));





}
add_action('widgets_init','cluster_widget');