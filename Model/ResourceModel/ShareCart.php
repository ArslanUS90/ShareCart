<?php

declare(strict_types=1);

namespace ArslanFarrukh\ShareCart\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use ArslanFarrukh\ShareCart\Api\Data\ShareCartInterface;

class ShareCart extends AbstractDb
{
    const MAIN_TABLE = "arslan_share_cart";

    /**
     * @var string
     */
    protected $_idFieldName = ShareCartInterface::ID;

    /** @inheirtDoc */
    protected function _construct()
    {
        $this->_init(
            self::MAIN_TABLE,
            ShareCartInterface::ID
        );
    }
}
