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
        ['are_notifications_enabled' => '1'],
        ['are_ads_enabled' => '0'],
        ['is_night_theme_enabled' => '0'],
    ];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randomNumber = $this->faker->numberBetween(0, count($this->settings));
        $settingKeys = array_keys($this->settings);



        dd(next($this->settings));

        $key = $settingKeys[$randomNumber];

        return [
            'key' => $key,
            'value' => $this->settings[$randomNumber][$key],
        ];
    }
}
