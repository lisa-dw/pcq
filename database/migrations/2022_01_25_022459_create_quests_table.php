<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quests', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('content')->nullable();

            // Quest 테이블이 player를 하나만 달고 있게끔 한것.    / 외래키를 만드는 것.
            $table->unsignedBigInteger('player_id')->comment('');

            // 'player_id'를 외래키로 선언하는 것.
            $table->foreign('player_id')->references('id')->on('players')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('quests', function(Blueprint $table){
           $table->dropForeign('quests_player_id_foreign');
        });

        Schema::dropIfExists('quests');
    }
}
