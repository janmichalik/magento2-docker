<?php

namespace Jmic\ProductGrid\Block;

use Magento\Catalog\Block\Product\AbstractProduct;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;

class ProductGrid extends AbstractProduct
{
    protected $collectionFactory;

    public function __construct(
        CollectionFactory $collectionFactory,
        \Magento\Catalog\Block\Product\Context $context,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getProductCollection()
    {
        $collection = $this->collectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->addAttributeToFilter('visibility', ['in' => [2, 3, 4]]);
        $collection->addAttributeToFilter('status', 1);
        $collection->setPageSize(12);
        return $collection;
    }
}
