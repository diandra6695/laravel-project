<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function show (){
        $news = Http::get('https://api.akuari.my.id/info/antaranews')['result'];
        return view('news', [
            'news' => $news
        ]);
    }
    
    public function create(){
        return 'bagian create';
    }
}
