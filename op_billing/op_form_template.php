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
   (function() {

 var beforePrint = function() {
     console.log('Functionality to run before printing.');
 };

 var afterPrint = function() {
     console.log('Functionality to run after printing');
     window.location.href = "../op_billing/dashboard.php";
 };

 if (window.matchMedia) {
     var mediaQueryList = window.matchMedia('print');
     mediaQueryList.addListener(function(mql) {
         if (mql.matches) {
             beforePrint();
         } else {
             afterPrint();
         }
     });
 }

 window.onbeforeprint = beforePrint;
 window.onafterprint = afterPrint;

}());
  </script>
  <style>
   body{
        margin:160px 0 0px 0;/*
        height:100%;*/
   }
   #div1{
      margin-left: 40px;
   }
   table td{
        padding: 5px;
        font-size: 15px;

   }

   #bottomLeft{
        bottom:80px;
        right:40px;
        position:absolute;
        border: 2px solid black;
        width:200px;
   }


 @media print{
   #printbutton{
     display:none;
   }
 }
  </style>
</head>
<body>
  <div id="div1">
    <table ><tr><td>
  <label>OP No:</label></td><td colspan="3" id="showData">
    <?php echo $row['id'].'/'.date('Y');?></td><td>

  <label>Patient Name:</label></td><td colspan="3" id="showData">
    <?php echo $row['name']; ?></td><td>

  <label>Age:</label></td><td colspan="3" id="showData">
    <?php echo $row['age']; ?></td><td>

  <label>Phone Number:</label></td><td colspan="3" id="showData">
  <?php echo $row['Phoneno']; ?></td></tr><tr><td>
  <label>Gender:</label></td><td colspan="3" id="showData">
  <?php echo $row['gender']; ?></td><td >
  <label>Blood Group:</label></td><td colspan="3" id="showData">
  </td>
  <td>
  <label>Referred By:</label></td><td colspan="3" id="showData">
  <?php echo $row['Referred']; ?></td>
  <td>
  <label>Doctor Name:</label></td><td colspan="3" id="showData">
    <?php echo "Dr.".$row['docname']; ?>
  </td></tr></table>
<hr class="style1"/>
  <table align="center">
    <tr><th><label>Summary</label></th></tr>
  </table>
</div>
<div id="bottomLeft">
    <table>
    <tr>
      <td><label>Height:</label></td>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td><label>weight:</label></td>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td><label>Temperature:</label></td>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td><label>B.P:</label></td>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td><label>Patient Type:</label></td>
      <td colspan="3"><?php echo $row['ptype']; ?></td>
    </tr>
</table>
</div>
<input type="submit" id="printbutton" name="submit" onclick="window.print();" value="Print"/>
</body>
</html>
