<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'title' => 'The Dark Side of the Moon',
            'artist' => 'Pink Floyd',
            'price' => '11.99',
            'genre_id' => 1
        ]);

        DB::table('albums')->insert([
            'title' => 'The Beatles',
            'artist' => 'The Beatles',
            'price' => '10.99',
            'genre_id' => 1
        ]);

        DB::table('albums')->insert([
            'title' => 'A Love Supreme',
            'artist' => 'John Coltrane',
            'price' => '9.99',
            'genre_id' => 2
        ]);

        DB::table('albums')->insert([
            'title' => 'Kind of Blue',
            'artist' => 'Miles Davis',
            'price' => '10.99',
            'genre_id' => 2
        ]);

        DB::table('albums')->insert([
            'title' => 'Neverminds',
            'artist' => 'Nirvana',
            'price' => '9.99',
            'genre_id' => 4
        ]);
    }
}
