<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Zeamre be noba</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- Google Font -->
    <link rel="stylesheet">
</head>
<body>
<div class="jumbotron" >
    <div class="form-group" style="margin-left: 20px;width: 50%">
        <form action="work.php" method="post" autocomplete="on" autocapitalize="on">
            Name : <input class="form-control" type="text" name="name"> <br>
            sname : <input class="form-control" type="text" name="sname"><br>
            style : <input class="form-control" type="text" name="style" value="ካንትሪ"><br>
            scale : <input class="form-control" type="text" name="scale" value="2"><br>
            transpose : <input class="form-control" type="number" name="transpose" value="0"> <br>
            idea : <input class="form-control" type="text" name="idea"> <br>
            <input class="form-control btn btn-success" type="submit" value="submit" name="submit">
        </form>
        <button class="btn btn-primary" onclick="homelocater()" style="margin-top: 10px">home</button>
    </div>
</div>
</body>
<script src="../../bower_components/changeplay.js"></script>
</html>