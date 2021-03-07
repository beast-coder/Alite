<?php

namespace Service\Database;

use PDO;
use PDOException;

/*
 * Mysql database class - only one connection alowed
 */

class Database {

    private static $_connection;
    private static $_instance; //The single instance

    // Constructor

    private function __construct() {
        
    }

    /*
      Get an instance of the Database
      @return Instance
     */

    public static function getInstance() {
        if (!self::$_instance) {
            // If no instance then make one
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public static function getConnection($db = []) {

        if (empty($db)) {
            if (!empty($GLOBALS['config']))
                $db = $GLOBALS['config']['DATABASE'];
            else {
                $db = require_once WEB_ROOT . '/config/config.php';
                $db = $db['DATABASE'];
            }
        }

        try {
            if (!self::$_connection) {
                // If no instance then make one
                self::$_connection = new PDO($db[ENV]['DRIVER'] . ":host=" . $db[ENV]['HOST'] . ";dbname=" . $db[ENV]['NAME'], $db[ENV]['USER'], $db[ENV]['PASSWORD']);
                // set the PDO error mode to exception
                self::$_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit;
        }

        return self::$_connection;
    }

    // Magic method clone is empty to prevent duplication of connection
    private function __clone() {
        
    }

}
