<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\NewRelicReporting\Model\Resource;

class System extends \Magento\Framework\Model\Resource\Db\AbstractDb
{
    /**
     * Initialize system updates resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('reporting_system_updates', 'entity_id');
    }
}
