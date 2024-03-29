<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function questions()
    {
        return $this->belongsToMany(Tag::class, 'question_tag', 'tag_id', 'question_id')
            ->withTimestamps();
    }
}
