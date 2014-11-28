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

include('scripts.php');
include('model.php');
include('admin-page.php');
include('plugin.php');

register_activation_hook( __FILE__ , 'likeMoneyCreateTables');

