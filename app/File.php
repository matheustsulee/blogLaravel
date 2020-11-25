<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;
    protected $table = 'files';
    protected $fillable = ['assunto', 'path'];
    //

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
