 
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link rel="stylesheet" type="text/css" href="css/style_tab.css" media="all" />
</head>
<body>

<?php
 require_once("export_satisfaction.php");
 ob_start();
 ?>
<table class="table1">
<thead>
  <tr>
    <td>&nbsp;</td>
    <th>A</th>
    <th>B</th>
    <th>C</th>
    <th>D</th>
    <th>Oui</th>
    <th>Non</th>
  </tr>
  </thead>
  <tr>
    <th> Communication avant l&rsquo;évènement (invitations, informations relatives à l&rsquo;évènement…) </th>
    <td><?php  echo  $suga1['a']; ?></td>
    <td><?php echo  $suga1['b']; ?></td>
    <td><?php echo  $suga1['c']; ?></td>
    <td><?php echo  $suga1['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Dates du Config Partners 2015 </td>
    <td><?php echo  $suga2['a']; ?></td>
    <td><?php echo  $suga2['b']; ?></td>
    <td><?php echo  $suga2['c']; ?></td>
    <td><?php echo  $suga2['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Lieu du Config Partners 2015 </td>
    <td><?php echo  $suga3['a']; ?></td>
    <td><?php echo  $suga3['b']; ?></td>
    <td><?php echo  $suga3['c']; ?></td>
    <td><?php echo  $suga3['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Qualité de l&rsquo;accueil </td>
    <td><?php echo  $suga4['a']; ?></td>
    <td><?php echo  $suga4['b']; ?></td>
    <td><?php echo  $suga4['c']; ?></td>
    <td><?php echo  $suga4['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Disponibilité des équipes Config et des hôtes /hôtesses d&rsquo;accueil </td>
    <td><?php echo  $suga5['a']; ?></td>
    <td><?php echo  $suga5['b']; ?></td>
    <td><?php echo  $suga5['c']; ?></td>
    <td><?php echo  $suga5['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
   <th> Logement </td>
    <td><?php echo  $suga6['a']; ?></td>
    <td><?php echo  $suga6['b']; ?></td>
    <td><?php echo  $suga6['c']; ?></td>
    <td><?php echo  $suga6['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Restauration </td>
    <td><?php echo  $suga7['a']; ?></td>
    <td><?php echo  $suga7['b']; ?></td>
    <td><?php echo  $suga7['c']; ?></td>
    <td><?php echo  $suga7['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Transfert (aéroport activités restaurants…)</td>
    <td><?php echo  $suga8['a']; ?></td>
    <td><?php echo  $suga8['b']; ?></td>
    <td><?php echo  $suga8['c']; ?></td>
    <td><?php echo  $suga8['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Salles de conférence </td>
    <td><?php echo  $sugb1['a']; ?></td>
    <td><?php echo  $sugb1['b']; ?></td>
    <td><?php echo  $sugb1['c']; ?></td>
    <td><?php echo  $sugb1['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Matériel mis à disposition </td>
    <td><?php echo  $sugb2['a']; ?></td>
    <td><?php echo  $sugb2['b']; ?></td>
    <td><?php echo  $sugb2['c']; ?></td>
    <td><?php echo  $sugb2['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Tables rondes </td>
    <td><?php echo  $sugb3['a']; ?></td>
    <td><?php echo  $sugb3['b']; ?></td>
    <td><?php echo  $sugb3['c']; ?></td>
    <td><?php echo  $sugb3['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Rythme </td>
    <td><?php echo  $sugb4['a']; ?></td>
    <td><?php echo  $sugb4['b']; ?></td>
    <td><?php echo  $sugb4['c']; ?></td>
    <td><?php echo  $sugb4['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Votre slot de présentation </td>
    <td><?php echo  $sugb5['a']; ?></td>
    <td><?php echo  $sugb5['b']; ?></td>
    <td><?php echo  $sugb5['c']; ?></td>
    <td><?php echo  $sugb5['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Votre table ronde (durée, positionnement, assistance de Config...</td>
    <td><?php echo  $sugb6['a']; ?></td>
    <td><?php echo  $sugb6['b']; ?></td>
    <td><?php echo  $sugb6['c']; ?></td>
    <td><?php echo  $sugb6['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Activités de détente </td>
    <td><?php echo  $sugb7['a']; ?></td>
    <td><?php echo  $sugb7['b']; ?></td>
    <td><?php echo  $sugb7['c']; ?></td>
    <td><?php echo  $sugb7['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
   <th>Dîner de gala au Fuego Latino </td>
    <td><?php echo  $sugb8['a']; ?></td>
    <td><?php echo  $sugb8['b']; ?></td>
    <td><?php echo  $sugb8['c']; ?></td>
    <td><?php echo  $sugb8['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Dîner de gala au Comptoir Darna </td>
    <td><?php echo  $sugb9['a']; ?></td>
    <td><?php echo  $sugb9['b']; ?></td>
    <td><?php echo  $sugb9['c']; ?></td>
    <td><?php echo  $sugb9['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <th> Le Config Partners 2015 a-t-il répondu à vos attentes ? </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo  $sugd1['oui']; ?></td>
    <td><?php echo  $sugd1['nom']; ?></td>
  </tr>
    <tr>
    <th>Pensez vous que le Config Partners 2015 est un event indispensable</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo  $sugd2['oui']; ?></td>
    <td><?php echo  $sugd2['nom']; ?></td>
  </tr>
    <tr>
    <th>Y a-t-il certains aspects relatifs à l’organisation</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo  $sugd3['oui']; ?></td>
    <td><?php echo  $sugd3['nom']; ?></td>
  </tr>
    <tr>
    <th>Avez-vous des souhaits ou des suggestions </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo  $sugd4['oui']; ?></td>
    <td><?php echo  $sugd4['nom']; ?></td>
  </tr>
   <tr>
    <th>Pensez- vous participer à la prochaine édition</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo  $sugd5['oui']; ?></td>
    <td><?php echo  $sugd5['nom']; ?></td>
  </tr>

</table>
