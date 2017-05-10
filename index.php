<?php

/**
 * Created by PhpStorm.
 * User: moese
 * Date: 8-5-2017
 * Time: 10:56
 */

require_once('php/web.php');

$url[0] = '';
if(isset($_GET['url']) && $_GET['url']!='')
    $url = explode('/',$_GET['url']);

$page = 'home';

if($url[0] !== '') {
    $page = $url[0];
}

require_once('php/controller.php');
$controller = new Controller('content/'.$page.'.php');

require_once('php/table.php');

require_once('php/mysql.php');
$route = new mysql(DB_HOST,DB_DATABASE,DB_USER,DB_PASS);

require_once('php/page.php');