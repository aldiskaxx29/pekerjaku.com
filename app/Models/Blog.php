<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'image',
        'description',
        'date_',
        'author'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','author');
    }
}
