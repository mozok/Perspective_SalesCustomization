<?php


namespace Perspective\SalesCustomization\Model\Config\Source;


class DisableStatusOptions implements \Magento\Framework\Option\ArrayInterface
{
    /** @var \Magento\Sales\Model\ResourceModel\Status\CollectionFactory  */
    protected $_statusCollectionFactory;

    public function __construct(
        \Magento\Sales\Model\ResourceModel\Status\CollectionFactory $statusCollectionFactory
    ) {
        $this->_statusCollectionFactory = $statusCollectionFactory;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $statusList = $this->_statusCollectionFactory->create();

        return $statusList->toOptionArray();
    }
}