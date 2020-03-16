<?php

namespace App\Http\Controllers;

use App\Question;
use Spatie\Searchable\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $query = request('search');
        $searchResults = (new Search())
        ->registerModel(Question::class, 'title')
        // ->registerModel(Dataset::class, 'name')
        ->search($query);

        return view('search.result', compact('searchResults', 'query'));
    }
}
