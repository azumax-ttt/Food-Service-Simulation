<?php

namespace FoodItems;

class Spaghetti extends FoodItem {
    public function __construct() {
        parent::__construct('パスタ', '美味しいパスタです', 9.05);
    }

    public function getItem(): string {
        return 'これはパスタです';
    }
}
