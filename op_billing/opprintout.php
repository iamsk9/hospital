<?php
include "../connection.php";
date_default_timezone_set('Asia/Kolkata');
session_start();
// echo $_SESSION['phoneno'];
$p1=$_SESSION['phoneno1'];
var_dump($p1);
// echo $_SESSION['phoneno'];
date_default_timezone_set('Asia/Kolkata');
$date2=date('Y-m-d');
// var_dump($date2);
$query3=mysqli_query($conn,"select * from op_patient where Phoneno='$p1' AND date1='$date2'");
// var_dump($query3);
while($row=mysqli_fetch_array($query3))
{
?>
<html>
<head>
  <title>
    Invoice of the OP Patient
  </title>
  <script>
  function Myprint()
  {
    window.print();
  }
  </script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  #header{
    width:100%;
    height:10%;
  }
     #left{
       float:left;
       clear:left;
        }
     #right{
       float:right;
       clear:right;
     }
     #wrapper{
       text-align: center;
       clear:left;
 }
 #header2{
   padding:5px;
 }
 hr.style1{
   border-top: 3px double #8c8b8b;
 }
 hr.style2{
   border-top:1px solid #8c8b8b;
 }
 @media print{
   #printbutton{
     display:none;
   }
 }
 #maincontent{
   width:100%;
   height:65%;
 }
 #footer{
   width:100%;
   height:15%;
 }
  </style>
</head>
<body>
  <div id="header">
    <span id="left">Venkatarama Haospital<sub>live long & prosper</sub></span>
    <span id="right">#47-7-43, Nehru Market Road</br>Near Diamond Park, Dwarakanagar,</br>VISAKHAPATNAM-530016 </br> Tel: 2798631,6692104</span>
  </div></br><hr class="style1"/>
  <div id="header2">
  <label>Serial No:</label>
    <?php echo $row['id'].'/'.$row['date1'];?>
  <label>Patient Name:</label>
    <?php echo $row['name']; ?>
  <label>Age:</label>
    <?php echo $row['age']; ?>
  <label>Phone Number:</label>
  <?php echo $row['Phoneno']; ?>
  <label>Gender:</label>
  <?php echo $row['gender']; ?>
  <label>Blood Group:</label>
  <?php echo $row['blood']; ?>
  <label>Doctor Name:</label>
  <?php echo 'Dr.' .$row['docname']; ?>
<hr class="style1"/>
  <table align="center">
    <tr><th><label>Summary</label></th></tr>
    <!-- <tr><td><textarea name="summary" value=""></textarea></td></tr> -->
    <!-- <tr><td></td></tr> -->
  </table>
</div>
<div id="maincontent"></div><hr class="style2"/>
<div id="footer">
  <label>Height:</label>
  <?php echo $row['height']; ?>
  <label>Weight:</label>
  <?php echo $row['weight']; ?>
  <label>Temperature:</label>
  <?php echo $row['temp']; ?>
  <label>B.P:</label>
  <?php echo $row['bp']; ?>
  <label>PatientType:</label>
  <?php echo $row['ptype']; ?>
</div>
<div id="header">
  <span id="left">Venkatarama Haospital<sub>live long & prosper</sub></span>
  <span id="right">#47-7-43, Nehru Market Road</br>Near Diamond Park, Dwarakanagar,</br>VISAKHAPATNAM-530016 </br> Tel: 2798631,6692104</span>
  </div></br><hr class="style1"/>

  <div id="header2">
    <label>Serial No:</label>
      <?php echo $row['id'].'/'.$row['date1'];?>
    <label>Patient Name:</label>
      <?php echo $row['name']; ?>
    <label>Age:</label>
      <?php echo $row['age']; ?>
    <label>Phone Number:</label>
    <?php echo $row['Phoneno']; ?>
    <label>Gender:</label>
    <?php echo $row['gender']; ?>
    <label>Blood Group:</label>
    <?php echo $row['blood']; ?>
    <label>Doctor Name:</label>
    <?php echo 'Dr.' .$row['docname']; ?>
  </div><hr class="style2"/><h3 align="center">O.P Bill</h3>
  <div id="maincontent">
  <?php
  $ptype=$row['ptype'];
  // echo $ptype;
$query=mysqli_query($conn,"select * from op_bill where PatientType='$ptype'");
while($res=mysqli_fetch_array($query))
{
  echo "<label>PatientType:</label>";
  echo $res['PatientType'];
  echo "<label>Cost:</label>";
  echo $res['cost'];
}
   ?>
</div>

<input type="submit" id="printbutton" name="submit" onclick="window.print();" value="Print"/>
</body>
</html>

<?php
}

mysqli_close($conn);
 ?>
