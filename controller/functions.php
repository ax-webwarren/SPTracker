<?php
class Controller {
	private $db;

	public function __construct(Database $db) {
		$this->db = $db;
	}	
	
	function sp_add($cols,$value,$table){		
		$final_col = "";
		$final_val = "";
		
		//Unset Edit and Delete Key and Value
		if (isset($value['edit']) || isset($value['delete_record']) || isset($value['edit_cat_dev_stat'])) {
			unset($value['edit']);
			unset($value['delete_record']);		
			unset($value['edit_cat_dev_stat']);
			unset($cols['edit']);
			unset($cols['delete_record']);		
			unset($cols['edit_cat_dev_stat']);
		}
		
		//If multiple Columns
		if (count($cols) > 1) {		
			$last_col = end($cols);
			$last_val = end($value);
			foreach ($cols as $col) {
				if ($col === $last_col) {
					$final_col .= "" . $col . "";
				}
				else {
					$final_col .= "" . $col . ",";
				}
			}		
			foreach ($value as $val) {
				if ($val === $last_val) {
					$final_val .= "'" . $val . "'";
				}
				else {
					$final_val .= "'" . $val . "',";
				}
				
			}					
		}
		else {
			$final_col .= $cols;
			$final_val .= "'" . $value . "'";
		}		
		$value = $this->db->add($final_col,$final_val,$table);
		return $value;
	}
	
	function sp_edit($cols,$value,$table){
		$final_col = "";
		$final_val = "";
		$set_data = "";
		
		//Unset Edit and Delete Key and Value
		if (isset($value['edit']) || isset($value['delete_record']) || isset($value['edit_cat_dev_stat'])) {
			unset($value['edit']);
			unset($value['delete_record']);
			unset($value['edit_cat_dev_stat']);
			unset($cols['edit']);
			unset($cols['delete_record']);
			unset($cols['edit_cat_dev_stat']);
		}
		
		$last_col = end($cols);
		$last_val = end($value);
		
		//If multiple Columns
		if (count($cols) > 1) {		
			$i = 0;
			foreach ($cols as $col) {
				if ($col === $last_col) {
					$set_data .= $col . "='" . $value[$col] . "' ";
					$condition = $col . "='" . $value[$col] . "' ";
				}
				else {
					$set_data .= $col . "='" . $value[$col] . "', ";
				}
				$i++;
			}
			#$value = $this->db->edit($set_data,$table,$condition);
		}
		
		//If Single Columns
		if ($table == 'category' || $table == 'developer' || $table == 'status') {
			$set_data = $value['table'] . "='" . $value['value'] . "'";
			$condition = $cols['id'] . "='" . $value['id'] . "'";	
			#if (){
				#$table = 'sptracker';
				#$condition = $cols['id'] . "='" . $value['value'] . "'";
				#$value = $this->db->edit($set_data,$table,$condition);
			#}
		}				
		$value = $this->db->edit($set_data,$table,$condition);
		return $value;
	}
	
	function sp_delete($cols,$value,$table){		
		$value = $this->db->delete($cols['id'],$value['id'],$table);
		return $value;		
	}
	
	function sp_sort(){
		
	}
	
	function sp_login($val, $pass){
		$cols = "developer";
		$value = "";
		if ($pass == '') {
			$order = "WHERE developer=" . "'" . $val . "'";
		}
		else {
			$order = "WHERE developer=" . "'" . $val . "'" . " AND " . "pass='" . md5($pass) . "'";
		}
		$table = $cols;
		$final = [];
		$value = $this->db->sort_login($cols,$value,$order,$table);		
		while($row = $value->fetch_assoc()){
			$final[] = ($row);
		}
		return $final;
	}
	
	function sp_generate_category(){
		$cols = "category";
		$value = "";
		$order = "id DESC";
		$table = $cols;
		$final = [];
		$value = $this->db->sort_value($cols,$value,$order,$table);		
		while($row = $value->fetch_assoc()){
			$final[] = ($row);
		}
		return $final;
	}
	
	function sp_generate_developer(){
		$cols = "developer";
		$value = "";
		$order = "id DESC";
		$table = $cols;
		$final = [];
		$value = $this->db->sort_value($cols,$value,$order,$table);
		while($row = $value->fetch_assoc()){
			$final[] = ($row);
		}
		return $final;
	}
	
	function sp_generate_status(){
		$cols = "status";
		$value = "";
		$order = "id DESC";
		$table = $cols;
		$final = [];
		$value = $this->db->sort_value($cols,$value,$order,$table);
		while($row = $value->fetch_assoc()){
			$final[] = ($row);
		}
		return $final;
	}
	
	function sp_generateTableDisplay(){
		$cols = "sptracker";
		$value = "";
		$order = "start DESC";
		$table = $cols;
		$final = [];
		$value = $this->db->sort_value($cols,$value,$order,$table);
		while($row = $value->fetch_assoc()){
			$final[] = ($row);
		}
		return $final;
	}
	
	function sp_generateGrid(){
		$cols = "sptracker";
		$value = "";
		$order = "start DESC";
		$table = $cols;
		$final = [];
		$value = $this->db->sort_value($cols,$value,$order,$table);
		while($row = $value->fetch_assoc()){			
			$final[] = ($row);
		}
		return $final;
	}
}
$controller = new Controller($database);
?>

