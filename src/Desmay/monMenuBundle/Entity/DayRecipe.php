<?php

namespace Desmay\monMenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DayRecipe
 *
 * @ORM\Table(name="day_recipe")
 * @ORM\Entity
 */
class DayRecipe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDay", type="integer", nullable=false)
     */
    private $idday;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRecipe", type="integer", nullable=false)
     */
    private $idrecipe;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbRecipe", type="integer", nullable=false)
     */
    private $nbrecipe;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDayRecipe", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddayrecipe;


}

