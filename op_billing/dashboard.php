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
function resetfun(){
  document.getElementById("form1").reset();
}

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
 $(function(){
         $('#selectId').change(function(){
           if($(this).val() == "option1")
              $('#onSelect').show();
            else if($(this).val() == "Walkin")
              $('#onSelect').hide();
         });
         $('#onSelect').blur(function(){
           var referedBy = $(this).val();
           $('#op1').val(referedBy);

         });

     })


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
        <li><a href="out_patient_dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Dashboard</li><li class="active">OP Form</li>
      </ol>
    </section>

    <section class="content">
  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Out Patient</h3>
    </div>
    <form role="form" name="form2" novalidate method="post" onsubmit="return validateForm()" action="opform.php">
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <!-- add address field to the opform-->
            <label>Patient Name</label>
            <input type="text" class="form-control" name="user" placeholder="Patient Name"  required>
            <label>Age</label>
            <input type="number" class="form-control" name="age" id="age" placeholder="Age"  maxlength="2" required>
            <label>Phone Number</label>
            <input type="number" name="phoneno" class="form-control" id="par"  placeholder="Phone Number" maxlenght="10" required>
            <label>Gender</label></br>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Child">Child
            <input type="radio" name="gender" value="other"> Other</br></br>
            <label>Doctor Name</label>
            <input type="text" name="docname" class="form-control" placeholder="doctor name" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Billing Type</label>
              <select class="form-control"  name="ptype" required>
                <option>Select</option>
                <option value="Regular">Regular</option>
                <option value="outsidedoctor">Out side Doctor</option>
                <option value="inhousedoctor">In-House Doctor</option>
                <option value="RepeatedPatient">Repeated Patient</option>
              </select>
              <label>Address</label>
              <textarea name="address" class="form-control" rows="3"  placeholder="Address"></textarea>
              <label>Patient Type</label></br>
              <select class="form-control" name="sel" id="selectId" required>
                <option>select</option>
                <option value="option1" id="op1">Referred</option>
                <option value="Walkin" id="op2">Walkin</option>
              </select></br>
              <input type="text"  id="onSelect" class="form-control" placeholder="Referrence Person" style="display:none" required>

              <label></label></br></br></br></br></br></br>
            </div>

          </div>
              <p align="center">
              <button type="submit" name="submit" class="btn btn-primary">Generate</button>

              <button type="reset" name="reset" class="btn btn-primary" onclick="resetfun()">Reset</button></p>
            </div>
          </div>
        </form>
        </div>


        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Out Patient</h3>
          </div>
          <form role="form" name="form3" novalidate method="post"  action="opform.php">
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- add address field to the opform-->
                  <label>OP No:</label>
                  <input type="text" name="r1" id="r1" placeholder="Receipt Number" required> / <input type="text" name="r2" placeholder="Receipt Number" required>
                </div>
                <p align="center">
                <button type="submit" name="submit1" class="btn btn-primary">Generate</button>

                <button type="reset" name="reset" class="btn btn-primary" onclick="resetfun()">Reset</button></p>
              </div>
            </div>
          </div>
          </form>
          </div>
    </section>
</div>

            <!-- /.box-footer -->



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
</body>
</html>
<?php } ?>
