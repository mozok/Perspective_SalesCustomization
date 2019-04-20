<?php


namespace Perspective\SalesCustomization\ViewModel\Order\View;


use Magento\Framework\View\Element\Block\ArgumentInterface;

class Info implements ArgumentInterface
{
    /** @var \Perspective\SalesCustomization\Helper\Config  */
    protected $_configHelper;

    public function __construct(
        \Perspective\SalesCustomization\Helper\Config $configHelper
    ) {
        $this->_configHelper = $configHelper;
    }

    /**
     * @param string $orderStatus
     * @return bool
     */
    public function isAddressEditAvailable($orderStatus)
    {
        foreach ($this->getDisableStatus() as $disableStatus) {
           if ($orderStatus === $disableStatus) {
               return false;
           }
        }
        return true;
    }

    /**
     * @return array
     */
    protected function getDisableStatus()
    {
        return explode(',', $this->_configHelper->getDisableStatuses());
    }
}