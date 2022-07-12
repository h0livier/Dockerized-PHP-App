<?php

include_once 'Database.php';
class QueryManager extends Database{

    protected $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function request($query, $array = null){
        $req = $this->db->prepare($query);
        $req->execute($array);
        $result = $req->fetchAll();
        $req->closeCursor();
        return $result;
    }

}