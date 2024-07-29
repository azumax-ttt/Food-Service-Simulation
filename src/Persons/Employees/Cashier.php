<?php

namespace Persons\Employees;

use Restaurants\Restaurant;
use FoodOrders\FoodOrder;
use Invoices\Invoice;

class Cashier extends Employee {
    public function generateOrder(array $categories, Restaurant $restaurant): FoodOrder {
        // 未実装
    }

    public function generateInvoice(FoodOrder $order): Invoice {
        // 未実装
    }
}
