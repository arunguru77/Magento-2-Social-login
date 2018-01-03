<?php
/**
 * Copyright © 2011-2018 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * 
 * See COPYING.txt for license details.
 */
namespace Faonni\SocialLogin\Model\ResourceModel\Profile;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Profile ResourceModel Collection
 */
class Collection extends AbstractCollection
{
    /**
     * Initialize collection
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
			'Faonni\SocialLogin\Model\Profile', 
			'Faonni\SocialLogin\Model\ResourceModel\Profile'
		);
    }
    
    /**
     * Add Collection Filters by Customer Id
     *
     * @param int $customerId
     * @param boolean $exclude
     * @return $this
     */
    public function addCustomerIdFilter($customerId, $exclude = false)
    {
        $condition = $exclude 
            ? ['neq' => $customerId] 
            : $customerId;
            
        return $this->addFieldToFilter('customer_id', $condition);
    }    
}
