<?php

namespace App\Models;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable= ['title', 'description','genres','published', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }
}
