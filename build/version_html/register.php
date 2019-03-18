<?php
$username = trim($_POST['username']);
$pass = trim($_POST['contrasena']);
$cpass = trim($_POST['contrasena2']);
$connection = mysql_connect("localhost", "sibxeco_PetFun", "gundam2343038"); // Establishing Connection with Server..
$db = mysql_select_db("sibxeco_Usuarios", $connection); // Selecting Database
$error = false;

if (isset($username) && isset($pass) && isset($cpass)) {

    	if(!filter_var($username,FILTER_VALIDATE_EMAIL)) {
        	$error = true;
        	$email_error = "Please Enter Valid Email ID";
    	}
    	if(strlen($pass) < 6) {
        	$error = true;
        	$pass = "Password must be minimum of 6 characters";
    	}
    	if($pass != $cpass) {
        	$error = true;
        	$cpassword_error = "Password and Confirm Password doesn't match";
    	}
    	if (!$error) {
    	
		$query = mysql_query("insert into Registro(email, password) values ('$username', '$pass')"); //Insert Query
		$query1 = mysql_query("insert into Puntajes(correo) values ('$username')");
		echo "Form Submitted succesfully";
		

	}
}
mysql_close($connection); // Connection Clos
?>
