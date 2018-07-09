<?php namespace Model;

class Model {
    protected $_db;
    protected $select;
    protected $table;

    public function __construct()
    {
        $this->_db = \MysqliDb::getInstance();
    }
    public function select($select='*')
    {
        $this->select = $select;
        return $this;
    }
    public function where($p1,$p2,$p3='')
    {
        if($p3) $this->_db->where($p1,$p2,$p3);
        else $this->_db->where($p1,$p2);
        return $this;
    }
    public function orWhere($p1,$p2,$p3='')
    {
        if($p3) $this->_db->orWhere($p1,$p2,$p3);
        else $this->_db->orWhere($p1,$p2);
        return $this;
    }
    public function having ($p1,$p2)
    {
        $this->_db->having($p1,$p2);
        return $this;
    }
    public function orderBy($p1,$p2,$p3='')
    {
        if($p3) $this->_db->orderBy($p1,$p2,$p3);
        else $this->_db->orderBy($p1,$p2);
        return $this;
    }
    public function join($p1,$p2,$p3)
    {
        $this->_db->join($p1,$p2,$p3);
        return $this;
    }
    public function joinWhere($p1,$p2,$p3)
    {
        $this->_db->joinWhere($p1,$p2,$p3);
        return $this;
    }
    public function joinOrWhere($p1,$p2,$p3)
    {
        $this->_db->joinOrWhere($p1,$p2,$p3);
        return $this;
    }
    public function groupBy ($p1)
    {
        $this->_db->groupBy($p1);
        return $this;
    }
    public function raw($query){
        return $this->_db->rawQuery($query);
    }
    public function get($limit = null){

        return $this->_db->get($this->table,$limit,$this->select);
    }
    public function delete(){

        return $this->_db->delete($this->table);
    }
    public function insert($data){
        return $this->_db->insert($this->table,$data);
    }
    public function insertMulti($data,$keys){
        return $this->_db->insertMulti($this->table,$data,$keys);
    }
    public function update($data){

        return $this->_db->update($this->table,$data);
    }
    public function pagination($currentPpage,$limit=3){
        $this->_db->pageLimit = $limit;
        return  [
            $this->_db->arraybuilder()->paginate($this->table, $currentPpage,$this->select),
            $this->_db->totalPages
        ];
    }
}