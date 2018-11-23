<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'text', 'role'
    ];

    protected $dates = ['deleted_at'];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
