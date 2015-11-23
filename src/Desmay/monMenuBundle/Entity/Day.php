<?php

namespace Desmay\monMenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Day
 *
 * @ORM\Table(name="day")
 * @ORM\Entity
 */
class Day
{
    /**
     * @var string
     *
     * @ORM\Column(name="wording", type="string", length=20, nullable=false)
     */
    private $wording;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDay", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idday;


}

