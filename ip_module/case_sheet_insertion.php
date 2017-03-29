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
  $compliants=$_POST['compliant'];
  $history=$_POST['history'];
  $diabeties=$_POST['diabeties']; $diabeties1=($diabeties == 'yes')? $diabeties=$_POST['ddetails'] : 'no';
  $hyper=$_POST['hyper']; $hyper1=($hyper == 'yes')? $hyper1=$_POST['hdetails'] : 'no';
  $cad=$_POST['cad']; $cad1=($cad == 'yes')? $cad1=$_POST['caddetails'] : 'no';
  $asthma=$_POST['asthama']; $asthma1=($asthma == 'yes') ? $asthma1=$_POST['astdetails']: 'no';
  $tuber=$_POST['tuber']; $tuber1=($tuber == 'yes') ? $tuber1=$_POST['tuberdetails'] : 'no';
  $antibiotics=$_POST['anti']; $anti1=($antibiotics == 'yes')? $anti1=$_POST['antdetails'] : 'no';
  $hormones=$_POST['hormones']; $hor1=($hormones == 'yes')?$hor1=$_POST['hordetails']: 'no';
  $chemo=$_POST['chemo']; $chemo1=($chemo == 'yes')?$chemo1=$_POST['chedetails'] : 'no';
  $blood=$_POST['blood'];$blood1=($blood == 'yes')?$blood1=$_POST['blooddetails']: 'no';
  $surgeries=$_POST['surgeries'];$sur1=($surgeries == 'yes')?$sur1=$_POST['surdetails']: 'no';
  $other1=$_POST['others'];$other2=($other1 == 'yes') ? $other2=$_POST['othdetails']: 'no';
  //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
  $marital=$_POST['status'];
  $appetite=$_POST['Appetite'];
  $Bowels=$_POST['Bowels'];
  $Allergies=$_POST['Allergies']; $All1=($Allergies == 'yes')? $All1=$_POST['Alldetails']: 'no';
  $Alcohol=$_POST['Alcohol'];
  $Tobacco=$_POST['Tobacco'];
  $druguse=$_POST['Drug']; $drug1=($druguse == 'yes') ? $drug1=$_POST['Drugdetails'] : 'no';
  $betel=$_POST['Betal']; $betel1=($betel =='yes') ? $betel1=$_POST['betdetails']: 'no';
  $betelleaf=$_POST['Betel1']; $betelleaf1=($betelleaf == 'yes')? $betelleaf1=$_POST['betdetails1']: 'no';
  $occupation=$_POST['Occupation'];
  $veg=$_POST['veg'];
  $micturition=$_POST['Micturition'];
  $dia1=$_POST['dyes']; $dia2=($dia1 == 'yes')? $dia2=$_POST['diabeties1']: 'no';
  $hypertension=$_POST['hyes']; $hypertension1=($hypertension == 'yes')? $hypertension1=$_POST['hyper1']: 'no';
  $heart1=$_POST['heyes']; $heart2=($heart1 == 'yes')? $heart2=$_POST['hedetails']:'no';
  $stroke1=$_POST['syes']; $stroke2=($stroke1 == 'yes')?$stroke2=$_POST['strdetails'] : 'no';
  $cancer1=$_POST['cyes']; $cancer2=($cancer1 == 'yes')?$cancer2=$_POST['candetails'] : 'no';
  $tuberculosis=$_POST['ttyes']; $tuberculosis1=($tuberculosis == 'yes')?$tuberculosis1=$_POST['ttdetails'] : 'no';
  $asthma3=$_POST['asyes'];$asthma4=($asthma3 == 'yes')? $asthma4=$_POST['asdetails']: 'no';
  $hereditary=$_POST['hereditary'];
  $Psychiatrist=$_POST['psychiatrist'];
  $sibiling=$_POST['sibiling'];
  $other3=$_POST['other'];
  //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
