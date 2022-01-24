<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model  //'Client'는 모델명.
{
    use HasFactory;         // php의 Class 상속같은 개념. (위랑 같은)

    protected $fillable = [
        'content',
        'title',
    ];


}
