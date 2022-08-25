<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Game;
use Doctrine\Inflector\Rules\Word;
use Faker\Generator as Faker;


class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
       $console = [
        'Playstation', 'Xbox', 'Pc', 'Nintendo'
       ];


        for ($i=0; $i < 5 ; $i++) {
        $game = new Game();

        $game-> user_id = 1;
        $game-> titolo = $faker-> words(rand(2,4),true);
        $game-> genere = $faker -> words(rand(1,2),true);
        $game-> copertina = 'https://picsum.photos/id/'. (rand(1,300)). '/400/400';
        $game-> console = $console[rand(0,3)];
        $game-> store = rand(1,2);
        $game->save();





       }
    }
}
