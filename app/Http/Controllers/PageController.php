<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public $articles;
    public function __construct(){
        $this->articles =[
            [
                'titlearticles' => '3 reasons why football is the best sport in the world.',
                'category' => 'Sport',
                'description' => 'Probably if u are here reading this article is beacuese u like this sport and u wanna know what we think and what people think about it.
            Now we are going to show to u the main reasons why is the best followed. 
            1) The first one is because the feelings that football gives to all the followers is inimitable and nothing can replace it, no one sport can give u the same emotions.
            2) No sport in the world has followed as football.
            3) Football fans is a fantastic wall to see.', "visible"=>true
            ],
            [
                'titlearticles' => '3  recommended videogames.',
                'category' => 'Videogames',
                'description' => 'Now we will show you 3 video games that we recommend. 1) The first is Call Of Duty: Modern Warfare 3, 2) the second is FC24 and  3) the third is GTA V.', "visible"=>true
            ],
            [
                'titlearticles' => 'programming',
                'category' => 'programming language',
                'description' => 'Programming is now on the agenda, all the tools we use today are scheduled. Through programming you can get anything because you program and decide what the language should do', "visible"=>true
            ]
        ];
     
    }

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
     
        //dd($this->articles);
        return view('pages.articles', ['articles' => $this->articles]);
    
    }
    public function article($article) {

        $articles = $this->articles[$article];
    
     
        if(!$articles['visible']) {
            
            abort(404);
        }
    
       return view('pages.article', ['article' => $articles]);
    
    }
}
