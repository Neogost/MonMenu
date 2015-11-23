<?php

namespace Desmay\monMenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recipe
 *
 * @ORM\Table(name="recipe")
 * @ORM\Entity
 */
class Recipe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idBudget", type="integer", nullable=false)
     */
    private $idbudget;

    /**
     * @var integer
     *
     * @ORM\Column(name="idType", type="integer", nullable=false)
     */
    private $idtype;

    /**
     * @var string
     *
     * @ORM\Column(name="shortDescription", type="string", length=100, nullable=false)
     */
    private $shortdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=300, nullable=true)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="imagePath", type="string", length=300, nullable=true)
     */
    private $imagepath;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbPeople", type="integer", nullable=false)
     */
    private $nbpeople;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbVote", type="integer", nullable=false)
     */
    private $nbvote;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbLike", type="integer", nullable=false)
     */
    private $nblike;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbDislike", type="integer", nullable=false)
     */
    private $nbdislike;

    /**
     * @var integer
     *
     * @ORM\Column(name="dificult", type="integer", nullable=false)
     */
    private $dificult;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archive", type="boolean", nullable=false)
     */
    private $archive;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRecipe", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecipe;


}

