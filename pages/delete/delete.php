<?php session_start();
$id=$_GET["id"];
$_SESSION['ID']=$id;
$con=mysqli_connect("localhost","root","","music");
$sql="DELETE FROM music WHERE id=".$id;
$con->query($sql);
echo "<a href='../../'>redirecting</a>";

?>