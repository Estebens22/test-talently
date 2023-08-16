<?php

namespace App;

interface ProductBehavior
{
    public function tick(VillaPeruana $product);
}

class VillaPeruana
{
    public $name;
    public $quality;
    public $sellIn;
    private $behavior;

    private function __construct($name, $quality, $sellIn, ProductBehavior $behavior)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
        $this->behavior = $behavior;
    }

    public function tick()
    {
        $this->behavior->tick($this);
    }

    public static function of($name, $quality, $sellIn)
    {
        switch ($name) {
            case 'normal':
                return new self($name, $quality, $sellIn, new NormalProduct());
            case 'Pisco Peruano':
                return new self($name, $quality, $sellIn, new PiscoPeruanoProduct());
            case 'Tumi de Oro Moche':
                return new self($name, $quality, $sellIn, new TumiProduct());
            case 'Ticket VIP al concierto de Pick Floid':
                return new self($name, $quality, $sellIn, new TicketVIPProduct());
            case 'Café Altocusco':
                return new self($name, $quality, $sellIn, new CafeProduct());
            default:
                throw new \Exception('Unknown product type');
        }
    }
}

class NormalProduct implements ProductBehavior
{
    public function tick($product)
    {
        $product->sellIn--;

        if ($product->quality > 0) {
            $product->quality--;
        }

        if ($product->sellIn < 0 && $product->quality > 0) {
            $product->quality--;
        }
    }
}

class PiscoPeruanoProduct implements ProductBehavior
{
    public function tick($product)
    {
        $product->sellIn--;

        if ($product->quality < 50) {
            $product->quality++;

            if ($product->sellIn < 0 && $product->quality < 50) {
                $product->quality++;
            }
        }
    }
}

class TumiProduct implements ProductBehavior
{
    public function tick($product)
    {
        // Tumi product does not change
    }
}

class TicketVIPProduct implements ProductBehavior
{
    public function tick($product)
    {
        $product->sellIn--;

        if ($product->quality < 50) {
            $product->quality++;

            if ($product->sellIn < 10 && $product->quality < 50) {
                $product->quality++;
            }

            if ($product->sellIn < 5 && $product->quality < 50) {
                $product->quality++;
            }
        }

        if ($product->sellIn < 0) {
            $product->quality = 0;
        }
    }
}

class CafeProduct implements ProductBehavior
{
    public function tick($product)
    {
        $product->sellIn--;

        if ($product->quality > 0) {
            $product->quality -= 2;
        }

        if ($product->sellIn < 0 && $product->quality > 0) {
            $product->quality -= 2;
        }

        if ($product->quality < 0) {
            $product->quality = 0;
        }
    }
}
