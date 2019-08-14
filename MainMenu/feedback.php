<?php
session_start();
include'dbcon.php';
if(isset($_SESSION['user_id']))
{
	$sql="SELECT sem FROM student WHERE username='".$_SESSION['user_id']."'";
	$result = mysqli_query($con,$sql);
    // output data of each row
while($row = mysqli_fetch_assoc($result)){
	echo "$row[sem]";
}   
?>

<html>
<head>
<body>

</body>
</html>
<?php
}
else
{
	echo"<script type='text/javascript'>
	window.location.href='index.php';
	</script>";
}
?>