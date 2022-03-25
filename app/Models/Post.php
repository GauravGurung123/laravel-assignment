<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'image',
        'description',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
