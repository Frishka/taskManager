<?php
namespace Models;

use Model\Model;

class User extends Model{

    protected $table = "users";
    //..
    public function __construct($alias='')
    {
        $this->table .= ' '.$alias;
        parent::__construct();
    }

}