<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string(column:'title');
            $table->text(column:'content');
            $table->string('featured_image')->nullable();
            $table->timestamp(column:'posted_at');
            $table->foreignId(column:'author_id');
            $table->foreignId(column:'tag_id');

            // "created_at" & "updated_at" in database
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
