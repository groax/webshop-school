<?php

/**
 * Created by PhpStorm.
 * User: moese
 * Date: 8-5-2017
 * Time: 17:37
 */

class Controller {

    public function index() {
        return file_get_contents('content/home.php');
    }
}