<?php namespace Admin\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminBlogPost extends Migration
{
    public function up()
    {
        Schema::create('admin_blog_post', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->integer('category_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_blog_post');
    }
}
