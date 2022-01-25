<?php

namespace Database\Seeders;

use App\Models\Client\Client;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ClientFactory.php에 지정해놓은 값들의 형태로 20개의 데이터를 만들어라.
        Client::factory(20)->create();
    }
}
