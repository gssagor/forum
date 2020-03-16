<?php

namespace App;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model/*  implements Searchable */
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function getSearchResult(): SearchResult
    //  {
    //     $url = route('blogPost.show', $this->slug);
     
    //      return new \Spatie\Searchable\SearchResult(
    //         $this,
    //         $this->title,
    //         $url
    //      );
    //  }
}
