<?php

namespace App;

use Illuminate\Support\Str;

class GildedRose
{
    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getItem($which = null)
    {
        return ($which === null
            ? $this->items
            : $this->items[$which]
        );
    }

    public function nextDay()
    {
        foreach ($this->items as $item) {
            $converted = Str::studly($item->name);
            $namespaced = "\App\Items\\" . $converted;
            $item = (new $namespaced($item))->apply();
        }
    }
}
