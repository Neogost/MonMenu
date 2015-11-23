<?php

namespace Desmay\monMenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Week
 *
 * @ORM\Table(name="week")
 * @ORM\Entity
 */
class Week
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idWeek", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idweek;


}

