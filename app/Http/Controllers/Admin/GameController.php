<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    protected $perPage = 20;
    public function index()
    {
        $games = Game::paginate($this->perPage);
        return view('admin.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $games = Game::all();
        $console = [
            'Playstation', 'Xbox', 'Pc', 'Nintendo'
        ];

        return view('admin.games.create', [
            'games'     => $games,
            'console'   => $console
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $console = [
            'Playstation', 'Xbox', 'Pc', 'Nintendo'
        ];


        $form_data = $request->all();
        $newGame = new Game();
        $newGame->titolo = $form_data['titolo'];
        $newGame->user_id = 1;
        $newGame->copertina = $form_data['copertina'];
        $newGame->genere = $form_data['genere'];
        $newGame->console = $console[rand(0, 3)];
        $newGame->save();

        return redirect()->route('admin.games.show', $newGame->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('admin.games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
