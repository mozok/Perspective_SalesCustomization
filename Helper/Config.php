<?php


namespace Perspective\SalesCustomization\Helper;


use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Config extends AbstractHelper
{
    const XML_PATH_SALES_CUSTOMIZATION = 'sales_customization';

    /**
     * @param $field
     * @param null $storeId
     * @return mixed
     */
    protected function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    /**
     * @param $code
     * @param null $storeId
     * @return mixed
     */
    public function getGeneralConfig($code, $storeId = null)
    {

        return $this->getConfigValue(self::XML_PATH_SALES_CUSTOMIZATION .'/general/'. $code, $storeId);
    }

    /**
     * @return mixed
     */
    public function getDisableStatuses()
    {
        return $this->getGeneralConfig('disable_status');
    }
}