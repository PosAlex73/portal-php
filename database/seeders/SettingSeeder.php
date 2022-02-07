<?php

namespace Database\Seeders;

use Database\Seeders\Settings\SettingsInitial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(SettingsInitial::getSettings());
    }
}
