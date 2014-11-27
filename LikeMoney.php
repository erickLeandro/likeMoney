<?php

/*
Plugin Name: LikeMoney
Plugin URI: http://www.ecomofazer.com.br/plugin
Description: Seus likes valem dinheiro
Version: 1.0
Author: Erick Leandro
Author URI: http://www.ecomofazer.com.br
License: GPL2
*/

$options = get_option('likeMoneySettings');

include('admin-page.php');

function likeMoneyLoadStyles()
{
	wp_enqueue_style('likemoney-styles', plugin_dir_url(__FILE__).'css/likemoney.css');
}	

add_action('wp_enqueue_scripts', 'likeMoneyLoadStyles');