<?php

namespace Database\Factories;

use App\Models\Idioma;
use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class IdiomaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Idioma::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $idiomas=['Inglés', 'Francés','Alemán',"Rumano", "Catalán","Gallego", "Vasco" ];
        $empleados = Empleado::all('id');
        return [
            'idioma' =>$this->faker->randomElement($idiomas),
            'empleado' =>$this->faker->randomElement($empleados)
        ];
    }
}
