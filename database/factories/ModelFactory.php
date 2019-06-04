<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(sisFmw\Models\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->password(10, 15),
        'remember_token' => str_random(10),
    ];
});

$factory->define(sisFmw\Models\Client::class, function (Faker\Generator $faker) {
    return [
        'telefone' => $faker->phoneNumber,
        'endereco' => $faker->address,
        'cidade' => $faker->city,
        'estado' => $faker->state,
        'cep' => $faker->postcode,
    ];
});

$factory->define(sisFmw\Models\Order::class, function (Faker\Generator $faker) {
    return [
        'client_id' => $faker->numberBetween(1, 10),
        'total' => $faker->randomFloat(2, 0, 10),
        'status' => $faker->randomKey($array = array('0', '1')),
    ];
});

$factory->define(sisFmw\Models\OrderItem::class, function (Faker\Generator $faker) {
    return [
        'product_id' => $faker->numberBetween(1, 10),
        'order_id' => $faker->numberBetween(1, 5),
        'preco' => $faker->randomFloat(2, 0, 10),
        'qtd' => $faker->numberBetween(1, 100),
    ];
});


$factory->define(sisFmw\Models\Product::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name('male'|'female'),
        'estoqueMaximo'=> $faker->numberBetween(0, 1000),
        'estoqueMinimo' => $faker->numberBetween(0, 1000),
        'precoCompra' => $faker->randomFloat(2, 2, 100),
        'precoVenda' => $faker->randomFloat(2, 0, 100),
        'status' => $faker->randomElement(['ATIVO', 'INATIVO'])
    ];
});

$factory->define(sisFmw\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});