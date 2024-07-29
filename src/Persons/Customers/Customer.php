<?php

namespace Persons\Customers;

use Persons\Person;
use Restaurants\Restaurant;
use Invoices\Invoice;

class Customer extends Person {
    private array $interestedCategories;

    public function __construct(string $name, int $age, string $address, array $interestedCategories) {
        parent::__construct($name, $age, $address);
        $this->interestedCategories = $interestedCategories;
    }

    public function interestedCategories(Restaurant $restaurant): array {
        // 未実装
    }

    public function order(Restaurant $restaurant, array $categories): Invoice {
        // 未実装
    }
}

