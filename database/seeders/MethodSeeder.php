<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class MethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('methods')->insert([
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'AN',
                'description' => 'No Method'
            ],
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'BOR',
                'description' => 'Based on Request'
            ],
                        [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'BPE',
                'description' => 'British Pharmacopeae'
            ],
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'FI6',
                'description' => 'Farmakope Indonesia VI'
            ],
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'IHS',
                'description' => 'Inhouse-Methode'
            ],
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'ISO',
                'description' => 'ISO Method'
            ],
                        [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'MFM',
                'description' => 'Membrane Filtration Methode'
            ],
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'USP',
                'description' => 'USP Method'
            ],
        ]);
    }
}
