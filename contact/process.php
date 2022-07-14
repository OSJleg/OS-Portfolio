<?php

if(empty($_POST['submit']))
{
	echo "Form is not submitted!";
	exit;
}
if(empty($_POST["name"]) ||
	empty($_POST["email"])||
	empty($_POST["message"]))
	{
		echo "Please fill the form";
		exit;
	}
	
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

mail( 'salkoooleg@gmail.com' , 'New form submission' , 
"New form submission: Name: $name, Email: $email", );

header('Location: confirm.html');

?>