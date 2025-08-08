<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil ID parameter dari tabel m_ca_parameters
        $parameterId = DB::table('parameters')
            ->where('description', 'Physical and Chemical')
            ->value('id');

        // Data dari tampilan website
        $analysis = [
            ['code' => '4AP',  'description' => '4-Aminophenol',                      'lead_time' => 7],
            ['code' => 'AAC',  'description' => 'Assay Alphaketosioleucine Calcium',  'lead_time' => 7],
            ['code' => 'AAG',  'description' => 'Assay Acetic Acid Glacial',          'lead_time' => 7],
            ['code' => 'AAH',  'description' => 'Assay Ambroxol HCl',                 'lead_time' => 7],
            ['code' => 'AAM',  'description' => 'Assay Acetaminophen',                'lead_time' => 7],
            ['code' => 'AAS',  'description' => 'Assay Aluminium Sulfate',            'lead_time' => 7],
            ['code' => 'AAY',  'description' => 'Alginate Assay',                     'lead_time' => 7],
            ['code' => 'ABC',  'description' => 'Assay Beta Carotene',                'lead_time' => 7],
            ['code' => 'ABCA', 'description' => 'Alpha Beta Content Anomer',          'lead_time' => 7],
            ['code' => 'ACA',  'description' => 'Assay Cyproterone Acetate',          'lead_time' => 7],
        ];

        foreach ($analysis as $data) {
            DB::table('analyses')->insert([
                'code'            => $data['code'],
                'description'     => $data['description'],
                'parameter_id'    => $parameterId,
                'method_id'       => null,
                'sample_id'  => null,
                'lead_time'       => $data['lead_time'],
                'is_active'       => 1,
                'created_by'      => 1,
                'created_on'      => Carbon::now(),
                'last_updated_by' => 1,
                'last_updated_on' => Carbon::now(),
            ]);
        }
    }
}
