
<?php
include "../connection.php";
if(isset($_POST['submit']))
{
  $date1=$_POST['todate1'];
  $date2=$_POST['fromdate1'];
  //$docname1=$_POST['docname'];
  $report1=$_POST['reporttype'];

  switch($report1)
  {
    case 1:
      $query=mysqli_query($conn,"select * from op_patient where date1 BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
      $count1=0; $i=0;
      while($row=mysqli_fetch_array($query))
      {
        $count1++; $i++;
        $id1=$row['id'].'/'.date('Y');
        echo "<tbody><tr><td>{$i}</td><td>{$id1}</td><td>{$row['name']}</td><td>{$row['docname']}<td>{$row['date1']}</td></tr></tbody>";
        //echo "<tr><td>$row['id'].'/'.$date('Y')</td><td>$row['name']</td><td>$row['docname']</td></tr>";
      }
      echo "<tr><td></td><td></td><td></td><td><strong>Total</strong></td><td><strong>{$count1}</strong></td></tr><tr><td><input type='submit' value='print' name='print' onclick='Myprint()'/></table>";

      break;
      case 2:
        $query=mysqli_query($conn,"select * from op_patient where date1 BETWEEN '$date1' AND '$date2' AND bill_status='1'") or die(mysqli_error());
        $count1=0;$i=0;
        while($row=mysqli_fetch_array($query))
        {
          $id1=$row['id'].'/'.date('Y');$i++;
          echo "<tbody><tr><td>{$i}</td><td>{$id1}</td><td>{$row['name']}</td><td>{$row['docname']}</td><td>{$row['date1']}</td></tr></tbody>";
          if($row['ptype'] == 'Regular')
          {
            $q1=mysqli_query($conn,"select * from op_bill where PatientType='Regular'") or die(mysqli_error());
            while($row=mysqli_fetch_array($q1))
            {

              $count1=$count1+$row['cost'];
            }

          }
          else if($row['ptype'] == 'outsidedoctor')
          {
            $q2=mysqli_query($conn,"select * from op_bill where PatientType='outsidedoctor'") or die(mysqli_error());
            while($row=mysqli_fetch_array($q2))
            {

              $count1=$count1+$row['cost'];
            }

          }
          else if($row['ptype'] == 'inhousedoctor')
          {
            $q3=mysqli_query($conn,"select * from op_bill where PatientType='inhousedoctor'") or die(mysqli_error());
            while($row=mysqli_fetch_array($q3))
            {

              $count1=$count1+$row['cost'];
            }

          }
          else if($row['ptype'] == 'Repeated patient')
          {
            $q4=mysqli_query($conn,"select * from op_bill where PatientType= 'Repeated Patient'") or die(mysqli_error());
            while($row=mysqli_fetch_rows($q4))
            {

              $count1=$count1+$row['cost'];
            }

          }
          else {
            echo 'error 2'; echo '</br>';
          }
        }
        //echo $count1;
        echo "<tr><td></td><td></td><td></td><td><strong>Total</strong></td><td><strong>{$count1}</strong></td></tr><tr><td><input type='submit' value='print' name='print' onclick='Myprint()'/></table>";
        break;
        case 3:
        $query=mysqli_query($conn,"select * from op_patient where date1 BETWEEN '$date1' AND '$date2' AND bill_status='0'") or die(mysqli_error());
        $count1=0;$i=0;
        while($row=mysqli_fetch_array($query))
        {
          $id1=$row['id'].'/'.date('Y');$i++;
          echo "<tbody><tr><td>{$i}</td><td>{$id1}</td><td>{$row['name']}</td><td>{$row['docname']}</td><td>{$row['date1']}</td></tr></tbody>";
          if($row['ptype'] == 'Regular')
          {
            $q1=mysqli_query($conn,"select * from op_bill where PatientType='Regular'") or die(mysqli_error());
            while($row=mysqli_fetch_array($q1))
            {
              $count1=$count1+$row['cost'];
            }
          }
          else if($row['ptype'] == 'outsidedoctor')
          {
            $q2=mysqli_query($conn,"select * from op_bill where PatientType='outsidedoctor'") or die(mysqli_error());
            while($row=mysqli_fetch_rows($q2))
            {
              $count1=$count1+$row['cost'];
            }
          }
          else if($row['ptype'] == 'inhousedoctor')
          {
            $q3=mysqli_query($conn,"select * from op_bill where PatientType='inhousedoctor'") or die(mysqli_error());
            while($row=mysqli_fetch_array($q3))
            {
              $count1=$count1+$row['cost'];
            }
          }
          else if($row['ptype'] == 'Repeated patient')
          {
            $q4=mysqli_query($conn,"select * from op_bill where PatientType= 'Repeated Patient'") or die(mysqli_error());
            while($row=mysqli_fetch_array($q4))
            {
              $count1=$count1+$row['count'];
            }
          }
          // else {
          //   echo 'error 3'; echo '</br>';
          // }
        }
        //echo $count1;
        echo "<tr><td></td><td></td><td></td><td><strong>Total</strong></td><td><strong>{$count1}</strong></td></tr><tr><td><input type='submit' value='print' name='print' onclick='Myprint()'/></table>";
        break;
        case 4:
        $query=mysqli_query($conn,"select * from op_patient where  date1 BETWEEN '$date1' AND '$date2' ") or die(mysqli_error());
        $count1=0;$i=0;
        while($row=mysqli_fetch_array($query))
        {
          $id1=$row['id'].'/'.date('Y');$i++;
          echo "<tbody><tr><td>{$i}</td><td>{$id1}</td><td>{$row['name']}</td><td>{$row['docname']}</td><td>{$row['date1']}</td></tr></tbody>";
          if($row['ptype'] == 'Regular')
          {
            $q1=mysqli_query($conn,"select * from op_bill where PatientType='Regular'") or die(mysqli_error());
            while($row=mysqli_fetch_array($q1))
            {
              $count1=$count1+$row['cost'];
            }
          }
          else if($row['ptype'] == 'outsidedoctor')
          {
            $q2=mysqli_query($conn,"select * from op_bill where PatientType='outsidedoctor'") or die(mysqli_error());
            while($row=mysqli_fetch_array($q2))
            {
              $count1=$count1+$row['cost'];
            }
          }
          else if($row['ptype'] == 'inhousedoctor')
          {
            $q3=mysqli_query($conn,"select * from op_bill where PatientType='inhousedoctor'") or die(mysqli_error());
            while($row=mysqli_fetch_array($q3))
            {
              $count1=$count1+$row['cost'];
            }
          }
          else if($row['ptype'] == 'Repeated patient')
          {
            $q4=mysqli_query($conn,"select * from op_bill where PatientType= 'Repeated Patient'") or die(mysqli_error());
            while($row=mysqli_fetch_array($q4))
            {
              $count1=$count1+$row['count'];
            }
          }
          // else {
          //   echo 'error4'; echo '</br>';
          // }
        }
        //echo $count1;
          echo "<tr><td></td><td></td><td></td><td><strong>Total</strong></td><td><strong>{$count1}</strong></td></tr><tr><td><input type='submit' value='print' id='printbutton' name='print' onclick='Myprint()'/></table>";
        break;
        default:
        echo 'wrong choice';
        break;
  }
}
else{
//  echo 'error in submitting';
}
?>
