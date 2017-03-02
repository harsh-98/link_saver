<?php
require "connection.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="/1/jQuery.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Supermercado+One" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='//fonts.googleapis.com/css?family=Bilbo Swash Caps' rel='stylesheet'>

</head>
<body>
<form method="post" action="login.php">
<pre>
 USERNAME  <input type="text" name="log_name" class="ch"><br>
 PASSWORD   <input type="text" name="log_pass" class="ch"><br>
</pre>
<input type="submit" value="LOG IN" id="sub1">

</form>

<?php
if(isset($_POST['log_name'])&&isset($_POST['log_pass'])){
$sql="select * from user_info where user_name='".$_POST['log_name']."' and password='".$_POST['log_pass']."';";
echo $sql;
$result=$conn->query($sql);

if($row=$result->fetch_assoc()){

	echo "<script> var kk= '".$row["name"]."';
window.history.pushState(null,null,'link.php');
	$.ajax({
		url :'link',
		cache:false,
		success:function(data){
			$('body').html(data);
		}
	});


	</script>";
}

}

?>

</body>
</html>