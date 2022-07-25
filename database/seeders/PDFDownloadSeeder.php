<?php

namespace Database\Seeders;

use App\Models\PDFDownload;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PDFDownloadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PDFDownload::factory(20)->create();
    }
}
