<html>
<head>
  <title>Add Doctors</title>
</head>
<body>
  <form name="form2" method="post" action="doc.php">
    <table align="center">
      <tr>
        <td>Doctor Name</td>
        <td><input type="text" name="docname" value="" placeholder="Doctor Name"/></td>
      </tr>
      <tr>
        <td>specialization</td>
        <td><input type="text" name="specialization" value="" placeholder="specialization"/></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="add" name="submit"/></td>
      </tr>
    </table>
  </body>
  </html>
  <?php
include "../connection.php";
$query2=mysqli_query($conn,"select docname,specialization from doctors");
if($query2)
{
  echo "<table border='1' align='center'>";
  echo "<tr><th>Name of the Doctor</th><th>specialization</th></tr></br>";
  while($row=mysqli_fetch_array($query2))
  {
    echo '<tr><td>'.$row['docname'].'</td><td>'.$row['specialization'].'</td></tr></br>';
  }
  echo "</table>";
}
else {
  echo 'error in fetching the table';
}
   ?>
