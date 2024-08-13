<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterRolesTable extends Migration
{
    public function up()
    {
        Schema::create('character_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role');
            $table->longText('prompt');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
