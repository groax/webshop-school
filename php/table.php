<?php

/**
 * Created by PhpStorm.
 * User: moese
 * Date: 10-5-2017
 * Time: 10:47
 */

class table {

    public $table = '';
    public $th = [];
    public $td = [];

    function __construct($th, $td) {
        $this->th = $th;
        $this->td = $td;
    }

    public function Read() {
        foreach ($this->th as $th) {
            $this->table .= '<table class="table"><tr>';
            foreach($th as $r) {
                $this->table .= '<th>' . $r . '</th>';
            }
            $this->table .= '</tr>';
        }
        foreach ($this->td as $td) {
            $this->table .= '<tr>';
            foreach($td as $r) {
                $this->table .= '<td>' . $r . '</td>';
            }
            $this->table .= '</tr></table>';
        }
        return $this->table;
    }
}