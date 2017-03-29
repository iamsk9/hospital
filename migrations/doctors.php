<?php
$conn=mysqli_connect($servername,$uname,$pass,$dbname) or die(mysqli_error());
$query="CREATE TABLE `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `docname` varchar(20) NOT NULL,
  `specialization` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
)";
$res=mysqli_query($conn,$query);
if($res)
{?>
  <div class="alert alert-success">
  <strong>Success!</strong>Tables <?php echo 'doctors'; ?> Created.
</div>
<?php
}
else {?>
  <div class="alert alert-warning">
  <strong>Warning!</strong>Tables <?php echo 'doctors'; ?> Failed.
</div>
<?php
}
mysqli_close($conn);
?>
