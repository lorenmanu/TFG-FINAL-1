<?php

namespace Proxies\__CG__\DemandaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Demanda extends \DemandaBundle\Entity\Demanda implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'id', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'nombre', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'slug', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'descripcion', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'condiciones', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'rutaFoto', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'fechaInicio', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'fechaFin', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'contacto', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'conocimiento', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'palabrasClave', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'oferta'];
        }

        return ['__isInitialized__', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'id', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'nombre', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'slug', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'descripcion', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'condiciones', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'rutaFoto', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'fechaInicio', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'fechaFin', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'contacto', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'conocimiento', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'palabrasClave', '' . "\0" . 'DemandaBundle\\Entity\\Demanda' . "\0" . 'oferta'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Demanda $proxy) {
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
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', [$descripcion]);

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCondiciones($condiciones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCondiciones', [$condiciones]);

        return parent::setCondiciones($condiciones);
    }

    /**
     * {@inheritDoc}
     */
    public function getCondiciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCondiciones', []);

        return parent::getCondiciones();
    }

    /**
     * {@inheritDoc}
     */
    public function setRutaFoto($rutaFoto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRutaFoto', [$rutaFoto]);

        return parent::setRutaFoto($rutaFoto);
    }

    /**
     * {@inheritDoc}
     */
    public function getRutaFoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRutaFoto', []);

        return parent::getRutaFoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaInicio($fechaInicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaInicio', [$fechaInicio]);

        return parent::setFechaInicio($fechaInicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaInicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaInicio', []);

        return parent::getFechaInicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaFin($fechaFin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaFin', [$fechaFin]);

        return parent::setFechaFin($fechaFin);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaFin', []);

        return parent::getFechaFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setContacto($contacto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContacto', [$contacto]);

        return parent::setContacto($contacto);
    }

    /**
     * {@inheritDoc}
     */
    public function getContacto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContacto', []);

        return parent::getContacto();
    }

    /**
     * {@inheritDoc}
     */
    public function setConocimiento($conocimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConocimiento', [$conocimiento]);

        return parent::setConocimiento($conocimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getConocimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConocimiento', []);

        return parent::getConocimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setPalabrasClave($palabrasClave)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPalabrasClave', [$palabrasClave]);

        return parent::setPalabrasClave($palabrasClave);
    }

    /**
     * {@inheritDoc}
     */
    public function getPalabrasClave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPalabrasClave', []);

        return parent::getPalabrasClave();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisitasDemanda($visitasDemanda)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisitasDemanda', [$visitasDemanda]);

        return parent::setVisitasDemanda($visitasDemanda);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisitasDemanda()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisitasDemanda', []);

        return parent::getVisitasDemanda();
    }

    /**
     * {@inheritDoc}
     */
    public function setOferta(\OfertaBundle\Entity\Oferta $oferta = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOferta', [$oferta]);

        return parent::setOferta($oferta);
    }

    /**
     * {@inheritDoc}
     */
    public function getOferta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOferta', []);

        return parent::getOferta();
    }

}