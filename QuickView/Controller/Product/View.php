<?php

namespace Bizspice\QuickView\Controller\Product;

use Magento\Catalog\Controller\Product\View as CatalogView;

/**
 * Class View
 *
 * @package Bizspice\QuickView\Controller\Product
 * @author Shailesh Rawat <shailesh@bizspice.com>
 * @copyright bizspice.com
 */
class View extends CatalogView
{
    /**
     * To add new layout handle when product page is loaded in iframe
     *
     * @return \Magento\Framework\Controller\Result\Forward|\Magento\Framework\Controller\Result\Redirect
     */
    public function execute()
    {
        if ($this->getRequest()->getParam("iframe")) {
            $layout = $this->_view->getLayout();
            $layout->getUpdate()->addHandle('product_quickview');
        }
        return parent::execute();
    }
}
