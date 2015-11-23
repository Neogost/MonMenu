<?php

namespace Desmay\monMenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistics
 *
 * @ORM\Table(name="statistics")
 * @ORM\Entity
 */
class Statistics
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbReporting", type="integer", nullable=false)
     */
    private $nbreporting;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbCreateRecipe", type="integer", nullable=false)
     */
    private $nbcreaterecipe;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbVisit", type="integer", nullable=false)
     */
    private $nbvisit;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStatistics", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstatistics;


}

