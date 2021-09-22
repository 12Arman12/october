<?php namespace Admin\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminBlogArticles extends Migration
{
    public function up()
    {
        Schema::create('admin_blog_articles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_blog_articles');
    }
}
