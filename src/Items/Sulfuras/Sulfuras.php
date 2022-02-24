<?php

namespace App\Items\Sulfuras;

use App\Items\Product;

class Sulfuras extends Product
{

    /**
     * Default quantity
     * Legacy product
     */
    const DEFAULT_QUANTITY = 80;

    protected function conditions(): void
    {
        $this->item->quality = self::DEFAULT_QUANTITY;
    }

}