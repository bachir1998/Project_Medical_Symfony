<?php

namespace ContainerUiPz4Y4;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd8910 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercc51e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc64e5 = [
        
    ];

    public function getConnection()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'getConnection', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'getMetadataFactory', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'getExpressionBuilder', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'beginTransaction', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'getCache', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->getCache();
    }

    public function transactional($func)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'transactional', array('func' => $func), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->transactional($func);
    }

    public function commit()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'commit', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->commit();
    }

    public function rollback()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'rollback', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'getClassMetadata', array('className' => $className), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'createQuery', array('dql' => $dql), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'createNamedQuery', array('name' => $name), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'createQueryBuilder', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'flush', array('entity' => $entity), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'clear', array('entityName' => $entityName), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->clear($entityName);
    }

    public function close()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'close', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->close();
    }

    public function persist($entity)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'persist', array('entity' => $entity), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'remove', array('entity' => $entity), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'refresh', array('entity' => $entity), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'detach', array('entity' => $entity), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'merge', array('entity' => $entity), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'getRepository', array('entityName' => $entityName), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'contains', array('entity' => $entity), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'getEventManager', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'getConfiguration', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'isOpen', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'getUnitOfWork', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'getProxyFactory', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'initializeObject', array('obj' => $obj), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'getFilters', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'isFiltersStateClean', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'hasFilters', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return $this->valueHolderd8910->hasFilters();
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

        $instance->initializercc51e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd8910) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd8910 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd8910->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, '__get', ['name' => $name], $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        if (isset(self::$publicPropertiesc64e5[$name])) {
            return $this->valueHolderd8910->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8910;

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

        $targetObject = $this->valueHolderd8910;
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
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8910;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd8910;
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
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, '__isset', array('name' => $name), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8910;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd8910;
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
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, '__unset', array('name' => $name), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8910;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd8910;
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
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, '__clone', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        $this->valueHolderd8910 = clone $this->valueHolderd8910;
    }

    public function __sleep()
    {
        $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, '__sleep', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;

        return array('valueHolderd8910');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercc51e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercc51e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercc51e && ($this->initializercc51e->__invoke($valueHolderd8910, $this, 'initializeProxy', array(), $this->initializercc51e) || 1) && $this->valueHolderd8910 = $valueHolderd8910;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd8910;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd8910;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
