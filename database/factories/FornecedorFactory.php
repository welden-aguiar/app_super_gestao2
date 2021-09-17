<?php

namespace Database\Factories;

use App\Models\Fornecedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class FornecedorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fornecedor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'telefone' => $this->faker->bothify('##-#####-####'),
            'site' => $this->faker->domainName(),
            'email' => $this->faker->freeEmail(),
            'uf' => $this->faker->randomElement(['df', 'ba', 'sp', 'rj', 'ce', 'ma']),
        ];
    }
}
