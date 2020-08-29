<?php
/**
 * @package Books Plugin
 * @version 1.0.0
 */
/*
Plugin Name: Books Plugin
Plugin URI: http://wordpress.org/plugins/books-plugin/
Description : A basic plugin to manage books.
Author: ShreyKhanna
Version: 1.0.0
Author URI: http://ma.tt/
*/

class BooksPlugin 
{
 function __construct(){
    add_action('init',array($this,'custom_post_type_books'));
    add_action('init',array($this,'taxonomies_book'));
}
function activate(){
   $this->custom_post_type_books();
   flush_rewrite_rules();
}
function deactivate(){
    
}
function uninstall(){

}
function custom_post_type_books()
{
    $labels=array(
        'name'=>'Books'
    );
    $args=array(
        'labels'=>$labels,
        'public'=>true,
        'publicly_queryable'=>true,
        'query_var'=>true,
        'rewrite'=>true,
        'capability_type'=>'post',
        'supports'=>array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),
        'menu_position'=>4,
        'exclude_from_search'=>false
    );
    register_post_type('book',$args);
}
function taxonomies_book(){
    $labels=array(
        'author'=>'Types',
        'add_new_item'=>'Add Author',
        'menu_name'=>'Add Author',
        
    );
$args=array(
'heirarchical'=>true,
'labels'=>$labels,
'showui'=>true,
'show_admin_column'=>true,
'rewrite'=>array('slug'=>'type')

);
register_taxonomy('type',array('book'),$args);
}

}
if(class_exists('BooksPlugin'))
{
    $plugin=new BooksPlugin();
}

register_activation_hook(__FILE__, array($plugin,'activate'));

register_deactivation_hook(__FILE__, array($plugin,'deactivate'));

