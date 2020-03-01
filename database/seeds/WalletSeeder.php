<?php

use Illuminate\Database\Seeder;
use App\Wallet;
class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Wallet::class)->create();
    }
}
