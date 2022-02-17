<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $return = [];

        foreach (self::products as $product) {

            $product = explode("-", $product);
            $color = $product[0];
            $size = $product[1];

            if (!isset($return[$color])) {
                $return[$color] = [];
            }

            if (!isset($return[$color][$size])) {
                $return[$color][$size] = 0;
            }
            
            $return[$color][$size]++;

        }

        return $return;
    }
}