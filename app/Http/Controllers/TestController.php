<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){

        //条件が荒い時
        $values = Test::all();

        //ちょっと条件が複雑な時クエリビルダを使う（さらに複雑な場合は生sqlを書くことになる）
        $tests = DB::table('tests')
        ->select('id')->get();
        dd($tests);
        // dd($values);

        return view('tests.test',compact('values'));
    }
}