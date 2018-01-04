<?php
namespace Ess\M2ePro\Block\Adminhtml\Ebay\Listing\Product\Add\Category\Grid;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Ebay\Listing\Product\Add\Category\Grid
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Ebay\Listing\Product\Add\Category\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ess\M2ePro\Model\ResourceModel\Magento\Product\CollectionFactory $magentoProductCollectionFactory, \Magento\Catalog\Model\Product\Type $type, \Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, \Magento\Backend\Helper\Data $backendHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($magentoProductCollectionFactory, $type, $context, $backendHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function __()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__');
        if (!$pluginInfo) {
            return parent::__();
        } else {
            return $this->___callPlugins('__', func_get_args(), $pluginInfo);
        }
    }
}
