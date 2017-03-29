<?php include "../connection.php";
date_default_timezone_set('Asia/Kolkata');
session_start();
$user2=$_SESSION['username'];
if($user2 == '')
{
  header('location:error_pages/404.html');
}
else {

 ?>
<?php include("../inc/header.php"); ?>
</header>
<!-- Left side column. contains the logo and sidebar -->
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
        }else if($row['role'] == 'lab'){
          include("../inc/sidebar_lab.php");
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
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li>Dashboard</li><li class="active">Lab</li>
    </ol>
  </section>
  <section class="content">
  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Lab</h3>
  </div>
  <form role="form" name="form1" method="post"  action="lab_dashboard.php">
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Patient Type</label>
            <select class="form-control"  name="ptype1" required>
              <option value="">Select</option>
              <option value="oppatient">OP patient</option>
              <option value="ippatient">IP patient</option>
            </select>    </div>
<div class="form-group">
            <label>Receipt No:</label>
            <input type="text" name="r1" id="r1" placeholder="Receipt Number" required> / <input type="text" name="r2" placeholder="Receipt Number" required>    </div>
     <div class="form-group">
          <p align="center">
          <button type="submit" name="submit" class="btn btn-primary">Generate</button>
            <button type="reset" name="reset" class="btn btn-primary" onclick="resetfun()">Reset</button></p>
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
        <h3 class="box-title">Lab Module</h3>


      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <!-- required the op bill table to display the table in op_bill.php page -->
<table class="table table-hover">
  <tr><th><th>OP No</th>
    <th>Patient Name</th>
<th>Lab Tests</th></tr>

<?php
if(isset($_POST['submit']))
{
  $ptype=$_POST['ptype1'];
  $recepitno=$_POST['r1'];
  $date1=date('Y');
  if($ptype == 'oppatient')
  {
    $query=mysqli_query($conn,"select o.id,o.name,lm.test_name from op_patient o,lab_module lm,lab_mapping l1 where l1.op_id = o.id and o.id='$recepitno'") or die(mysqli_error());
    if(mysqli_num_rows($query) > 0){
    while($row=mysqli_fetch_array($query))
    {
      echo "<tr><td></td><td>{$row['id']}/{$date1}</td><td>{$row['name']}</td><td>{$row['test_name']}</td></tr>";
    }
  }
  else{ echo "<script type='text/javascript'>alert('invalid op or ip number');</script>";}

}
  else{
    echo "<script type='text/javascript'>alert('sorry IP module is not yet ready please choose OP module');</script>";
  }
}
mysqli_close($conn);
 ?>
</table>
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
