<?php

  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;

  class CreateCharactersTable extends Migration
  {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('characters', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string("name");
        $table->integer("class_id")->nullable();
        $table->integer("str");
        $table->integer("dex");
        $table->integer("con");
        $table->integer("int");
        $table->integer("wis");
        $table->integer("cha");
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
      Schema::dropIfExists('characters');
    }
  }
