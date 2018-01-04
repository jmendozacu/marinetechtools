<?php
namespace Ess\M2ePro\Block\Adminhtml\Amazon\Log\Listing\Product\View\Separated\Grid;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Amazon\Log\Listing\Product\View\Separated\Grid
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Amazon\Log\Listing\Product\View\Separated\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ess\M2ePro\Model\Config\Manager\Module $moduleConfig, \Ess\M2ePro\Model\ResourceModel\Collection\CustomFactory $customCollectionFactory, \Magento\Framework\App\ResourceConnection $resourceConnection, \Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, \Magento\Backend\Helper\Data $backendHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($moduleConfig, $customCollectionFactory, $resourceConnection, $context, $backendHelper, $data);
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