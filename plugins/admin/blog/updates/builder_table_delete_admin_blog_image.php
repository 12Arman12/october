<?php namespace Admin\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAdminBlogImage extends Migration
{
    public function up()
    {
        Schema::dropIfExists('admin_blog_image');
    }
    
    public function down()
    {
        Schema::create('admin_blog_image', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('image')->nullable();
        });
    }
}
