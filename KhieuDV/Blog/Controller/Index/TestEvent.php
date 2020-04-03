<?php

namespace KhieuDV\Blog\Controller\Index;

class TestEvent extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        // TODO: Implement execute() method.
        $textDisplay = new \Magento\Framework\DataObject(array('text'=>'KhieuDV'));
        $this->_eventManager->dispatch('khieudv_display_text', ['mp_text'=>$textDisplay]);
        echo $textDisplay->getData('text');
        exit;
    }
}
