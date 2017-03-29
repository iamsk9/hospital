<?php
$conn=mysqli_connect($servername,$uname,$pass,$dbname) or die(mysqli_error());
$query="CREATE TABLE `op_bill` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`PatientType` varchar(20) NOT NULL,
`cost` int(11) NOT NULL,
PRIMARY KEY (`id`))";
$res=mysqli_query($conn,$query);
if($res)
{?>
  <div class="alert alert-success">
  <strong>Success!</strong>Tables <?php echo 'op_bill'; ?> Created.
  </div>
<?php
}
else {?>
  <div class="alert alert-warning">
  <strong>warning!</strong>Tables <?php echo 'op_bill'; ?> Failed.
  </div>
<?php
}
mysqli_close($conn);
?>
