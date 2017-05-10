<?php

/**
 * Created by PhpStorm.
 * User: moese
 * Date: 10-5-2017
 * Time: 01:47
 */

class Mysql {
    var $host;
    var $db;
    var $user;
    var $pass;

    function __construct($host, $db, $user, $pass) {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;

        try {
            $this->conn = new PDO("mysql:host=$this->host; dbname=$this->db", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return true;

        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function Read($sql) {
        try {
            $get = $this->conn->prepare($sql);
            $get->execute();
            // $result = $get->fetchAll();
            // return $result;
            return $result = $get->fetchAll();

        } catch (PDOException $e) {
            echo 'Read failed: ' . $e->getMessage();
        }
    }

    public function Create($sql) {
        try {
            $this->conn->exec($sql);
            return $this->sql = 'Added a user successfull<br><br>';

        } catch (PDOException $e) {
            echo 'Update failed: ' . $e->getMessage();
        }
    }

    public function Update($sql) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $result = $stmt->rowCount();

        } catch (PDOException $e) {
            echo 'Update failed: ' . $e->getMessage();
        }
    }

    public function Delete($sql) {
        try {
            $get = $this->conn->exec($sql);

            if($get) {
                return 'Delete successfull';
            } else {
                return false;
            }

        } catch (PDOException $e) {
            echo 'Delete failed: ' . $e->getMessage();
        }
    }
}