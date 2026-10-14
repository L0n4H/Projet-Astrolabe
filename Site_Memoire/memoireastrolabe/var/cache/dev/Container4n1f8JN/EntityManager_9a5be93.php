<?php

namespace Container4n1f8JN;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7da7f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerad2c6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7f9fe = [
        
    ];

    public function getConnection()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'getConnection', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'getMetadataFactory', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'getExpressionBuilder', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'beginTransaction', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'getCache', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'transactional', array('func' => $func), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'commit', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->commit();
    }

    public function rollback()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'rollback', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'getClassMetadata', array('className' => $className), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'createQuery', array('dql' => $dql), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'createNamedQuery', array('name' => $name), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'createQueryBuilder', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'flush', array('entity' => $entity), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'clear', array('entityName' => $entityName), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->clear($entityName);
    }

    public function close()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'close', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->close();
    }

    public function persist($entity)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'persist', array('entity' => $entity), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'remove', array('entity' => $entity), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'refresh', array('entity' => $entity), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'detach', array('entity' => $entity), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'merge', array('entity' => $entity), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'contains', array('entity' => $entity), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'getEventManager', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'getConfiguration', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'isOpen', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'getUnitOfWork', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'getProxyFactory', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'initializeObject', array('obj' => $obj), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'getFilters', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'isFiltersStateClean', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'hasFilters', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return $this->valueHolder7da7f->hasFilters();
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

        $instance->initializerad2c6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7da7f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7da7f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7da7f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, '__get', ['name' => $name], $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        if (isset(self::$publicProperties7f9fe[$name])) {
            return $this->valueHolder7da7f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7da7f;

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

        $targetObject = $this->valueHolder7da7f;
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
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7da7f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7da7f;
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
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, '__isset', array('name' => $name), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7da7f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7da7f;
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
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, '__unset', array('name' => $name), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7da7f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7da7f;
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
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, '__clone', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        $this->valueHolder7da7f = clone $this->valueHolder7da7f;
    }

    public function __sleep()
    {
        $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, '__sleep', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;

        return array('valueHolder7da7f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerad2c6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerad2c6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerad2c6 && ($this->initializerad2c6->__invoke($valueHolder7da7f, $this, 'initializeProxy', array(), $this->initializerad2c6) || 1) && $this->valueHolder7da7f = $valueHolder7da7f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7da7f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7da7f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
