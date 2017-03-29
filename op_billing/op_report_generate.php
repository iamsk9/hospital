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
<script type="text/javascript">
  $(function () {
    $('#datepicker').datepicker({
      autoclose: true
    });
    $('#datepicker2').datepicker({
      autoclose: true
    });
  });

  function Myprint()
  {
    window.print();
  }


</script>
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
      <li>Dashboard</li><li class="active">OP Report Generate</li>
    </ol>
  </section>
<section class="content">
<!-- SELECT2 EXAMPLE -->
<div class="box box-default">
<div class="box-header with-border">
  <h3 class="box-title">Out Patient Report</h3>
</div>
<form role="form" name="form1" method="post"  action="op_report_generate.php">
<div class="box-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group"></br>
        <label>From Date:</label>

        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="text" class="form-control" id="datepicker" name="todate1" required>
        </div>
        <!-- /.input group -->
</br>
<div class="form-group">
  <label>Report required for</label>
  <select class="form-control"  name="reporttype" required>
    <option>Select</option>
    <option value="1">Count</option>
    <option value="2">AR-Amount Received</option>
    <option value="3">Amount Pending</option>
    <option value="4">Total Amount</option>
  </select>
</div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">      <div class="box-body">

                <label>To Date:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                <input type="text" id="datepicker2" class="form-control" name="fromdate1" required>

          </div>
      </div>
      </div>

        </div>
      </div>
          <p align="center">
          <button type="submit" name="submit" class="btn btn-primary">Generate</button>

          <button type="reset" name="reset" class="btn btn-primary" onclick="resetfun()">Reset</button></p>
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Report Generation</h3>


          </div>
    <div class="box-body table-responsive no-padding">
      <!-- required the op bill table to display the table in op_bill.php page -->
    <table class="table table-hover">
    <tr><th>SNO</th>
    <th>OP Number</th>
    <th>Patient Name</th>
    <th>Doctor Name</th>
    <th>Date</th></tr>
<?php include "op_report.php"; ?>
    </table>

    </div>
    <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
  </div>
    </div>

</section>




<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->


































































  <div class="../control-sidebar-bg"></div>
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
  <!-- bootstrap datepicker -->
  <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>

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
