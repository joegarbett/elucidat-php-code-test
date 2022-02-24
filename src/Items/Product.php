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
     * @return void
     */
    protected function subtractSellIn(): void
    {
        --$this->item->sellIn;
    }

    /**
     * @return void
     */
    protected function quantityLimits(): void
    {
        $this->item->quality = min($this->item->quality, 50);
        $this->item->quality = max($this->item->quality, 0);
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