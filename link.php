
<?php
require "connection.php";


if(isset($_POST['link']))
{
	$sql="insert into link(name,link) values('".$_POST['name']."','".addslashes($_POST['link'])."');";
	$conn->query($sql);




}
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
<script type="text/javascript">
	var kk="<?php echo $_POST['name'];?>";

</script>
</head>
<body>

	
		
	



	
<form action="link.php" method="post" >
<pre>
<div></div>
 LINK <input type="text" name="link" class="ch">
	<input type="text" name="name" id="n" style="display:none;">
</pre>
	 <input type="submit" value="SUBMIT" id="sub1">
</form>

<script type="text/javascript">
	
$(document).ready(function(){
	
document.getElementsByTagName('div')[0].innerHTML="Hi  &nbsp;"+kk;
document.getElementById('n').value=kk; 
});




	</script>
<div id="see">
<p align="center" style="font-size:6vmin;">YOUR SAVED LINKS --</p>
	<?php $sql="select * from link where name ='".$_POST['name']."';";
	$result=$conn->query($sql);
	
	$r=1;
		while($row=$result->fetch_assoc()){
			echo "<p id='s'>".$r." ) -- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['link']."</p><br>";$r++;
		}
			
		
	
?>

</div>


	<?php  $conn->close();?>
</body>
</html>