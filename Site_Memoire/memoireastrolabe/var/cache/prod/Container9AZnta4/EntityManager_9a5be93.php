<?php

namespace Container9AZnta4;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderff57d = null;
    private $initializer04e5b = null;
    private static $publicPropertiesfa474 = [
        
    ];
    public function getConnection()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'getConnection', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'getMetadataFactory', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'getExpressionBuilder', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'beginTransaction', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'getCache', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->getCache();
    }
    public function transactional($func)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'transactional', array('func' => $func), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'commit', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->commit();
    }
    public function rollback()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'rollback', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'getClassMetadata', array('className' => $className), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'createQuery', array('dql' => $dql), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'createNamedQuery', array('name' => $name), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'createQueryBuilder', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'flush', array('entity' => $entity), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'clear', array('entityName' => $entityName), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->clear($entityName);
    }
    public function close()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'close', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->close();
    }
    public function persist($entity)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'persist', array('entity' => $entity), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'remove', array('entity' => $entity), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'refresh', array('entity' => $entity), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'detach', array('entity' => $entity), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'merge', array('entity' => $entity), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'contains', array('entity' => $entity), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'getEventManager', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'getConfiguration', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'isOpen', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'getUnitOfWork', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'getProxyFactory', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'initializeObject', array('obj' => $obj), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'getFilters', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'isFiltersStateClean', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'hasFilters', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return $this->valueHolderff57d->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer04e5b = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderff57d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderff57d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderff57d->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, '__get', ['name' => $name], $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        if (isset(self::$publicPropertiesfa474[$name])) {
            return $this->valueHolderff57d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff57d;
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
        $targetObject = $this->valueHolderff57d;
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
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff57d;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderff57d;
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
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, '__isset', array('name' => $name), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff57d;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderff57d;
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
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, '__unset', array('name' => $name), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff57d;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderff57d;
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
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, '__clone', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        $this->valueHolderff57d = clone $this->valueHolderff57d;
    }
    public function __sleep()
    {
        $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, '__sleep', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
        return array('valueHolderff57d');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer04e5b = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer04e5b;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer04e5b && ($this->initializer04e5b->__invoke($valueHolderff57d, $this, 'initializeProxy', array(), $this->initializer04e5b) || 1) && $this->valueHolderff57d = $valueHolderff57d;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderff57d;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderff57d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
