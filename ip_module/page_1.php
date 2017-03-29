<?php
include "../connection.php";
include "php_files/functions.php";
date_default_timezone_set('Asia/Kolkata');
session_start();
$ip_no1=$_SESSION['ip_no'];
echo "<script type='text/javascript'>alert({$ip_no1});</script>";
$gender1= gender($conn,$ip_no1); echo $gender1;
if(isset($_POST['submit1']))
{

  //$ip_no=&$ip_no;
  //page1
  $comp=$_POST['compliant'];$his=$_POST['history'];var_dump($comp);var_dump($his);
  $dia=$_POST['diabeties'];$hyp=$_POST['hyper'];
  $cad=$_POST['cad'];$ast=$_POST['asthama'];
  $tuber=$_POST['tuber'];$anti=$_POST['anti'];
  $hor=$_POST['hormones'];$chemo=$_POST['chemo'];
  $blood=$_POST['blood'];$sur=$_POST['surgeries'];
  $oth=$_POST['others'];$timestamp=date('Y-m-d G:i:s');
//page_1 radio button's textboxes
  $dia1=($dia == 'yes') ? $dia1=$_POST['ddetails'] : 'no';var_dump($dia1);
  $hyper=($hyp == 'yes') ? $hyper=$_POST['hdetails'] : 'no';
  $cad1=($cad == 'yes') ? $cad1=$_POST['caddetails'] : 'no';
  $asth=($ast == 'yes') ? $asth=$_POST['astdetails'] : 'no';
  $tuber1=($tuber == 'yes') ? $tuber1=$_POST['tuberdetails'] : 'no';
  $anti1=($anti == 'yes') ? $anti1=$_POST['antdetails'] : 'no';
  $hor1=($hor == 'yes') ? $hor1=$_POST['hordetails'] : 'no';
  $chemo1=($chemo == 'yes') ? $chemo1=$_POST['chedetails'] : 'no';
  $blood1=($blood == 'yes') ? $blood1=$_POST['blooddetails'] : 'no';
  $sur1=($sur == 'yes') ? $sur1=$_POST['surdetails'] : 'no';
  $oth1=($oth == 'yes') ? $oth1=$_POST['othdetails'] : 'no';
//------------------------------------------------------------------------------------------
//page2.php

 $martial=$_POST['status'];$appetite=$_POST['Appetite'];$bowels=$_POST['Bowels'];
 $Allergies=$_POST['Allergies'];$Alcohol=$_POST['Alcohol'];$tobacco=$_POST['Tobacco'];
 $Druguse=$_POST['Drug'];$Betel=$_POST['Betal']; $Betelleaf=$_POST['Betel1'];
 $occ=$_POST['Occupation'];$veg1=$_POST['veg'];$mictu=$_POST['Micturition'];
 $diabeties=$_POST['dyes'];$Hyper=$_POST['hyes'];$Heart=$_POST['heyes'];
 $Stroke=$_POST['syes'];$Cancer=$_POST['cyes'];$Tuber1=$_POST['ttyes'];
 $Asthma=$_POST['asyes'];$Hered=$_POST['hereditary'];$Psychiat=$_POST['psychiatrist'];
 $Sibiling=$_POST['sibiling'];$Other=$_POST['other'];
 var_dump($martial);var_dump($appetite);var_dump($bowels);
 //Page2.php radio buttons textboxes
 $Allergies1=($Allergies == 'kyes') ? $Allergies1=$_POST['Alldetails'] : 'no';var_dump($Allergies1);
 $Druguse1=($Druguse == 'dyes') ? $Durguse1=$_POST['Drugdetails'] : 'no';
 $Betal1=($Betel == 'byes') ? $Betal1=$_POST['betdetails'] : 'no';
 $Betal2=($Betelleaf == 'blyes') ? $Betal2=$_POST['betdetails1'] : 'no';
 $Diabeties=($diabeties == 'yes') ? $Diabeties=$_POST['diabeties1'] : 'no';
 $Hyper1=($Hyper == 'yes') ? $Hyper1=$_POST['hyper1'] : 'no';
 $Heart1=($Heart == 'yes') ? $Heart1=$_POST['hedetails'] : 'no';
 $Stroke1=($Stroke == 'yes') ? $Stroke1=$_POST['strdetails'] : 'no';
 $Cancer1=($Cancer == 'yes') ? $Cancer1=$_POST['candetails'] : 'no';
 $Tuber2=($Tuber1 == 'yes') ? $Tuber2=$_POST['ttdetails'] : 'no';
 $Asthma1=($Asthma == 'yes') ? $Asthma1=$_POST['asdetails'] : 'no';

//--------------------------------------------------------------------------------
//page3.php --(ladies/child)
// $Menarche=$_POST['menarche']; $lmp=$_POST['lmp']; $Gyneac=$_POST['gyes'];
// $Cycle=$_POST['duration'];$Bleeding=$_POST['days'];
//page3.php radio buttons checkboxes
// $Gyneac1=($Gyneac == 'yes') ? $Gyneac1=$_POST['gyndetails'] : 'no';

//---------------------------------------------------------------------------------
//page4.php (female)
// $Marriage=$_POST['marraige_age']; $firstchild=$_POST['first_child']; $gravida=$_POST['gravida'];
// $para=$_POST['para']; $still=$_POST['still_birth'];$other3=$_POST['others3']; $planning=$_POST['Family'];
// $abortions=$_POST['abortions'];

//-------------------------------------------------------------------------------------------
//page5.php (only children)
// $birthhistory=$_POST['Birth']; $birth_asphyria=$_POST['Asphyria']; $nor_ab=$_POST['Development'].$_POST['dev'];
// $immunization=$_POST['Immunization'];
//---------------------------------------------------------------------------------------------
//page6.php (common for all)
$height=$_POST['height']; $weight=$_POST['weight'].'kg'; $bmi=$_POST['bmi']; $bodysa=$_POST['bsa'].'m2';
$pallor=$_POST['Pallor']; $Icterus=$_POST['Icterus']; $cyanosis=$_POST['Cyanosis']; $clubbing=$_POST['fingers'];
$Lymp=$_POST['pathy']; $oedema=$_POST['feet']; $malnutrition=$_POST['Malnutrition'];
$dehydration=$_POST['Dehydration'].$_POST['yDehydration']; $temp=$_POST['temperature'].'c/f';
$pulse=$_POST['pulse'].'/min'; $Respiration=$_POST['respiration'].'/min';
$ltarm=$_POST['ltarm'].'/min'; $rtarm=$_POST['rtarm'].'mm/Hg';
$spo=$_POST['spo'].'% at'.$_POST['at'].'litres of O2'; $grbs=$_POST['grbs'].'mg%';var_dump($spo);
//-----------------------------------------------------------------------------------------------
//page7.php
$thrills=$_POST['Thrills'];$cardiac=$_POST['Murmurs'];$Dyspnoea=$_POST['Dyspnoea'];
$wheeze=$_POST['Wheeze'];$Postion=$_POST['Trachea'];$breathsound=$_POST['Breath'];
$adventitious=$_POST['Adventitious'];$abdomen=$_POST['abdomen'];$tenderness=$_POST['Tenderness'];
$palpable1=$_POST['Palpable'];$hernical=$_POST['Orifices'];$freefluid=$_POST['Fluid'];
$bruits=$_POST['Bruits'];$Liver=$_POST['Liver'];$Spleen=$_POST['Spleen'];
$tenderness1=($tenderness == 'yes') ? $tenderness1=$_POST['tedetails'] : 'no';
$palpable2=($palpable1 == 'yes') ? $palpable2=$_POST['padetails'] : 'no';
$hernical1=($hernical == 'yes') ? $hernical1=$_POST['herdetails'] : 'no';
$Liver2=($Liver == 'yes') ? $Liver1=$_POST['lidetails'] : 'no';
$Spleen1=($Spleen == 'yes') ? $Spleen1=$_POST['spdetails'] : 'no';
//---------------------------------------------------------------------------------------------
//page8.php
$bowelsounds=$_POST['Bowelss'];$consciousness=$_POST['Consciousness'];
$speech=$_POST['Speech'];$neckstiffness=$_POST['Neck'];$Kerning=$_POST['Kerning'];
$plantars=$_POST['Plantars'];$noseco=$_POST['Nose'];$Heelco=$_POST['Heel'];
$gait=$_POST['Gait'];
//--------------------------------------------------------------------------------------------
//page9.php
$Musculo=$_POST['MUSCULO']; $skin=$_POST['SKIN'];$examination=$_POST['EBREAST'];
$exament=$_POST['ENT']; $examteeth=$_POST['TEETH']; $examhead=$_POST['HEAD'];
$provisionaldiagnosis=$_POST['provisional'];$treatingdoc=$_POST['treating'];
$investigations=$_POST['investigations'];$proceduretherapies=$_POST['proceduretherapies'];
$treatmentgiven=$_POST['threatmentgiven']; $conditionof=$_POST['condition1'];
var_dump($blood1);
if($gender1 == 'male')
{
  $query2=mysqli_query($conn,"insert into ip_module_report (ipno,compliant,history,diabeties,hypertension,cad,asthma,tuberculosis,anitibiotic,hormones,chemo,blood,surgeries,other1,martial,appetite1,bowels,allergies,alcohol,tobacco,druguse,betel,betelleaf,occupation,veg,micturition,diabeties1,hyper1,heart,stroke,cancer,tuber1,\
  asthma1,hereditary,psychiatrist,sibiling_history,other2,  height1,weight1,bmi,bodysa,pallor,icterus,cyanosis1,clubbing,lymp,oedema,malnutrition1,dehydreation1,temperature,pulserate,respiration,ltarm,rtarm,spo,grbs,thrills,cardic_murmurs,dysphoea,wheeza,position_trachea,breath_sounds,adventitions,adbomen,tenderness,palpable,hernical1,freefluid,spleen1,\
  bowelsounds,consciousness1,speech1,neckstiffness,kerning,plantars,nosein,heelco,gait,musculo1,skin,examination,exament,examteeth,examhead,provisionaldia,treatingdoc,investigations,proceduretherapies,treatmentgiven,condditionof)values($ip_no1','$comp','$his',\
  '$dia1','$hyper','$cad1','$asth','$tuber1','$anti1','$hor1','$chemo1','$blood1','$sur1','$oth1','$martial','$appetite','$bowels','$Allergies1','$Alcohol','$tobacco','$Druguse1',\
  '$Betal1','$Betal2','$occ','$veg1','$mictu','$Diabeties','$Hyper1','$Heart1','$Stroke1',\
  '$Cancer1','$Tuber2','$Asthma1','$Hered','$Psychiat','$Sibiling','$Other',  '$height','$weight','$bmi','$bodysa','$pallor','$Icterus','$cyanosis','$clubbing','$Lymp','$oedema',\
  '$malnutrition','$dehydration','$temp','$pulse','$Respiration','$ltarm','$rtarm','$spo',\
  '$grbs','$thrills','$cardiac','$Dyspnoea','$wheeze','$Postion','$breathsound','$adventitious','$abdomen','$tenderness1','$palpable2',\
  '$hernical1','$freefluid','$bruits','$Liver2','$Spleen1','$bowelsounds','$consciousness','$speech','$neckstiffness','$Kerning','$plantars','$noseco','$Heelco','$gait','$Musculo','$skin','$examination','$exament','$examteeth','$examhead','$provisionaldiagnosis',\
  '$treatingdoc','$investigations','$proceduretherapies','$treatmentgiven','$conditionof')");

  if($query2)
  {
    echo 'sucess';
  }
  else {
    echo 'error';
  }
}
else {
  echo 'not male';
}

//$query=mysqli_query($conn,"insert into ip_module_report values ('','$ip_no1','$comp','$his','$dia1','$hyper','$cad1','$asth','$tuber1','$anti1','$hor1','$chemo1','$blood1','$sur1','$oth1','$martial','$appetite','$bowels','$Allergies1','$Alcohol','$tobacco','$Druguse1','$Betal1','$Betal2','$occ','$veg1','$mictu','$Diabeties','$Hyper1','$Heart1','$Stroke1','$Cancer1','$Tuber1','$Asthma1','$Hered','$Psychiat','$Sibiling','$Other','$Menarche','$lmp','$Gyneac1','$Cycle','$Bleeding','$Marriage','$firstchild','$gravida','$para','$still','$other3','$planning','$abortions','$birthhistory','$birth_asphyria','$nor_ab','$immunization','$height','$weight','$bmi','$bodysa','$pallor','$Icterus','$cyanosis','$clubbing','$Lymp','$oedema','$malnutrition','$dehydration','$temp','$pulse','$Respiration','$ltarm','$rtarm','$spo','$grbs','$thrills','$cardiac','$Dyspnoea','$wheeze','$Postion','$breathsound','$adventitious','$abdomen','$tenderness1','$palpable2','$hernical1','$freefluid','$bruits','$Liver2','$Spleen1','$bowelsounds','$consciousness','$speech','$neckstiffness','$Kerning','$plantars','$noseco','$Heelco','$gait','$Musculo','$skin','$examination','$exament','$examteeth','$examhead','$provisionaldiagnosis','$treatingdoc','$investigations','$proceduretherapies','$treatmentgiven','$conditionof')") or die(mysqli_error());

}
else {
  echo 'error in submittion';
}




 ?>
