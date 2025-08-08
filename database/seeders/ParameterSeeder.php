<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('parameters')->insert([
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'BAB',
                'description' => 'Bioassay and Biochemistry'
            ],
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'BML',
                'description' => 'Biomolecular'
            ],
                        [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'CDT',
                'description' => 'Comparative Dissolution Testing'
            ],
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'MBY',
                'description' => 'Microbiology'
            ],
                        [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'MDA',
                'description' => 'Media'
            ],
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'OTH',
                'description' => 'Other'
            ],
                        [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'PAC',
                'description' => 'Physical and Chemical'
            ],
            [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'RSC',
                'description' => 'Rent of Stability Chamber'
            ],
                        [
                'created_by' => 1,
                'created_on' => Carbon::now(),
                'last_updated_by' => null,
                'last_updated_on' => null,
                'is_active' => true,
                'code' => 'TAV',
                'description' => 'Trial and Validation'
            ],
        ]);
    }
}
