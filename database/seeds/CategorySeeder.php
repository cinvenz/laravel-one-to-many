<?php

use Illuminate\Database\Seeder;
use App\Category;
use Faker\Generator as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = [
            'Uncategorized',
            'Attualità',
            'Scuola',
            'Politica',
            'Estero',
            'Italia',
            'Cucina',
            'Informatica',
            'Gossip',
        ];

        foreach ($categories as $category) {
            Category::create([
                'slug'        => Category::getSlug($category),
                'name'        => $category,
                'description' => $faker->paragraphs(rand(1, 5), true),
            ]);
        }
    }
}
