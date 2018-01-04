<?php
namespace Ess\M2ePro\Block\Adminhtml\Amazon\Template\Synchronization\Edit;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Amazon\Template\Synchronization\Edit
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Amazon\Template\Synchronization\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ess\M2ePro\Block\Adminhtml\Magento\Context\Widget $context, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $data);
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