//female post insertion
// $menstrual=$_POST['menarche'];
// $lmp=$_POST['lmp'];
// $gyn=$_POST['gyes']; $gyn1=($gyn == 'yes')? $gyn1=$_POST['gyndetails'] : 'no';
// $duration=$_POST['duration'];
// $bleeding=$_POST['days'];
// $marriage=$_POST['marriage_age'];
// $first_child=$_POST['first_child'];
// $gravida=$_POST['gravida'];
// $para1=$_POST['para'];
// $stillbirth=$_POST['still_birth'];
// $other5=$_POST['others3'];
// $familyplanning=$_POST['Family'];
// $abortions=$_POST['abortions'];
//--------------------------------------------------------------------------------------------------------
//child post insertion
// $birthhistory1=$_POST['Birth'];
// $birthasphyria=$_POST['Asphyria'];
// $developmenthistory=$_POST['Development'];
// $development=($developmenthistory == 'Development')? $development=$_POST['dev']: 'no';
// $immunization=$_POST['Immunization'];
//----------------------------------------------------------------------------------------------------
//common2
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
//-------------------------------------------------
  if($gender1 == 'male')
  {
  $query1=mysqli_query($conn,"insert into case_sheet_common1(ip_no,compliant,history,diabeties,hypertension,cad,asthma,tubercol,antibiotics,hormones,chemo,blood,surgeries,other1,martial,appetite,bowels,allergies,alcohol,tobacco,druguse,betel,betelleaf,occupation,veg,micturition,diabeties1,hyper1,heart,stroke,cancer,tuber1,asthma1,hereditary,psychiatrist,sibiling_history,other2) values ('$ip_no1','$compliants','$history','$diabeties1','$hyper1','$cad1','$asthma1','$tuber1','$anti1','$hor1','$chemo1','$blood1','$sur1','$other2','$marital','$appetite','$Bowels','$All1','$Alcohol','$Tobacco','$drug1','$betel1','$betelleaf1','$occupation','$veg','$micturition','$dia2','$hypertension1','$heart2','$stroke2','$cancer2','$tuberculosis1','$asthma4','$hereditary','$Psychiatrist','$sibiling','$other3')") or die(mysqli_error($query1));
  $query4=mysqli_query($conn,"insert into case_sheet_common2 values('','$ip_no1','$height1','$bmi','$pallor','$cyanosis','$lymp','$malnutrition','$weight','$bodysurface','$icterus','$cubbing','$oedema','$dehydration','$temp','$pulserate','$respiration','$bp','$spo','$grbs','$thrills1','$cardiac_murmurs','$dyspnoea','$wheeze','$trachea1','$breathsound','$adventitious_sound','$shape_of_abdomen','$tenderness1','$Palpable','$hernial1','$freefluid','$Bruits','$liver2','$spleen2','$bowels_sounds','$level_of_consciousness','$speech1','$neck_stiffness','$kerning_sign','$plantars','$nose_in_coordination','$heel_in_coordination','$gait','$musculo_skeketal','$skin','$examination_of_breast','$examination_of_ent','$examination_of_teeth','$examination_of_head','$provisional','$treating_doctor','$investigations','$procedure_therapies','$treatment_given','$condition_of_patient')") or die(mysqli_error());


  //$query1=mysqli_query($conn,"insert into case_sheet_common1(martial,appetite,bowels,allergies,alcohol,tobacco,druguse,betel,betelleaf,occupation,veg,micturition,diabeties1,hyper1,heart,stroke,cancer,tuber1,asthma1,hereditary,psychiatrist,sibiling_history,other2) values  ('$marital','$appetite','$Bowels','$All1','$Alcohol','$Tobacco','$drug1','$betel1','$betelleaf1','$occupation','$veg','$micturition','$dia2','$hypertension1','$heart2','$stroke2','$cancer2','$tuberculosis1','$asthma4','$hereditary','$Psychiatrist','$sibiling','$other3')") or die(mysqli_error());
  }
  else if($gender1 == 'Female') {
    $menstrual=$_POST['menarche'];
    $lmp=$_POST['lmp'];
    $gyn=$_POST['gyes']; $gyn1=($gyn == 'yes')? $gyn1=$_POST['gyndetails'] : 'no';
    $duration=$_POST['duration'];
    $bleeding=$_POST['days'];
    $marriage=$_POST['marriage_age'];
    $first_child=$_POST['first_child'];
    $gravida=$_POST['gravida'];
    $para1=$_POST['para'];
    $stillbirth=$_POST['still_birth'];
    $other5=$_POST['others3'];
    $familyplanning=$_POST['Family'];
    $abortions=$_POST['abortions'];
    $query1=mysqli_query($conn,"insert into case_sheet_common1(ip_no,compliant,history,diabeties,hypertension,cad,asthma,tubercol,antibiotics,hormones,chemo,blood,surgeries,other1,martial,appetite,bowels,allergies,alcohol,tobacco,druguse,betel,betelleaf,occupation,veg,micturition,diabeties1,hyper1,heart,stroke,cancer,tuber1,asthma1,hereditary,psychiatrist,sibiling_history,other2) values ('$ip_no1','$compliants','$history','$diabeties1','$hyper1','$cad1','$asthma1','$tuber1','$anti1','$hor1','$chemo1','$blood1','$sur1','$other2','$marital','$appetite','$Bowels','$All1','$Alcohol','$Tobacco','$drug1','$betel1','$betelleaf1','$occupation','$veg','$micturition','$dia2','$hypertension1','$heart2','$stroke2','$cancer2','$tuberculosis1','$asthma4','$hereditary','$Psychiatrist','$sibiling','$other3')") or die(mysqli_error($query1));
    $query2=mysqli_query($conn,"insert into case_sheet_female values('','$ip_no1','$menstrual','$lmp','$gyn1','$duration','$bleeding','$marriage','$first_child','$gravida','$para1','$stillbirth','$other5','$familyplanning','$abortions')") or die(mysqli_error());
    $query4=mysqli_query($conn,"insert into case_sheet_common2 values('','$ip_no1','$height1','$bmi','$pallor','$cyanosis','$lymp','$malnutrition','$weight','$bodysurface','$icterus','$cubbing','$oedema','$dehydration','$temp','$pulserate','$respiration','$bp','$spo','$grbs','$thrills1','$cardiac_murmurs','$dyspnoea','$wheeze','$trachea1','$breathsound','$adventitious_sound','$shape_of_abdomen','$tenderness1','$Palpable','$hernial1','$freefluid','$Bruits','$liver2','$spleen2','$bowels_sounds','$level_of_consciousness','$speech1','$neck_stiffness','$kerning_sign','$plantars','$nose_in_coordination','$heel_in_coordination','$gait','$musculo_skeketal','$skin','$examination_of_breast','$examination_of_ent','$examination_of_teeth','$examination_of_head','$provisional','$treating_doctor','$investigations','$procedure_therapies','$treatment_given','$condition_of_patient')") or die(mysqli_error());
  }
  else if ($gender1 == 'Female/child')
  {
    $menstrual=$_POST['menarche'];
    $lmp=$_POST['lmp'];
    $gyn=$_POST['gyes']; $gyn1=($gyn == 'yes')? $gyn1=$_POST['gyndetails'] : 'no';
    $duration=$_POST['duration'];
    $bleeding=$_POST['days'];
    // $marriage=$_POST['marriage_age'];
    // $first_child=$_POST['first_child'];
    // $gravida=$_POST['gravida'];
    // $para1=$_POST['para'];
    // $stillbirth=$_POST['still_birth'];
    // $other5=$_POST['others3'];
    // $familyplanning=$_POST['Family'];
    // $abortions=$_POST['abortions'];
    //---------------------------------------------------
    // $birthhistory1=$_POST['Birth'];
    // $birthasphyria=$_POST['Asphyria'];
    // $developmenthistory=$_POST['Development'];
    // $development=($developmenthistory == 'Development')? $development=$_POST['dev']: 'no';
    // $immunization=$_POST['Immunization'];
    //-------------------------------------------------------------------
    $query1=mysqli_query($conn,"insert into case_sheet_common1(ip_no,compliant,history,diabeties,hypertension,cad,asthma,tubercol,antibiotics,hormones,chemo,blood,surgeries,other1,martial,appetite,bowels,allergies,alcohol,tobacco,druguse,betel,betelleaf,occupation,veg,micturition,diabeties1,hyper1,heart,stroke,cancer,tuber1,asthma1,hereditary,psychiatrist,sibiling_history,other2) values ('$ip_no1','$compliants','$history','$diabeties1','$hyper1','$cad1','$asthma1','$tuber1','$anti1','$hor1','$chemo1','$blood1','$sur1','$other2','$marital','$appetite','$Bowels','$All1','$Alcohol','$Tobacco','$drug1','$betel1','$betelleaf1','$occupation','$veg','$micturition','$dia2','$hypertension1','$heart2','$stroke2','$cancer2','$tuberculosis1','$asthma4','$hereditary','$Psychiatrist','$sibiling','$other3')") or die(mysqli_error($query1));
    $query2=mysqli_query($conn,"insert into case_sheet_female values('','$ip_no1','$menstrual','$lmp','$gyn1','$duration','$bleeding','','','','','','','','')") or die(mysqli_error());
    //$query3=mysqli_query($conn,"insert into case_sheet_child values('','$ip_no1','$birthhistory1','$birthasphyria','$development','$immunization')") or die(mysqli_error());
    $query4=mysqli_query($conn,"insert into case_sheet_common2 values('','$ip_no1','$height1','$bmi','$pallor','$cyanosis','$lymp','$malnutrition','$weight','$bodysurface','$icterus','$cubbing','$oedema','$dehydration','$temp','$pulserate','$respiration','$bp','$spo','$grbs','$thrills1','$cardiac_murmurs','$dyspnoea','$wheeze','$trachea1','$breathsound','$adventitious_sound','$shape_of_abdomen','$tenderness1','$Palpable','$hernial1','$freefluid','$Bruits','$liver2','$spleen2','$bowels_sounds','$level_of_consciousness','$speech1','$neck_stiffness','$kerning_sign','$plantars','$nose_in_coordination','$heel_in_coordination','$gait','$musculo_skeketal','$skin','$examination_of_breast','$examination_of_ent','$examination_of_teeth','$examination_of_head','$provisional','$treating_doctor','$investigations','$procedure_therapies','$treatment_given','$condition_of_patient')") or die(mysqli_error());
  }
  else if($gender1 == 'child')
  {
    $birthhistory1=$_POST['Birth'];
    $birthasphyria=$_POST['Asphyria'];
    $developmenthistory=$_POST['Development'];
    $development=($developmenthistory == 'Development')? $development=$_POST['dev']: 'no';
    $immunization=$_POST['Immunization'];
    $query1=mysqli_query($conn,"insert into case_sheet_common1(ip_no,compliant,history,diabeties,hypertension,cad,asthma,tubercol,antibiotics,hormones,chemo,blood,surgeries,other1,martial,appetite,bowels,allergies,alcohol,tobacco,druguse,betel,betelleaf,occupation,veg,micturition,diabeties1,hyper1,heart,stroke,cancer,tuber1,asthma1,hereditary,psychiatrist,sibiling_history,other2) values ('$ip_no1','$compliants','$history','$diabeties1','$hyper1','$cad1','$asthma1','$tuber1','$anti1','$hor1','$chemo1','$blood1','$sur1','$other2','$marital','$appetite','$Bowels','$All1','$Alcohol','$Tobacco','$drug1','$betel1','$betelleaf1','$occupation','$veg','$micturition','$dia2','$hypertension1','$heart2','$stroke2','$cancer2','$tuberculosis1','$asthma4','$hereditary','$Psychiatrist','$sibiling','$other3')") or die(mysqli_error($query1));
    $query3=mysqli_query($conn,"insert into case_sheet_child values('','$ip_no1','$birthhistory1','$birthasphyria','$development','$immunization')") or die(mysqli_error());
    $query4=mysqli_query($conn,"insert into case_sheet_common2 values('','$ip_no1','$height1','$bmi','$pallor','$cyanosis','$lymp','$malnutrition','$weight','$bodysurface','$icterus','$cubbing','$oedema','$dehydration','$temp','$pulserate','$respiration','$bp','$spo','$grbs','$thrills1','$cardiac_murmurs','$dyspnoea','$wheeze','$trachea1','$breathsound','$adventitious_sound','$shape_of_abdomen','$tenderness1','$Palpable','$hernial1','$freefluid','$Bruits','$liver2','$spleen2','$bowels_sounds','$level_of_consciousness','$speech1','$neck_stiffness','$kerning_sign','$plantars','$nose_in_coordination','$heel_in_coordination','$gait','$musculo_skeketal','$skin','$examination_of_breast','$examination_of_ent','$examination_of_teeth','$examination_of_head','$provisional','$treating_doctor','$investigations','$procedure_therapies','$treatment_given','$condition_of_patient')") or die(mysqli_error());
  }
  else{
    echo "<script type='text/javascript'>alert('error in selection');</script>";
  }
  }
else {
 echo "<script type='text/javascript'>alert('submittion error');</script>";
}
