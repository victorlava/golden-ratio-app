<?php

namespace Database\Seeders;

use App\Models\BodyPart;
use Illuminate\Database\Seeder;

class BodyPartSeeder extends Seeder
{
    /** @var array  */
    private $bodyParts = [
        ['name' => 'Bicep'],
        ['name' => 'Tricep'],
        ['name' => 'Chest'],
        ['name' => 'Neck'],
        ['name' => 'Thigh'],
        ['name' => 'Belly'],
        ['name' => 'Wrist'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->bodyParts as $bodyPart) {
            BodyPart::factory(1)->create($bodyPart);
        }
    }
}
