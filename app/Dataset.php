<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
