<?php
    class Database extends PDO{

        private $host = 'db';
        private $dbName = 'test';
        private $user = "root";
        private $passwd = "MySQLPassword";

        function __construct(){
            parent::__construct("mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->passwd);
            parent::exec("SET CHARACTER SET utf8");
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

    }