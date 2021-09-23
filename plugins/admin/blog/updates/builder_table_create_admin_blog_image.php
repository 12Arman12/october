<?php namespace Admin\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminBlogImage extends Migration
{
    public function up()
    {
        Schema::create('admin_blog_image', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_blog_image');
    }
}
