<?php namespace Admin\Image\Models;

use Model;

/**
 * Model
 */
class Image extends Model
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
    public $table = 'admin_image_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'image' => 'System\Models\File'
    ];

}
