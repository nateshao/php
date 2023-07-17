<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function update()
    {
        dd(13456);
    }

    public function index()
    {
        dd('index');
    }

    public function select()
    {
        $res = DB::select("select * from users where active = ?", [1]);
        return view("user.select", ["users" => $res]);
        // 遍历结果
        foreach ($res as $re) {
            echo $res->re;
        }
    }


    /**
     * 使用命名绑定
     * $results = DB::select('select * from users where id = :id', ['id' => 1]);
     */
    /**
     * 插入语句
     */
    public function insertUser()
    {
        $res = DB::insert("insert into users(id,name)value (?,?)", [1, "nateshao"]);
    }

    /**
     * 更新
     */
    public function updateUser()
    {
        $res = DB::update("update users set votes = 100 where name = ?", ["千羽"]);
    }

    /**
     * 数据库事务
     */
    public function trans()
    {
        DB::transaction(function () {
            DB::table("users")->update(['votes' => 1]);
            DB::table("post")->delete();
        });
    }

}
