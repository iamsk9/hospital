<?php include "../connection.php";
date_default_timezone_set('Asia/Kolkata');
session_start();
//session variable to display the user name
$user2=$_SESSION['username'];
//if the session variable is empty it returns the 404 error page
if($user2 == '')
{
  header('location:error_pages/404.html');
}
else {

 ?>
<?php include("../inc/header.php");
?>
<script type="text/javascript">
function resetfun(){
  document.getElementById("form1").reset();
}
// function res() {
//   var id = document.getElementById("r1").value;
//      var n = id.indexOf("/");
//      var z= id.substring(0,n);
//      window.location.href="op_bill.php?r2=" +z;
// }
</script>
  </header>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user2; ?></p>
<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <?php
        $query=mysqli_query($conn,"select emailid,role from registration where Emailid='$user2'")or die(mysqli_error());
        while($row=mysqli_fetch_array($query))
        {
          if($row['role'] == 'admin'){
            include("../inc/sidebar_admin.php");
          }
          else if($row['role'] == 'client'){
            include("../inc/sidebar.php");
          }else{
            echo "<script type='text/javascript'>alert('unable to load sidebar at this moment');</script>";
          }
        }
          ?>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="out_patient_dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Dashboard</li><li class="active">OP Bill</li>
      </ol>
    </section>
    <section class="content">
  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Out Patient</h3>
    </div>
    <form role="form" name="form1" method="post" action="op_bill2.php">
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>OP No:</label>
            <input type="text" name="r1" id="r1" placeholder="Receipt Number" required> / <input type="text" name="r2" placeholder="Receipt Number" required>
          </br></br>
            <input type="submit" name="submit" value="generate"  class="btn btn-primary">
              <input type="reset" name="reset" value="reset" onclick="restfun()"  class="btn btn-primary">
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">OP Billing List</h3>


      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <!-- required the op bill table to display the table in op_bill.php page -->
<?php require("op_bill_table.php"); ?>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
</section>
</div>
<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
<?php } ?>
