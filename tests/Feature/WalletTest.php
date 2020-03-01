<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Wallet;
use App\Transfer;

class WalletTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    
    public function testGetWallet()
    {
        $wallet = factory(Wallet::class)->create();
        $transfers = factory(Transfer::class, 3)->create(['wallet_id' => $wallet->id]);
        $response = $this->getJson('/api/wallet');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'id','money','transfers' => [
                         '*' => [
                             'id','amount','description','wallet_id'
                         ]
                     ]
                 ]);
        
        $this->assertCount(3, $response->json(['transfers']));

    }
}
