<?php

namespace ContainerKp5Xx2P;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getConnection', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getMetadataFactory', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getExpressionBuilder', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'beginTransaction', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getCache', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'transactional', array('func' => $func), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->transactional($func);
    }

    public function commit()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'commit', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->commit();
    }

    public function rollback()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'rollback', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getClassMetadata', array('className' => $className), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'createQuery', array('dql' => $dql), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'createNamedQuery', array('name' => $name), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'createQueryBuilder', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'flush', array('entity' => $entity), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'clear', array('entityName' => $entityName), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->clear($entityName);
    }

    public function close()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'close', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->close();
    }

    public function persist($entity)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'persist', array('entity' => $entity), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'remove', array('entity' => $entity), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'refresh', array('entity' => $entity), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'detach', array('entity' => $entity), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'merge', array('entity' => $entity), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'contains', array('entity' => $entity), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getEventManager', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getConfiguration', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'isOpen', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getUnitOfWork', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getProxyFactory', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'initializeObject', array('obj' => $obj), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getFilters', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'isFiltersStateClean', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'hasFilters', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer7f689 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder65c69) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder65c69 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder65c69->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, '__get', ['name' => $name], $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        if (isset(self::$publicPropertiesc2c2a[$name])) {
            return $this->valueHolder65c69->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
