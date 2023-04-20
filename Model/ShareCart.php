<?php declare(strict_types=1);

namespace ArslanFarrukh\ShareCart\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use ArslanFarrukh\ShareCart\Api\Data\ShareCartInterface;

class ShareCart extends AbstractModel implements ShareCartInterface, IdentityInterface
{
    const CACHE_TAG = 'arslan_shipping_method_configuration';

    /**
     * @inheirtDoc
     */
    protected $_cacheTag = 'arslan_shipping_method_configuration';

    /**
     * @inheirtDoc
     */
    protected $_eventPrefix = 'arslan_shipping_method_configuration';

    protected function _construct()
    {
        parent::_construct();
        $this->_init(\ArslanFarrukh\ShareCart\Model\ResourceModel\ShareCart::class);
    }

    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->getData(ShareCartInterface::ID);
    }

    /**
     * @inheritDoc
     */
    public function setId($id)
    {
        return $this->setData(ShareCartInterface::ID, $id);
    }

    /**
     * @inheritDoc
     */
    public function getProductData()
    {
        return $this->getData(ShareCartInterface::PRODUCT_DATA);
    }

    /**
     * @inheritDoc
     */
    public function setProductData($data)
    {
        return $this->setData(ShareCartInterface::PRODUCT_DATA, $data);
    }

    /**
     * @inheritDoc
     */
    public function getHash()
    {
        return $this->getData(ShareCartInterface::HASH);
    }

    /**
     * @inheritDoc
     */
    public function setHash($hash)
    {
        return $this->setData(ShareCartInterface::HASH, $hash);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
