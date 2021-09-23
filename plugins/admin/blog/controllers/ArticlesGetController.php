<?php namespace Admin\Blog\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

use Admin\Blog\Models\Article;
use Illuminate\Http\JsonResponse;

class ArticlesGetController extends Controller
{
    
    public function get(): JsonResponse
    {
        $post = Article::with('category')->get();
        return response()->json(['data' => $post]);
    }

}
