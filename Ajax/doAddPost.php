<?php

    require_once("../../lib/classes/config.inc.php");
	$host     =  DB_SERVER ; 
	$user     =  DB_USER; 
	$password =  DB_PASS; 
	$database =  DB_DATABASE;
	
	$conn = mysql_connect($host,$user,$password); 
	if (!$conn) { 
		echo "Connection impossible\n"; 
		exit; 
	}
	mysql_query('SET NAMES utf8');
	mysql_query('SET CHARACTER_SET utf8');
  
 


 


	function secureSuperGlobalPOST($key)
    {
       

        
      //  if(!in_array($_POST[$key], $arr)){
        if($_POST[$key] == ""){
            $_POST[$key] = "NL";
        }

        $_POST[$key] = htmlspecialchars(stripslashes($_POST[$key]));
        $_POST[$key] = str_ireplace("script", "blocked", $_POST[$key]);
        $_POST[$key] = mysql_escape_string($_POST[$key]);
        return $_POST[$key];
    }

    foreach ($_POST as $key => $value) {

     secureSuperGlobalPOST($key);
    }
 
    $datas = serialize($_POST);

    $sql = "INSERT INTO tmp_inscription_forms_data VALUES "; 
    $sql.= "('',9000 , '".$datas."', now() ) ";

    $results = mysql_db_query("configeconfig",$sql) or die('Query error: ' . mysql_error()); 
	
	
	// Envoyer un mail 
	 $mails = array('boutitinizar@gmail.com','c.bogaert@config.fr','j.pieraccini@config.eu');

	$sujet ='Config Partners 2015 - enquête de satisfaction'; 
    $From  = "no-reply@config.fr";
 

$txt .= " <center><h2>Config Partners 2015 - enquête de satisfaction</h2><br><table style='border:2px double #45829f;background:#CDE5FD;font-family:Arial, Helvetica, sans-serif;font-size:12px'>
<tr><td style='border-bottom:1px solid #c8c8c8'><strong>Civilité</strong></td><td style='border-bottom:1px solid #c8c8c8'>".stripslashes($_POST['nom'])."</td></tr>
<tr><td style='border-bottom:1px solid #c8c8c8'><strong>Nom</strong></td><td style='border-bottom:1px solid #c8c8c8'>".stripslashes($_POST['prenom'])."</td></tr>
<tr><td style='border-bottom:1px solid #c8c8c8'><strong>Pr&eacute;nom</strong></td><td style='border-bottom:1px solid #c8c8c8'>".stripslashes($_POST['email'])."</td></tr>
<tr><td style='border-bottom:1px solid #c8c8c8'><strong>Société</strong></td><td style='border-bottom:1px solid #c8c8c8'>".stripslashes($_POST['societe'])."</td></tr>
<tr><td style='border-bottom:1px solid #c8c8c8'><strong>Fonction</strong></td><td style='border-bottom:1px solid #c8c8c8'>".stripslashes($_POST['Pays'])."</td></tr>
 </table></center>
	";
	 

	$Sujet 	= urlencode($sujet);
	$Message    = urlencode($txt);
	$From = "no-reply@config.fr";

	foreach ($mails as $mail) {	
		$url = "http://www.config.fr/mail/mail.php?email=".$mail."&sujet=".stripcslashes($Sujet)."&message=".$Message."&form=".$From;
		fopen($url, 'r');
	}
 

?>