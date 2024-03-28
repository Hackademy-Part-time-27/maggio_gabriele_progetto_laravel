<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
  public function create(){
    Article::create([
        'title' => '3 reasons why football is the best sport in the world.',
        'category' => 'Sport',
        'description' => 'Probably if u are here reading this article is beacuese u like this sport and u wanna know what we think and what people think about it.
            Now we are going to show to u the main reasons why is the best followed. 
            1) The first one is because the feelings that football gives to all the followers is inimitable and nothing can replace it, no one sport can give u the same emotions.
            2) No sport in the world has followed as football.
            3) Football fans is a fantastic wall to see.', 
            "visible"=>true
    ]);
    Article::create([
        'title' => '3  recommended videogames.',
        'category' => 'Videogames',
        'description' => 'Now we will show you 3 video games that we recommend. 1) The first is Call Of Duty: Modern Warfare 3, 2) the second is FC24 and  3) the third is GTA V.',
            "visible"=>true
    ]);
    Article::create([
       
        'title' => 'programming',
    
            'category' => 'programming language',
            'description' => 'Programming is now on the agenda, all the tools we use today are scheduled. Through programming you can get anything because you program and decide what the language should do', 
            "visible"=>true
    ]);
  }
}



        