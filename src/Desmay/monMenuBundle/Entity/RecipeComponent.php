<?php

namespace Desmay\monMenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecipeComponent
 *
 * @ORM\Table(name="recipe_component")
 * @ORM\Entity
 */
class RecipeComponent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRecipe", type="integer", nullable=false)
     */
    private $idrecipe;

    /**
     * @var integer
     *
     * @ORM\Column(name="idComponent", type="integer", nullable=false)
     */
    private $idcomponent;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRecipeComponent", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecipecomponent;


}

