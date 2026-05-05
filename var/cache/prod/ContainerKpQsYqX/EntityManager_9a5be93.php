<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder95173 = null;
    private $initializerc792a = null;
    private static $publicProperties7e607 = [
        
    ];
    public function getConnection()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getConnection', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getMetadataFactory', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getExpressionBuilder', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'beginTransaction', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getCache', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'transactional', array('func' => $func), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'commit', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->commit();
    }
    public function rollback()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'rollback', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getClassMetadata', array('className' => $className), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'createQuery', array('dql' => $dql), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'createNamedQuery', array('name' => $name), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'createQueryBuilder', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'flush', array('entity' => $entity), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'clear', array('entityName' => $entityName), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->clear($entityName);
    }
    public function close()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'close', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->close();
    }
    public function persist($entity)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'persist', array('entity' => $entity), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'remove', array('entity' => $entity), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'refresh', array('entity' => $entity), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'detach', array('entity' => $entity), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'merge', array('entity' => $entity), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'contains', array('entity' => $entity), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getEventManager', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getConfiguration', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'isOpen', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getUnitOfWork', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getProxyFactory', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'initializeObject', array('obj' => $obj), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getFilters', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'isFiltersStateClean', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'hasFilters', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc792a = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder95173) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder95173 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder95173->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, '__get', ['name' => $name], $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        if (isset(self::$publicProperties7e607[$name])) {
            return $this->valueHolder95173->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95173;
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
        $targetObject = $this->valueHolder95173;
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
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95173;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder95173;
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
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, '__isset', array('name' => $name), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95173;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder95173;
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
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, '__unset', array('name' => $name), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95173;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder95173;
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
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, '__clone', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        $this->valueHolder95173 = clone $this->valueHolder95173;
    }
    public function __sleep()
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, '__sleep', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return array('valueHolder95173');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc792a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc792a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'initializeProxy', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder95173;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder95173;
    }
}
