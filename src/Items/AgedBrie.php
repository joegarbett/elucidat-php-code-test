<?php

namespace App\Items;

class AgedBrie extends Product
{

    protected function conditions(): void
    {
        if ($this->item->sellIn <= 0) {
            $this->item->quality += 2;
        } else {
            $this->item->quality += 1;
        }
        $this->quantityLimits();
        $this->subtractSellIn();
    }

}