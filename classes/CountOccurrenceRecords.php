<?php
include_once($SERVER_ROOT.'/config/dbconnection.php');

class CountOccurrenceRecords {

	private $conn;

	function __construct(){
		$this->conn = MySQLiConnectionFactory::getCon("readonly");
	}

	function __destruct(){
		if(!($this->conn === null)) $this->conn->close();
	}

	public function countPlants(){
		$numRows = 0;
		$sql = 'SELECT COUNT(occid) AS cnt from omoccurrences o INNER JOIN taxaenumtree t ON o.tidinterpreted = t.tid WHERE t.parenttid = 4';
		$result = $this->conn->query($sql);
		if($row = $result->fetch_object()){
			$numRows = $row->cnt;
		}
		$result->free();
		return $numRows;
	}

	public function countAnimals(){
		$numRows = 0;
		$sql = 'SELECT COUNT(occid) AS cnt from omoccurrences o INNER JOIN taxaenumtree t ON o.tidinterpreted = t.tid WHERE t.parenttid = 6';
		$result = $this->conn->query($sql);
		if($row = $result->fetch_object()){
			$numRows = $row->cnt;
		}
		$result->free();
		return $numRows;
	}

	public function countFungi(){
		$numRows = 0;
		$sql = 'SELECT COUNT(occid) AS cnt from omoccurrences o INNER JOIN taxaenumtree t ON o.tidinterpreted = t.tid WHERE t.parenttid = 5';
		$result = $this->conn->query($sql);
		if($row = $result->fetch_object()){
			$numRows = $row->cnt;
		}
		$result->free();
		return $numRows;
	}
}
?>