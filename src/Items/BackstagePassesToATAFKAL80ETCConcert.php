<?php

namespace App\Items;

/**
 * Terrible name
 *
 * @todo rename class
 */
class BackstagePassesToATAFKAL80ETCConcert extends Product
{

    protected function conditions(): void
    {
        if ($this->item->sellIn > 10) {
            $this->item->quality += 1;
        }

        if ($this->item->sellIn <= 10 && $this->item->sellIn > 5) {
            $this->item->quality += 2;
        }

        if ($this->item->sellIn <= 5) {
            $this->item->quality += 3;
        }

        if ($this->item->sellIn <= 0) {
            $this->item->quality = $this->item->quality - $this->item->quality;
        }

        $this->quantityLimits();
        $this->subtractSellIn();
    }

}