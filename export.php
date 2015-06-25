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



$fields = mysql_query("SELECT * FROM tmp_inscription_forms_data WHERE id_form = 9000");

function __unserialize($sObject) {
	$sObject= utf8_decode($sObject);
    $__ret =preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $sObject );
    return unserialize($__ret);
}

$data = array();

while($row = mysql_fetch_assoc($fields)){
	if(!empty($row['datas'])){
 
		$row['datas'] = __unserialize($row['datas']);
        $i = 0;
        $p = 0;
		foreach ($row['datas'] as $key => $value) {
			if ($value == 'a') {
			 	$i += 1;
			 	$p += 100;
			 }
			if ($value == 'b') {
			 	$i += 1;
			 	$p += 70;
			 }
			 if ($value == 'c') {
			 	$i += 1;
			 	$p += 50;
			 }
			 if ($value == 'd') {
			 	$i += 1;
			 	$p += 0;
			 }
			 if ($value == 'oui') {
			 	$i += 1;
			 	$p += 100;
			 }
			 if ($value == 'nom') {
			 	$i += 1;
			 	$p += 0;
			 }
		}


		$row['datas']['pourcentage'] = sprintf('%.2f',$p/$i).'%' ;
		$data[] = $row['datas'];
	}

}


//die(print_r($data));

   $header=array("Communication avant...","Commentaires","Dates du Config...","Commentaires","Lieu du Config...","Commentaires","Qualité de l’accueil...","Commentaires","Disponibilité des équipes","Commentaires","Logement","Commentaires","Restauration ","Commentaires","Transfert","Commentaires","Salles de conférence","Commentaires","Matériel","Commentaires","Supports distribués","Commentaires","Tables rondes","Commentaires","Rythme. Répartition...","Commentaires","Programme des présentations","Commentaires","Programme des tables rondes","Commentaires","Programme des activités","Commentaires","Le 1er dîner spectacle au Fuego Latino","Commentaires","Le 2er dîner spectacle au Fuego Latino","Commentaires","Evaluation générale...","Commentaires","Evaluation générale des tables rondes","Commentaires","Table Cyberoam","Commentaires","Table Citrix","Commentaires","Table Mobotix","Commentaires","Table Proxim Wireless","Commentaires","Table Wooxo","Commentaires","Table Allot Communications","Commentaires","Table McAfee","Commentaires","Table Qualys","Commentaires","Table Ruckus Wireless","Commentaires","Table Trend Micro","Commentaires","Table Yadwire","Commentaires","Le Config Partners 2012 a-t-il répondu...","Commentaires","Cet évènement ... Les éditeurs ?","Commentaires","Cet évènement ...  Les équipes de Config ?","Commentaires","Souhaitez-vous être rappelé pour aborder","Commentaires","Y a-t-il certains aspects relatifs...","Commentaires","Avez-vous des souhaits ou des suggestions...","Commentaires","Nom", "Prénom", "Email", "Société","Pays","Pourcentage de satisfaction"); 
 
	//code to download the data of report in the excel format
	$fn="partenaires.xls";
	include_once("../lib/classes/export_excel.class.php");
	//create the instance of the exportexcel format
	$excel_obj=new ExportExcel("$fn");
	$excel_obj->setHeadersAndValues($header,$data); 
	//now generate the excel file with the data and headers set
	$excel_obj->GenerateExcelFile();
	//print_r($_SESSION['report_values']);	
	
?>
