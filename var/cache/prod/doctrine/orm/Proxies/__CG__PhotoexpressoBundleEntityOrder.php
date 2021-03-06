<?php

namespace Proxies\__CG__\PhotoexpressoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Order extends \PhotoexpressoBundle\Entity\Order implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'id', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'datetime', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'price', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'isvalidated', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'isreceived', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'ispaid', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'isprint', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'issent', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'isarchive', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'address', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'id', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'datetime', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'price', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'isvalidated', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'isreceived', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'ispaid', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'isprint', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'issent', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'isarchive', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'address', '' . "\0" . 'PhotoexpressoBundle\\Entity\\Order' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Order $proxy) {
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
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsvalidated($isvalidated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsvalidated', [$isvalidated]);

        return parent::setIsvalidated($isvalidated);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsvalidated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsvalidated', []);

        return parent::getIsvalidated();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsreceived($isreceived)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsreceived', [$isreceived]);

        return parent::setIsreceived($isreceived);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsreceived()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsreceived', []);

        return parent::getIsreceived();
    }

    /**
     * {@inheritDoc}
     */
    public function setIspaid($ispaid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIspaid', [$ispaid]);

        return parent::setIspaid($ispaid);
    }

    /**
     * {@inheritDoc}
     */
    public function getIspaid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIspaid', []);

        return parent::getIspaid();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsprint($isprint)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsprint', [$isprint]);

        return parent::setIsprint($isprint);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsprint()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsprint', []);

        return parent::getIsprint();
    }

    /**
     * {@inheritDoc}
     */
    public function setIssent($issent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIssent', [$issent]);

        return parent::setIssent($issent);
    }

    /**
     * {@inheritDoc}
     */
    public function getIssent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIssent', []);

        return parent::getIssent();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsarchive($isarchive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsarchive', [$isarchive]);

        return parent::setIsarchive($isarchive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsarchive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsarchive', []);

        return parent::getIsarchive();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress(\PhotoexpressoBundle\Entity\Address $address = NULL)
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
    public function setUser(\PhotoexpressoBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

}
