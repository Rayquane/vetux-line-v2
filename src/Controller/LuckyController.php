<?php

// src/Controller/LuckyController.php  

namespace App\Controller;  

use Symfony\Component\HttpFoundation\Response;  
use Symfony\Component\Routing\Annotation\Route;

class LuckyController 
{
  /** 
  * @Route("/lucky/number", methods={"GET"}, name="lucky_step_one") 
  */
  public function number() 
  {
    $number = mt_rand(0, 100);

    return new Response( 
      '<html><body>Lucky number: '.$number.'</body></html>'
    );
  }
} 