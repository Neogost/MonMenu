<?php

namespace Desmay\monMenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category
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
     * @ORM\Column(name="idCategory", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategory;

    public function setWording($wording) {
        $this->wording = $wording;
        return $this;
    }
    
    public function getWording() {
        return $this->wording;
    }
    
    public function setArchive($archive) {
        $this->archive = $archive;
        return $this;
    }
    
    public function getArchive() {
        return $this->archive;
    }
}

