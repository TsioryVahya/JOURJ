<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderd4e8f = null;
    private $initializer0eafa = null;
    private static $publicPropertiesb2319 = [
        
    ];
    public function getConnection()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'getConnection', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'getMetadataFactory', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'getExpressionBuilder', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'beginTransaction', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'getCache', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->getCache();
    }
    public function transactional($func)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'transactional', array('func' => $func), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'commit', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->commit();
    }
    public function rollback()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'rollback', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'getClassMetadata', array('className' => $className), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'createQuery', array('dql' => $dql), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'createNamedQuery', array('name' => $name), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'createQueryBuilder', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'flush', array('entity' => $entity), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'clear', array('entityName' => $entityName), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->clear($entityName);
    }
    public function close()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'close', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->close();
    }
    public function persist($entity)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'persist', array('entity' => $entity), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'remove', array('entity' => $entity), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'refresh', array('entity' => $entity), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'detach', array('entity' => $entity), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'merge', array('entity' => $entity), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'contains', array('entity' => $entity), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'getEventManager', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'getConfiguration', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'isOpen', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'getUnitOfWork', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'getProxyFactory', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'initializeObject', array('obj' => $obj), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'getFilters', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'isFiltersStateClean', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'hasFilters', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return $this->valueHolderd4e8f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer0eafa = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderd4e8f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd4e8f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderd4e8f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, '__get', ['name' => $name], $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        if (isset(self::$publicPropertiesb2319[$name])) {
            return $this->valueHolderd4e8f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4e8f;
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
        $targetObject = $this->valueHolderd4e8f;
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
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4e8f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderd4e8f;
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
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, '__isset', array('name' => $name), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4e8f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderd4e8f;
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
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, '__unset', array('name' => $name), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4e8f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd4e8f;
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
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, '__clone', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        $this->valueHolderd4e8f = clone $this->valueHolderd4e8f;
    }
    public function __sleep()
    {
        $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, '__sleep', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
        return array('valueHolderd4e8f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0eafa = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0eafa;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer0eafa && ($this->initializer0eafa->__invoke($valueHolderd4e8f, $this, 'initializeProxy', array(), $this->initializer0eafa) || 1) && $this->valueHolderd4e8f = $valueHolderd4e8f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd4e8f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd4e8f;
    }
}
