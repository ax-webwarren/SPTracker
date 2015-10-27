<?php 
class Database{
	public function add($cols,$value,$table){
		$query = "INSERT INTO sptracker.$table ($cols) VALUES ($value)"; 		
		$final = $this->query($query);
		return $final;
	}

	public function delete($cols,$value,$table){		
		$query = "DELETE FROM sptracker.$table WHERE $cols = $value";
		$final = $this->query($query);
		return $query;
	}

	public function edit($set_data,$table,$condition){
		$query = "UPDATE sptracker.$table SET $set_data WHERE $condition";
		$final = $this->query($query);
		return $query;		
	}

	public function sort_value($cols,$value,$order,$table){
		$query = "SELECT * FROM sptracker.$table ORDER BY $order";	
		$final = $this->query($query);
		return $final;
	}

	public function sort_login($cols,$value,$order,$table){
		$query = "SELECT * FROM sptracker.$table $order";
		$final = $this->query($query);
		return $final;
	}
	
	public function query($query_text){
		return $this->connection->query($query_text);
	}
	
	public function showFields($table){
		$query = "SHOW COLUMNS FROM sptracker.$table";
		$query = $this->query($query);
		$final = [];
		while($row = $query->fetch_assoc()){
			$final[] = ($row['Field']);
		}
		return $final;
	}
	
	public function connect() {
		$servername = 'localhost';
		$username = 'wtest';
		$password = 'wtest';
		$dbname = 'sptracker';
		$this->connection = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($this->connection->connect_error) {
			die("Connection failed: " . $this->connection->connect_error);
		}
	}	
}
$database = new Database;
$database->connect();
?>