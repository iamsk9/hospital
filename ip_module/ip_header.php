<?php
//include "../connection.php";
  date_default_timezone_set('Asia/Kolkata');
  $query=mysqli_query($conn,"select p_name,sex,age,ip_no from ip_form where ip_no='$ip_no1'") or die(mysqli_error());
 while($row=mysqli_fetch_array($query))
 {
  ?>

  <div class="box box-default">
    <form role="form" name="form2" id="page1" novalidate method="post">
    <div class="box-header with-border">
      <h3 class="box-title">In Patient</h3>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <label>Patient's Name:</label>
          <label id="pname"><?php echo $row['p_name']; ?></label>
        </div>
        <div class="col-md-2">
          <label>Sex:</label>
          <label id="sex"><?php echo $row['sex']; ?></label>
        </div>
        <div class="col-md-2">
          <label>Age:</label>
          <label id="age"><?php echo $row['age']; ?></label>
        </div>
        <div class="col-md-2">
          <label>IP No:</label>
          <label id="ipno"><?php $ip_no=$row['ip_no']; echo $ip_no; } ?></label>
        </div>
      </div>
