<?php

namespace Modules\Article\Database\Seeders;

use Modules\Article\Entities\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Economic Calendar";
        $category->slug = "economic-calendar";
        $category->parent_category_id = null;
        $category->save();

        $category = new Category();
        $category->name = "Pivot";
        $category->slug = "pivot";
        $category->parent_category_id = null;
        $category->save();

        $category = new Category();
        $category->name = "Fibonacci";
        $category->slug = "fibonacci";
        $category->parent_category_id = null;
        $category->save();

        $category = new Category();
        $category->name = "Closing Price";
        $category->slug = "closing-price";
        $category->parent_category_id = null;
        $category->save();
    }
}
