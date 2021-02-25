<?php

namespace ContainerKp5Xx2P;

class AccountRepository_21f7ad1 extends \Sulu\Bundle\ContactBundle\Entity\AccountRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sulu\Bundle\ContactBundle\Entity\AccountRepository|null wrapped object, if the proxy is initialized
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

    public function findById(int $id) : ?\Sulu\Bundle\ContactBundle\Entity\AccountInterface
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'findById', array('id' => $id), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->findById($id);
    }

    public function findOneByContactId(int $contactId) : \Sulu\Bundle\ContactBundle\Entity\AccountInterface
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'findOneByContactId', array('contactId' => $contactId), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->findOneByContactId($contactId);
    }

    public function findAccountOnly(int $id) : ?\Sulu\Bundle\ContactBundle\Entity\AccountInterface
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'findAccountOnly', array('id' => $id), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->findAccountOnly($id);
    }

    public function findAccountById(int $id, bool $contacts = false) : ?\Sulu\Bundle\ContactBundle\Entity\AccountInterface
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'findAccountById', array('id' => $id, 'contacts' => $contacts), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->findAccountById($id, $contacts);
    }

    public function findByIds(array $ids) : array
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'findByIds', array('ids' => $ids), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->findByIds($ids);
    }

    public function findByFilter(array $filter) : ?array
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'findByFilter', array('filter' => $filter), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->findByFilter($filter);
    }

    public function findAllSelect(array $fields = []) : array
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'findAllSelect', array('fields' => $fields), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->findAllSelect($fields);
    }

    public function findAccountByIdAndDelete(int $id) : ?\Sulu\Bundle\ContactBundle\Entity\AccountInterface
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'findAccountByIdAndDelete', array('id' => $id), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->findAccountByIdAndDelete($id);
    }

    public function countDistinctAccountChildrenAndContacts(int $id) : array
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'countDistinctAccountChildrenAndContacts', array('id' => $id), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->countDistinctAccountChildrenAndContacts($id);
    }

    public function findChildrenAndContacts(int $id) : ?\Sulu\Bundle\ContactBundle\Entity\AccountInterface
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'findChildrenAndContacts', array('id' => $id), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->findChildrenAndContacts($id);
    }

    public function findChildAccounts(int $id) : array
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'findChildAccounts', array('id' => $id), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->findChildAccounts($id);
    }

    public function createNew()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'createNew', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->createNew();
    }

    public function getRootNodesQueryBuilder($sortByField = null, $direction = 'asc')
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getRootNodesQueryBuilder', array('sortByField' => $sortByField, 'direction' => $direction), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getRootNodesQueryBuilder($sortByField, $direction);
    }

    public function getRootNodesQuery($sortByField = null, $direction = 'asc')
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getRootNodesQuery', array('sortByField' => $sortByField, 'direction' => $direction), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getRootNodesQuery($sortByField, $direction);
    }

    public function getRootNodes($sortByField = null, $direction = 'asc')
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getRootNodes', array('sortByField' => $sortByField, 'direction' => $direction), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getRootNodes($sortByField, $direction);
    }

    public function __call($method, $args)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, '__call', array('method' => $method, 'args' => $args), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->__call($method, $args);
    }

    public function getPathQueryBuilder($node)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getPathQueryBuilder', array('node' => $node), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getPathQueryBuilder($node);
    }

    public function getPathQuery($node)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getPathQuery', array('node' => $node), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getPathQuery($node);
    }

    public function getPath($node)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getPath', array('node' => $node), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getPath($node);
    }

    public function childrenQueryBuilder($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'childrenQueryBuilder', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->childrenQueryBuilder($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function childrenQuery($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'childrenQuery', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->childrenQuery($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function children($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'children', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->children($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function getChildrenQueryBuilder($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getChildrenQueryBuilder', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getChildrenQueryBuilder($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function getChildrenQuery($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getChildrenQuery', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getChildrenQuery($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function getChildren($node = null, $direct = false, $sortByField = null, $direction = 'ASC', $includeNode = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getChildren', array('node' => $node, 'direct' => $direct, 'sortByField' => $sortByField, 'direction' => $direction, 'includeNode' => $includeNode), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getChildren($node, $direct, $sortByField, $direction, $includeNode);
    }

    public function getLeafsQueryBuilder($root = null, $sortByField = null, $direction = 'ASC')
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getLeafsQueryBuilder', array('root' => $root, 'sortByField' => $sortByField, 'direction' => $direction), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getLeafsQueryBuilder($root, $sortByField, $direction);
    }

    public function getLeafsQuery($root = null, $sortByField = null, $direction = 'ASC')
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getLeafsQuery', array('root' => $root, 'sortByField' => $sortByField, 'direction' => $direction), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getLeafsQuery($root, $sortByField, $direction);
    }

    public function getLeafs($root = null, $sortByField = null, $direction = 'ASC')
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getLeafs', array('root' => $root, 'sortByField' => $sortByField, 'direction' => $direction), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getLeafs($root, $sortByField, $direction);
    }

    public function getNextSiblingsQueryBuilder($node, $includeSelf = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getNextSiblingsQueryBuilder', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getNextSiblingsQueryBuilder($node, $includeSelf);
    }

    public function getNextSiblingsQuery($node, $includeSelf = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getNextSiblingsQuery', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getNextSiblingsQuery($node, $includeSelf);
    }

    public function getNextSiblings($node, $includeSelf = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getNextSiblings', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getNextSiblings($node, $includeSelf);
    }

    public function getPrevSiblingsQueryBuilder($node, $includeSelf = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getPrevSiblingsQueryBuilder', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getPrevSiblingsQueryBuilder($node, $includeSelf);
    }

    public function getPrevSiblingsQuery($node, $includeSelf = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getPrevSiblingsQuery', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getPrevSiblingsQuery($node, $includeSelf);
    }

    public function getPrevSiblings($node, $includeSelf = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getPrevSiblings', array('node' => $node, 'includeSelf' => $includeSelf), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getPrevSiblings($node, $includeSelf);
    }

    public function moveDown($node, $number = 1)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'moveDown', array('node' => $node, 'number' => $number), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->moveDown($node, $number);
    }

    public function moveUp($node, $number = 1)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'moveUp', array('node' => $node, 'number' => $number), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->moveUp($node, $number);
    }

    public function removeFromTree($node)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'removeFromTree', array('node' => $node), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->removeFromTree($node);
    }

    public function reorder($node, $sortByField = null, $direction = 'ASC', $verify = true)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'reorder', array('node' => $node, 'sortByField' => $sortByField, 'direction' => $direction, 'verify' => $verify), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->reorder($node, $sortByField, $direction, $verify);
    }

    public function reorderAll($sortByField = null, $direction = 'ASC', $verify = true)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'reorderAll', array('sortByField' => $sortByField, 'direction' => $direction, 'verify' => $verify), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->reorderAll($sortByField, $direction, $verify);
    }

    public function verify()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'verify', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->verify();
    }

    public function recover()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'recover', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->recover();
    }

    public function getNodesHierarchyQueryBuilder($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getNodesHierarchyQueryBuilder', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getNodesHierarchyQueryBuilder($node, $direct, $options, $includeNode);
    }

    public function getNodesHierarchyQuery($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getNodesHierarchyQuery', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getNodesHierarchyQuery($node, $direct, $options, $includeNode);
    }

    public function getNodesHierarchy($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getNodesHierarchy', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getNodesHierarchy($node, $direct, $options, $includeNode);
    }

    public function setRepoUtils(\Gedmo\Tree\RepositoryUtilsInterface $repoUtils)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'setRepoUtils', array('repoUtils' => $repoUtils), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->setRepoUtils($repoUtils);
    }

    public function getRepoUtils()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getRepoUtils', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getRepoUtils();
    }

    public function childCount($node = null, $direct = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'childCount', array('node' => $node, 'direct' => $direct), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->childCount($node, $direct);
    }

    public function childrenHierarchy($node = null, $direct = false, array $options = [], $includeNode = false)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'childrenHierarchy', array('node' => $node, 'direct' => $direct, 'options' => $options, 'includeNode' => $includeNode), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->childrenHierarchy($node, $direct, $options, $includeNode);
    }

    public function buildTree(array $nodes, array $options = [])
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'buildTree', array('nodes' => $nodes, 'options' => $options), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->buildTree($nodes, $options);
    }

    public function buildTreeArray(array $nodes)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'buildTreeArray', array('nodes' => $nodes), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->buildTreeArray($nodes);
    }

    public function setChildrenIndex($childrenIndex)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'setChildrenIndex', array('childrenIndex' => $childrenIndex), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->setChildrenIndex($childrenIndex);
    }

    public function getChildrenIndex()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getChildrenIndex', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getChildrenIndex();
    }

    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->createQueryBuilder($alias, $indexBy);
    }

    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->createResultSetMappingBuilder($alias);
    }

    public function createNamedQuery($queryName)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->createNamedQuery($queryName);
    }

    public function createNativeNamedQuery($queryName)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->createNativeNamedQuery($queryName);
    }

    public function clear()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'clear', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->clear();
    }

    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->find($id, $lockMode, $lockVersion);
    }

    public function findAll()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'findAll', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->findAll();
    }

    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->findOneBy($criteria, $orderBy);
    }

    public function count(array $criteria)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'count', array('criteria' => $criteria), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->count($criteria);
    }

    public function getClassName()
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'getClassName', array(), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->getClassName();
    }

    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'matching', array('criteria' => $criteria), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->matching($criteria);
    }

    public function findByFilters($filters, $page, $pageSize, $limit, $locale, $options = [], ?\Sulu\Component\Security\Authentication\UserInterface $user = null, $entityClass = null, $entityAlias = null, $permission = null)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, 'findByFilters', array('filters' => $filters, 'page' => $page, 'pageSize' => $pageSize, 'limit' => $limit, 'locale' => $locale, 'options' => $options, 'user' => $user, 'entityClass' => $entityClass, 'entityAlias' => $entityAlias, 'permission' => $permission), $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        return $this->valueHolder65c69->findByFilters($filters, $page, $pageSize, $limit, $locale, $options, $user, $entityClass, $entityAlias, $permission);
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

        unset($instance->listener, $instance->repoUtils, $instance->_entityName, $instance->_em, $instance->_class);

        \Closure::bind(function (\Sulu\Bundle\ContactBundle\Entity\AccountRepository $instance) {
            unset($instance->accessControlQueryEnhancer);
        }, $instance, 'Sulu\\Bundle\\ContactBundle\\Entity\\AccountRepository')->__invoke($instance);

        $instance->initializer7f689 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;

        if (! $this->valueHolder65c69) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\ContactBundle\\Entity\\AccountRepository');
            $this->valueHolder65c69 = $reflection->newInstanceWithoutConstructor();
        unset($this->listener, $this->repoUtils, $this->_entityName, $this->_em, $this->_class);

        \Closure::bind(function (\Sulu\Bundle\ContactBundle\Entity\AccountRepository $instance) {
            unset($instance->accessControlQueryEnhancer);
        }, $this, 'Sulu\\Bundle\\ContactBundle\\Entity\\AccountRepository')->__invoke($this);

        }

        $this->valueHolder65c69->__construct($em, $class);
    }

    public function & __get($name)
    {
        $this->initializer7f689 && ($this->initializer7f689->__invoke($valueHolder65c69, $this, '__get', ['name' => $name], $this->initializer7f689) || 1) && $this->valueHolder65c69 = $valueHolder65c69;

        if (isset(self::$publicPropertiesc2c2a[$name])) {
            return $this->valueHolder65c69->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\ContactBundle\\Entity\\AccountRepository');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\ContactBundle\\Entity\\AccountRepository');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\ContactBundle\\Entity\\AccountRepository');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\ContactBundle\\Entity\\AccountRepository');

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
        unset($this->listener, $this->repoUtils, $this->_entityName, $this->_em, $this->_class);

        \Closure::bind(function (\Sulu\Bundle\ContactBundle\Entity\AccountRepository $instance) {
            unset($instance->accessControlQueryEnhancer);
        }, $this, 'Sulu\\Bundle\\ContactBundle\\Entity\\AccountRepository')->__invoke($this);
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

if (!\class_exists('AccountRepository_21f7ad1', false)) {
    \class_alias(__NAMESPACE__.'\\AccountRepository_21f7ad1', 'AccountRepository_21f7ad1', false);
}
