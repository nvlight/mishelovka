<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AgePeriods;
use Illuminate\Support\Facades\DB;

class AgePeriodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('age_periods')->where('id', '>', 0)->delete();
        AgePeriods::factory(5)->create();
    }
}
