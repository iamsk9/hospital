<?php
//include the db connection file
include "../connection.php";
date_default_timezone_set('Asia/Kolkata');
//op_bill sturucture
if(isset($_POST['submit']))
{
  //got the opnumber from op_bill.php
  $recno=$_POST['r1'];
  //selected the patient details with that particular opnumber to fetch it and display in the op bill
  $query=mysqli_query($conn,"select * from op_patient where id='$recno'");
  if(mysqli_num_rows($query) == 0){ echo "<script type='text/javascript'> alert('invalid Receipt Number');</script>"; }else{
  //setting the status of bill as 1 that indicates that the bill has been paid
  $query2=mysqli_query($conn,"UPDATE op_patient SET bill_status='1' WHERE bill_status='0' AND id='$recno'") or die(mysqli_error()) ;
  //fetching the details of the patient
  while($row=mysqli_fetch_array($query))
  {
    ?>
    <html>
    <head>
      <title>
        Out Patient Bill
      </title>
      <script>
      function Myprint()
      {
        window.print();
      }

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
       img{
          float: left;
          padding-bottom: 20px;
          padding-left: 20px;
       }
       #s1{
         padding:10%;
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
      <img src="logo.png" alt="Logo" width="80px" height="80px"/>Venkatarama Hospital
      <div class="heading" align="center">
        <h4>OP Bill Receipt</h4>
      </div>
      <div id="div1">
        <table ><tr><td>
      <label>OP No:</label></td><td   colspan="3">
        <?php echo $row['id'].'/'.date('Y');?></td><td>
          <label>Receipt Date:</label></td><td>
            <?php echo date('D-M-Y'); ?></td></tr>
            <tr><td>
              <label>Bill No:</label></td><td   colspan="3">
                <?php echo $row['id'].'/'.date('Y'); ?></td>
                <td><label>Bill Date:</label></td><td>
                  <?php echo date('D-M-Y'); ?></td></tr>
                  <tr><td><label>Patient Id:</label></td>
                    <td   colspan="3"><?php echo $row['id']; ?></td>
                    <td><label>Patient Name:</label></td><td ><?php echo $row['name']; ?></td></tr>
                    <tr><td><label>Age/Gender:</label></td><td><?php echo $row['age'].'/'.$row['gender']; ?></td>
                      <td><label>Mobile Number:</label></td><td><?php echo $row['Phoneno']; ?></td></tr>
                      <tr><td><label>Reference Type</label></td><td><?php echo $row['Referred']; ?></td></tr></table>
                      <hr>
                      <table>
                        <tr><th>Doctor/Service Name</th><th>Charge</th><th>Amount</th></tr>
                        <tr><td><?php echo 'Dr.'.$row['docname']; ?></td>
                          <?php $ptype=$row['ptype'];
                          $query=mysqli_query($conn,"select * from op_bill where PatientType='$ptype'");
    while($res=mysqli_fetch_array($query))
    {
      echo "<td>";
      echo $res['cost'];
      echo "</td>";
      echo "<td>";
      echo $res['cost'];
      echo "</td>";

    }
    //replicating the op bill form that indicates the bill for both  patient and for office use.
    ?>

    <div id="div1">

      <table><div id="s1"></div>  <img src="logo.png" alt="Logo" width="80px" height="80px"/>Venkatarama Hospital
        <div class="heading" align="center">
          <h4>OP Bill Receipt</h4>
        </div><tr><td>
    <label>OP No:</label></td><td   colspan="3">
      <?php echo $row['id'].'/'.date('Y');?></td><td>
        <label>Receipt Date:</label></td><td>
          <?php echo date('D-M-Y'); ?></td></tr>
          <tr><td>
            <label>Bill No:</label></td><td   colspan="3">
              <?php echo $row['id'].'/'.date('Y'); ?></td>
              <td><label>Bill Date:</label></td><td>
                <?php echo date('D-M-Y'); ?></td></tr>
                <tr><td><label>Patient Id:</label></td>
                  <td   colspan="3"><?php echo $row['id']; ?></td>
                  <td><label>Patient Name:</label></td><td ><?php echo $row['name']; ?></td></tr>
                  <tr><td><label>Age/Gender:</label></td><td ><?php echo $row['age'].'/'.$row['gender']; ?></td>
                    <td><label>Mobile Number:</label></td><td><?php echo $row['Phoneno']; ?></td></tr>
                    <tr><td><label>Reference Type</label></td><td><?php echo $row['Referred']; ?></td></tr></table>
                    <hr>
                    <table>
                      <tr><th>Doctor/Service Name</th><th>Charge</th><th>Amount</th></tr>
                      <tr><td><?php echo 'Dr.'.$row['docname']; ?></td>
                        <?php $ptype=$row['ptype'];
                        $query=mysqli_query($conn,"select * from op_bill where PatientType='$ptype'");
  while($res=mysqli_fetch_array($query))
  {
    echo "<td>";
    echo $res['cost'];
    echo "</td>";
    echo "<td>";
    echo $res['cost'];
    echo "</td>";

  }
  }
}
}

       ?>

     </tr>
     </table>

     <table><tr><td><input type="submit" id="printbutton" name="print" value="print" onclick="Myprint()"/></td></tr></table>
   </body>
   </html>
