<?php

namespace FoodItems;

class CheeseBurger extends FoodItem {
    public function __construct() {
        parent::__construct('チーズバーガー', '美味しいバーガーです', 9.99);
    }

    public function getItem(): string {
        return 'これはバーガーです';
    }
}
