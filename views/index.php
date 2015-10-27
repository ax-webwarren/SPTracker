<?php
class View
{
    protected $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function is_admin()
    {
        return $this->a;
    }

    public function set_admin($a)
    {
        $this->a = $a;
    }
}
$admin = false;
$view = new View($admin);

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {	
	$col = [];
	$val = [];
	foreach ($_POST as $key=>$value) {
		$col[$key] = $key;
		$val[$key] = $value;		
	}	
	if (count($col) <= 2) {
		if (array_key_exists('user', $val)) { 
			$pass = '';
			if (array_key_exists('pass', $val)) {
				$pass = $val['pass'];
				$result = $controller->sp_login($val['user'],$pass);				
				$admin = true;
				$_SESSION["admin"] = true;
				$view->set_admin(true);
			}
			else {
				$result = $controller->sp_login($val['user'],$pass);			
			}
			if ($result){
				print "Yes";
				#print_r ($result);
			}
		}
		else {
		switch ($val['table']) {		
			case 'category':			
				$table = 'category';
				break;
			case 'developer':
				$table = 'developer';
				break;
			case 'status':
				$table = 'status';
				break;
			default:
				break;
		}
		$result = $controller->sp_add($val['table'],$val['field'],$table);
				
		$final_category = $controller->sp_generate_category();
		$final_developer = $controller->sp_generate_developer();
		$final_status = $controller->sp_generate_status();		
		}
	}
	
	else if (count($col) > 2) {	
		//Update and Addition of Summary Table Items
		//Define Table
		$table = 'sptracker';
		//If Edit: If column id has value
		$admin = true;
		if (isset($val['edit']) || isset($val['delete_record']) || isset($val['edit_cat_dev_stat'])) {
			if ($val['edit'] == 'true') {
				if ($_SESSION["admin"] == 'true') {
					$result = $controller->sp_edit($col,$val,$table);	
					GenerateGrid($controller);
				}
			}
			elseif ($val['delete_record'] == 'true') {
				if ($_SESSION["admin"] == 'true') {
					if (isset($val['table'])) {
						$result = $controller->sp_delete($col,$val,$val['table']);								
					}
					else {
						$result = $controller->sp_delete($col,$val,$table);								
						GenerateGrid($controller);
					}
				}
			}
			elseif ($val['edit_cat_dev_stat'] == 'true') {
				if ($_SESSION["admin"] == 'true') {
					$result = $controller->sp_edit($col,$val,$val['table']);
					$final_category = $controller->sp_generate_category();
					$final_developer = $controller->sp_generate_developer();
					$final_status = $controller->sp_generate_status();				
				}
			}
			else {			
				$result = $controller->sp_add($col,$val,$table);					
				GenerateGrid($controller);
			}
		}				
	}
}
else { 
	/** Default Page **/
	//Generate Data
	$final_category = $controller->sp_generate_category();
	$final_developer = $controller->sp_generate_developer();
	$final_status = $controller->sp_generate_status();	
	$final_table_display = $controller->sp_generateTableDisplay();		
	
	//Call modules
	require_once ('/header.php');
	require_once ('/content.php');
	require_once ('/table.php');
	require_once ('/modal.php');
	require_once ('/footer.php');
}

function GenerateGrid($controller) {
		$final_table_display = $controller->sp_generateGrid();
		
		//Generate JSON and replace String to match DataTables
		$gen_grid = json_encode($final_table_display);
		$gen_grid =  str_replace('{','[',$gen_grid);
		$gen_grid =  str_replace('}',']',$gen_grid);
		$gen_grid =  str_replace(']]',']]}',$gen_grid);
		$gen_grid = str_replace('[[','{data:[[',$gen_grid);	
		$gen_grid = preg_replace("/\"[a-z]+\":/", '', $gen_grid);
		
		//Add Action Buttons
		$gen_grid = preg_replace("/\"([a-z0-9]+)\"]/","'<span data-id=\"$1\" id=\"col_action_edit\" class=\"glyphicon glyphicon-edit\" data-toggle=\"modal\" data-target=\"#edit_table\"></span><span data-id=\"$1\" id=\"col_action_delete\" class=\"glyphicon glyphicon-trash\" data-toggle=\"modal\" data-target=\"#delete_table\"></span>']",$gen_grid);
		
		//Re-encode JSON
		print json_encode($gen_grid);
}

?>


