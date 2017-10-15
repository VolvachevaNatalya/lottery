<?php

namespace App\Http\Controllers;


use App\Lottery;
use Illuminate\Http\Request;

class LotteryController extends Controller {


    public function start(Request $request){

        return view('lottery');
    }

    public function saveData(Request $request){
        Lottery::saveData($request);
        return redirect('/');
    }


}
