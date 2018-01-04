<?php
namespace Ess\M2ePro\Block\Adminhtml\Ebay\Template\SellingFormat\Edit\Form\Charity;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Ebay\Template\SellingFormat\Edit\Form\Charity
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Ebay\Template\SellingFormat\Edit\Form\Charity implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resourceConnection, \Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, array $data = array())
    {
        $this->___init();
        parent::__construct($resourceConnection, $context, $data);
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
