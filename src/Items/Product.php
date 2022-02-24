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


    /**
     * @return Item
     */
    public function apply(): Item
    {
        $this->conditions();
        return $this->item;
    }

    /**
     * @return mixed
     */
    abstract protected function conditions(): void;

}