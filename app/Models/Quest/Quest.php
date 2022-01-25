<?php

namespace App\Models\Quest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;

    protected $fillable = [ // 사용할 컬럼을 지정.
        'content',
        'title',
    ];
}
