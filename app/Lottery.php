<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Session;

class Lottery extends Model
{
    protected $table = 'lotterys';

    static public function saveData($request){
        $user = new self();
        $user->full_name = $request['full_name'];
        $user->email = $request['email'];
        $user->numbers = $request['numbers'];
        $user->save();

        Session::flash('sm', 'Thank you! Your results are saved.');
    }


    static public function getUserByEmail($request){
        return count(DB::select("SELECT * FROM lotterys WHERE email = ?", [$request['email']]));

    }

}
