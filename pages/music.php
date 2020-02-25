<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<audio controls>
    <source src="horse.ogg" type="audio/ogg">
    <source src="<?php
    $con=mysqli_connect("localhost","root","","music");

    $sql = "select source from music where name=t";
    $result = $con->query($sql);



    if ($con)
    {
echo "t.mp3";
    }
    ?>" type="audio/mp3">
    Your browser does not support the audio element.
</audio>

</body>
</html>