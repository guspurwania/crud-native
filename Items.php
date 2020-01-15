<?php

require "Connection.php";

/**
 * 
 */
class Items extends Connection
{
	public $conn;
	protected $table = 'items';
	
	function __construct()
	{
		$this->conn = parent::start();
	}

	function all($field = '*')
	{
		$sql = "SELECT $field FROM ".$this->table;
		$result = $this->conn->query($sql);
		return $result;
	}

	function find($id)
	{
		$sql = "SELECT * FROM ". $this->table. " WHERE id = $id";
		$result = $this->conn->query($sql);
		return $result;
		// return $sql;
	}

	function create($payloads)
	{
		$sql = "INSERT INTO ". $this->table. " (name, category, price) VALUES (
			'".$payloads['name']."',
			'".$payloads['category']."',
			".$payloads['price']."
		)";	

		return $this->conn->query($sql);
	}

	function update($id, $payloads)
	{
		$sql = "UPDATE ". $this->table ." SET ".
			"name = '". $payloads['name'] ."',
			category = '". $payloads['category'] ."',
			price = ". $payloads['price']
		." WHERE id = $id";

		return $this->conn->query($sql);
	}

	function delete($id)
	{
		$sql = "DELETE FROM ". $this->table ." WHERE id = $id";
		return $this->conn->query($sql);
	}
}

// $item = new Items();
// $payload = [
// 	'name' => 'Sprite',
// 	'category' => 'Drink',
// 	'price' => 5000
// ];
// $data = $item->create($payload);
// var_dump($data);