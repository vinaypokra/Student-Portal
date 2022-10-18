<?php
session_start();
include 'database.php';
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, password,email,course,starting_year FROM accounts WHERE username = ?'))
 {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
	if ($stmt->num_rows > 0)
	 {
		$stmt->bind_result($id, $password,$email,$course,$starting_year);
		$stmt->fetch();
		
		if (password_verify($_POST['password'], $password))
		 {
			
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['username'];
			$_SESSION['id'] = $id;
			$_SESSION['email']=$email;
			$_SESSION['course']=$course;
			$_SESSION['starting_year']=$starting_year;
			header('Location: home.php');
		} 
		else 
		{
			echo 'Incorrect password!';
		}
	} 
	else
	 {
		echo 'Incorrect username!';
	 }

	$stmt->close();

}


?>