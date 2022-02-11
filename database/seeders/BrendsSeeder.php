<?php

namespace Database\Seeders;

use App\Models\Brends;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrendsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brends')->where('id', '>', 0)->delete();
        Brends::factory(7)->create();
    }
}
