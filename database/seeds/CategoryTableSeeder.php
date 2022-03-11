<?php

use App\Category;
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
        //
        /*$category= new App\Category();
        $category->nom = 'Films';
        $category->is_online = 1;
        $category->save();

        $category= new App\Category();
        $category->nom = 'Séries TV';
        $category->is_online = 1;
        $category->save();

        $category= new App\Category();
        $category->nom = 'Musique';
        $category->is_online = 1;
        $category->save();

        $category= new App\Category();
        $category->nom = 'Jeux-vidéos';
        $category->is_online = 1;
        $category->save();

        $category= new App\Category();
        $category->nom = 'Sport';
        $category->is_online = 1;
        $category->save();*/

        $category= new App\Category();
        $category->nom = 'Les goonies';
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category= new App\Category();
        $category->nom = 'Star Wars';
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category= new App\Category();
        $category->nom = 'StarTrek';
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category= new App\Category();
        $category->nom = 'Super Man';
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category= new App\Category();
        $category->nom = 'Tomb Raider';
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();

        $category= new App\Category();
        $category->nom = 'GTA';
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();


    }
}
