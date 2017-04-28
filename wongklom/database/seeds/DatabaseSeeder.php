<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        App\Singer::create(['name' => 'Adele']);
        App\Singer::create(['name' => 'Richard Marx']);
        App\Singer::create(['name' => 'Ricky Martin']);
        App\Singer::create(['name' => 'Maroon 5']);

        $singer = App\Singer::where('name', '=', 'Maroon 5')->first();
        if (!is_null($singer)) {
            $singer->albums()->saveMany([
                new App\Album(['name' => 'Songs About Jane']),
                new App\Album(['name' => "It Won't Be Soon Before Long"]),
                new App\Album(['name' => 'The B-Side Collection']),
                new App\Album(['name' => 'Hands All Over']),
                new App\Album(['name' => 'Overexposed']),
                new App\Album(['name' => 'V'])
            ]);

            $album = App\Album::where('name', '=', 'Songs About Jane')->first();
            $album->songs()->saveMany([
                new App\Song([
                    'name' => "This Love",
                    'lyric' => "Lyric ... (This Love)"
                ]),
                new App\Song([
                    'name' => 'She Will Be Loved',
                    'lyric' => 'Lyric ... (She Will Be Loved)'
                ]),
                new App\Song([
                    'name' => "Not Coming Home",
                    'lyric' => "Lyric ... (Not Coming Home)"
                ]),
            ]);

            $album = App\Album::where('name', '=' , 'Hands All Over')->first();
            $album->songs()->saveMany([
                new App\Song([
                    'name' => "If I Ain't Got You",
                    'lyric' => "Lyric ... (If I Ain't Got You)"
                ]),
                new App\Song([
                    'name' => 'Runaway',
                    'lyric' => 'Lyric ... (Runaway)'
                ]),
                new App\Song([
                    'name' => "Don't Know Nothing",
                    'lyric' => "Lyric ... (Don't Know Nothing)"
                ]),
            ]);
        }

    }
}
