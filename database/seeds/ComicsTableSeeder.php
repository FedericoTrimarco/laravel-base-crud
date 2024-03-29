<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            $new_comic = new Comic();

            // $new_comic->title = $comic['title'];
            // $new_comic->series = $comic['series'];
            // $new_comic->description = $comic['description'];
            // $new_comic->src = $comic['thumb'];
            // $new_comic->price = $comic['price'];

            $new_comic->fill($comic);

            $new_comic->save();
        }
    }
}
