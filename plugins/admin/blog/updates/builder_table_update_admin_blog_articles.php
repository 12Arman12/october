<?php namespace Admin\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminBlogArticles extends Migration
{
    public function up()
    {
        Schema::table('admin_blog_articles', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_blog_articles', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
