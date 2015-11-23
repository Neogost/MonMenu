<?php

namespace Desmay\monMenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of MenuController
 *
 * @author Kevin Desmay
 */
class MenuController extends Controller {
    
    public function indexAction() {
        
        return $this->render('DesmaymonMenuBundle:Menu:index.html.twig');
    }
}
