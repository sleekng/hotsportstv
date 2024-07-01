<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('image')->nullable();
            $table->string('category');
            $table->text('content');
            $table->string('keywords')->nullable();
            $table->enum('status', ['published', 'draft','trash'])->default('draft');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}
