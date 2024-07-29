<?php

namespace FoodItems;

class Fettuccine extends FoodItem {
    public function __construct() {
        parent::__construct('フェットチーネ', 'フェットチーネです', 10.99);
    }

    public function getItem(): string {
        return 'フェットチーネです';
    }
}
