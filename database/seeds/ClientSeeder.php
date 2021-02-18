<?php

use App\Models\Client ;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::firstOrCreate(           
            ['client_id' => 'hrs-app-mobile'],
            ['client_secret' => 'TW9iaWxlIENsaWVudElEOiBUVzlpYVd4bElFTnNhV1Z1ZEVsRU9pQjJkV1Z6YVdzdFlYQndMV']
        );

      
    }
}
