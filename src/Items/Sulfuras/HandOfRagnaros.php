<?php

namespace App\Items\Sulfuras;

class HandOfRagnaros extends Sulfuras
{

    protected function conditions(): void
    {
        $this->item->quality = self::DEFAULT_QUANTITY;

        // Or..
        // @TODO discuss
        // parent::conditions();
    }

}