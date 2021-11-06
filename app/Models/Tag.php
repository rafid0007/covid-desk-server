<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function questions() {
        return $this->belongsToMany(Question::class, 'question_tag');
    }

    public function faqs() {
        return $this->belongsToMany(Faq::class, 'faq_tag');
    }
}
