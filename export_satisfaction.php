<?php  
ob_start();

require_once("../lib/classes/config.inc.php");
$host	            =	DB_SERVER;
$database_name 		=	DB_DATABASE;
$databa_username	=	DB_USER;
$database_password 	=	DB_PASS; 

$db = mysql_connect($host,$databa_username,$database_password); 
mysql_select_db($database_name,$db); 

mysql_query('SET NAMES utf8');
mysql_query('SET CHARACTER_SET utf8');



$fields = mysql_query("SELECT * FROM tmp_inscription_forms_data WHERE id_form = 9001");

function __unserialize($sObject) {
	$sObject= utf8_decode($sObject);
    $__ret =preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $sObject );
    return unserialize($__ret);
}

$data = array();
$ligne = 0 ; 
while($row = mysql_fetch_assoc($fields)){
    $ligne++;
	if(!empty($row['datas'])){
 
		$row['datas'] = __unserialize($row['datas']);
		$data[] = $row['datas'];
	}

}



 

for($i=0;$i<sizeof($data);$i++){
  $rr['suga1'][] = $data[$i]['suga1'];
  $rr['suga2'][] = $data[$i]['suga2'];
  $rr['suga3'][] = $data[$i]['suga3'];
  $rr['suga4'][] = $data[$i]['suga4'];
  $rr['suga5'][] = $data[$i]['suga5'];
  $rr['suga6'][] = $data[$i]['suga6'];
  $rr['suga7'][] = $data[$i]['suga7'];
  $rr['suga8'][] = $data[$i]['suga8'];

  /**/

  $rr['sugb1'][] = $data[$i]['sugb1'];
  $rr['sugb2'][] = $data[$i]['sugb2'];
  $rr['sugb3'][] = $data[$i]['sugb3'];
  $rr['sugb4'][] = $data[$i]['sugb4'];
  $rr['sugb5'][] = $data[$i]['sugb5'];
  $rr['sugb6'][] = $data[$i]['sugb6'];
  $rr['sugb7'][] = $data[$i]['sugb7'];
  $rr['sugb8'][] = $data[$i]['sugb8'];
  $rr['sugb9'][] = $data[$i]['sugb9'];

  $rr['sugd1'][] = $data[$i]['sugd1'];
  $rr['sugd2'][] = $data[$i]['sugd2'];
  $rr['sugd3'][] = $data[$i]['sugd3'];
  $rr['sugd4'][] = $data[$i]['sugd4'];
  $rr['sugd5'][] = $data[$i]['sugd5'];   
}


  $suga1 = moyen($rr['suga1']);
  $suga2 = moyen($rr['suga2']);
  $suga3 = moyen($rr['suga3']);
  $suga4 = moyen($rr['suga4']);
  $suga5 = moyen($rr['suga5']);
  $suga6 = moyen($rr['suga6']);
  $suga7 = moyen($rr['suga7']);
  $suga8 = moyen($rr['suga8']);

  $sugb1 = moyen($rr['sugb1']);
  $sugb2 = moyen($rr['sugb2']);
  $sugb3 = moyen($rr['sugb3']);
  $sugb4 = moyen($rr['sugb4']);
  $sugb5 = moyen($rr['sugb5']);
  $sugb6 = moyen($rr['sugb6']);
  $sugb7 = moyen($rr['sugb7']);
  $sugb8 = moyen($rr['sugb8']);
  $sugb9 = moyen($rr['sugb9']);

  $sugd1 = moyen($rr['sugd1']);
  $sugd2 = moyen($rr['sugd2']);
  $sugd3 = moyen($rr['sugd3']);
  $sugd4 = moyen($rr['sugd4']);
  $sugd5 = moyen($rr['sugd5']);

function moyen($data){

	$a = 0;
	$b = 0;
	$c = 0;
	$d = 0;
	$i = 0;
	$oui = 0;
	$nom = 0;

	foreach ($data as $key => $value) {
		$i++;
        if($value == 'a'){
        	$a += 1;
        }
        if($value == 'b'){
        	$b += 1;
        }
        if($value == 'c'){
        	$c += 1;
        }
        if($value == 'd'){
        	$d += 1;
        }

         if($value == 'oui'){
        	$oui += 1;
        }
         if($value == 'nom'){
        	$nom += 1;
        }
 	}

    $ret_a = ($a * 100)/$i;
    $ret_b = ($b * 100)/$i;
    $ret_c = ($c * 100)/$i;
    $ret_d = ($d * 100)/$i;

    $ret_oui = ($oui * 100)/$i;
    $ret_nom = ($nom * 100)/$i;
   
    $ret = array(
         'a'=>sprintf('%.2f',$ret_a).'%',
         'b'=>sprintf('%.2f',$ret_b).'%',
         'c'=>sprintf('%.2f',$ret_c).'%',
         'd'=>sprintf('%.2f',$ret_d).'%',

         'oui'=>sprintf('%.2f',$ret_oui).'%',
         'nom'=>sprintf('%.2f',$ret_nom).'%'

    	);
     return $ret;
}


?>
