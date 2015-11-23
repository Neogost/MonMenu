<?php

namespace Desmay\monMenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ustencile
 *
 * @ORM\Table(name="ustencile")
 * @ORM\Entity
 */
class Ustencile
{
    /**
     * @var string
     *
     * @ORM\Column(name="wording", type="string", length=30, nullable=false)
     */
    private $wording;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archive", type="boolean", nullable=false)
     */
    private $archive;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUstencile", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idustencile;


}

