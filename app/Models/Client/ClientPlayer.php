<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ClientPlayer extends Model    // Model 'Client'와 'Player'을 연결한 맵핑테이블이라는 뜻.
{
    use HasFactory;

    protected $table = 'client_player';
    // 원래는 테이블명이 'client_players'로 자동생성 되는데,
    // 맵핑 테이블이기 때문에 뒤에 s를 뺀 'client_player'로 이름을 지정해줌.
    // 지정을 안해주면, 나중에 테이블을 생성할 때 못 찾음.

}
