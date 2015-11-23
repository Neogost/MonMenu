<?php

namespace Desmay\monMenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecipeUstencile
 *
 * @ORM\Table(name="recipe_ustencile")
 * @ORM\Entity
 */
class RecipeUstencile
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
     * @ORM\Column(name="idustencile", type="integer", nullable=false)
     */
    private $idustencile;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRecipeUstencile", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecipeustencile;


}

