<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Game;

class GamesController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', ['games' => $games]);
    }
    
    public function show(Game $id)
    {
        return view('games.show', ['game' => $id]);
    }
    
    public function create()
    {
        return 'it works';
    }
}
