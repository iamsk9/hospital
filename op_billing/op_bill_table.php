<?php
include "../connection.php";
date_default_timezone_set('Asia/Kolkata');
echo "<table class='table table-hover'>";
echo "<tr><th><th>OP No</th>
<th>Time</th>
<th>Patient Name</th>
<th>Consultant</th>
<th>Phone</th>
<th>Status</th></tr>";
$date1=date('Y-m-d');
$query5=mysqli_query($conn,"select * from op_patient where date1='$date1'");
while($row=mysqli_fetch_assoc($query5))
{
  $res=$row['id'].'/'.date('Y');
  echo "<tr><td></td><td>{$res}</td>";
  echo "<td>{$row['time']}</td>";
  echo "<td>{$row['name']}</td>";
  echo "<td>{$row['docname']}</td>";
  echo "<td>{$row['Phoneno']}</td>";
  echo '<td>';
  if($row["bill_status"] == '0')
  {
    echo '<span class="label label-warning">Not Paid</span>';
  }
  else {
    echo '<span class="label label-success">Paid</span>';
  }
  echo '</td></tr>';
}
?>
