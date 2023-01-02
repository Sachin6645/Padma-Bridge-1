<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo');
add_theme_support( 'post-thumbnails');

register_nav_menus([
    'PM'=>'Primary'
]);


register_sidebar([
    'name'=>'BD Logo',
    'id'=>'bdlogo',
    'after_widget'=>'',
    'before_widget'=>''
]);

register_sidebar([
    'name'=>'Hero Title',
    'id'=>'htitle',
    'after_widget'=>'',
    'before_widget'=>''
]);



register_sidebar([
    'name'=>'Hero Card-1',
    'id'=>'hcard1',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Hero Card-2',
    'id'=>'hcard2',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Hero Card-3',
    'id'=>'hcard3',
    'after_widget'=>'',
    'before_widget'=>''
]);

register_sidebar([
    'name'=>'Photo Left',
    'id'=>'pleft',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Photo Title',
    'id'=>'ptitle',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Photo Right',
    'id'=>'pright',
    'after_widget'=>'',
    'before_widget'=>''
]);


register_sidebar([
    'name'=>'Photo Card-1',
    'id'=>'pcard1',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Photo Card-2',
    'id'=>'pcard2',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Photo Card-3',
    'id'=>'pcard3',
    'after_widget'=>'',
    'before_widget'=>''
]);
register_sidebar([
    'name'=>'Photo Card-4',
    'id'=>'pcard4',
    'after_widget'=>'',
    'before_widget'=>''
]);

register_sidebar([
    'name'=>'News2 Title',
    'id'=>'n2title',
    'after_widget'=>'',
    'before_widget'=>''
]);


register_sidebar([
    'name'=>'Footer Top left',
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
    'name'=>'Footer bottom Left',
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
