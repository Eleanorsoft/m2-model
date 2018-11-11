<?php

namespace __Namespace__\__Module__\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;
use __Namespace__\__Module__\Model\ResourceModel\__Model__ as ResourceModel;

/**
 * Class __Model__
 *
 * @package __Namespace_____Module__
 * @author __config.author_name__ <__config.author_email__>
 * @copyright Copyright (c) 2018 Eleanorsoft (https://www.eleanorsoft.com/)
 */
class __Model__ extends AbstractModel implements IdentityInterface
{
    /**
     * string
     */
    const CACHE_TAG = '__namespace_____module_____model__';

    /**
     * @var string
     */
    protected $_cacheTag = '__namespace_____module_____model__';

    /**
     * @var string
     */
    protected $_eventPrefix = '__namespace_____module_____model__';

    /**
     * @author __config.author_name__ <__config.author_email__>
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @return array
     * @author __config.author_name__ <__config.author_email__>
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @return array
     * @author __config.author_name__ <__config.author_email__>
     */
    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
