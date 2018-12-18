<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersColumnsToAcceptNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('short_description')->nullable()->change();
            $table->string('audio_path')->nullable()->change();
            $table->string('image_path')->nullable()->change();
            $table->string('genre')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['short_description', 'audio_path', 'image_path', 'genre']);
            $table->text('short_description');
            $table->string('audio_path');
            $table->string('image_path');
            $table->string('genre');
        });
    }
}
