<?php

use Illuminate\Database\Seeder;
use App\Models\Manager;
class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manager::factory()->count(10)->create();
    }
}
