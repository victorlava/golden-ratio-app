<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserSetting::class;

    private $settings = [
        [
            'key' => 'are_notifications_enabled',
            'value' => '1',
        ],
        [
            'key' => 'are_ads_enabled',
            'value' => '1',
        ],
        [
            'key' => 'is_night_theme_enabled',
            'value' => '1',
        ],
    ];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randomIndex = $this->faker->numberBetween(0, count($this->settings) - 1);

        return [
            'key' => $this->settings[$randomIndex]['key'],
            'value' => $this->settings[$randomIndex]['value'],
        ];
    }
}
