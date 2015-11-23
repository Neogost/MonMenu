<?php

namespace Desmay\monMenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of RecipeController
 *
 * @author Kevin Desmay
 */
class RecipeController  extends Controller {
    
     public function AddAction() {
        
        return $this->render('DesmaymonMenuBundle:Recipe:add.html.twig');
    }
}
