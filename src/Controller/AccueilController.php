<?php

// src/Controller/AccueilController.php  

namespace App\Controller;  

use Symfony\Component\HttpFoundation\Response;  
use Symfony\Component\Routing\Annotation\Route;

class AccueilController 
{
  /** 
  * @Route("/accueil", methods={"GET"}, name="accueil_step_one") 
  */

  
  public function number() 
  {
    

    
    return new Response( 
      '<html><body> <a href="/lucky/number">test</a>
      <html><body> <a href="/fusion">Commencer la fusion</a> 
      
      
      
      </body></html>'
    );
  }
} 
