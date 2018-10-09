<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateBlogPostsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $this->down();

        // Blog post category
        Schema::create('blog_categories', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 100);
            $table->unsignedInteger('post_count')->default(0);
            $table->timestamps();
        });

        // Blog post tags
        Schema::create('blog_tags', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 50);
            $table->unsignedInteger('post_count')->default(0);
            $table->timestamps();
        });

        Schema::create('blog_posts', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('content');
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('category_id');
            $table->dateTime('published_at')->default(DB::raw('NOW()'));
            $table->timestamps();

            // foreign keys
            $table->foreign('author_id')->references('id')->on('users');

            $table->foreign('category_id')->references('id')->on('blog_categories');
        });

        Schema::create('blog_post_blog_tag', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('blog_post_id');
            $table->unsignedInteger('blog_tag_id');
            $table->timestamps();

            // foreign keys
            $table->foreign('blog_post_id')->references('id')->on('blog_posts');

            $table->foreign('blog_tag_id')->references('id')->on('blog_tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('blog_posts');
        Schema::dropIfExists('blog_tags');
        Schema::dropIfExists('blog_categories');
    }
}
