<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    protected $model = Setting::class;

    public function definition()
    {

        return [
             'ar' => [
                'title' => $this->faker->name
            ],
            'en' => [
                'title' => $this->faker->name
            ],

        ];
    }
}
