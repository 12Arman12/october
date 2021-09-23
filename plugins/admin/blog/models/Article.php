<?php namespace Admin\Blog\Models;

use Model;

use Admin\Blog\Models\Category;

/**
 * Model
 */
class Article extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_blog_article';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'category' => [Category::class]
        ];


    public function getCategoryIdOptions($keyValue = null)
    {
        return Category::lists('name', 'id');
    }

    

}
