<?php
include "connection.php";//db connection
session_start();
if(isset($_POST['submit']))
{
  //the form content which is in the index.php file
  $username=$_POST['user'];
  $phonenumber=$_POST['phoneno'];
  $gender1=$_POST['gender'];
  $age=$_POST['age'];
  // $temp=$_POST['temp'];
  // $height3=$_POST['height'];
  date_default_timezone_set('Asia/Kolkata');
  $date2 = date('h:i:s', time());
  // $height2=$_POST['height1'];
  // $height1=$height3.'.'.$height2;
  // $weight=$_POST['weight'];
  $docname1=$_POST['docname'];
  $ptype=$_POST['ptype'];
  // $bp1=$_POST['bp'];
  // $bp2=$_POST['bp1'];
  // $bp=$bp1.'/'.$bp2;
  // $blood1=$_POST['blood'];
  $date1=date('Y-m-d');
  $select1=$_POST['sel'];
  $address1=$_POST['address'];
  //session variable
  $_SESSION['phoneno']=$phonenumber;
  // echo $_SESSION['phoneno'];
  //passed a query to insert the above details in the op_patient table.
  $query=mysqli_query($conn,"insert into op_patient (name,age,Phoneno,gender,ptype,date1,Referred,Address,time,bill_status,docname) values ('$username','$age','$phonenumber','$gender1','$ptype','$date1','$select1','$address1','$date2','0','$docname1')");
  if($query)
  {
    // $_SESSION['phoneno1']=$phonenumber;
    // //message when the insertion is successfull
    // echo '<script type="text/javascript">alert("sucess");</script>';
    // // invoice print out structure
    // header('location:opprintout.php');
    $date2=date('Y-m-d');
    // var_dump($date2);
    op_form_print($phonenumber,$date2,$conn);
  }
  //if insertion fails the error is shows an alert message
  else{
    die(mysqli_error());
    echo '<script type="text/javascript">alert("error in insertion");</script>';
  }
}
//error in submititng the form data
else{
  //echo 'error';
}

//session_destroy();
//closing the db connection
function op_form_print($phonenumber,$date2,$conn)
{
$query3=mysqli_query($conn,"select * from op_patient where Phoneno='$phonenumber' AND date1='$date2' LIMIT 1");
// var_dump($query3);
while($row=mysqli_fetch_array($query3))
{
include "op_form_template.php";
}
}
if(isset($_POST['submit1']))
{
  $op_receipt=$_POST['r1'];
  op_form_repeat($conn,$op_receipt);
}

function op_form_repeat($conn,$op_receipt)
{

  $query=mysqli_query($conn,"select * from op_patient where id='$op_receipt'");
  while($row=mysqli_fetch_array($query))
  {
    include "op_form_template.php";
  }
}

mysqli_close($conn);

 ?>
