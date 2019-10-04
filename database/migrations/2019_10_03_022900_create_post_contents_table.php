<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TITLE');
            $table->string('platform');
            $table->text('Description');
            $table->string('photo1');
            $table->string('photo2');
            $table->string('photo3');
            $table->string('photo4');
            $table->string('link_project');
            $table->timestamps();
            $table->integer('user_id');  //table user, id pembuat content
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_contents');
    }
}
