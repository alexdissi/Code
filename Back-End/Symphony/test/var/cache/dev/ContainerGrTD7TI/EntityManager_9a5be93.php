<?php

namespace ContainerGrTD7TI;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3e52c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8c9cf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfa6c5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'getConnection', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'getMetadataFactory', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'getExpressionBuilder', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'beginTransaction', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'getCache', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'transactional', array('func' => $func), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'commit', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->commit();
    }

    public function rollback()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'rollback', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'getClassMetadata', array('className' => $className), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'createQuery', array('dql' => $dql), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'createNamedQuery', array('name' => $name), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'createQueryBuilder', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'flush', array('entity' => $entity), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'clear', array('entityName' => $entityName), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->clear($entityName);
    }

    public function close()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'close', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->close();
    }

    public function persist($entity)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'persist', array('entity' => $entity), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'remove', array('entity' => $entity), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'refresh', array('entity' => $entity), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'detach', array('entity' => $entity), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'merge', array('entity' => $entity), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'contains', array('entity' => $entity), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'getEventManager', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'getConfiguration', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'isOpen', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'getUnitOfWork', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'getProxyFactory', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'initializeObject', array('obj' => $obj), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'getFilters', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'isFiltersStateClean', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'hasFilters', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return $this->valueHolder3e52c->hasFilters();
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

        $instance->initializer8c9cf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3e52c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3e52c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3e52c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, '__get', ['name' => $name], $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        if (isset(self::$publicPropertiesfa6c5[$name])) {
            return $this->valueHolder3e52c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e52c;

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

        $targetObject = $this->valueHolder3e52c;
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
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e52c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3e52c;
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
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, '__isset', array('name' => $name), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e52c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3e52c;
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
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, '__unset', array('name' => $name), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e52c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3e52c;
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
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, '__clone', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        $this->valueHolder3e52c = clone $this->valueHolder3e52c;
    }

    public function __sleep()
    {
        $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, '__sleep', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;

        return array('valueHolder3e52c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8c9cf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8c9cf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8c9cf && ($this->initializer8c9cf->__invoke($valueHolder3e52c, $this, 'initializeProxy', array(), $this->initializer8c9cf) || 1) && $this->valueHolder3e52c = $valueHolder3e52c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3e52c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3e52c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
