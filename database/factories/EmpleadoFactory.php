<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $estudios =['ESO', 'Bach', 'Ciclo medio', 'Ciclo Superior','Universidad'];
        return [
            //
            "nombre"=>$this->faker->name(),
            "direccion"=>$this->faker->address(),
            "telefono"=>$this->faker->phonenumber(),
            "estudios"=>$this->faker->randomElement($estudios)
        ];
    }
}
