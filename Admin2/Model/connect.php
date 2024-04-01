<?php
class connect
{
	var $db = null;
	public function __construct()
	{
		$dsn = 'mysql:host=localhost;dbname=gongcha1';
		$user = 'root';
		$pass = '123';
		$this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	}
	//	lấy đúng 1 ID nên lấy fetch vô luôn
	public function getInstance($select)
	{
		$results = $this->db->query($select);
		// echo $select;
		$result = $results->fetch();
		return $result;
	}

	//	Lấy nhiều rows
	public function getList($select)
	{
		$results = $this->db->query($select);
		// echo $results;
		return ($results);
	}
	public function exec($query)
	{
		$results = $this->db->exec($query);
		return $results;
	}

	public function beginTransaction() {
        return $this->db->beginTransaction();
    }

    public function commit() {
        return $this->db->commit();
    }

    public function rollBack() {
        return $this->db->rollBack();
    }
}
