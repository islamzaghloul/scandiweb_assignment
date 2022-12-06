<?php
namespace Core;
use MysqliDb;

class DB
{
    protected $db;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $this->db = new MysqliDb (DBHOST, DBUSER, DBPASSWORD, DBNAME);
        if (!$this->db){
            die("Connection Error : ");
        }
        return $this->db;
    }

}