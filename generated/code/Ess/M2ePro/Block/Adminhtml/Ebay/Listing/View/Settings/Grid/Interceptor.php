<?php
namespace Ess\M2ePro\Block\Adminhtml\Ebay\Listing\View\Settings\Grid;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Ebay\Listing\View\Settings\Grid
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Ebay\Listing\View\Settings\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resourceConnection, \Magento\Catalog\Model\ProductFactory $productFactory, \Ess\M2ePro\Model\Ebay\Template\Manager $templateManager, \Ess\M2ePro\Model\ResourceModel\Magento\Product\CollectionFactory $magentoProductCollectionFactory, \Ess\M2ePro\Model\ActiveRecord\Component\Parent\Ebay\Factory $ebayFactory, \Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, \Magento\Backend\Helper\Data $backendHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($resourceConnection, $productFactory, $templateManager, $magentoProductCollectionFactory, $ebayFactory, $context, $backendHelper, $data);
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
