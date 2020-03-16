<?php

namespace App;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;

class Question extends Model implements Searchable
{
    public function category()
    {
        return $this->belongsTo(QuestionCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getSearchResult(): SearchResult
     {
        $url = route('question.show', $this->id);
     
        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->title,
            $url
        );
     }
}
