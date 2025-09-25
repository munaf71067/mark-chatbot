<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DocumentChunk;

class Document extends Model
{
    //
    protected $table = 'documents';
    protected $fillable = ['title', 'file_path', 'u_id'];
    public function chunks() {
        return $this->hasMany(DocumentChunk::class);
    }
}
