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
      '<html><body> <a href="/lucky/number">LuckyController</a>
      <html><body> <a href="/old">V1VetuxLine</a> 
      
      
      </body></html>'
    );
  }
} 
