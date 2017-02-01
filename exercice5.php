<?php
function fusion($chaine1, $chaine2){
  return $chaine1 . $chaine2;
}
$coucou = 'Bonjour';
$toutLeMonde = 'tout le monde';
echo fusion($coucou, $toutLeMonde);
echo '<br>';
echo fusion($toutLeMonde, $coucou);
?>
