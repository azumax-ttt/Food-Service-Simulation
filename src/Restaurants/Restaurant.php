<?php

namespace Restaurants;

use FoodItems\FoodItem;
use Persons\Employee;
use Invoices\Invoice;

class Restaurant {
    private array $menu;
    private array $employees;

    public function __construct(array $menu, array $employees) {
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function order(array $categories): Invoice {
        // 未実装
    }
}
