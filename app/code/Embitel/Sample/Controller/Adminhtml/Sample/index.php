<?php

namespace Embitel\Sample\Controller\Adminhtml\Sample;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\Model\View\Result\ForwardFactory;

class Index extends Action
{
    /**
     * Authorisation level of a basic admin session
     * 
     * @see _isAllowed()
     */
    const ACTION_RESOURCE ="Embitel_Sample::sample";
    /**
     * Core Registry
     * 
     * @var Registry
     */
    protected $CoreRegistry;

    /**
     * Result Page Factory
     * 
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var ForwardFactory
    */
    protected $resultForwardFactory;
    
    /**
     * @param Registry $registry
     * @param PageFactory $resultPagefactory
     * @param ForwardFactory $resultForwardFactory
     * @param Context $context
     */
    
    public function __construct(
        Registry $registry,
        PageFactory $resultPagefactory,
        ForwardFactory $resultForwardFactory,
        Context $context
       
    ) {
        $this->CoreRegistry=$registry;
       $this->resultForwardFactory=$resultForwardFactory;
        parent::__construct($context);
    }

    /**
     * @return Magento\Framework\View\Result\Page
     */
    public function execute()
    {   
        
       
        $resultPage-> addBreadCrumb('New Sample');
        $resultPage-> getConfig()->getTitle()->prepend('New Sample');
        return $resultPage;


    }
}
?>