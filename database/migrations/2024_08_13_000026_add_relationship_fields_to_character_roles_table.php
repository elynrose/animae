<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCharacterRolesTable extends Migration
{
    public function up()
    {
        Schema::table('character_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('character_id')->nullable();
            $table->foreign('character_id', 'character_fk_10024587')->references('id')->on('characters');
        });
    }
}
