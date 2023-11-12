<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'published_at'
    ];

    public function timeToRead(): Attribute
    {
        return Attribute::make(
            get: function () {
                $words = strip_tags($this->attributes['content']);
                $wordsCount = count(preg_split('/\s+/', $words, -1, PREG_SPLIT_NO_EMPTY));
                $minutes = floor($wordsCount / 200);
                $seconds = floor($wordsCount % 200 / (200 / 60));
                if ($seconds > 30) {
                    $minutes += 1;
                }
                $result = '';

                if ($minutes) {
                    $result = trans_choice('settings.time.min', $minutes, ['min' => $minutes]);
                }

                return trim($result);
            },
        );
    }
}
