<?php
$name =$_POST['name'];
$sname=$_POST['sname'];
$style=$_POST['style'];
$scale=$_POST['scale'];
$transpose=$_POST['transpose'];

$con=mysqli_connect("localhost","root","","music");
$sql="INSERT INTO `music` (`ID`, `NAME`, `SNAME`, `STYLE`, `SCALE`, `TRANSPOSE`) VALUES (NULL, '$name', '$sname', '$style', '$scale', $transpose)";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully" .$name;
    echo "<a href='../../'>home</a>";
}
else
{
    echo "not inserted";
}
$con->close();

?>