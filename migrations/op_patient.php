<?php
$conn=mysqli_connect($servername,$uname,$pass,$dbname) or die(mysqli_error());
$query="CREATE TABLE `op_patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `Phoneno` bigint(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `ptype` varchar(20) NOT NULL,
  `date1` date NOT NULL,
  `Referred` varchar(20) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `time` time NOT NULL,
  `bill_status` int(2) NOT NULL,
  `docname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
)";
$res=mysqli_query($conn,$query);
if($res)
{?>
  <div class="alert alert-success">
  <strong>Success!</strong>Tables <?php echo 'op_patient'; ?> Created.
  </div>
<?php
}
else {?>
  <div class="alert alert-warning">
  <strong>Warning!</strong>Tables <?php echo 'op_patient'; ?> Failed.
  </div>
<?php
}
mysqli_close($conn);
?>
