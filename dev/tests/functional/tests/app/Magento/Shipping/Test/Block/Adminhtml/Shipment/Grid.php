<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Shipping\Test\Block\Adminhtml\Shipment;

use Magento\Ui\Test\Block\Adminhtml\DataGrid as GridInterface;

/**
 * Shipment grid on shipment index page.
 */
class Grid extends GridInterface
{
    /**
     * Locator value for "View" link inside action column.
     *
     * @var string
     */
    protected $editLink = '.data-grid-actions-cell a';

    /**
     * Filters array mapping.
     *
     * @var array
     */
    protected $filters = [
        'id' => [
            'selector' => 'input[name="filters[increment_id]"]',
        ],
        'order_id' => [
            'selector' => 'input[name="filters[order_increment_id]"]',
        ],
        'total_qty_from' => [
            'selector' => 'input[name="filters[total_qty][from]"]',
        ],
        'total_qty_to' => [
            'selector' => 'input[name="filters[total_qty][to]"]',
        ],
    ];
}
