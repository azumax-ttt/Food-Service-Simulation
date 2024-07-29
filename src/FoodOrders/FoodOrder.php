<?php

namespace FoodOrders;

use FoodItems\FoodItem;

class FoodOrder {
    private array $items;
    private \DateTime $orderTime;

    public function __construct(array $items, \DateTime $orderTime) {
        $this->items = $items;
        $this->orderTime = $orderTime;
    }

    public function getItems(): array {
        return $this->items;
    }

    public function getOrderTime(): \DateTime {
        return $this->orderTime;
    }
}
