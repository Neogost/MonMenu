<?php

namespace Desmay\monMenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecipeCategory
 *
 * @ORM\Table(name="recipe_category")
 * @ORM\Entity
 */
class RecipeCategory
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
     * @ORM\Column(name="idCategory", type="integer", nullable=false)
     */
    private $idcategory;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRecipeCategory", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecipecategory;


}

