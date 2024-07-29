<?php

spl_autoload_register(function ($class) {
    $base_dir = __DIR__ . '/src/';
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

use FoodItems\CheeseBurger;
use FoodItems\Fettuccine;
use FoodItems\HawaiianPizza;
use FoodItems\Spaghetti;
use Persons\Employees\Chef;
use Persons\Employees\Cashier;
use Persons\Customers\Customer;

use Restaurants\Restaurant;

$cheeseBurger = new CheeseBurger();
$fettuccine = new Fettuccine();
$hawaiianPizza = new HawaiianPizza();
$spaghetti = new Spaghetti();

$chef1 = new Chef('Chef1', 20, '東京', 1, 10);
$cashier1 = new Cashier('Cashier1', 21, '福岡', 1, 30);

$restaurant1 = new Restaurant(
  [
    $cheeseBurger,
    $fettuccine,
    $hawaiianPizza,
    $spaghetti
  ],
  [
    $chef1,
    $cashier1
  ]
);

$interestedTastesMap = [
    'fettuccine' => 1,
    'CheeseBurger' => 2,
    'Spaghetti' => 1
];

$taro = new Customer('taro', 20, '大阪', $interestedTastesMap);
// $invoice = $taro->order($restaurant1, $interestedTastesMap);
