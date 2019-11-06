<?php
session_start();
$musicid=$_SESSION['ID'];
$name =$_POST['name'];
$sname=$_POST['sname'];
$style=$_POST['style'];
$scale=$_POST['scale'];
$transpose=$_POST['transpose'];
$idea=$_POST['idea'];

$con=mysqli_connect("localhost","root","","music");
$sql="UPDATE `music` SET NAME='".$name."' ,SNAME='".$sname."' ,STYLE='".$style."' ,SCALE='".$scale."' ,TRANSPOSE='".$transpose."',IDEA='".$idea."' WHERE ID=".$musicid;

if ($con->query($sql) === TRUE) {
//    echo "New record created successfully" .$name;
    echo "<a href='../../'>redirecting</a>";
}
else
{
    echo "not inserted";
}
$con->close();
header('Location:../../');
?>