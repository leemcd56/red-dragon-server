<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'key' => 'allow_diagnostics_collection',
            'value' => '1',
        ]);

        DB::table('settings')->insert([
            'key' => 'truncate_diagnostics_days',
            'value' => '30',
        ]);

        DB::table('settings')->insert([
            'key' => 'truncate_labor_days',
            'value' => '30',
        ]);

        DB::table('settings')->insert([
            'key' => 'truncate_metrics_days',
            'value' => '30',
        ]);

        DB::table('settings')->insert([
            'key' => 'truncate_receipts_days',
            'value' => '7',
        ]);

        DB::table('settings')->insert([
            'key' => 'truncate_sales_days',
            'value' => '30',
        ]);

        DB::table('settings')->insert([
            'key' => 'truncate_time_clock_days',
            'value' => '30',
        ]);

        DB::table('settings')->insert([
            'key' => 'truncate_timesheets_days',
            'value' => '90',
        ]);
    }
}
