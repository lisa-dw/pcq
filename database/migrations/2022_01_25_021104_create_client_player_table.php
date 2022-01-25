<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientPlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    // 생성하는 메소드
    {
        Schema::create('client_player', function (Blueprint $table) {
            $table->id();

            //'client_id'라는 컬럼을 포링키로 가져올 것이라는 뜻.
            // 이렇게 두개의 컬럼을 가져오면 다대다가 될 것이다. (?)
            // 이 테이블을 이용하면 다대다를 사용할 수 있을 것이다.

            // unsignedBigInteger 타입으로 'client_id' 컬럼을 가져온 것.
            $table->unsignedBigInteger('client_id')->comment('');
            $table->unsignedBigInteger('player_id')->comment('');

            // foreign Key로 선언해주는 것.
            //'client_id'는 'clients' table에 'id'를 가지고 온 것이고,
            // 테이블을 지울 때는 저 포링키들도 같이 지워달라는 뜻.
            $table->foreign('client_id')->references('id')->on('clients')->
            onUpdate('cascade')->onDelete('cascade');
            $table->foreign('player_id')->references('id')->on('players')->
            onUpdate('cascade')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()      // 지우는 메소드  (테이블을 지울 때, 키들부터 지워달라.)
    {
        Schema::table('client_player', function (Blueprint $table){
            //table:'client_player'에 'client_id'라는 컬럼의 foreign Key를 삭제해라.
            $table->dropForeign('client_player_client_id_foreign');
            $table->dropForeign('client_player_player_id_foreign');
        });

        Schema::dropIfExists('client_player');  //테이블을 삭제 하라는 명령어.
    }
}
