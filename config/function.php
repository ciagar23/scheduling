<?php

function fullname($user){
	
	$get = mysql_fetch_array(mysql_query("select * from user where idnumber='$user'"));
	return $get['first_name'] . ' ' . $get['last_name'];
}

function buildProctorOptions($catId = 0)
{
	$sql = "SELECT Id, idnumber, first_name, last_name
			FROM user
			ORDER BY Id";
	$result = mysql_query($sql);
	
	$categories = array();
	while($row = mysql_fetch_array($result)) {
		list($id, $idnumber, $first_name, $last_name) = $row;
		
			// we create a new array for each top level categories
			$categories[$id] = array('first_name' => $first_name,'last_name' => $last_name);

	}	
	
	// build combo box options
	$list = '';
	foreach ($categories as $key => $value) {
		$name     = $value['first_name'] .' '.$value['last_name'];
		
		$list .= "<option value=\"$key\"";
		if ($key == $catId) {
			$list.= " selected";
		}
			
		$list .= ">$name</option>\r\n";
	}
	
	return $list;
}
function buildMentorOptions($catId = 0)
{
	$sql = "SELECT Id, idnumber, first_name, last_name
			FROM user
			ORDER BY Id";
	$result = mysql_query($sql);
	
	$categories = array();
	while($row = mysql_fetch_array($result)) {
		list($id, $idnumber, $first_name, $last_name) = $row;
		
			// we create a new array for each top level categories
			$categories[$id] = array('first_name' => $first_name,'last_name' => $last_name);

	}	
	
	// build combo box options
	$list = '';
	foreach ($categories as $key => $value) {
		$name     = $value['first_name'] .' '.$value['last_name'];
		
		$list .= "<option value=\"$key\"";
		if ($key == $catId) {
			$list.= " selected";
		}
			
		$list .= ">$name</option>\r\n";
	}
	
	return $list;
}

?>