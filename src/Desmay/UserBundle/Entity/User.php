<?php

namespace Desmay\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="pseudo", columns={"pseudo"})})
 * @ORM\Entity
 */
class User extends BaseUser {

    /**
     * @var integer
     *
     * @ORM\Column(name="idCountry", type="integer", nullable=true)
     */
    private $idcountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStatistics", type="integer", nullable=true)
     */
    private $idstatistics;

    /**
     * @var integer
     *
     * @ORM\Column(name="idWeek", type="integer", nullable=true)
     */
    private $idweek;

    /**
     * @var string
     * @Assert\Length(
     *     min=3,
     *     max=50,
     *     minMessage="The first name is to short.",
     *     maxMessage="The first name is to long.",
     *     groups={"Registration", "Profile"}
     * )
     * @ORM\Column(name="firstName", type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     * @Assert\Length(
     *     min=3,
     *     max=50,
     *     minMessage="The last name is to short.",
     *     maxMessage="The last name is to long.",
     *     groups={"Registration", "Profile"}
     * )
     * @ORM\Column(name="lastName", type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sexe", type="boolean", nullable=false)
     */
    private $sexe;

    /**
     * @var \DateTime
     * @ORM\Column(name="dateBorn", type="date", nullable=false)
     */
    private $dateborn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreate", type="date", nullable=true)
     */
    private $datecreate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * Set idcountry
     *
     * @param integer $idcountry
     *
     * @return User
     */
    public function setIdcountry($idcountry) {
        $this->idcountry = $idcountry;

        return $this;
    }

    /**
     * Get idcountry
     *
     * @return integer
     */
    public function getIdcountry() {
        return $this->idcountry;
    }

    /**
     * Set idstatistics
     *
     * @param integer $idstatistics
     *
     * @return User
     */
    public function setIdstatistics($idstatistics) {
        $this->idstatistics = $idstatistics;

        return $this;
    }

    /**
     * Get idstatistics
     *
     * @return integer
     */
    public function getIdstatistics() {
        return $this->idstatistics;
    }

    /**
     * Set idweek
     *
     * @param integer $idweek
     *
     * @return User
     */
    public function setIdweek($idweek) {
        $this->idweek = $idweek;

        return $this;
    }

    /**
     * Get idweek
     *
     * @return integer
     */
    public function getIdweek() {
        return $this->idweek;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return User
     */
    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo() {
        return $this->pseudo;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set sexe
     *
     * @param boolean $sexe
     *
     * @return User
     */
    public function setSexe($sexe) {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return boolean
     */
    public function getSexe() {
        return $this->sexe;
    }

    /**
     * Set dateborn
     *
     * @param \DateTime $dateborn
     *
     * @return User
     */
    public function setDateborn($dateborn) {
        $this->dateborn = $dateborn;

        return $this;
    }

    /**
     * Get dateborn
     *
     * @return \DateTime
     */
    public function getDateborn() {
        return $this->dateborn;
    }

    /**
     * Set datecreate
     *
     * @param \DateTime $datecreate
     *
     * @return User
     */
    public function setDatecreate($datecreate) {
        $this->datecreate = $datecreate;

        return $this;
    }

    /**
     * Get datecreate
     *
     * @return \DateTime
     */
    public function getDatecreate() {
        return $this->datecreate;
    }

    /**
     * Set datelastvisit
     *
     * @param \DateTime $datelastvisit
     *
     * @return User
     */
    public function setDatelastvisit($datelastvisit) {
        $this->datelastvisit = $datelastvisit;

        return $this;
    }

    /**
     * Get datelastvisit
     *
     * @return \DateTime
     */
    public function getDatelastvisit() {
        return $this->datelastvisit;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role) {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * Set archive
     *
     * @param boolean $archive
     *
     * @return User
     */
    public function setArchive($archive) {
        $this->archive = $archive;

        return $this;
    }

    /**
     * Get archive
     *
     * @return boolean
     */
    public function getArchive() {
        return $this->archive;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

}
