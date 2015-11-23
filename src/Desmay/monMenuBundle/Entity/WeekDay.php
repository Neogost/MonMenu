<?php

namespace Desmay\monMenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeekDay
 *
 * @ORM\Table(name="week_day")
 * @ORM\Entity
 */
class WeekDay
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idWeek", type="integer", nullable=false)
     */
    private $idweek;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDay", type="integer", nullable=false)
     */
    private $idday;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbDay", type="integer", nullable=false)
     */
    private $nbday;

    /**
     * @var integer
     *
     * @ORM\Column(name="idWeekDay", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idweekday;


}

