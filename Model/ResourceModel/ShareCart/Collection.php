<?php

declare(strict_types=1);

namespace ArslanFarrukh\ShareCart\Model\ResourceModel\ShareCart;

use Magento\Catalog\Model\ResourceModel\AbstractCollection;
use ArslanFarrukh\ShareCart\Api\Data\ShareCartInterface;
use ArslanFarrukh\ShareCart\Model\ResourceModel\ShareCart as ResourceModel;
use ArslanFarrukh\ShareCart\Model\ShareCart as Model;

class Collection extends AbstractCollection
{
    protected $_idFieldName = ShareCartInterface::ID;

    /**
     * @inheirtDoc
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init(Model::class, ResourceModel::class);
    }
}
