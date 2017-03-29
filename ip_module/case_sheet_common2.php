<?php
include "../connection.php";
include "php_files/functions.php";
date_default_timezone_set('Asia/Kolkata');
session_start();
$ip_no1=$_SESSION['ip_no'];
echo "<script type='text/javascript'>alert({$ip_no1});</script>";
$gender1= gender($conn,$ip_no1);
if(isset($_POST['submit1']))
{
  if($gender1 == 'male')
  {
    $height1=$_POST['height'];
    $bmi=$_POST['bmi'];
    $pallor=$_POST['Pallor'];
    $cyanosis=$_POST['Cyanosis'];
    $lymp=$_POST['pathy'];
    $malnutrition=$_POST['Malnutrition'];
    $weight=$_POST['weight'];
    $bodysurface=$_POST['bsa'];
    $icterus=$_POST['Icterus'];
    $cubbing=$_POST['fingers'];
    $oedema=$_POST['feet'];
    $dehydration=$_POST['Dehydration'].'--'.$_POST['yDehydration'];
    $temp=$_POST['temperature'].'C/F';
    $pulserate=$_POST['pulse'].'/min';
    $respiration=$_POST['respiration'].'/min';
    $bp=$_POST['ltarm'].'mm/Hg'.$_POST['rtarm'].'mm/Hg';
    $spo=$_POST['spo'].'% at'.$_POST['at'].'litres of O2';
    $grbs=$_POST['grbs'].'mg%';
    //--------------------------------------------
    $thrills1=$_POST['Thrills'];
    $cardiac_murmurs=$_POST['Murmurs'];
    $dyspnoea=$_POST['Dyspnoea'];
    $wheeze=$_POST['Wheeze'];
    $trachea1=$_POST['Trachea'];
    $breathsound=$_POST['Breath'];
    $adventitious_sound=$_POST['Adventitious'];
    $shape_of_abdomen=$_POST['abdomen'];
    $tenderness=$_POST['Tenderness'];
    $tenderness1=($tenderness == 'yes')? $tenderness1=$_POST['tedetails']: 'no';
    $palpablemass=$_POST['Palpable'];
    $Palpable=($palpablemass == 'yes')? $palpable=$_POST['padetails']: 'no';
    $hernial_orifices=$_POST['Orifices'];
    $hernial1=($hernial_orifices == 'yes')?$hernial1=$_POST['hernial_details']: 'no';
    $freefluid=$_POST['Fluid'];
    $Bruits=$_POST['Bruits'];
    $Liver=$_POST['Liver'];
    $liver2=($Liver == 'yes')?$Liver2=$_POST['lidetails']: 'no';
    $spleen=$_POST['Spleen'];
    $spleen2=($spleen == 'yes')?$spleen2=$_POST['spdetails']: 'no';
//------------------------------------------------------------------------------
  $bowels_sounds=$_POST['Bowelss'];
  $level_of_consciousness=$_POST['Consciousness'];
  $speech1=$_POST['Speech'];
  $neck_stiffness=$_POST['Neck'];
  $kerning_sign=$_POST['Kerning'];
  $plantars=$_POST['Plantars'];
  $nose_in_coordination=$_POST['Nose'];
  $heel_in_coordination=$_POST['Heel'];
  $gait=$_POST['Gait'];
  //-------------------------------------------------
  $musculo_skeketal=$_POST['MUSCULO'];
  $skin=$_POST['SKIN'];
  $examination_of_breast=$_POST['EBREAST'];
  $examination_of_ent=$_POST['ENT'];
  $examination_of_teeth=$_POST['TEETH'];
  $examination_of_head=$_POST['HEAD'];
  $provisional=$_POST['provisional'];
  $treating_doctor=$_POST['treating'];
  $investigations=$_POST['investigations'];
  $procedure_therapies=$_POST['proceduretherapies'];
  $treatment_given=$_POST['threatmentgiven'];
  $condition_of_patient=$_POST['condition1'];
  $query4=mysqli_query($conn,"insert into case_sheet_common2 values('','$ip_no1','$height1','$bmi','$pallor','$cyanosis','$lymp','$malnutrition','$weight','$bodysurface','$icterus','$cubbing','$oedema','$dehydration','$temp','$pulserate','$respiration','$bp','$spo','$grbs','$thrills1','$cardiac_murmurs','$dyspnoea','$wheeze','$trachea1','$breathsound','$adventitious_sound','$shape_of_abdomen','$tenderness1','$Palpable','$hernial1','$freefluid','$Bruits','$liver2','$spleen2','$bowels_sounds','$level_of_consciousness','$speech1','$neck_stiffness','$kerning_sign','$plantars','$nose_in_coordination','$heel_in_coordination','$gait','$musculo_skeketal','$skin','$examination_of_breast','$examination_of_ent','$examination_of_teeth','$examination_of_head','$provisional','$treating_doctor','$investigations','$procedure_therapies','$treatment_given','$condition_of_patient')") or die(mysqli_error());
  }
  else {
    echo 'not male';
  }
}
else {
  echo 'no submit';
}
?>
