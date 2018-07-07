<?php
namespace Models;

use Model\Model;

class Task extends Model{

    protected $table = "tasks t";
    //..
    public function __construct()
    {
        parent::__construct();
    }
}