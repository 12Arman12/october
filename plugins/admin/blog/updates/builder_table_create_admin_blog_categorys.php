<?php namespace Admin\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminBlogCategorys extends Migration
{
    public function up()
    {
        Schema::create('admin_blog_categorys', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_blog_categorys');
    }
}
