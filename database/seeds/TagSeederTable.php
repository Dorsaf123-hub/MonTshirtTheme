<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag1 = new Tag();
        $tag1->nom ='#humour';
        $tag1->save();

        $tag2 = new Tag();
        $tag2->nom ='#Fun';
        $tag2->save();

        $tag3 = new Tag();
        $tag3->nom ='#Rouge';
        $tag3->save();

    }
}
