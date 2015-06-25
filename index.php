<?php require "lib/cookis.php";

if ($_GET['langue'] == "fr" || $langue == "fr")
{
    include('lang/fr-lang.php');
}
// affichage de la bonne langue
// si le cookie vaut 'en' ou si la requete vaut 'en',
// on inclut le fichier fr-lang.php
elseif ($_GET['langue'] == "en" || $langue == "en")
{
    include('lang/en-lang.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/jquery.inputfocus-0.9.min.js"></script>
  <script type="text/javascript" src="js/jquery.main.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.carouFredSel-5.6.0-packed.js"></script>
  <script>
  $(document).ready(function(){
  $('#foo0').carouFredSel({
		auto    : {
			items           : 5,
			duration        : 20000,
			easing          : "linear",
			pauseDuration   : 0,
			pauseOnHover    : "immediate"
		}
	});
  });
  </script>
  </head>
  <body>
  <div class="flag">
      <div id="animated-example" class="animated fadeInUp icon-button"> <a href="?langue=fr" ><img src="images/fr.png" alt=""/></a></div>
      <div id="animated-example" class="animated fadeInUp icon-button">  <a href="?langue=en" ><img src="images/en.png" alt=""/></a></div>
  </div>

<img src="<?php echo Bandeau_formulaire ?>" id="banner" alt="" width="752" height="203" />
<div class="list_carousel" style="clear:both">
    <div class="list_carousel1" style="clear:both">   
	   <ul id="foo0" >
        <li><img src="images/logo/cyberoam.jpg"  width="250"   /></li>
        <li><img src="images/logo/citrix.jpg"  width="250"   /></li>
        <li><img src="images/logo/mobotix.jpg"  width="250"   /></li>
        <li><img src="images/logo/proxim.jpg"   width="250"  /></li>
        <li><img src="images/logo/wooxo.jpg"  width="250"   /></li>
        <li><img src="images/logo/allot.jpg"  width="250"   /></li>
        <li><img src="images/logo/McAfee.jpg"  width="250"   /></li>
        <li><img src="images/logo/qualis.jpg"  width="250"   /></li>
        <li><img src="images/logo/rukus.jpg"  width="250"   /></li>
        <li><img src="images/logo/trend.jpg"  width="250"   /></li>
        <li><img src="images/logo/yadwire.jpg"   width="250"   /></li>
      </ul>
  </div>
  </div>
<div id="container">
    <form   method="post" id="FormAddPost">
    
    <!-- #first_step -->
    <div id="first_step">
        <div class="form">
        <h1><?php echo ORGANISATION ?></h1>
        <h5><?php echo a_tres_satisfait_b_satisfait_c_peu_satisfait_d_insatisfait ?></h5>
        <table  border="1">
            <tr>
            <td></td>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
            <td><?php echo commentaires_facultatif ?></td>
          </tr>
            <tr>
            <td><label>La communication avant l’évènement (invitations, informations relatives à l’évènement…)</label></td>
            <td><input type="hidden" name="suga1" value=""   />
                <input type="radio" name="suga1" value="a" id="suga1_0"   /></td>
            <td><input type="radio" name="suga1" value="b" id="suga1_0"   /></td>
            <td><input type="radio" name="suga1" value="c" id="suga1_0"   /></td>
            <td><input type="radio" name="suga1" value="d" id="suga1_0"   /></td>
            <td><input type="text" name="coma1" id="coma1" /></td>
          </tr>
            <tr>
            <td><label>Les dates du <strong style="color:#477829; font-size:14px; font-style:italic;" >Config Partners 2015</strong></label></td>
            <input type="hidden" name="suga2" value=""   />
            <td><input type="radio" name="suga2" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="suga2" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="suga2" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="suga2" value="d" id="suga1_0" /></td>
            <td><input type="text" name="coma2" id="coma2" /></td>
          </tr>
            <tr>
            <td><label>Le lieu du <strong style="color:#477829; font-size:14px; font-style:italic;" >Config Partners 2015</strong></label></td>
            <input type="hidden" name="suga3" value=""   />
            <td><input type="radio" name="suga3" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="suga3" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="suga3" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="suga3" value="d" id="suga1_0" /></td>
            <td><input type="text" name="coma3" id="coma3" /></td>
          </tr>
            <tr>
            <td><label>La qualité de l’accueil </label></td>
            <input type="hidden" name="suga4" value=""   />
            <td><input type="radio" name="suga4" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="suga4" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="suga4" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="suga4" value="d" id="suga1_0" /></td>
            <td><input type="text" name="coma4" id="coma4" /></td>
          </tr>
            <tr>
            <td><label>Les disponibilités des équipes Config et des hôtes /hôtesses d’accueil</label></td>
            <input type="hidden" name="suga5" value=""   />
            <td><input type="radio" name="suga5" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="suga5" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="suga5" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="suga5" value="d" id="suga1_0" /></td>
            <td><input type="text" name="coma5" id="coma5" /></td>
          </tr>
          </table>
        <h1>HEBERGEMENT - RESTAURATION</h1>
        <h5>A : Très satisfait | B : Satisfait  | C: Peu satisfait  | D : Non applicable</h5>
        <table  border="1">
            <tr>
            <td></td>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
            <td>Commentaires (facultatif)</td>
          </tr>
            <tr>
            <td><label>Le logement</label></td>
            <td><input type="hidden" name="suga6" value=""   />
                <input type="radio" name="suga6" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="suga6" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="suga6" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="suga6" value="d" id="suga1_0" /></td>
            <td><input type="text" name="coma6" id="coma6" /></td>
          </tr>
            <tr>
            <td><label>La restauration</label></td>
            <input type="hidden" name="suga7" value=""   />
            <td><input type="radio" name="suga7" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="suga7" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="suga7" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="suga7" value="d" id="suga1_0" /></td>
            <td><input type="text" name="coma7" id="coma7" /></td>
          </tr>
            <tr>
            <td><label>Les transferts (navettes  aéroport…)</label></td>
            <input type="hidden" name="suga8" value=""   />
            <td><input type="radio" name="suga8" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="suga8" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="suga8" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="suga8" value="d" id="suga1_0" /></td>
            <td><input type="text" name="coma8" id="coma8" /></td>
          </tr>
          </table>
      </div>
        <!-- clearfix -->
        <div class="clear"></div>
        <!-- /clearfix -->
        <input class="submit" type="submit" name="submit_first" id="submit_first" value="" />
      </div>
    <!-- clearfix -->
    <div class="clear"></div>
    <!-- /clearfix --> 
    
    <!-- #second_step -->
    <div id="second_step">
        <div class="form">
        <h1>CADRE DE TRAVAIL</h1>
        <h5>A : Très satisfait | B : Satisfait  | C: Peu satisfait  | D : Non applicable</h5>
        <table  border="1">
            <tr>
            <td></td>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
            <td>Commentaires (facultatif)</td>
          </tr>
            <tr>
            <td><label>Salle de conférence</label></td>
            <input type="hidden" name="sugb1" value=""   />
            <td><input type="radio" name="sugb1" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb1" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb1" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb1" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb1" id="comb1" /></td>
          </tr>
            <tr>
            <td><label>Matériel mis à disposition</label></td>
            <input type="hidden" name="sugb2" value=""   />
            <td><input type="radio" name="sugb2" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb2" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb2" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb2" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb2" id="comb2" /></td>
          </tr>
            <tr>
            <td><label>Supports distribués (documentations …)</label></td>
            <input type="hidden" name="sugb3" value=""   />
            <td><input type="radio" name="sugb3" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb3" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb3" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb3" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb3" id="comb3" /></td>
          </tr>
            <tr>
            <td><label>Tables rondes (lieu, disposition des différents éditeurs…)</label></td>
            <input type="hidden" name="sugb4" value=""   />
            <td><input type="radio" name="sugb4" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb4" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb4" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb4" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb4" id="comb4" /></td>
          </tr>
          </table>
        <h1>PROGRAMME</h1>
        <h5>A : Très satisfait | B : Satisfait  | C: Peu satisfait  | D : Non applicable</h5>
        <table  border="1">
            <tr>
            <td></td>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
            <td>Commentaires (facultatif)</td>
          </tr>
            <tr>
            <td><label>Rythme sur l’ensemble du séjour<br/>
                Répartition conférences, tables rondes,
                activités de détente, … </label></td>
            <input type="hidden" name="sugb5" value=""   />
            <td><input type="radio" name="sugb5" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb5" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb5" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb5" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb5" id="comb5" /></td>
          </tr>
            <tr>
            <td><label>Programme des présentations</label></td>
            <input type="hidden" name="sugb6" value=""   />
            <td><input type="radio" name="sugb6" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb6" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb6" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb6" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb6" id="comb6" /></td>
          </tr>
            <tr>
            <td><label>Programme des tables rondes </label></td>
            <input type="hidden" name="sugb7" value=""   />
            <td><input type="radio" name="sugb7" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb7" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb7" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb7" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb7" id="comb7" /></td>
          </tr>
            <tr>
            <td><label>Programme des activités de détente </label></td>
            <input type="hidden" name="sugb8" value=""   />
            <td><input type="radio" name="sugb8" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb8" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb8" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb8" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb8" id="comb8" /></td>
          </tr>
              </tr>
            
            <tr>
            <td><label>Le 1er dîner spectacle au Fuego Latino</label></td>
            <input type="hidden" name="sugb9" value=""   />
            <td><input type="radio" name="sugb9" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb9" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb9" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb9" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb9" id="comb9" /></td>
          </tr>
		      
            <tr>
            <td><label>Le 2er dîner spectacle au Comptoir Darna</label></td>
            <input type="hidden" name="sugb9" value=""   />
            <td><input type="radio" name="sugb10" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb10" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb10" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb10" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb10" id="comb9" /></td>
          </tr>
          </table>
      </div>
        <!-- clearfix -->
        <div class="clear"></div>
        <!-- /clearfix -->
        <input class="retour" type="submit" name="retour_second" id="retour_second" value="" />
        <input class="submit" type="submit" name="submit_second" id="submit_second" value="" />
      </div>
    <!-- clearfix -->
    <div class="clear"></div>
    <!-- /clearfix --> 
    
    <!-- #third_step -->
    <div id="third_step">
        <div class="form">
        <h1>PRESENTATIONS</h1>
        <h5>A : Très satisfait | B : Satisfait  | C: Peu satisfait  | D : Non applicable</h5>
        <table  border="1">
            <tr>
            <td></td>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
            <td>Commentaires (facultatif)</td>
          </tr>
            <tr>
            <td><label>Evaluation générale des présentations</label></td>
            <input type="hidden" name="sugc1" value=""   />
            <td><input type="radio" name="sugc1" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugc1" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugc1" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugc1" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comc1" id="comc1" /></td>
          </tr>
          </table>
        <h1>Tables Rondes petit-déjeuner</h1>
		       <h5>A : Très satisfait | B : Satisfait  | C: Peu satisfait  | D : Non applicable</h5>
        <table  border="1">
	    <tr>
            <td></td>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
            <td>Commentaires (facultatif)</td>
          </tr>
            <tr>
            <td><label>Evaluation générale des tables rondes</label></td>
            <input type="hidden" name="sugc2" value=""   />
            <td><input type="radio" name="sugc2" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugc2" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugc2" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugc2" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comc2" id="comc3" /></td>
          </tr>
            <tr>
            <td><label>Table Cyberoam</label></td>
            <input type="hidden" name="sugc4" value=""   />
            <td><input type="radio" name="sugc3" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugc3" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugc3" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugc3" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comc3" id="comc4" /></td>
          </tr>
              </tr>
            
            <tr>
            <td><label>Table Citrix</label></td>
            <input type="hidden" name="sugc4" value=""   />
            <td><input type="radio" name="sugc4" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugc4" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugc4" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugc4" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comc4" id="comc5" /></td>
          </tr>
            <tr>
            <td><label>Table Mobotix</label></td>
            <input type="hidden" name="sugc5" value=""   />
            <td><input type="radio" name="sugc5" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugc5" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugc5" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugc5" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comc5" id="comc6" /></td>
          </tr>
            <tr>
            <td><label>Table Proxim Wireless</label></td>
            <input type="hidden" name="sugc6" value=""   />
            <td><input type="radio" name="sugc6" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugc6" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugc6" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugc6" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comc6" id="comc7" /></td>
          </tr>
            <tr>
            <td><label>Table Wooxo</label></td>
            <input type="hidden" name="sugc7" value=""   />
            <td><input type="radio" name="sugc7" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugc7" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugc7" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugc7" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comc7" id="comc8" /></td>
          </tr>
            <tr>
            <td><label>Table Allot Communications</label></td>
            <input type="hidden" name="sugc8" value=""   />
            <td><input type="radio" name="sugc8" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugc8" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugc8" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugc8" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comc8" id="comc7" /></td>
          </tr>
            <tr>
            <td><label>Table McAfee</label></td>
            <input type="hidden" name="sugc9" value=""   />
            <td><input type="radio" name="sugc9" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugc9" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugc9" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugc9" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comc9" id="comc7" /></td>
          </tr>
            <tr>
            <td><label>Table Qualys</label></td>
            <input type="hidden" name="sugc10" value=""   />
            <td><input type="radio" name="sugc10" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugc10" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugc10" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugc10" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comc10" id="comc8" /></td>
          </tr>
            <tr>
            <td><label>Table Ruckus Wireless</label></td>
            <input type="hidden" name="sugc11" value=""   />
            <td><input type="radio" name="sugc11" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugc11" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugc11" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugc11" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comc11" id="comc9" /></td>
          </tr>
            <tr>
            <td><label>Table Trend Micro</label></td>
            <input type="hidden" name="sugc12" value=""   />
            <td><input type="radio" name="sugc12" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugc12" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugc12" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugc12" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comc12" id="comc10" /></td>
          </tr>
          <tr>
            <td><label>Table Yadwire</label></td>
            <input type="hidden" name="sugc13" value=""   />
            <td><input type="radio" name="sugc13" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugc13" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugc13" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugc13" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comc13" id="comc9" /></td>
          </tr>
          </table>
      </div>
        <!-- clearfix -->
        <div class="clear"></div>
        <!-- /clearfix -->
        <input class="retour" type="submit" name="retour_third" id="retour_third" value="" />
        <input class="submit" type="submit" name="submit_third" id="submit_third" value="" />
      </div>
    <!-- clearfix -->
    <div class="clear"></div>
    <!-- /clearfix --> 
    
    <!-- #fourth_step -->
    <div id="fourth_step">
        <div class="form">
		<h1 style="color:#fa671a">Votre avis</h1>
        <table  border="1">
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Commentaires (facultatif)</td>
          </tr>
            <tr>
            <td><label>Le <strong style="color:#477829; font-size:14px; font-style:italic;" >Config Partners 2015 </strong>a-t-il répondu  à vos attentes ?</label></td>
            <td>Oui</td>
            <input type="hidden" name="sugd1" value=""   />
            <td><input type="radio" name="sugd1" value="oui" id="suga1_0" /></td>
            <td>Non</td>
            <td><input type="radio" name="sugd1" value="nom" id="suga1_0" /></td>
            <td><input type="text" name="comd1" id="comd1" /></td>
          </tr>
            <tr>
            <td><label>Cet évènement vous a-t-il permis de développer vos relations avec les éditeurs  ?</label></td>
            <td>Oui</td>
            <input type="hidden" name="sugd2" value=""   />
            <td><input type="radio" name="sugd2" value="oui" id="suga1_0" /></td>
            <td>Non</td>
            <td><input type="radio" name="sugd2" value="nom" id="suga1_0" /></td>
            <td><input type="text" name="comd2" id="comd1" /></td>
          </tr>
            <tr>
            <td><label>Cet évènement vous a-t-il permis de développer vos relations avec les équipes de  Config ? </label></td>
            <td>Oui</td>
            <input type="hidden" name="sugd3" value=""   />
            <td><input type="radio" name="sugd3" value="oui" id="suga1_0" /></td>
            <td>Non</td>
            <td><input type="radio" name="sugd3" value="nom" id="suga1_0" /></td>
            <td><input type="text" name="comd3" id="comd1" /></td>
          <tr>
            <td><label>Souhaitez-vous être rappelé pour aborder un, ou plusieurs, sujets de façon plus approfondie ? (Si oui, lesquels ?)</label></td>
            <td>Oui</td>
            <input type="hidden" name="sugd4" value=""   />
            <td><input type="radio" name="sugd4" value="oui" id="suga1_0" /></td>
            <td>Non</td>
            <td><input type="radio" name="sugd4" value="nom" id="suga1_0" /></td>
            <td><input type="text" name="comd4" id="comd2" /></td>
          </tr>
            <tr>
            <td><label>Y a-t-il certains aspects relatifs à l’organisation ou au programme de ces journées que vous ne souhaiteriez pas que nous renouvelions pour notre prochaine édition ? (Si oui, lesquels ?) </label></td>
            <td>Oui</td>
            <input type="hidden" name="sugd5" value=""   />
            <td><input type="radio" name="sugd5" value="oui" id="suga1_0" /></td>
            <td>Non</td>
            <td><input type="radio" name="sugd5" value="nom" id="suga1_0" /></td>
            <td><input type="text" name="comd5" id="comd2" /></td>
          </tr>
            <tr>
            <td><label>Avez-vous des souhaits ou des suggestions pour nos prochaines éditions du Config Partners ? (Si oui, lesquels ?)</label></td>
            <td>Oui</td>
            <input type="hidden" name="sugd6" value=""   />
            <td><input type="radio" name="sugd6" value="oui" id="suga1_0" /></td>
            <td>Non</td>
            <td><input type="radio" name="sugd6" value="nom" id="suga1_0" /></td>
            <td><input type="text" name="comd6" id="comd2" /></td>
          </tr>
          </table>
        <h1>Informations</h1>
        <div id="info">
            <label>Nom</label>
            <input  id="nom" class="" type="text" value="" name="nom">
            <label>Prénom</label>
            <input id="prenom" class="" type="text" value="" name="prenom">
            <label>Email</label>
            <input id="email" class="" type="text" value="" name="email">
            <label>Société</label>
            <input id="societe" class="" type="text" value="" name="societe">
            <label>Pays</label>
            <input id="Pays" class="" type="text" value="" name="Pays">
          </div>
      </div>
        <!-- clearfix -->
        <div class="clear"></div>
        <!-- /clearfix -->
        <input class="retour" type="submit" name="retour_fourth" id="retour_fourth" value="" />
        <input class="submit send" type="submit" name="submit_fourth" id="submit_fourth" value="" />
      </div>
  </form>
  </div>
<div id="progress_bar">
    <div id="progress"></div>
    <div id="progress_text">0% Complete</div>
  </div>
</body>
</html>