<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('samples')->insert([
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'BCT',
                'description' => 'Bacterial'
            ],
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'BIC',
                'description' => 'Bioindicator Sample'
            ],
                        [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'CMT',
                'description' => 'Cosmetic'
            ],
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'DFT',
                'description' => 'Disinfectant'
            ],
                        [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'DLR',
                'description' => 'Dialyzer'
            ],
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'FNB',
                'description' => 'Food & Beverage'
            ],
                        [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'H2O',
                'description' => 'Water'
            ],
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'HSR',
                'description' => 'Hand Sanitizer'
            ],
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'Kit',
                'description' => 'Kit'
            ],
                        [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'LQD',
                'description' => 'Liquid'
                        ],
        ]);
    }
}
