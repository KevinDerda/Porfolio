<?php

namespace Models;

/**
 * Class Manager
 * @package Models
 */
class Manager {

    //Enter with credentials here
    private $_host = 'localhost';
    private $_dbname = 'portfolio';
    private $_username = 'root';
    private $_password = 'root';

    /**
     * Connexion to database
     * @return \PDO
     */
    protected function dbConnection(){
        try {
            $db = new \PDO('mysql:host='.$this->_host.';dbname='.$this->_dbname.';charset=utf8', $this->_username, $this->_password);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
            return $db;
        } catch (\PDOException $e){
            var_dump('Impossible de se connecter à la base de donnée : '. $e->getMessage());
        }
    }

}