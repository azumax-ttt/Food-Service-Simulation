<?php

namespace Persons\Employees;

use FoodOrders\FoodOrder;

class Chef extends Employee {
    public function prepareFood(FoodOrder $order): string {
        return '未実装';
    }
}
