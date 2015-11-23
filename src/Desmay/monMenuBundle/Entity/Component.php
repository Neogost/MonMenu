<?php

namespace Desmay\monMenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Component
 *
 * @ORM\Table(name="component")
 * @ORM\Entity
 */
class Component
{
    /**
     * @var string
     *
     * @ORM\Column(name="wording", type="string", length=20, nullable=false)
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
     * @ORM\Column(name="idComponent", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomponent;


}

