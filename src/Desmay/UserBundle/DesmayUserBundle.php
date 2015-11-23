<?php

namespace Desmay\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DesmayUserBundle extends Bundle
{
    
    public function getParent() {
        return 'FOSUserBundle';
    }
}
