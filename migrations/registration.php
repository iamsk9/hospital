<?php
$conn=mysqli_connect($servername,$uname,$pass,$dbname) or die(mysqli_error());
$query="CREATE TABLE `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Phonenumber` bigint(20) NOT NULL,
  `Emailid` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
)";
$res=mysqli_query($conn,$query);
if($res)
{?>
  <div class="alert alert-success">
  <strong>Success!</strong>Tables <?php echo 'registration'; ?> Created.
  </div>
<?php
}
else {?>
  <div class="alert alert-warning">
  <strong>Warning!</strong>Tables <?php echo 'registration'; ?> Failed.
</div>
<?php
}
mysqli_close($conn);
?>
