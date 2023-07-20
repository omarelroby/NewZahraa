<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;


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
        DB::table('admins')->insert([
            'name' =>'admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$WPVVx1sULFmoNLyAiew4DuR2T1eViTHqKrnlVeUQmlCoY1F8Pb8UC',
        ]);


        $this->call([
            SettingSeeder::class
            ]);

    }
}
