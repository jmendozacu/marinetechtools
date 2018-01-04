<?php
namespace Ess\M2ePro\Block\Adminhtml\Amazon\Listing\View\Sellercentral\Grid;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Amazon\Listing\View\Sellercentral\Grid
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Amazon\Listing\View\Sellercentral\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ess\M2ePro\Model\ResourceModel\Magento\Product\CollectionFactory $magentoProductCollectionFactory, \Ess\M2ePro\Model\ActiveRecord\Component\Parent\Amazon\Factory $amazonFactory, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, \Magento\Framework\App\ResourceConnection $resourceConnection, \Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, \Magento\Backend\Helper\Data $backendHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($magentoProductCollectionFactory, $amazonFactory, $localeCurrency, $resourceConnection, $context, $backendHelper, $data);
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
