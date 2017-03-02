<?php
require "connection.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="/1/jQuery.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Supermercado+One" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Bilbo Swash Caps' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
if(isset($_POST['reg_name'])&&isset($_POST['reg_user'])&&isset($_POST['reg_pass'])){
$sql="insert into user_info(name,user_name,password) values ('".$_POST['reg_name']."','".$_POST['reg_user']."','".$_POST['reg_pass']."');";
$conn->query($sql);


}


?>

<form action="index.php" method="post">
<pre>
   NAME             <input type="text" name="reg_name" class="ch"><br>
   USERNAME   <input type="text" name="reg_user" class="ch"><br>
   PASSWORD    <input type="password" name="reg_pass" class="ch"><br>
	
</pre>
		<input type="submit" id="sub1" value="SIGN UP">


</form>
<div id="k" style="padding:2vh;margin-top:4vh;">
<button onclick="fun();">LOG IN</button>
</div>
<script type="text/javascript">
	function fun(){
		window.history.pushState(null,null,"login.php");
			$.ajax({url:'login',cache:false,success:function(data){

				$("body").html(data);


			}});


	}



</script>
<?php
require "end.php";

?>