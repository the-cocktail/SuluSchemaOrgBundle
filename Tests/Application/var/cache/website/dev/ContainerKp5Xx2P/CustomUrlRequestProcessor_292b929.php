<?php

namespace ContainerKp5Xx2P;

class CustomUrlRequestProcessor_292b929 extends \Sulu\Bundle\CustomUrlBundle\Request\CustomUrlRequestProcessor implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sulu\Bundle\CustomUrlBundle\Request\CustomUrlRequestProcessor|null wrapped object, if the proxy is initialized
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

    public function process(\Symfony\Component\HttpFoundation\Request $request, \Sulu\Component\Webspace\Analyzer\Attributes\RequestAttributes $requestAttributes)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'process', array('request' => $request, 'requestAttributes' => $requestAttributes), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->process($request, $requestAttributes);
    }

    public function validate(\Sulu\Component\Webspace\Analyzer\Attributes\RequestAttributes $attributes)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'validate', array('attributes' => $attributes), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->validate($attributes);
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

        \Closure::bind(function (\Sulu\Bundle\CustomUrlBundle\Request\CustomUrlRequestProcessor $instance) {
            unset($instance->customUrlManager, $instance->generator, $instance->webspaceManager, $instance->environment);
        }, $instance, 'Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor')->__invoke($instance);

        $instance->initializer7f689 = $initializer;

        return $instance;
    }

    public function __construct(\Sulu\Component\CustomUrl\Manager\CustomUrlManagerInterface $customUrlManager, \Sulu\Component\CustomUrl\Generator\GeneratorInterface $generator, \Sulu\Component\Webspace\Manager\WebspaceManagerInterface $webspaceManager, $environment)
    {
        static $reflection;

        if (! $this->valueHolder65c69) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor');
            $this->valueHolder65c69 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sulu\Bundle\CustomUrlBundle\Request\CustomUrlRequestProcessor $instance) {
            unset($instance->customUrlManager, $instance->generator, $instance->webspaceManager, $instance->environment);
        }, $this, 'Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor')->__invoke($this);

        }

        $this->valueHolder65c69->__construct($customUrlManager, $generator, $webspaceManager, $environment);
    }

    public function & __get($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, '__get', ['name' => $name], $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        if (isset(self::$publicPropertiesc2c2a[$name])) {
            return $this->valueHolder65c69->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor');

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
        \Closure::bind(function (\Sulu\Bundle\CustomUrlBundle\Request\CustomUrlRequestProcessor $instance) {
            unset($instance->customUrlManager, $instance->generator, $instance->webspaceManager, $instance->environment);
        }, $this, 'Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor')->__invoke($this);
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

if (!\class_exists('CustomUrlRequestProcessor_292b929', false)) {
    \class_alias(__NAMESPACE__.'\\CustomUrlRequestProcessor_292b929', 'CustomUrlRequestProcessor_292b929', false);
}
