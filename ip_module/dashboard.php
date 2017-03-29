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
  function validateForm() {
    pattern = /^[7-9][0-9]{9}$/;
    var name=document.forms["form2"]["phoneno"].value;
    console.log(name);
    if (!pattern.test(name)) {
      document.getElementById("par").innerHTML="Invalid Details";
      alert("Invalid Phone no");
      return false;
    }
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <!-- <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Dashboard</li><li class="active">IP Form</li>
      </ol>
    </section>

    <section class="content">
  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">In Patient</h3>
    </div>
    <form role="form" name="form2" id="myForm" novalidate method="post" action="../ip_module/php_files/ip_form.php">
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <!-- add address field to the ipform-->
            <label>Patient Name</label>
            <input type="text" class="form-control" name="user" placeholder="Patient Name">
            <label>Age</label>
            <input type="number" class="form-control" name="age" id="age" placeholder="Age"  maxlength="2"  >
            <label>Sex</label>
            <div class="form-group">
                <select class="form-control" name="gender">
                <option>select</option>
                <option value="male">Male</option>
                <option value="Female">Female</option>
                <option value="Female/child">Female/child</option>
                <option value="child">Child</option>
              </select>
          </div>
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" rows="3" placeholder="Enter Address" name="address"></textarea>
            </div>
            <label>Phone Number</label>
            <input type="number" name="phoneno" class="form-control" id="par"  placeholder="Phone Number" maxlenght="10"  >
            <label>Room Number</label>
            <label>Select</label>
            <select class="form-control" name="roomno">
              <option>option 1</option>
              <option>option 2</option>
              <option>option 3</option>
              <option>option 4</option>
              <option>option 5</option>
            </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Diagnosis</label>
              <input type="text" name="diagnosis" class="form-control" placeholder="Diagnosis"  >
              <label>Procedure Done</label>
              <input type="text" name="procedure" class="form-control" placeholder="Procedure"  >
              <label>Any Referral</label>
              <input type="text" name="referral" class="form-control" placeholder="Referral"  >
              <label>Consultant:</label>
                  <input type="text" name="consultant" class="form-control" placeholder="Enter Consultant"  >
                  <label>Surgery</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="suregry" id="suryes" value="yes" checked>Yes
                    </label>
                    <label>
                      <input type="radio" name="suregry" id="surno" value="no" checked>No
                    </label>
                  </div>
                  <div id="dos">
                    <label>D.O.S</label>
                    <input type="number" name="dos" class="form-control"  placeholder="D.O.S"  >
                  </div>
                  <label>D.O.D</label>
                  <input type="number" name="dod" class="form-control" id="dod"  placeholder="D.O.D"  >
              </br></br></br>
            </div>

          </div>
            </div>
            <div class="row">
              <p align="center">
              <button type="submit" name="submit1" id="generate" class="btn btn-primary">Generate</button>
              <button type="reset" name="reset" class="btn btn-primary" onclick="resetfun()">Reset</button></p>
            </div>
          </div>
        </form>
        </div>

        <div id="receipt_number">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">In Patient</h3>
          </div>
          <form role="form" name="form3" novalidate method="post"  action="ipform.php">
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- add address field to the ipform-->
                  <label>IP No:</label>
                  <input type="text" name="r1" id="r1" placeholder="Receipt Number"  > / <input type="text" name="r2" placeholder="Receipt Number"  >
                </div>
                <p align="center">
                <button type="submit" name="submit1" class="btn btn-primary">Generate</button>
                <button type="reset" name="reset" class="btn btn-primary" onclick="resetfun()">Reset</button></p>
              </div>
            </div>
          </div>
          </form>
          </div>
          </div>

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
