<?php
namespace Ess\M2ePro\Block\Adminhtml\Ebay\Template\ReturnPolicy\Edit\Form\Data;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Ebay\Template\ReturnPolicy\Edit\Form\Data
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Ebay\Template\ReturnPolicy\Edit\Form\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ess\M2ePro\Model\Ebay\Template\ReturnPolicy $returnPolicyTemplate, \Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($returnPolicyTemplate, $context, $registry, $formFactory, $data);
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
