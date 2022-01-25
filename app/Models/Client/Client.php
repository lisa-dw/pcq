<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model  //'Client'는 모델명.
{
    use HasFactory;         // php의 Class 상속같은 개념. (위랑 같은)

    protected $fillable = [ // 사용할 컬럼을 지정.
        'content',
        'title',
    ];

    protected $casts = [    // 사용할 컬럼과 그 타입을 지정.

        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
