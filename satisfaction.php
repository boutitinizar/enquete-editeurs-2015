 
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
    <th> Supports distribués (documentation…) </td>
    <td><?php echo  $sugb3['a']; ?></td>
    <td><?php echo  $sugb3['b']; ?></td>
    <td><?php echo  $sugb3['c']; ?></td>
    <td><?php echo  $sugb3['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Tables rondes (lieu, disposition des différents éditeurs…) </td>
    <td><?php echo  $sugb4['a']; ?></td>
    <td><?php echo  $sugb4['b']; ?></td>
    <td><?php echo  $sugb4['c']; ?></td>
    <td><?php echo  $sugb4['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Rythme. Répartition conférences/tables rondes /activités de détente sur l&rsquo;ensemble du séjour </td>
    <td><?php echo  $sugb5['a']; ?></td>
    <td><?php echo  $sugb5['b']; ?></td>
    <td><?php echo  $sugb5['c']; ?></td>
    <td><?php echo  $sugb5['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Programme des présentations </td>
    <td><?php echo  $sugb6['a']; ?></td>
    <td><?php echo  $sugb6['b']; ?></td>
    <td><?php echo  $sugb6['c']; ?></td>
    <td><?php echo  $sugb6['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Programme des tables rondes </td>
    <td><?php echo  $sugb7['a']; ?></td>
    <td><?php echo  $sugb7['b']; ?></td>
    <td><?php echo  $sugb7['c']; ?></td>
    <td><?php echo  $sugb7['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
   <th> Programme des activités de détente </td>
    <td><?php echo  $sugb8['a']; ?></td>
    <td><?php echo  $sugb8['b']; ?></td>
    <td><?php echo  $sugb8['c']; ?></td>
    <td><?php echo  $sugb8['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
   <th>Le 1er dîner spectacle au Fuego Latino	</td>
    <td><?php echo  $sugb9['a']; ?></td>
    <td><?php echo  $sugb9['b']; ?></td>
    <td><?php echo  $sugb9['c']; ?></td>
    <td><?php echo  $sugb9['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
   <th>Le 2er dîner spectacle au Fuego Latino	</td>
    <td><?php echo  $sugb10['a']; ?></td>
    <td><?php echo  $sugb10['b']; ?></td>
    <td><?php echo  $sugb10['c']; ?></td>
    <td><?php echo  $sugb10['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
   <th> Evaluation générale des Présentations </td>
    <td><?php echo  $sugc1['a']; ?></td>
    <td><?php echo  $sugc1['b']; ?></td>
    <td><?php echo  $sugc1['c']; ?></td>
    <td><?php echo  $sugc1['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
  <tr>
    <th> Evaluation générale des tables rondes </td>
    <td><?php echo  $sugc3['a']; ?></td>
    <td><?php echo  $sugc3['b']; ?></td>
    <td><?php echo  $sugc3['c']; ?></td>
    <td><?php echo  $sugc3['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Table Cyberoam </td>
    <td><?php echo  $sugc4['a']; ?></td>
    <td><?php echo  $sugc4['b']; ?></td>
    <td><?php echo  $sugc4['c']; ?></td>
    <td><?php echo  $sugc4['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Table Citrix </td>
    <td><?php echo  $sugc5['a']; ?></td>
    <td><?php echo  $sugc5['b']; ?></td>
    <td><?php echo  $sugc5['c']; ?></td>
    <td><?php echo  $sugc5['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Table Mobotix</td>
    <td><?php echo  $sugc6['a']; ?></td>
    <td><?php echo  $sugc6['b']; ?></td>
    <td><?php echo  $sugc6['c']; ?></td>
    <td><?php echo  $sugc6['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
   <th> Table Proxim Wireless</td>
    <td><?php echo  $sugc7['a']; ?></td>
    <td><?php echo  $sugc7['b']; ?></td>
    <td><?php echo  $sugc7['c']; ?></td>
    <td><?php echo  $sugc7['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
   <th> Table Wooxo</td>
    <td><?php echo  $sugc8['a']; ?></td>
    <td><?php echo  $sugc8['b']; ?></td>
    <td><?php echo  $sugc8['c']; ?></td>
    <td><?php echo  $sugc8['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
   <th> Table Allot Communications </td>
    <td><?php echo  $sugc9['a']; ?></td>
    <td><?php echo  $sugc9['b']; ?></td>
    <td><?php echo  $sugc9['c']; ?></td>
    <td><?php echo  $sugc9['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
   <th> Table McAfee </td>
    <td><?php echo  $sugc10['a']; ?></td>
    <td><?php echo  $sugc10['b']; ?></td>
    <td><?php echo  $sugc10['c']; ?></td>
    <td><?php echo  $sugc10['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Table Qualys </td>
    <td><?php echo  $sugc11['a']; ?></td>
    <td><?php echo  $sugc11['b']; ?></td>
    <td><?php echo  $sugc11['c']; ?></td>
    <td><?php echo  $sugc11['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Table Ruckus Wireless </td>
    <td><?php echo  $sugc12['a']; ?></td>
    <td><?php echo  $sugc12['b']; ?></td>
    <td><?php echo  $sugc12['c']; ?></td>
    <td><?php echo  $sugc12['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <th> Table Trend Micro</td>
    <td><?php echo  $sugc13['a']; ?></td>
    <td><?php echo  $sugc13['b']; ?></td>
    <td><?php echo  $sugc13['c']; ?></td>
    <td><?php echo  $sugc13['d']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th> Table Yadwire</td>
    <td><?php echo  $sugc14['a']; ?></td>
    <td><?php echo  $sugc14['b']; ?></td>
    <td><?php echo  $sugc14['c']; ?></td>
    <td><?php echo  $sugc14['d']; ?></td>
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
    <th> Cet évènement vous a-t-il permis de développer vos relations avec Les éditeurs ? </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo  $sugd2['oui']; ?></td>
    <td><?php echo  $sugd2['nom']; ?></td>
  </tr>
    <tr>
    <th> Cet évènement vous a-t-il permis de développer vos relations avec Les équipes de Config ? </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo  $sugd3['oui']; ?></td>
    <td><?php echo  $sugd3['nom']; ?></td>
  </tr>
    <tr>
    <th>Souhaitez-vous être rappelé pour aborder un, ou plusieurs, sujets de façon plus approfondie ? </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo  $sugd4['oui']; ?></td>
    <td><?php echo  $sugd4['nom']; ?></td>
  </tr>
   <tr>
    <th> Y a-t-il certains aspects relatifs à l'organisation ou au programme de ces journées que vous ne souhaiteriez pas que nous renouvelions pour notre prochaine édition ?  </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo  $sugd5['oui']; ?></td>
    <td><?php echo  $sugd5['nom']; ?></td>
  </tr>
     <tr>
    <th>Avez-vous des souhaits ou des suggestions pour nos prochaines éditions du Config Partners ?  </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo  $sugd6['oui']; ?></td>
    <td><?php echo  $sugd6['nom']; ?></td>
  </tr>
</table>
