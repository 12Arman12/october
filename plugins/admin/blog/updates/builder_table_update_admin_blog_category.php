<?php namespace Admin\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminBlogCategory extends Migration
{
    public function up()
    {
        Schema::rename('admin_blog_categorys', 'admin_blog_category');
    }
    
    public function down()
    {
        Schema::rename('admin_blog_category', 'admin_blog_categorys');
    }
}
