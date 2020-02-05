<?php session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Zeamre be noba</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- Google Font -->
  <link rel="stylesheet"
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Zemare
        <small>ordering table</small>
<!--          <small><a href="pages/insert/insert.php">insert</a></small>-->
          <div class="navbar navbar-fixed-top" style="float: right" id="player">
          </div>
      </h1>
    </section>

    <?php
    $con=mysqli_connect("localhost","root","","music");
?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">ORDERING TABLE</h3>
                <h4 style="float: right">just click in any of the columns and it will sort it accordingly</h4>
            </div>

            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>መለያ ቁጥር(ID)</th>
                  <th>የዘማሪ ስም(SINGER)</th>
                  <th>የዝማሬው ስም(TITLE)</th>
                  <th>ምት ስታይል(STYLE)</th>
                  <th>ስኬል(SCALE)</th>
                  <th>ዝማሬው ያለበት ትራንስፖዝ(TERANSPOSE)</th>
                  <th>ዝማሬው ያለበት ሀሳብ(Idea)</th>
                  <th>መሳሪያዎች(Tools)</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT id, name, sname,style,scale,transpose,idea FROM music";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["id"]."</td>";
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["sname"]."</td>";
                            echo "<td>".$row["style"]."</td>";
                            echo "<td>".$row["scale"]."</td>";
                            echo "<td>".$row["transpose"]."</td>";
                            echo "<td>".$row["idea"]."</td>";
                            echo "<td>
                                      <button class='btn btn-sm btn-warning' id='id".$row['id']."' onclick='locator(id)'>play</a></button>
                                      <button class='btn btn-info'><a href='pages/edit/edit.php?id=".$row['id']."'>edit</a></button>
                                      <button class='btn btn-danger'><a href='pages/delete/delete.php?id=".$row['id']."'>delete</a></button>
                                   </td></tr>
                                      ";}
                    }?>
                </tbody>
                <tfoot>
                <tr>
                  <th>መለያ ቁጥር(ID)</th>
                  <th>የዘማሪ ስም(SINGER)</th>
                  <th>የዝማሬው ስም(TITLE)</th>
                  <th>ምት ስታይል(STYLE)</th>
                  <th>ስኬል(SCALE)</th>
                  <th>ዝማሬው ያለበት ትራንስፖዝ(TERANSPOSE)</th>
                  <th>ዝማሬው ያለበት ሀሳብ(Idea)</th>
                    <th>መሳሪያዎች(Tools)</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0(beta)
    </div>
    <strong>Copyright &copy; 2019-2020 <a href="https://adminlte.io">Noba</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/changeplay.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  });
</script>
    <script>
    </script>
</body>
</html>
