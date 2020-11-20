<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function animes(){
        return Anime::get();
    }

    public function getanime($id){
        return Anime::find($id);
    }
}