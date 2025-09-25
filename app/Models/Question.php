<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table = 'questions';

    public function getParentTitlesAttribute()
    {
        $titles = [];
        $parent = $this->parent;

        while ($parent != 0) {
            $q = Question::find($parent);
            if ($q) {
                $titles[] = $q->title;
                $parent = $q->parent;
            } else {
                break;
            }
        }

        return array_reverse($titles);
    }


     public function searches()
    {
        return $this->hasMany(Search::class, 'q_id', 'id');
    }


    ///
     // Parent relation
    public function parent()
    {
        return $this->belongsTo(Question::class, 'parent');
    }

    // Children relation
    public function children()
    {
        return $this->hasMany(Question::class, 'parent');
    }

       public function getFullPathAttribute()
    {
        $titles = [$this->title];
        $parent = $this->parentQuestion; // 👈 relation use karo, int nahi

        while ($parent) {
            array_unshift($titles, $parent->title);
            $parent = $parent->parentQuestion;
        }

        return implode(' => ', $titles);
    }
}
