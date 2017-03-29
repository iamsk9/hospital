<?php
include "connection.php";//db connection
//query to select the doctors for dropdown list
$query = mysqli_query($conn,"select docname from doctors");
echo '<select name="docnames">';
echo '<option value="">select</option>';
while ($row = mysqli_fetch_array($query)) {
   echo '<option value="'.$row['docname'].'">'.$row['docname'].'</option>';
}
echo '</select>';
mysqli_close($conn);
 ?>
