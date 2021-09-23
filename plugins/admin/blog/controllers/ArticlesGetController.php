<?php namespace Admin\Blog\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

use Admin\Blog\Models\Article;


use Illuminate\Http\JsonResponse;

class ArticlesGetController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
    }

    public function get(): JsonResponse
    {
        $post = Article::with('category')->get();
        return response()->json(['data' => $post]);
    }

}
