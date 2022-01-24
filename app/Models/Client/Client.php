<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model  //'Client'는 테이블명.
{
    use HasFactory;         // Class 상속같은 개념.

    protected $fillable = [
        'content',
        'title',
    ];

}
