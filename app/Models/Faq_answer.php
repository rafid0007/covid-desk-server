<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq_answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'details',
        'para',
        'title',
        'point',
        'faq_id',
    ];

    public function faq() {
        return $this->belongsTo(Faq::class);
    }
}
