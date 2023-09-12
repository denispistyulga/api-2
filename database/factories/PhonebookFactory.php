<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhonebookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'phone'=>$this->faker->email(),
            'email'=>$this->faker->e164PhoneNumber(),
//            'created_at'=>strtotime(date('d.m.Y H:i:s')),
//            'updated_at'=>strtotime(date('d.m.Y H:i:s')),
            //
        ];
    }
}
