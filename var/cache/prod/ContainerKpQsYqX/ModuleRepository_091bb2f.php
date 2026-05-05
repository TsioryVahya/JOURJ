<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder95173 = null;
    private $initializerc792a = null;
    private static $publicProperties7e607 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getList', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getInstalledModules', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getMustBeConfiguredModules', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getUpgradableModules', array(), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'setActionUrls', array('collection' => $collection), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        return $this->valueHolder95173->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerc792a = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder95173) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder95173 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder95173->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerc792a && ($this->initializerc792a->__invoke($valueHolder95173, $this, '__get', ['name' => $name], $this->initializerc792a) || 1) && $this->valueHolder95173 = $valueHolder95173;
        if (isset(self::$publicProperties7e607[$name])) {
            return $this->valueHolder95173->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
