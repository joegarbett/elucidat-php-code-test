<?php

namespace App\Items;

class ConjuredManaCake extends Product
{

    protected function conditions(): void
    {
        if ($this->item->sellIn <= 0) {
            $this->item->quality = $this->item->quality -= 4;
        } else {
            $this->item->quality = $this->item->quality -= 2;
        }
        $this->quantityLimits();
        $this->subtractSellIn();
    }

}