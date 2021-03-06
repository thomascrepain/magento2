<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\NewRelicReporting\Model\Resource;

class Module extends \Magento\Framework\Model\Resource\Db\AbstractDb
{
    /**
     * Initialize module status resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('reporting_module_status', 'entity_id');
    }
}
