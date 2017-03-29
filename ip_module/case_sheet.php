<?php
include "../connection.php";
//include "php_files/functions.php";
  date_default_timezone_set('Asia/Kolkata');
  session_start();
  $user2=$_SESSION['username'];
  $ip_no1=urldecode($_GET['ip_number']);
  echo "<script type='text/javascript'>alert('{$ip_no1}');</script>";
  $_SESSION['ip_no']=$ip_no1;
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

       <!-- sidebar menu: : style can be found in sidebar.less -->
       <ul class="sidebar-menu">
         <li class="header">MAIN NAVIGATION</li>
         <?php
           $query=mysqli_query($conn,"select Emailid,role from registration where Emailid='$user2'") or die(mysqli_error($conn));
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

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <section class="content-header">
       <h1>
         Dashboard
         <!-- <small>Version 2.0</small> -->
       </h1>
       <ol class="breadcrumb">
         <li><a href="out_patient_dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
         <li>Dashboard</li><li class="active">IP Form</li>
       </ol>
     </section>

     <section class="content">
       <form name="form1" method="post" action="case_sheet_insertion.php">
<?php
$result1=mysqli_query($conn,"select sex from ip_form where ip_no='$ip_no1' LIMIT 1") or die(mysqli_error());
$row=mysqli_fetch_array($result1);
$sex=$row['sex'];
if($sex == 'male')
{
  echo '<div id="page1">';
  include("php_files/page1.php");
  echo '</div>';
  echo '<div id="page2">';
  include("php_files/page2.php");
  echo '</div>';
  echo '<div id="page6">';
  include("php_files/page6.php");
  echo '</div>';
  echo '<div id="page7">';
  include("php_files/page7.php");
  echo '</div>';
  echo '<div id="page8">';
  include("php_files/page8.php");
  echo '</div>';
  echo '<div id="page9">';
  include("php_files/page9.php");
  echo '</div>';
}
elseif($sex == 'Female')
{
  echo '<div id="page1">';
  include("php_files/page1.php");
    echo '</div>';
  echo '<div id="page2">';
  include("php_files/page2.php");echo '</div>';
  echo '<div id="page3">';
  include("php_files/page3.php");echo '</div>';
  echo '<div id="page4">';
  include("php_files/page4.php");echo '</div>';
  echo '<div id="page6">';
  include("php_files/page6.php");
  echo '</div>';
  echo '<div id="page7">';
  include("php_files/page7.php");
  echo '</div>';
  echo '<div id="page8">';
  include("php_files/page8.php");
  echo '</div>';
  echo '<div id="page9">';
  include("php_files/page9.php");
  echo '</div>';
}
elseif($sex == 'Female/child')
{
  echo '<div id="page1">';
  include("php_files/page1.php");
  echo '</div>';
  echo '<div id="page2">';
  include("php_files/page2.php");
  echo '</div>';
  echo '<div id="page3">';
  include("php_files/page3.php");
  echo '</div>';
  echo '<div id="page6">';
  include("php_files/page6.php");
  echo '</div>';
  echo '<div id="page7">';
  include("php_files/page7.php");
  echo '</div>';
  echo '<div id="page8">';
  include("php_files/page8.php");
  echo '</div>';
  echo '<div id="page9">';
  include("php_files/page9.php");
  echo '</div>';
}
elseif($sex == 'child')
{
  echo '<div id="page1">';
  include("php_files/page1.php");
  echo '</div>';
  echo '<div id="page2">';
  include("php_files/page2.php");
  echo '</div>';
  echo '<div id="page5">';
  include("php_files/page5.php");
  echo '</div>';
  echo '<div id="page6">';
  include("php_files/page6.php");
  echo '</div>';
  echo '<div id="page7">';
  include("php_files/page7.php");
  echo '</div>';
  echo '<div id="page8">';
  include("php_files/page8.php");
  echo '</div>';
  echo '<div id="page9">';
  include("php_files/page9.php");
  echo '</div>';
}
else {
  echo 'problem 002';
}
?>
<div id="row"><center>
  <button type="submit" name="submit1" id="generate" class="btn btn-primary">Generate</button><center>
</div>
</form>
</section>
</div>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
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
<!-- <script src="../plugins/chartjs/Chart.min.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<script type="text/javascript">
//$("# page1").hide();
$("#receipt_number").show();
$("#dos").hide();
$("#suryes").click(function(){
 $("#dos").show();
});
$("#surno").click(function(){
 $("#dos").hide();
});


</script>
</body>
</html>
<?php } ?>
