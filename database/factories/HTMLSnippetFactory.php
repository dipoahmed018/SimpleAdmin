<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HTMLSnippet>
 */
class HTMLSnippetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->paragraph(1);
        $description = $this->faker->paragraph();
        $html_code = "<div><h1 class='title'>$title</h1><p class='description'>$description</p></div>";
        
        return [
            'title' => $this->faker->paragraph(1),
            'description' => $this->faker->paragraph(),
            'snippet' => $html_code,
        ];
    }
}
