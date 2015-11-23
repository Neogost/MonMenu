<?php

namespace Desmay\monMenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Budget
 *
 * @ORM\Table(name="budget")
 * @ORM\Entity
 */
class Budget
{
    /**
     * @var string
     *
     * @ORM\Column(name="wording", type="string", length=30, nullable=false)
     */
    private $wording;

    /**
     * @var integer
     *
     * @ORM\Column(name="idBudget", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbudget;


}

