<?php namespace Admin\Image\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminImage extends Migration
{
    public function up()
    {
        Schema::create('admin_image_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_image_');
    }
}
