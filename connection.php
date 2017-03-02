<?php

$conn=new mysqli("localhost","harsh","","myDB");

if($conn->connect_error)
{
	@die("error");
}

?>