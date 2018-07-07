<?php namespace Model;

class Model {
    protected $db;
    public function __construct()
    {
        $this->db = \MysqliDb::getInstance();
    }
}