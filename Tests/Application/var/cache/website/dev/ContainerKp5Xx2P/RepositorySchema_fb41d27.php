<?php

namespace ContainerKp5Xx2P;

class RepositorySchema_fb41d27 extends \Jackalope\Transport\DoctrineDBAL\RepositorySchema implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Jackalope\Transport\DoctrineDBAL\RepositorySchema|null wrapped object, if the proxy is initialized
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

    public function addToSchema(\Doctrine\DBAL\Schema\Schema $schema)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'addToSchema', array('schema' => $schema), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->addToSchema($schema);
    }

    public function reset()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'reset', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->reset();
    }

    public function hasExplicitForeignKeyIndexes()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'hasExplicitForeignKeyIndexes', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->hasExplicitForeignKeyIndexes();
    }

    public function getNamespaces()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getNamespaces', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getNamespaces();
    }

    public function getTables()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getTables', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getTables();
    }

    public function getTable($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getTable', array('name' => $name), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getTable($name);
    }

    public function hasNamespace($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'hasNamespace', array('name' => $name), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->hasNamespace($name);
    }

    public function hasTable($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'hasTable', array('name' => $name), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->hasTable($name);
    }

    public function getTableNames()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getTableNames', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getTableNames();
    }

    public function hasSequence($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'hasSequence', array('name' => $name), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->hasSequence($name);
    }

    public function getSequence($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getSequence', array('name' => $name), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getSequence($name);
    }

    public function getSequences()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getSequences', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getSequences();
    }

    public function createNamespace($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'createNamespace', array('name' => $name), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->createNamespace($name);
    }

    public function createTable($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'createTable', array('name' => $name), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->createTable($name);
    }

    public function renameTable($oldName, $newName)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'renameTable', array('oldName' => $oldName, 'newName' => $newName), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->renameTable($oldName, $newName);
    }

    public function dropTable($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'dropTable', array('name' => $name), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->dropTable($name);
    }

    public function createSequence($name, $allocationSize = 1, $initialValue = 1)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'createSequence', array('name' => $name, 'allocationSize' => $allocationSize, 'initialValue' => $initialValue), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->createSequence($name, $allocationSize, $initialValue);
    }

    public function dropSequence($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'dropSequence', array('name' => $name), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->dropSequence($name);
    }

    public function toSql(\Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'toSql', array('platform' => $platform), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->toSql($platform);
    }

    public function toDropSql(\Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'toDropSql', array('platform' => $platform), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->toDropSql($platform);
    }

    public function getMigrateToSql(\Doctrine\DBAL\Schema\Schema $toSchema, \Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getMigrateToSql', array('toSchema' => $toSchema, 'platform' => $platform), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getMigrateToSql($toSchema, $platform);
    }

    public function getMigrateFromSql(\Doctrine\DBAL\Schema\Schema $fromSchema, \Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getMigrateFromSql', array('fromSchema' => $fromSchema, 'platform' => $platform), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getMigrateFromSql($fromSchema, $platform);
    }

    public function visit(\Doctrine\DBAL\Schema\Visitor\Visitor $visitor)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'visit', array('visitor' => $visitor), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->visit($visitor);
    }

    public function isInDefaultNamespace($defaultNamespaceName)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'isInDefaultNamespace', array('defaultNamespaceName' => $defaultNamespaceName), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->isInDefaultNamespace($defaultNamespaceName);
    }

    public function getNamespaceName()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getNamespaceName', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getNamespaceName();
    }

    public function getShortestName($defaultNamespaceName)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getShortestName', array('defaultNamespaceName' => $defaultNamespaceName), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getShortestName($defaultNamespaceName);
    }

    public function getFullQualifiedName($defaultNamespaceName)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getFullQualifiedName', array('defaultNamespaceName' => $defaultNamespaceName), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getFullQualifiedName($defaultNamespaceName);
    }

    public function isQuoted()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'isQuoted', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->isQuoted();
    }

    public function getName()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getName', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getName();
    }

    public function getQuotedName(\Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getQuotedName', array('platform' => $platform), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getQuotedName($platform);
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

        unset($instance->_tables, $instance->_sequences, $instance->_schemaConfig, $instance->_name, $instance->_namespace, $instance->_quoted);

        \Closure::bind(function (\Jackalope\Transport\DoctrineDBAL\RepositorySchema $instance) {
            unset($instance->connection, $instance->maxIndexLength);
        }, $instance, 'Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema')->__invoke($instance);

        \Closure::bind(function (\Doctrine\DBAL\Schema\Schema $instance) {
            unset($instance->namespaces);
        }, $instance, 'Doctrine\\DBAL\\Schema\\Schema')->__invoke($instance);

        $instance->initializer7f689 = $initializer;

        return $instance;
    }

    public function __construct(array $options = [], ?\Doctrine\DBAL\Connection $connection = null)
    {
        static $reflection;

        if (! $this->valueHolder65c69) {
            $reflection = $reflection ?? new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');
            $this->valueHolder65c69 = $reflection->newInstanceWithoutConstructor();
        unset($this->_tables, $this->_sequences, $this->_schemaConfig, $this->_name, $this->_namespace, $this->_quoted);

        \Closure::bind(function (\Jackalope\Transport\DoctrineDBAL\RepositorySchema $instance) {
            unset($instance->connection, $instance->maxIndexLength);
        }, $this, 'Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema')->__invoke($this);

        \Closure::bind(function (\Doctrine\DBAL\Schema\Schema $instance) {
            unset($instance->namespaces);
        }, $this, 'Doctrine\\DBAL\\Schema\\Schema')->__invoke($this);

        }

        $this->valueHolder65c69->__construct($options, $connection);
    }

    public function & __get($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, '__get', ['name' => $name], $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        if (isset(self::$publicPropertiesc2c2a[$name])) {
            return $this->valueHolder65c69->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');

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

        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');

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

        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');

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

        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');

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
        unset($this->_tables, $this->_sequences, $this->_schemaConfig, $this->_name, $this->_namespace, $this->_quoted);

        \Closure::bind(function (\Jackalope\Transport\DoctrineDBAL\RepositorySchema $instance) {
            unset($instance->connection, $instance->maxIndexLength);
        }, $this, 'Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema')->__invoke($this);

        \Closure::bind(function (\Doctrine\DBAL\Schema\Schema $instance) {
            unset($instance->namespaces);
        }, $this, 'Doctrine\\DBAL\\Schema\\Schema')->__invoke($this);
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

if (!\class_exists('RepositorySchema_fb41d27', false)) {
    \class_alias(__NAMESPACE__.'\\RepositorySchema_fb41d27', 'RepositorySchema_fb41d27', false);
}
