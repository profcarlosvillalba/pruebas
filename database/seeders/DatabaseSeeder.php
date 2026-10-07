<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Cliente::create(['nombre' => 'Cliente de ejemplo', 'email' => 'ejemplo@example.com']);
        Cliente::create(['nombre' => 'Segundo cliente', 'email' => 'segundo@example.com']);
    }
}
