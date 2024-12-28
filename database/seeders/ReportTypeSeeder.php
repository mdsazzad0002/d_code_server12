<?php

namespace Database\Seeders;

use App\Models\ReportType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_array = [
            [
                'name' => 'Harassment',
                'count' => 2,
            ],
            [
                'name' => 'Adult',
                'count' => 1,
            ],
            [
                'name' => 'Spam',
                'count' => 5,
            ],
            [
                'name' => 'Outer Topics',
                'count' => 10,
            ],

        ];

        foreach($data_array as $item){
            ReportType::create($item);
        }
    }
}
