<?php

namespace FoodItems;

abstract class FoodItem {
    protected string $name;
    protected string $description;
    protected float $price;

    public function __construct(string $name, string $description, float $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public static function getCategory(): string {
        return "Food";
    }
    abstract public function getItem(): string;
}