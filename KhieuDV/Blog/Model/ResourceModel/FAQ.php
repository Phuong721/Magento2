<?php

namespace KhieuDV\Blog\Model\ResourceModel;

class FAQ extends \Magento\Framework\Model\ResourceModel\Db\AbstractDB
{
    protected $_idFieldName = 'faq_id';

    protected $_date;

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        \Magento\Framework\Stdlib\DateTime\DateTime $date,
        $resultPrefix = null
    ) {
        parent::__construct($context);
        $this->_date = $date;
    }

    protected function _construct()
    {
        $this->_init('faq_table', 'faq_id');
    }
}
