<?php

namespace Database\Factories;

use App\Models\Factura;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Factura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $clientes = Cliente::all("id");
        return [
            //
            "importe"=> $this->faker->randomFloat(2,10,3000),
            "fecha"=> $this->faker->date('Y-m-d',"now"),
            "cantidad"=> $this->faker->randomFloat(2,10,100),
            "cliente"=>$this->faker->randomElement($clientes)
        ];
    }
}
