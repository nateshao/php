<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Ding extends Controller{
    public function test()
    {
        dump("控制中的方法");
    }

    public function index()
    {
        // 首页
        $arr=[
          ['id'=>1,'name'=>'赵四','age'=>18],
          ['id'=>2,'name'=>'王五','age'=>28],
          ['id'=>3,'name'=>'张三','age'=>11],
          ['id'=>4,'name'=>'老刘','age'=>19],
          ['id'=>5,'name'=>'嘿嘿嘿','age'=>58],
        ];
        // 渲染视图
        return view(
            "ding/list",
            ['name'=>'<s>老王</s>','sex'=>'男','age'=>123456,
                'point'=>65,'abc'=>'我是abc','arr'=>$arr]
        );
    }

    public function dbtest()
    {
        // 原生语句
//        $list=DB::select("select * from ding_student where sex='女'");
//        dump($list);
        // 连贯操作
        // table 设置表名(无前缀)
        // get 查询全部数据
//        $list=DB::table("student")->get();
//        dump($list);
//        // first 查询一条数据(第一条)
//        $list=DB::table("student")
//            ->where("id","=",'2022062005')
//            ->first();
//        dump($list);
//        // value 查询一个值
//        $name=DB::table("student")
//            ->where("id","=",'2022062005')
//            ->value("name");
//        dump($name);
//        // pluck 一列
//        $names=DB::table("student")
//            ->where("sex",'女')
//            ->pluck("name");
//        dump($names);

        // 设置字段 / 排序 / 限制 / 分组 / 筛选
//        $list=DB::table("student")
//            // select设置字段
////            ->select("id","name","sex")
////            ->select(["id","name","sex","age"])
//            // 排序 orderBy
////            ->orderBy("age",'desc')
//            // 限制 limit
////            ->limit(10)
//            // 分组
//            ->groupBy("m_id")
//            // DB::raw(原生语句)
//            ->select("m_id",DB::raw("count(*) as num"))
//            // having 筛选
//            ->having("num",">=",5)
//            ->get();
//        dump($list);

        // 连表
//        $list=DB::table("student")
//            ->join("major","student.m_id","=","major.id")
//            ->select("student.name","student.age","major.major")
//            ->where("student.age",">",50)
//            ->toSql();
//        dump($list);

        // where用法
//        $list=DB::table("student")
////            ->where("name",'like','%李%')
////            ->whereIn("m_id",[3,4,5])
//            ->whereNotNull("birthday")
//            // 展示sql语句
////            ->toSql();
//            ->get();
//        dump($list);
//
//        // 多条件用法
//        // and
//        $list=DB::table("student")
//            ->where("sex",'女')
//            ->where("age",">=",30)
//            ->get();
//        dump($list);
//        // or
//        $list=DB::table("student")
//            ->where("m_id",'4')
//            ->orWhere('m_id',5)
//            ->get();
//        dump($list);
//        // 组合查询 闭包
        $list=DB::table("student")
            ->where(function ($query){
                $query->where("sex",'女');
                $query->where("m_id",1);
            })
            ->orWhere(function ($query){
                $query->where("sex",'男');
                $query->where("m_id",2);
            })
            ->get();
        dump($list);
    }
}
