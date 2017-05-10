<?php

/**
 * Created by PhpStorm.
 * User: moese
 * Date: 8-5-2017
 * Time: 17:37
 */

class Controller {

    public $page;

    function __construct($page) {
        $this->page = $page;
    }

    public function index() {
        $view = fopen($this->page, 'r');
        if($view === FALSE) {
            $view = fopen('content/404.php', 'r');
        }
//        $file = fread($view, filesize($this->page));
        return $this->page;
    }
}