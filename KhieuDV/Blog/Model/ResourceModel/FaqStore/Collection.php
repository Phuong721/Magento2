<?php

namespace KhieuDV\Blog\Model\ResourceModel\FaqStore;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';
    // protected $_eventPrefix = 'khieudv_blog_faq_collection';
    // protected $_eventObject = 'faq_collection';

    protected function _construct()
    {
        $this->_init(
            'KhieuDV\Blog\Model\FAQStore',
            'KhieuDV\Blog\Model\ResourceModel\FAQStore'
        );
    }

//    protected function _initSelect()
//    {
//        $this->addFilterToMap('id', 'faq_table.id');
//        return $this; // TODO: Change the autogenerated stub
//    }
}
