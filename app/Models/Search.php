<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    //
    protected $table = 'search';

     public function question()
    {
        return $this->belongsTo(Question::class, 'q_id', 'id');
    }
}
