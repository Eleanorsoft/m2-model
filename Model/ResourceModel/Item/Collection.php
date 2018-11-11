<?php

namespace __Namespace__\__Module__\Model\ResourceModel\__Model__;

use __Namespace__\__Module__\Model\__Model__ as Model;
use __Namespace__\__Module__\Model\ResourceModel\__Model__ as ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 *
 * @package __Namespace_____Module__
 * @author __config.author_name__ <__config.author_email__>
 * @copyright Copyright (c) 2018 Eleanorsoft (https://www.eleanorsoft.com/)
 */
class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';

    /**
     * @var string
     */
    protected $_eventPrefix = '__namespace_____module_____model___collection';

    /**
     * @var string
     */
    protected $_eventObject = '__namespace_____module_____model___collection';

    /**
     * @author __config.author_name__ <__config.author_email__>
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
