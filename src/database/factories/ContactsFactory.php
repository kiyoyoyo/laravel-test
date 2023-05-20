<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactsFactory extends Factory
{

    protected $model = Contact::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'gender' => rand(1, 2),
            'email' => $this->faker->email(),
            'postcode' => $this->faker->postcode(),
            'address' => $this->faker->address(),
            'building_name' => $this->faker->address(),
            'opinion' => $this->faker->realText(20),
        ];
    }
}
