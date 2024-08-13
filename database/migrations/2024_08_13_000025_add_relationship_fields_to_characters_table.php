<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCharactersTable extends Migration
{
    public function up()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->unsignedBigInteger('scene_id')->nullable();
            $table->foreign('scene_id', 'scene_fk_10024568')->references('id')->on('backgrounds');
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->foreign('gender_id', 'gender_fk_10024569')->references('id')->on('genders');
            $table->unsignedBigInteger('age_group_id')->nullable();
            $table->foreign('age_group_id', 'age_group_fk_10024570')->references('id')->on('age_groups');
            $table->unsignedBigInteger('body_type_id')->nullable();
            $table->foreign('body_type_id', 'body_type_fk_10024571')->references('id')->on('body_types');
            $table->unsignedBigInteger('hair_color_id')->nullable();
            $table->foreign('hair_color_id', 'hair_color_fk_10024572')->references('id')->on('hair_colors');
            $table->unsignedBigInteger('hair_lenght_id')->nullable();
            $table->foreign('hair_lenght_id', 'hair_lenght_fk_10024573')->references('id')->on('hair_lengths');
            $table->unsignedBigInteger('hair_style_id')->nullable();
            $table->foreign('hair_style_id', 'hair_style_fk_10024574')->references('id')->on('hair_styles');
            $table->unsignedBigInteger('eye_color_id')->nullable();
            $table->foreign('eye_color_id', 'eye_color_fk_10024575')->references('id')->on('eye_colors');
            $table->unsignedBigInteger('eye_shape_id')->nullable();
            $table->foreign('eye_shape_id', 'eye_shape_fk_10024576')->references('id')->on('eye_shapes');
            $table->unsignedBigInteger('skin_tone_id')->nullable();
            $table->foreign('skin_tone_id', 'skin_tone_fk_10024577')->references('id')->on('skin_tones');
            $table->unsignedBigInteger('facial_expression_id')->nullable();
            $table->foreign('facial_expression_id', 'facial_expression_fk_10024578')->references('id')->on('facial_expressions');
            $table->unsignedBigInteger('emotion_id')->nullable();
            $table->foreign('emotion_id', 'emotion_fk_10024636')->references('id')->on('emotions');
            $table->unsignedBigInteger('dress_style_id')->nullable();
            $table->foreign('dress_style_id', 'dress_style_fk_10024579')->references('id')->on('dress_styles');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_10024582')->references('id')->on('users');
        });
    }
}
