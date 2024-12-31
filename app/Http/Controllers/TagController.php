<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag) //route model binding allows laravel to fetch the detail for $tag from route
    {
        return view('results', ['jobs' => $tag->jobs]);
        // pass on all the jobs assocaited with this particular tag
        // see day 30 (https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/30) -> 24:47
    }
}
