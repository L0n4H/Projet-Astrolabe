<?php

namespace ContainerL1f2LSD;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb75f7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerab715 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa486d = [
        
    ];

    public function getConnection()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'getConnection', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'getMetadataFactory', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'getExpressionBuilder', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'beginTransaction', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'getCache', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->getCache();
    }

    public function transactional($func)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'transactional', array('func' => $func), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'wrapInTransaction', array('func' => $func), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'commit', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->commit();
    }

    public function rollback()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'rollback', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'getClassMetadata', array('className' => $className), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'createQuery', array('dql' => $dql), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'createNamedQuery', array('name' => $name), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'createQueryBuilder', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'flush', array('entity' => $entity), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'clear', array('entityName' => $entityName), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->clear($entityName);
    }

    public function close()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'close', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->close();
    }

    public function persist($entity)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'persist', array('entity' => $entity), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'remove', array('entity' => $entity), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'refresh', array('entity' => $entity), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'detach', array('entity' => $entity), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'merge', array('entity' => $entity), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'getRepository', array('entityName' => $entityName), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'contains', array('entity' => $entity), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'getEventManager', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'getConfiguration', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'isOpen', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'getUnitOfWork', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'getProxyFactory', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'initializeObject', array('obj' => $obj), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'getFilters', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'isFiltersStateClean', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'hasFilters', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return $this->valueHolderb75f7->hasFilters();
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

        $instance->initializerab715 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb75f7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb75f7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb75f7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, '__get', ['name' => $name], $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        if (isset(self::$publicPropertiesa486d[$name])) {
            return $this->valueHolderb75f7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb75f7;

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

        $targetObject = $this->valueHolderb75f7;
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
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb75f7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb75f7;
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
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, '__isset', array('name' => $name), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb75f7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb75f7;
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
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, '__unset', array('name' => $name), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb75f7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb75f7;
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
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, '__clone', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        $this->valueHolderb75f7 = clone $this->valueHolderb75f7;
    }

    public function __sleep()
    {
        $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, '__sleep', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;

        return array('valueHolderb75f7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerab715 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerab715;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerab715 && ($this->initializerab715->__invoke($valueHolderb75f7, $this, 'initializeProxy', array(), $this->initializerab715) || 1) && $this->valueHolderb75f7 = $valueHolderb75f7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb75f7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb75f7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
