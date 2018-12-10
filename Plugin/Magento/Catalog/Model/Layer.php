<?php

namespace Magentomaster\Discontinue1\Plugin\Magento\Catalog\Model;

class Layer
{

    public function aroundGetProductCollection(
        \Magento\Catalog\Model\Layer $subject,
        \Closure $proceed
    ) {
        $collection = $proceed();
        $collection
            ->addAttributeToSelect('*')
            ->addAttributeToFilter('discontinue', array('neq' => 1));
            //echo "<pre>"; print_r($collection->getData()); die;
        return $collection;
    }


}

