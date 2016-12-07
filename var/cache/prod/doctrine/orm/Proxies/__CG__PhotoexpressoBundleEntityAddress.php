<?php

namespace Proxies\__CG__\PhotoexpressoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Address extends \PhotoexpressoBundle\Entity\Address implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'id', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'adressname', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'address', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'adresscomplement', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'zipcode', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'city', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'country', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'isdefault', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'isfacturedefault', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'datetime', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'id', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'adressname', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'address', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'adresscomplement', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'zipcode', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'city', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'country', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'isdefault', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'isfacturedefault', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'datetime', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Address' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Address $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdressname($adressname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdressname', [$adressname]);

        return parent::setAdressname($adressname);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdressname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdressname', []);

        return parent::getAdressname();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresscomplement($adresscomplement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresscomplement', [$adresscomplement]);

        return parent::setAdresscomplement($adresscomplement);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresscomplement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresscomplement', []);

        return parent::getAdresscomplement();
    }

    /**
     * {@inheritDoc}
     */
    public function setZipcode($zipcode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipcode', [$zipcode]);

        return parent::setZipcode($zipcode);
    }

    /**
     * {@inheritDoc}
     */
    public function getZipcode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipcode', []);

        return parent::getZipcode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsdefault($isdefault)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsdefault', [$isdefault]);

        return parent::setIsdefault($isdefault);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsdefault()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsdefault', []);

        return parent::getIsdefault();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsfacturedefault($isfacturedefault)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsfacturedefault', [$isfacturedefault]);

        return parent::setIsfacturedefault($isfacturedefault);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsfacturedefault()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsfacturedefault', []);

        return parent::getIsfacturedefault();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatetime($datetime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatetime', [$datetime]);

        return parent::setDatetime($datetime);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatetime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatetime', []);

        return parent::getDatetime();
    }

    /**
     * {@inheritDoc}
     */
    public function addUser(\PhotoexpressoBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUser', [$user]);

        return parent::addUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUser(\PhotoexpressoBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUser', [$user]);

        return parent::removeUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
