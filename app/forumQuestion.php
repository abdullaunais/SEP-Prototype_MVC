<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forumQuestion extends Model
{
    //
    protected $fillable = [
        'qID',
        'qFrom',
        'qSubject',
        'qBody',
        'qFlagged',
        'qCategory',
        'created_at',
        'updated_at'
    ];

    public $timestamps = false;
    protected $table = 'forumQuestion';
}
