<?php namespace Admin\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAdminBlogPost extends Migration
{
    public function up()
    {
        Schema::dropIfExists('admin_blog_post');
    }
    
    public function down()
    {
        Schema::create('admin_blog_post', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255)->nullable();
            $table->integer('category_id')->unsigned();
        });
    }
}
