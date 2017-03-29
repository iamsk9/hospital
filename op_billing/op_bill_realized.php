<?php
include "../connection.php";
date_default_timezone_set('Asia/Kolkata');
//$date2=date('Y-m-d');
function op_bill_relized($conn,$date2){
$query1=mysqli_query($conn,"select date1 from op_patient where date1='$date2' AND bill_status='1'");
$count2=0;
while($res=mysqli_fetch_row($query1))
{
$count2 ++;
}
echo $count2;
}
function op_bill_pending($conn,$date2)
{
  $query1=mysqli_query($conn,"select date1 from op_patient where date1='$date2' AND bill_status='0'");

  //initialized the count value to 0 that helps to return the total count of pending bills
  $count1=0;
  while($res=mysqli_fetch_row($query1))
  {
  $count1 ++;
  }
  //printing the bill count.
  echo $count1;
}
function op_billing_status($conn,$date2)
{
  $query1=mysqli_query($conn,"select date1 from op_patient where date1='$date2'");
  $count=0;
  while($res=mysqli_fetch_row($query1))
  {
  $count ++;
  }
  echo $count;
}
//op_bill_pending($conn,$date2);









//op_bill_relized($conn,$date2);


?>
