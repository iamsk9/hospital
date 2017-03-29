<?php
include "../../connection.php";
include "functions.php";
date_default_timezone_set('Asia/Kolkata');
if(isset($_POST['submit1']))
{
  $date1=date('Y-m-d');
  $p_name=$_POST['user'];$age=$_POST['age'];
    $sex=$_POST['gender']; $address=$_POST['address'];$phonenumber=$_POST['phoneno'];
  $roomno=$_POST['roomno'];$diagnosis=$_POST['diagnosis'];$proc_done=$_POST['procedure'];
  $ref=$_POST['referral'];$consultant=$_POST['consultant'];$dos=$_POST['dos'];$dod=$_POST['dod'];
  $timestamp=date('Y-m-d G:i:s');
  $new_ip=ip_number_generation($conn);
  //  $_SESSION['$new_ip']=$new_ip_sess;
$query=mysqli_query($conn,"insert into ip_form(ip_no,p_name,age,sex,address,phoneno,room_no,diagnosis,procedure_done,any_referral,consultant,doa,created_at) values($new_ip,'$p_name','$age','$sex','$address','$phonenumber','$roomno','$diagnosis','$proc_done','$ref','$consultant','$date1','$timestamp')") or mysqli_error();
  //$query=mysqli_query($conn,"insert into ip_form(ip_no,p_name,age,sex,address,phoneno,room_no,diagnosis,procedure_done,any_referral,consultant,doa,created_at) values('$new_ip','ad',22,'male','v',8885019199,007,'dagnosis','proc_done','ref','consultant','$date1','$timestamp')") or mysqli_error();
  //var_dump($query);

  if($query)
  {
    //echo "<script type='text/javascript'>alert('inserted sucessfully and ip number is {$new_ip}');</script>";
    //$_SESSION['new_ip1']=$new_ip;
    //echo $new_ip;
    //$_SESSION['ip_no1']=$new_ip;
    header('location:../case_sheet.php?ip_number='.urlencode($new_ip));
  }
  else {
    echo "<script type='text/javascript'>alert('something went wrong');</script>";
  }
}
else {
echo "<script type='text/javascript'>alert('error in submission please refresh the page or contact admin');</script>";
}
 ?>
