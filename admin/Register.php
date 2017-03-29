<?php
include_once("../connection.php");
?>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <script type="text/javascript">
  function validateForm() {
      var x = document.forms["form4"]["email"].value;
      var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");
      if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
          alert("Not a valid e-mail address");
          return false;
      }
      var pass1= document.forms["form4"]["passwd"].value;
      var pass2=document.forms["form4"]["repasswd"].value;
      if(pass1 != pass2)
      {
        alert("password and re-enter password did not match");
        return false;
      }
      pattern = /^[7-9][0-9]{9}$/;
      var name=document.forms["form4"]["phoneno"].value;
      console.log(name);
  if (!pattern.test(name)) {
   document.getElementById("par").innerHTML="Invalid Details";
   alert("Invalid Phone no");
   return false;
  }
}

  </script>
</head>
<body>
  <div class="header">
    <h1>Hospital Management System</h1>
  </div>
<hr><a href="index.php">Back</a>
<form name="form4" method="post" onsubmit="return validateForm()" action="Register.php">
  <table align="center">
    <tr>
      <td><label>First Name:</label></td>
      <td><input type="text" id="fname" name="fname" value="" placeholder="First Name" required/></td>
    </tr>
    <tr>
      <td><label>Last Name:</label></td>
      <td><input type="text" name="lname" id="lname" value="" placeholder="Last Name" required/></td>
    </tr>
    <tr>
      <td><label>Phone number:</label></td>
      <td><input type="number" id="par" name="phoneno" value="" placeholder="phone number" required/></td>
    </tr>
    <tr>
      <td><label>Email Id:</label></td>
      <td><input type="text" name="email" value="" placeholder="Email Id" required/></td>
    </tr>
    <tr>
      <td><label>Password</label></td>
      <td><input type="password" name="passwd" id="passwd" value="" placeholder="password" required/></td>
    </tr>
    <tr>
      <td><label>Re-password</label></td>
      <td><input type="password" name="repasswd" value=""  id="repasswd" placeholder="Re-Password" required/></td>
    </tr>
    <tr>
      <td><label>role</label>
        <td><select name="role"><option>select</option><option value="admin">admin</option><option value="client">client</option></select></td></tr>
    <tr>
      <td><input type="submit" name="submit"  value="signup"/></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  $fname1=$_POST['fname'];$lname1=$_POST['lname'];$ph1=$_POST['phoneno'];$email1=$_POST['email'];$pass1=$_POST['passwd'];$role1=$_POST['role'];
  // $pass2=hash('md5',$pass1);
  $query=mysqli_query($conn,"insert into registration values('','$fname1','$lname1','$ph1','$email1','$pass1','$role1')");
  if($query)
  {
    echo "<script type='text/javascript'>alert('registration sucessful');</script>";
    //header('location:index.php');
  }
  else {
    echo "<script type='text/javascript'>alert('registration failed');</script>";
  }
}



 ?>
