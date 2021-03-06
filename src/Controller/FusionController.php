<?php

// src/Controller/FusionController.php  

namespace App\Controller;  

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class FusionControllerController 
{
  /** 
  * @Route("/fusion", methods={"GET"}, name="FusionController_step_one") 
  */
  public function fusion(Request $request)
{

//Code principal !

$lines = [];
 
// on lit le premier CSV et la valeur du champ codage sert de clé
if (!($fp = fopen('/home/evan/Bureau/angular/Vetux-Line/fusion/french-data.csv', 'r'))) {
    die('échec ouverture de FICHIER1.csv en lecture');
}
while ($line = fgetcsv($fp)) {
    $lines[$line[0]] = $line;
}
fclose($fp);
 
// on lit le second CSV en rajoutant la valeur du numeroserie au tableau $lines où codage correspond
if (!($fp = fopen('/home/evan/Bureau/angular/Vetux-Line/fusion/german-data.csv', 'r'))) {
    die('échec ouverture de FICHIER2.csv en lecture');
}
while ($line = fgetcsv($fp)) {
    $lines[$line[30]] = $line; //je ne sais pas pourquoi ça marche mais ça marche !!!
}
fclose($fp);
 
// enfin, on écrit le fichier CSV résultant de cet assemblage (notre tableau $lines)
if (!($fp = fopen('/home/evan/Bureau/angular/Vetux-Line/final/final.csv', 'w'))) {
    die('échec ouverture de FICHIER3.csv en écriture');
}
foreach ($lines as $line) {
    fputcsv($fp, $line);
}
fclose($fp);

return new Response( 
  '<html><body>Fusion terminée </br></br>
  Vous pouvez la récupérer dans le dossier "final" se trouvant a la racine de lapplication
  </body></html>'
);

} 
}