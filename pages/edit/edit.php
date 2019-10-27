<?php session_start();
$id=$_GET["id"];
$_SESSION['ID']=$id;
$con=mysqli_connect("localhost","root","","music");
$sql="SELECT * FROM music WHERE id=".$id;
$row=$con->query($sql)->fetch_assoc();
$name=$row['NAME'];
$sname=$row['SNAME'];
$style=$row["STYLE"];
$scale=$row["SCALE"];
$transpose=$row["TRANSPOSE"];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="work.php" method="post">
    Name = <input type="text" name="name" value="<?php echo $name?>"> <br>
    sname = <input type="text" name="sname" value="<?php echo $sname?>"><br>
    style = <input type="text" name="style" value="<?php echo $style?>"><br>
    scale = <input type="text" name="scale" value="<?php echo $scale?>"><br>
    transpose = <input type="text" name="transpose" value="<?php echo $transpose?>"> <br>
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>