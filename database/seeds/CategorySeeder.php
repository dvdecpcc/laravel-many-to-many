<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['News', 'Backend Dev', 'Frontend Dev', 'CyberSec', 'AI', 'Tutorial'];

        foreach($categories as $category){
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->slug = Str::slug($category);
            $newCategory->save();
        }
    }
}
