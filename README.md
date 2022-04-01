# Vetux-line-v2

## Installation

- Créer un projet Symfony à l'aide de la commande :
```symfony new nomduprojet --full```

- Télécharger les fichiers du dépôt et les placer dans le projet créé
- Dans la racine du projet, exécuter la commande ```symfony server:start``` pour démarrer le serveur

## Page de l'accueil

```<?php

// src/Controller/AccueilController.php  

namespace App\Controller;  

use Symfony\Component\HttpFoundation\Response;  
use Symfony\Component\Routing\Annotation\Route;

class AccueilController 
{

// Indication du chemin pour accéder à la page
  /** 
  * @Route("/accueil", methods={"GET"}, name="accueil_step_one") 
  */

  
  public function number() 
  {
    

// Affichage des liens
    return new Response( 
      '<html><body> <a href="/lucky/number">LuckyController</a>
      <html><body> <a href="/old">V1VetuxLine</a> 
      
      
      </body></html>'
    );
  }
}
```

## Le controller Fusion

```
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
```
