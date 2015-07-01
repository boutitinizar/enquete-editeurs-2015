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
  <script type="text/javascript" src="js/<?php echo $langue ?>-jquery.main.js"></script>
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
<div class="flag">
    <span><?php echo choose_your_language ;?></span>
    <div id="animated-example" class="animated fadeInUp icon-button">  <a href="?langue=en" ><img src="images/en.png" alt=""/></a></div>
    <div id="animated-example" class="animated fadeInUp icon-button"> <a href="?langue=fr" ><img src="images/fr.png" alt=""/></a></div>

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
                <td><label><?php echo  communication_avant_l_evenement ?></label></td>
                <td><input type="hidden" name="suga1" value=""   />
                <input type="radio" name="suga1" value="a" id="suga1_0"   /></td>
                <td><input type="radio" name="suga1" value="b" id="suga1_0"   /></td>
                <td><input type="radio" name="suga1" value="c" id="suga1_0"   /></td>
                <td><input type="radio" name="suga1" value="d" id="suga1_0"   /></td>
                <td><input type="text" name="coma1" id="coma1" /></td>
            </tr>
            <tr>
                <td><label><?php echo dates_du ?> <strong style="color:#477829; font-size:14px; font-style:italic;" >Config Partners 2015</strong></label></td>
                <input type="hidden" name="suga2" value=""   />
                <td><input type="radio" name="suga2" value="a" id="suga1_0" /></td>
                <td><input type="radio" name="suga2" value="b" id="suga1_0" /></td>
                <td><input type="radio" name="suga2" value="c" id="suga1_0" /></td>
                <td><input type="radio" name="suga2" value="d" id="suga1_0" /></td>
                <td><input type="text" name="coma2" id="coma2" /></td>
            </tr>
            <tr>
            <td><label><?php echo Lieu_du ?><strong style="color:#477829; font-size:14px; font-style:italic;" > Config Partners 2015</strong></label></td>
            <input type="hidden" name="suga3" value=""   />
            <td><input type="radio" name="suga3" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="suga3" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="suga3" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="suga3" value="d" id="suga1_0" /></td>
            <td><input type="text" name="coma3" id="coma3" /></td>
          </tr>
            <tr>
            <td><label> <?php echo qualite_de_l_accueil ?> </label></td>
            <input type="hidden" name="suga4" value=""   />
            <td><input type="radio" name="suga4" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="suga4" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="suga4" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="suga4" value="d" id="suga1_0" /></td>
            <td><input type="text" name="coma4" id="coma4" /></td>
          </tr>
            <tr>
            <td><label> <?php echo disponibilite_des_equipes_config_et_des_hotes_d_accueil ?></label></td>
            <input type="hidden" name="suga5" value=""   />
            <td><input type="radio" name="suga5" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="suga5" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="suga5" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="suga5" value="d" id="suga1_0" /></td>
            <td><input type="text" name="coma5" id="coma5" /></td>
          </tr>
          </table>
        <h1><?php echo hebergement_restauration ?></h1>
        <h5> <?php echo a_tres_satisfait_b_satisfait_c_peu_satisfait_d_insatisfait ?> </h5>
        <table  border="1"><tr>
            <td></td>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
            <td><?php echo commentaires_facultatif ?></td>
          </tr>
            <tr>
            <td><label><?php echo Logement ?> </label></td>
            <td><input type="hidden" name="suga6" value=""   />
                <input type="radio" name="suga6" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="suga6" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="suga6" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="suga6" value="d" id="suga1_0" /></td>
            <td><input type="text" name="coma6" id="coma6" /></td>
          </tr>
            <tr>
            <td><label><?php echo Restauration ?> </label></td>
            <input type="hidden" name="suga7" value=""   />
            <td><input type="radio" name="suga7" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="suga7" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="suga7" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="suga7" value="d" id="suga1_0" /></td>
            <td><input type="text" name="coma7" id="coma7" /></td>
          </tr>
            <tr>
            <td><label><?php echo deplacements_navettes_aeroport ?></label></td>
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
            <h1><?php echo cadre_de_travail ?></h1>
            <h5> <?php echo a_tres_satisfait_b_satisfait_c_peu_satisfait_d_insatisfait ?> </h5>
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
            <td><label><?php echo  salle_de_conference ?></label></td>
            <input type="hidden" name="sugb1" value=""   />
            <td><input type="radio" name="sugb1" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb1" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb1" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb1" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb1" id="comb1" /></td>
          </tr>
            <tr>
            <td><label><?php echo  materiel_mis_a_disposition ?></label></td>
            <input type="hidden" name="sugb2" value=""   />
            <td><input type="radio" name="sugb2" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb2" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb2" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb2" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb2" id="comb2" /></td>
          </tr>
            <tr>
            <td><label><?php echo tables_rondes_lieu_disposition_des_editeurs ?></label></td>
            <input type="hidden" name="sugb3" value=""   />
            <td><input type="radio" name="sugb3" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb3" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb3" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb3" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb3" id="comb3" /></td>
          </tr>
          </table>
        <h1><?php echo PROGRAMME ?></h1>
            <h5> <?php echo a_tres_satisfait_b_satisfait_c_peu_satisfait_d_insatisfait ?> </h5>
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
            <td><label> <?php echo rythme_repartition_conferences_tables_rondes ?></label></td>
            <input type="hidden" name="sugb4" value=""/>
            <td><input type="radio" name="sugb4" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb4" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb4" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb4" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb4" id="comb5" /></td>
          </tr>
            <tr>
            <td><label><?php echo  votre_slot_de_presentation_duree ?></label></td>
            <input type="hidden" name="sugb5" value=""   />
            <td><input type="radio" name="sugb5" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb5" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb5" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb5" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb5" id="comb6" /></td>
          </tr>
            <tr>
            <td><label><?php  echo  votre_table_ronde_duree_positionnement_assistance ?> </label></td>
            <input type="hidden" name="sugb6" value=""   />
            <td><input type="radio" name="sugb6" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb6" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb6" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb6" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb6" id="comb7" /></td>
          </tr>
            <tr>
            <td><label><?php  echo  activites_de_detente ?>   </label></td>
            <input type="hidden" name="sugb7" value=""   />
            <td><input type="radio" name="sugb7" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb7" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb7" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb7" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb7" id="comb8" /></td>
          </tr>
              </tr>
            
            <tr>
            <td><label><?php  echo  diner_de_gala_Latino ?></label></td>
            <input type="hidden" name="sugb8" value=""   />
            <td><input type="radio" name="sugb8" value="a" id="suga1_0" /></td>
            <td><input type="radio" name="sugb8" value="b" id="suga1_0" /></td>
            <td><input type="radio" name="sugb8" value="c" id="suga1_0" /></td>
            <td><input type="radio" name="sugb8" value="d" id="suga1_0" /></td>
            <td><input type="text" name="comb8" id="comb9" /></td>
          </tr>
            <tr>
                <td><label><?php  echo  diner_de_gala_Comptoir_Darna ?></label></td>
                <input type="hidden" name="sugb9" value=""   />
                <td><input type="radio" name="sugb9" value="a" id="suga1_0" /></td>
                <td><input type="radio" name="sugb9" value="b" id="suga1_0" /></td>
                <td><input type="radio" name="sugb9" value="c" id="suga1_0" /></td>
                <td><input type="radio" name="sugb9" value="d" id="suga1_0" /></td>
                <td><input type="text" name="comb9" id="comb9" /></td>
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
    

    
    <!-- #fourth_step -->
    <div id="fourth_step">
        <div class="form">
		<h1 style="color:#fa671a"><?php echo  votre_avis; ?></h1>
            <h5> <?php echo a_tres_satisfait_b_satisfait_c_peu_satisfait_d_insatisfait ?> </h5>
        <table  border="1">
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
                <td><?php echo commentaires_facultatif ?></td>
            </tr>
            <tr>
            <td><label><?php echo le_config_partners_2015_a_t_il_repondu_a_vos_attentes ?></label></td>
                <td><?php echo OUI ?></td>
            <input type="hidden" name="sugd1" value=""   />
            <td><input type="radio" name="sugd1" value="<?php echo OUI ?>" id="suga1_0" /></td>
            <td>Non</td>
            <td><input type="radio" name="sugd1" value="<?php echo NON ?>" id="suga1_0" /></td>
            <td><input type="text" name="comd1" id="comd1" /></td>
          </tr>
            <tr>
            <td><label><?php echo pensez_vous_que_le_config_partners_2015 ?></label></td>
                <td><?php echo OUI ?></td>
            <input type="hidden" name="sugd2" value=""   />
            <td><input type="radio" name="sugd2" value="oui" id="suga1_0" /></td>
                <td><?php echo NON ?></td>
            <td><input type="radio" name="sugd2" value="nom" id="suga1_0" /></td>
            <td><input type="text" name="comd2" id="comd1" /></td>
          </tr>
            <tr>
            <td><label><?php echo y_a_t_il_certains_aspects_relatifs_a_l_organisation ?> <?php echo si_oui_lesquels ?></label></td>
                <td><?php echo OUI ?></td>
            <input type="hidden" name="sugd3" value=""   />
            <td><input type="radio" name="sugd3" value="oui" id="suga1_0" /></td>
                <td><?php echo NON ?></td>
            <td><input type="radio" name="sugd3"  value="nom" id="suga1_0" /></td>
            <td><input type="text" name="comd3" id="comd1" /></td>
          <tr>
            <td><label><?php echo avez_vous_des_souhaits_ou_des_suggestions_pour_nos ?></label></td>
            <td><?php echo OUI ?></td>
            <input type="hidden" name="sugd4" value=""   />
            <td><input type="radio" name="sugd4" value="oui"  id="suga1_0" /></td>
            <td><?php echo NON ?></td>
            <td><input type="radio" name="sugd4" value="nom" id="suga1_0" /></td>
            <td><input type="text" name="comd4" id="comd2" /></td>
          </tr>
            <tr>
            <td><label><?php echo pensez_vous_participer_a_la_prochaine_edition_du_config_partners ?></label></td>
             <td><?php echo OUI ?></td>
            <input type="hidden" name="sugd5" value=""   />
            <td><input type="radio" name="sugd5" value="oui" id="suga1_0" /></td>
            <td><?php echo NON ?></td>
            <td><input type="radio" name="sugd5" value="nom" id="suga1_0" /></td>
            <td><input type="text" name="comd5" id="comd2" /></td>
          </tr>

          </table>
        <h1><?php echo Informations ?></h1>
        <div id="info">
            <label> <?php echo Nom ?></label>
            <input  id="nom" class="" type="text" value="" name="nom">
            <label> <?php echo prenom ?></label>
            <input id="prenom" class="" type="text" value="" name="prenom">
            <label> Email</label>
            <input id="email" class="" type="text" value="" name="email">
            <label><?php echo  company ?></label>
            <input id="societe" class="" type="text" value="" name="societe">
            <label> <?php echo Pays ?></label>
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