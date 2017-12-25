<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilmController extends Controller
{
    public function getFilmIndex(Request $request){
        
    }

    public function getFilmByCategory(Request $request){
    
    }
    
    public function getFilmByRegion(Requst $request){
    
    }
    
    public function getFilmByType(Requst $request){
    
    }


    //或者这些参数都当成type?通过一次传参 取回全部结果?
    public function getFilmByArguments(Request $request){
        $arguments = $request->input('arguments');
    
    }
}
