<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index($id = '111') {
        $data = [
            'msg'=>'コントローラから渡されたメッセージ',
            'id'=>$id,
            ];
       return view('hello.index', $data);
    }
}
