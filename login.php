<?php
include("connection.php");
session_start();
if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['password'])){
 $user1=$_POST['email'];
 $passwd=$_POST['password'];
 // $passwd1=hash('md5',$passwd);
 // $hash=password_hash($passwd,PASSWORD_DEFAULT);
 // var_dump($hash);
 $query=mysqli_query($conn,"select Emailid,password,role from registration where Emailid='$user1' AND password='$passwd'");

 if(mysqli_num_rows($query) > 0){
 while($res=mysqli_fetch_array($query)){
 $_SESSION['username']=$user1;
   if($res['role'] == 'admin'){
     header('location:admin/dashboard.php');
  }else if($res['role'] == 'client'){
    header('location:op_billing/out_patient_dashboard.php');
  }else if($res['role'] == 'lab'){
    header('location:lab_module/lab_dashboard.php');
  }else {
    $_SESSION['errMsg']="Invalid Username or Password";
    }
  }
}else {
  $_SESSION['errMsg']="Invalid Username or Password";
  header('location:index.php');
  }

}
else {
  $_SESSION['errMsg']="Invalid Username or Password";
  //header('location:index.php');
  // echo "<script type='text/javascript'>alert('failed');</script>";
}
mysqli_close($conn);
?>
