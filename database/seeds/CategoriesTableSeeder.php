<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = new Category();
        $news->name = 'news';
        $news->save();

        $tech = new Category();
        $tech->name = 'tech';
        $tech->save();

        $economy = new Category();
        $economy->name = 'economy';
        $economy->save();

        $tag = new \App\Tag();
        $tag->title = 'fashion';
        $tag->save();

        $tag = new \App\Tag();
        $tag->title = 'cars';
        $tag->save();

        $tag = new \App\Tag();
        $tag->title = 'recommended';
        $tag->save();
    }
}
