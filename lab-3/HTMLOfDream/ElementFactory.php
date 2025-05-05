<?php

class ElementFactory
{
    private static array $flyweights = [];


    public static function getFlyweight(string $tagName, string $displayValue = 'block', bool $isSelfClosing = false): ElementVariation
    {
        $key = self::getKey([$tagName, $displayValue, $isSelfClosing]);

        if (!isset(self::$flyweights[$key])) {
            self::$flyweights[$key] = new ElementVariation($tagName, $displayValue, $isSelfClosing);
        }

        return self::$flyweights[$key];
    }


    private static function getKey(array $state): string
    {
        ksort($state);
        return implode('_', $state);
    }


    public static function getElementVariations(): void
    {
        $count = count(self::$flyweights);
        echo "\nFlyweightFactory: I have $count flyweights:\n";
        foreach (self::$flyweights as $key => $flyweight) {
            echo $key . "\n";
        }
    }
}
