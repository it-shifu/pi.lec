<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //

    public function povar_asan($tibi='jonokoi',$sany=1){
        //Ушул жерде асан иштейт

        return view('asan',[
            'sany'=>$sany,
            'tibi'=>$tibi,
            'vid'=>'shaurma',
        ]);
    }

    public function abu($aty='san s.',$sany=1){
        return view('asan',[
            'sany'=>$sany,
            'tibi'=>'',
            'vid'=>$aty,
        ]);


    }
}
