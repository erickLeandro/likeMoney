<?php

function likeMoneyLoadStyles()
{
	wp_enqueue_style('likemoney-styles', plugin_dir_url(__FILE__).'css/likemoney.css');
}	

add_action('wp_enqueue_scripts', 'likeMoneyLoadStyles');