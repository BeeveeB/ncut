<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blue extends Model
{
    //

    // public function course()
    // {
    //     return $this->belongsTo(Course::class);
    // }

    protected $table = "blue";

    protected $primaryKey = 'id';

    protected $fillable = [
        'Verb',
        'Noun',
        'Adjective',
        'Adverb',
        'Count'
    ];
}
