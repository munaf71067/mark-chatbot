<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Users;

class req_to_agent extends Model
{
    protected $table = 'req_to_agent';
    // protected $primaryKey = 'ra_id';
    //
    
    protected $primaryKey = 'ra_id';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(Users::class, 'u_id', 'id');
    }
}
