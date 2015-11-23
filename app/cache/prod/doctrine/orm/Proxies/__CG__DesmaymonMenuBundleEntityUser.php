<?php

namespace Proxies\__CG__\Desmay\monMenuBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \Desmay\monMenuBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'iduser', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'idcountry', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'idstatistics', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'idweek', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'firstname', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'lastname', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'pseudo', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'sexe', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'dateborn', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'datecreate', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'datelastvisit', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'privilege', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'archive');
        }

        return array('__isInitialized__', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'iduser', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'idcountry', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'idstatistics', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'idweek', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'firstname', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'lastname', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'pseudo', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'sexe', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'dateborn', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'datecreate', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'datelastvisit', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'privilege', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\User' . "\0" . 'archive');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIduser()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIduser();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIduser', array());

        return parent::getIduser();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdcountry($idcountry)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdcountry', array($idcountry));

        return parent::setIdcountry($idcountry);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdcountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcountry', array());

        return parent::getIdcountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdstatistics($idstatistics)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdstatistics', array($idstatistics));

        return parent::setIdstatistics($idstatistics);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdstatistics()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdstatistics', array());

        return parent::getIdstatistics();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdweek($idweek)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdweek', array($idweek));

        return parent::setIdweek($idweek);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdweek()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdweek', array());

        return parent::getIdweek();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', array($firstname));

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', array());

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', array($lastname));

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', array());

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setPseudo($pseudo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPseudo', array($pseudo));

        return parent::setPseudo($pseudo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPseudo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPseudo', array());

        return parent::getPseudo();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexe($sexe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexe', array($sexe));

        return parent::setSexe($sexe);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexe', array());

        return parent::getSexe();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateborn($dateborn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateborn', array($dateborn));

        return parent::setDateborn($dateborn);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateborn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateborn', array());

        return parent::getDateborn();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatecreate($datecreate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatecreate', array($datecreate));

        return parent::setDatecreate($datecreate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatecreate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatecreate', array());

        return parent::getDatecreate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatelastvisit($datelastvisit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatelastvisit', array($datelastvisit));

        return parent::setDatelastvisit($datelastvisit);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatelastvisit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatelastvisit', array());

        return parent::getDatelastvisit();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrivilege($privilege)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrivilege', array($privilege));

        return parent::setPrivilege($privilege);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrivilege()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrivilege', array());

        return parent::getPrivilege();
    }

    /**
     * {@inheritDoc}
     */
    public function setArchive($archive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchive', array($archive));

        return parent::setArchive($archive);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchive', array());

        return parent::getArchive();
    }

}