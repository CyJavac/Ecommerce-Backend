<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItems>
 */
class CartItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "quantity" => fake()->integer(),
            
            //"product_id" => fake()->unsignedBigInteger(),
            
        ];
    }
}


//     $table->unsignedBigInteger("user_id");
//     $table->foreign("user_id") -> references("id") -> on("users");

//     $table->unsignedBigInteger("product_id");
//     $table->foreign("product_id") -> references("id") -> on("products");
