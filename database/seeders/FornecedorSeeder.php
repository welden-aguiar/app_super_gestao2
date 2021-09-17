<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fornecedor::factory()->count(100)->create();
    }
}
