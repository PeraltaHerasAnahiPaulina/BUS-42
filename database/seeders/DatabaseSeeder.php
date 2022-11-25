<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Direction;
use App\Models\Cuatrimestre;
use App\Models\Acount;
use App\Models\TruckStop;
use App\Models\Center;
use App\Models\Trajectory;
use App\Models\User;
use App\Models\Driver;
use App\Models\Bus;
use App\Models\Detail;
use App\Models\DetailAcount;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Direction::factory(30)->create();
        Cuatrimestre::factory(16)->create();
        Acount::factory(100)->create();
        TruckStop::factory(20)->create();
        Center::factory(20)->create();
        Trajectory::factory(3)->create();
        user::factory(50)->create(); 
        Driver::factory(10)->create();
        Bus::factory(10)->create();
        Detail::factory(20)->create();
        DetailAcount::factory(20)->create();
    }
}
