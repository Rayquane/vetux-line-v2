<?php

// src/Controller/OldVetuxController.php  

namespace App\Controller;  

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class OldVetuxControllerController 
{
  /** 
  * @Route("/old", methods={"GET"}, name="OldVetuxController_step_one") 
  */
  public function fusion(Request $request)
{

//Code principal !

$lines = [];
 
// on lit le premier CSV et la valeur du champ codage sert de clé
if (!($fp = fopen('..\Vetux-Line\fusion\french-data.csv', 'r'))) {
    die('échec ouverture de FICHIER1.csv en lecture');
}
while ($line = fgetcsv($fp)) {
    $lines[$line[0]] = $line;
}
fclose($fp);
 
// on lit le second CSV en rajoutant la valeur du numeroserie au tableau $lines où codage correspond
if (!($fp = fopen('Vetux-Line\fusion\german-data.csv', 'r'))) {
    die('échec ouverture de FICHIER2.csv en lecture');
}
while ($line = fgetcsv($fp)) {
    $lines[$line[30]] = $line; //je ne sais pas pourquoi ça marche mais ça marche !!!
}
fclose($fp);
 
// enfin, on écrit le fichier CSV résultant de cet assemblage (notre tableau $lines)
if (!($fp = fopen('Vetux-Line\fusion\final.csv', 'w'))) {
    die('échec ouverture de FICHIER3.csv en écriture');
}
foreach ($lines as $line) {
    fputcsv($fp, $line);
}
fclose($fp);

return new Response( 
  '<html><body>Fusion terminé</body></html>'
);

} 
}