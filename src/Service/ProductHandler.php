<?php

namespace App\Service;

class ProductHandler
{

    public function getTotalPrice($products)
    {
        $totalPrice = 0;
        foreach ($products as $product) {
            $price = $product['price'] ?: 0;
            $totalPrice = bcadd($totalPrice, $price, 2);
        }
        return $totalPrice;
    }


    public function getProductBySortAndType($products, $type = "Dessert")
    {
        if (empty($products)) {
            return [];
        }
        if ($type){
            foreach ($products as $k => $product) {
                if ($product['type'] != $type) {
                    unset($products[$k]);
                }
            }
        }

        $array_column = array_column($products, 'price');
        array_multisort($array_column, SORT_DESC, $products);
        return $products;
    }

    public function getProductByUnixTime($products){
        foreach ($products as &$product){
            $product['create_at'] = $this->getUnixTime($product['create_at']);
        }
        return $products;
    }

    public function getUnixTime($time_str)
    {
        return strtotime($time_str);
    }

}
