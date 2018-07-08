<?php
namespace Models;

use Model\Model;

class Task extends Model{

    protected $table = "tasks";
    //..
    public function __construct($alias='')
    {
        $this->table .= ' '.$alias;
        parent::__construct();
    }
}