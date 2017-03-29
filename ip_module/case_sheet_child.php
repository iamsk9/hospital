<?php
include "../connection.php";
include "php_files/functions.php";
date_default_timezone_set('Asia/Kolkata');
session_start();
$ip_no1=$_SESSION['ip_no'];
echo "<script type='text/javascript'>alert({$ip_no1});</script>";
$gender1= gender($conn,$ip_no1);
if(isset($_POST['submit1']))
{
  if($gender1 == 'child')
  {
    $birthhistory1=$_POST['Birth'];
    $birthasphyria=$_POST['Asphyria'];
    $developmenthistory=$_POST['Development'];
    $development=($developmenthistory == 'Development')? $development=$_POST['dev']: 'no';
    $immunization=$_POST['Immunization'];
    $query3=mysqli_query($conn,"insert into case_sheet_child values('','$ip_no1','$birthhistory1','$birthasphyria','$development','$immunization')") or die(mysqli_error());

  }
  else{
    echo 'error';
  }
}
  else {
    echo 'error submit';
  }
  ?>
