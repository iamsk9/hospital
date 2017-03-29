<?php
//include "../../connection.php";
date_default_timezone_set('Asia/Kolkata');
//$timestamp = date('Y-m-d G:i:s');
function ip_number_generation($conn)
{
  $result=mysqli_query($conn,"select max(id) as pp from ip_form") or die(mysqli_error());
$row=mysqli_fetch_array($result);
$pp=$row['pp'];
$new_id=$pp+1;
//echo $pp;
return $new_id;
}
function gender($conn,$ip_no)
{
  $result=mysqli_query($conn,"select sex from ip_form where ip_no='$ip_no'") or die(mysqli_error());
  $row=mysqli_fetch_array($result);
  $gender=$row['sex'];
  return $gender;
}
?>
