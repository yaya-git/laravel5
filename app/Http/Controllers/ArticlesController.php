<?php namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use Request;

class ArticlesController extends Controller {

    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();
        
        return View('articles.index', compact('articles'));
    }
    
    public function show($id)
    {
        $article = Article::findOrFail($id);
        
        return View('articles.show', compact('article'));
    }
    
    public function create()
    {
        return view('articles.create');
    }
    
    public function store(ArticleRequest $request)
    {
        Article::create($request->all());
        
        return redirect('articles');
    }
    
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        
        return View('articles.edit', compact('article'));
    }
    
    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        
        $article->update($request->all());
        
        return redirect('articles');        
    }
    

}
