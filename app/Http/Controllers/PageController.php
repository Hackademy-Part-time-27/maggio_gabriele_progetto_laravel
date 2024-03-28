<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller

{
    public function homePage() {
        $titleHomePage= config('app.name');
        return view('welcome', compact('titleHomePage'));
    }
    
    public function contacts (){
            return view('pages.contacts', ['title' => 'Contacts us in this email: _____@gmail.com!']);
    }

     public function aboutMe() {
        return view('pages.about-me', [
            'h1title' => 'Who are we and what do we do?',
            'h1description' => 'Our group deals with web development, we are specialized in the sector for over 45 years, we work with seriousness and professionalism without ever lacking in humility!'
        ]);
    }
    public function articles() {
     
       $article = Article::all();
        //dd($this->articles);
        return view('pages.articles', ['articles' => $article]);
    
    }
    public function article($article) {

        $articles = $this->articles[$article];
    
     
        if(!$articles['visible']) {
            
            abort(404);
        }
    
       return view('pages.article', ['article' => $articles]);
    
    }
}
