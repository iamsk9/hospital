<?php
include "connection.php";//db connection
if(isset($_POST['submit']))
{
  //submitting the doctors details by the admin
  $docname=$_POST['docname'];
  $spec=$_POST['specialization'];
  //insertion query to insert the doctors information such as doctors name and specialization
  $query=mysqli_query($conn,"insert into doctors values ('','$docname','$spec')");
  if($query)
  {
    //success information when the query execute successfully
    echo "<script type=text/javascript>alert('sucess');</script>";
    //when sucess it is diverted to the adddoc.php
    header('location:adddoc.php');
  }
  else{
    //when query fails
    echo "<script type=text/javascript>alert('error in adding the data');</script>";
  }
}
//db connection close
mysqli_close($conn);
?>
