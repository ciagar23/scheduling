<?php

require_once '../config/database.php';

$action = $_GET['action'];	
	
switch ($action) {
    
	case 'login' :
		login();
		break;

	case 'register' :
		register();
		break;
	
	case 'delete' :
		delete();
		break;
	
	case 'update' :
		update();
		break;
		
	case 'logout' :
		logout();
		break;
	
	default :
}


function login()
{
	// if we found an error save the error message in this variable
	
	$userName = $_POST['username'];
	$password = $_POST['password'];
	
	$query = mysql_query("select * from user where username = '".$userName."' and password = '".$password."'");
	
	if (mysql_num_rows($query) != 0)
	{

		$_SESSION['user_session'] = $userName;
		header('Location: ../home/');

			
	}
	else
	{
		header('Location: index.php?error=User not found in the Database');
	}
	
}


function logout()

{
	if (isset($_SESSION['user_session'])) {
		unset($_SESSION['user_session']);
	}
	header('Location: index.php');
	exit;
}


function register()
{
	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$repeatpassword = $_POST['repeatpassword'];
	
	if($password == $repeatpassword){
		mysql_query("insert into user set username='".$username."',
														fname='".$firstname."',
														lname='".$lastname."',
														password='".$password."',
														auth='admin'");
		
		$_SESSION['user_session'] = $username;
		header('Location: ../home/');
	}
	else{
		header('Location: ../account/?view=register&message=Password does not match.');
	}
	
}

function delete()
{
	$id = $_GET['id'];	
	
	mysql_query("delete from user where Id = '".$id."'");
	
	header('Location: ../user/?view=list&message=Successfully Deleted.');
	
}

function update()
{
	$id = $_GET['id'];	
	
	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];


	
	mysql_query("update user set username='".$username."',
												first_name='".$firstname."',
												last_name='".$lastname."',											
												password='".$password."',
												auth='admin'
												where Id = '".$id."'");
												
	header('Location: ../account/?view=detail&message=Successfully Updated.');
	
}

?>