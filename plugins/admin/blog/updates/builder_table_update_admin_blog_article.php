<?php namespace Admin\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminBlogArticle extends Migration
{
    public function up()
    {
        Schema::rename('admin_blog_articles', 'admin_blog_article');
    }
    
    public function down()
    {
        Schema::rename('admin_blog_article', 'admin_blog_articles');
    }
}
