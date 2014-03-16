<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db_connect
 *
 * @author Phillip
 */
class db_connect {
    protected $db;
    
    protected function __construct($db=NULL) {
        if(is_object($db)) {
            $this->db = $db;
        } else {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            try {
                $this->db = new PDO($dsn, DB_USER, DB_PASS);
            } catch (Exception $ex) {
                die($ex->getMessage());
            }
        }
    }
}
