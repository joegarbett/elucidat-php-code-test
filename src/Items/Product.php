<?php

namespace App\Items;

use App\Item;

abstract class Product
{

    /**
     * @var Item
     */
    protected $item;

    /**
     * @param  Item  $item
     */
    public function __construct(Item $item)
    {
        $this->item = $item;
    }

}