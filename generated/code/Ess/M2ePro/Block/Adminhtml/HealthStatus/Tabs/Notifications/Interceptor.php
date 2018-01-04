<?php
namespace Ess\M2ePro\Block\Adminhtml\HealthStatus\Tabs\Notifications;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\HealthStatus\Tabs\Notifications
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\HealthStatus\Tabs\Notifications implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Model\Auth $auth, \Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($auth, $context, $registry, $formFactory, $data);
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
