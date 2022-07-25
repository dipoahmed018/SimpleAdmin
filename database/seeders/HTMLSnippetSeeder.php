<?php

namespace Database\Seeders;

use App\Models\HTMLSnippet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HTMLSnippetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HTMLSnippet::factory(20)->create();
    }
}
