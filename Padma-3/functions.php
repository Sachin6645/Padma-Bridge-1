<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css');
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );


add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo');
add_theme_support( 'post-thumbnails');

register_nav_menus([
    'PM'=>'Primary'
]);

register_sidebar([
    'name'=>'BD Logo1',
    'id'=>'bdlogo1',
    'after_widget'=>'',
    'before_widget'=>''
]);


register_sidebar([
    'name'=>'Hero Title',
    'id'=>'herotitle',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Hero Card',
    'id'=>'card1',
    'after_widget'=>'',
    'before_widget'=>''
]);

register_sidebar([
    'name'=>'Photo line left',
    'id'=>'lineleft',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Photo title',
    'id'=>'phototitle',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Photo line right',
    'id'=>'lineright',
    'after_widget'=>'',
    'before_widget'=>''
]);


register_sidebar([
    'name'=>'Phot card 1',
    'id'=>'photocard1',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'News title',
    'id'=>'newstitle',
    'after_widget'=>'',
    'before_widget'=>''
]);

register_sidebar([
    'name'=>'Footer Top Left',
    'id'=>'ftleft',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Footer Top right',
    'id'=>'ftright',
    'after_widget'=>'',
    'before_widget'=>''
]);


register_sidebar([
    'name'=>'Footer Bottom Left',
    'id'=>'fbleft',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Footer bottom right',
    'id'=>'fbright',
    'after_widget'=>'',
    'before_widget'=>''
]);

