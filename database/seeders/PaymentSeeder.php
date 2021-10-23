<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /** @var string[][]  */
    private $payments = [
        [
            'name' => 'Paypal',
            'slug' => 'paypal',
        ],
        [
            'name' => 'Stripe',
            'slug' => 'stripe',
        ],
        [
            'name' => 'Apple Pay',
            'slug' => 'apple_pay',
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->payments as $payment) {
            Payment::factory(1)->create($payment);
        }
    }
}
