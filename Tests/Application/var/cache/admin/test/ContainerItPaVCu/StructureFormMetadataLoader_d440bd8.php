<?php

namespace ContainerItPaVCu;

class StructureFormMetadataLoader_d440bd8 extends \Sulu\Bundle\AdminBundle\Metadata\FormMetadata\StructureFormMetadataLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sulu\Bundle\AdminBundle\Metadata\FormMetadata\StructureFormMetadataLoader|null wrapped object, if the proxy is initialized
     */
    private $valueHolder65c69 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7f689 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc2c2a = [
        
    ];

    public function getMetadata(string $key, ?string $locale = null, array $metadataOptions = []) : ?\Sulu\Bundle\AdminBundle\Metadata\MetadataInterface
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getMetadata', array('key' => $key, 'locale' => $locale, 'metadataOptions' => $metadataOptions), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getMetadata($key, $locale, $metadataOptions);
    }

    public function warmUp($cacheDir)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'warmUp', array('cacheDir' => $cacheDir), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->warmUp($cacheDir);
    }

    public function isOptional()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'isOptional', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->isOptional();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Sulu\Bundle\AdminBundle\Metadata\FormMetadata\StructureFormMetadataLoader $instance) {
            unset($instance->structureMetadataFactory, $instance->formMetadataMapper, $instance->webspaceManager, $instance->fieldMetadataValidator, $instance->defaultTypes, $instance->locales, $instance->cacheDir, $instance->debug);
        }, $instance, 'Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader')->__invoke($instance);

        $instance->initializer7f689 = $initializer;

        return $instance;
    }

    public function __construct(\Sulu\Component\Content\Metadata\Factory\StructureMetadataFactoryInterface $structureMetadataFactory, \Sulu\Bundle\AdminBundle\FormMetadata\FormMetadataMapper $formMetadataMapper, \Sulu\Component\Webspace\Manager\WebspaceManagerInterface $webspaceManager, \Sulu\Bundle\AdminBundle\Metadata\FormMetadata\Validation\FieldMetadataValidatorInterface $fieldMetadataValidator, array $defaultTypes, array $locales, string $cacheDir, bool $debug)
    {
        static $reflection;

        if (! $this->valueHolder65c69) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');
            $this->valueHolder65c69 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sulu\Bundle\AdminBundle\Metadata\FormMetadata\StructureFormMetadataLoader $instance) {
            unset($instance->structureMetadataFactory, $instance->formMetadataMapper, $instance->webspaceManager, $instance->fieldMetadataValidator, $instance->defaultTypes, $instance->locales, $instance->cacheDir, $instance->debug);
        }, $this, 'Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader')->__invoke($this);

        }

        $this->valueHolder65c69->__construct($structureMetadataFactory, $formMetadataMapper, $webspaceManager, $fieldMetadataValidator, $defaultTypes, $locales, $cacheDir, $debug);
    }

    public function & __get($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, '__get', ['name' => $name], $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        if (isset(self::$publicPropertiesc2c2a[$name])) {
            return $this->valueHolder65c69->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder65c69;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder65c69;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder65c69;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder65c69;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, '__isset', array('name' => $name), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder65c69;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder65c69;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, '__unset', array('name' => $name), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder65c69;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder65c69;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, '__clone', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        $this->valueHolder65c69 = clone $this->valueHolder65c69;
    }

    public function __sleep()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, '__sleep', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return array('valueHolder65c69');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Sulu\Bundle\AdminBundle\Metadata\FormMetadata\StructureFormMetadataLoader $instance) {
            unset($instance->structureMetadataFactory, $instance->formMetadataMapper, $instance->webspaceManager, $instance->fieldMetadataValidator, $instance->defaultTypes, $instance->locales, $instance->cacheDir, $instance->debug);
        }, $this, 'Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7f689 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7f689;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'initializeProxy', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder65c69;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder65c69;
    }
}

if (!\class_exists('StructureFormMetadataLoader_d440bd8', false)) {
    \class_alias(__NAMESPACE__.'\\StructureFormMetadataLoader_d440bd8', 'StructureFormMetadataLoader_d440bd8', false);
}
