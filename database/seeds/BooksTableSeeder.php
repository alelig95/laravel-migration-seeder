<?php

use Illuminate\Database\Seeder;
use App\Book;
use Faker\Generator as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $book = new Book();
            $book->title = $faker->text(20);
            $book->author = $faker->name();
            $book->genre = $faker->text(15);
            $book->price = rand(10, 100);
            $book->cover = 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781442499577/random-9781442499577_hr.jpg';
            $book->save();
        }
    }
}
