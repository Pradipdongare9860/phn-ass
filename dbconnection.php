<?php

    define("HOST","localhost");
	define("DB_USER","root");
	define("DB_PASS","");
	define("DB_NAME","PHN-TECH");	
	
	$con = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	
	if(!$con)
	{
		die(mysqli_error());
	}

    function getUserAccessRoleByID($id)
	{
		global $con;
		
		$query = "select user_role from tbl_user_role where  id = ".$id;
	
		$rs = mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($rs);
		
		return $row['user_role'];
	}
?>