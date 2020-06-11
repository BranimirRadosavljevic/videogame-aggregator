<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GameCardSmall extends Component
{
    public $game;

    public function __construct($game)
    {
        $this->game = $game;
    }

    public function render()
    {
        return view('components.game-card-small');
    }
}