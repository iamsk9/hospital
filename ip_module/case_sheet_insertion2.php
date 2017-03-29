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
  if($gender1 =='Female')
  {
    $menstrual=$_POST['menarche'];
    $lmp=$_POST['lmp'];
    $gyn=$_POST['gyes']; $gyn1=($gyn == 'yes')? $gyn1=$_POST['gyndetails'] : 'no';
    $duration=$_POST['duration'];
    $bleeding=$_POST['days'];
    $marriage=$_POST['marriage_age'];
    $first_child=$_POST['first_child'];
    $gravida=$_POST['gravida'];
    $para1=$_POST['para'];
    $stillbirth=$_POST['still_birth'];
    $other5=$_POST['others3'];
    $familyplanning=$_POST['Family'];
    $abortions=$_POST['abortions'];
    $query2=mysqli_query($conn,"insert into case_sheet_female values('','$ip_no1','$menstrual','$lmp','$gyn1','$duration','$bleeding','$marriage','$first_child','$gravida','$para1','$stillbirth','$other5','$familyplanning','$abortions')") or die(mysqli_error());
  }
  else {
    echo 'error';
  }
}
else {
  echo 'error';
}
?>
