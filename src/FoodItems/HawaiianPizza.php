<?php

namespace FoodItems;

class HawaiianPizza extends FoodItem {
    public function __construct() {
        parent::__construct('ハワイアンピザ', '美味しいピザです', 10.05);
    }

    public function getItem(): string {
        return 'これはピザです';
    }
}
