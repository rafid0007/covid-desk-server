<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'description',
      'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'question_tag');
    }

    //upvote
//    public function users() {
//        return $this->belongsToMany(User::class, 'question_user');
//    }
}
