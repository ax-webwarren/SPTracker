<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {		

// filename for download
$filename = "sptracker_" . date('Ymd') . ".xls";

header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

include ("../model/functions.php");
echo  "Categories" . "\t" . "Developer" . "\t" . "Status" . "\t" . "Start" . "\t" . "End" . "\t" . "Notes" . "\t" . "ID";
include ("../controller/functions.php");

function cleanData(&$str)
{
    // escape tab characters
    $str = preg_replace("/\t/", "\\t", $str);

    // escape new lines
    $str = preg_replace("/\r?\n/", "\\n", $str);

    // convert 't' and 'f' to boolean values
    if($str == 't') $str = 'TRUE';
    if($str == 'f') $str = 'FALSE';

    // force certain number/date formats to be imported as strings
    if(preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) {
      $str = "'$str";
    }

    // escape fields that include double quotes
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}

$flag = false;
  
  $final_table_display = $controller->sp_generateTableDisplay();  
  
  foreach ($final_table_display as $row) {
    if(!$flag) { //Export Header Row
      // display field/column names as first row
      #fputcsv($out, array_keys($row), "\t", '"');
	  #echo implode("\t", array_keys($row)) . "\n";
      $flag = true;
    }
    array_walk($row, 'cleanData');
	echo implode("\t", array_values($row)) . "\n";
    #fputcsv($out, array_values($row), "\t", '"');
  }

  #fclose($out);
  exit;	
}
?>