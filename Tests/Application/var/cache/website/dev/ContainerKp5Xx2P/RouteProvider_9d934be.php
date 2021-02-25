<?php

namespace ContainerKp5Xx2P;

class RouteProvider_9d934be extends \Sulu\Bundle\RouteBundle\Routing\RouteProvider implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sulu\Bundle\RouteBundle\Routing\RouteProvider|null wrapped object, if the proxy is initialized
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

    public function getRouteCollectionForRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getRouteCollectionForRequest', array('request' => $request), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getRouteCollectionForRequest($request);
    }

    public function getRouteByName($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getRouteByName', array('name' => $name), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getRouteByName($name);
    }

    public function getRoutesByNames($names)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getRoutesByNames', array('names' => $names), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getRoutesByNames($names);
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

        \Closure::bind(function (\Sulu\Bundle\RouteBundle\Routing\RouteProvider $instance) {
            unset($instance->routeRepository, $instance->requestAnalyzer, $instance->routeDefaultsProvider, $instance->requestStack, $instance->proxyFactory, $instance->defaultOptions, $instance->symfonyRouteCache, $instance->routeCache);
        }, $instance, 'Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider')->__invoke($instance);

        $instance->initializer7f689 = $initializer;

        return $instance;
    }

    public function __construct(\Sulu\Bundle\RouteBundle\Entity\RouteRepositoryInterface $routeRepository, \Sulu\Component\Webspace\Analyzer\RequestAnalyzerInterface $requestAnalyzer, \Sulu\Bundle\RouteBundle\Routing\Defaults\RouteDefaultsProviderInterface $routeDefaultsProvider, \Symfony\Component\HttpFoundation\RequestStack $requestStack, ?\ProxyManager\Factory\LazyLoadingValueHolderFactory $proxyFactory = null, array $defaultOptions = [])
    {
        static $reflection;

        if (! $this->valueHolder65c69) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');
            $this->valueHolder65c69 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sulu\Bundle\RouteBundle\Routing\RouteProvider $instance) {
            unset($instance->routeRepository, $instance->requestAnalyzer, $instance->routeDefaultsProvider, $instance->requestStack, $instance->proxyFactory, $instance->defaultOptions, $instance->symfonyRouteCache, $instance->routeCache);
        }, $this, 'Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider')->__invoke($this);

        }

        $this->valueHolder65c69->__construct($routeRepository, $requestAnalyzer, $routeDefaultsProvider, $requestStack, $proxyFactory, $defaultOptions);
    }

    public function & __get($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, '__get', ['name' => $name], $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        if (isset(self::$publicPropertiesc2c2a[$name])) {
            return $this->valueHolder65c69->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');

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
        \Closure::bind(function (\Sulu\Bundle\RouteBundle\Routing\RouteProvider $instance) {
            unset($instance->routeRepository, $instance->requestAnalyzer, $instance->routeDefaultsProvider, $instance->requestStack, $instance->proxyFactory, $instance->defaultOptions, $instance->symfonyRouteCache, $instance->routeCache);
        }, $this, 'Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider')->__invoke($this);
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

if (!\class_exists('RouteProvider_9d934be', false)) {
    \class_alias(__NAMESPACE__.'\\RouteProvider_9d934be', 'RouteProvider_9d934be', false);
}
