<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Database Migrations</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="main.css">
    </head>
    <body>

      <form action="index.php" method="post">

        <h1>Database Migrations</h1>

        <fieldset>
          <legend><span class="number">1</span>Server Details</legend>
          <label for="name">Server Name:</label>
          <input type="text" id="name" name="sname">

          <label for="name">User Name</label>
          <input type="text" id="name" name="user_name">

          <label for="password">Password:</label>
          <input type="text" id="password" name="user_password">

          <label for="name">Database Name:</label>
          <input type="text" id="name" name="db_name">

        </fieldset>
        <button type="submit" name="submit">Save</button>
      </form>

    </body>
</html>
<?php
if(isset($_POST['submit']))
{
  $servername=$_POST['sname'];
  $uname=$_POST['user_name'];
  $pass=$_POST['user_password'];
  $dbname=$_POST['db_name'];
$conn=mysqli_connect($servername,$uname,$pass) or die(mysqli_error());
$query=mysqli_query($conn,"Create database $dbname");
if($query)
{
  $conn1=mysqli_connect($servername,$uname,$pass,$dbname) or die(mysqli_error());
  ?>
  <div class="alert alert-success">
  <strong>Success!</strong> Database <?php echo $dbname;?> Created.
</div>
<div class="alert alert-warning">
<strong>But change the servername,username,password,dbname's in connection.php file</strong>
</div>
  <?php
  include "op_patient.php";
    include "op_bill.php";
    include "registration.php";
    include "doctors.php";
}
else{?>
  <div class="alert alert-warning">
  <strong>Warning!</strong> Database Creation "<?php echo $dbname;?>" failed.

</div>

<?php
}
}

 ?>
