<?php
namespace App\Logics\Common;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WX extends Controller
{
    /**
     * 显示所有应用程序的用户列表
     * DB facade 里的 table 方法来开始查询
     */
    public function index()
    {
        $res = DB::table("users")->get();
        return view("user.index", ["users" => $res]);
        foreach ($res as $re) {
            echo $res->name;
        }
    }

    /**
     * 从数据表中获取单行或单列
     * 如果你只需要从数据表中获取一行数据，你可以使用 first 方法。该方法返回一个 StdClass 对象：
     */
    public function one()
    {
        $res = DB::table("users")->where("name", "john")->first();
        echo $res->name;

        // find 方法,通过 id 字段值获取一行数据
        $res1 = DB::table("users")->find();

        // 获取一列的值
        // pluck 方法，获取包含单列值的集合
        /**
         * 分块结果
         */
        DB::table("users")->orderBy("id")->chunk(100, function ($user) {
            foreach ($user as $re) {
                //
            }
        });
        /**
         * 分块更新记录时，最好使用 chunkById 方法。 此方法将根据记录的主键自动对结果进行分页
         */
        DB::table("users")->where("active", false)
            ->chunkById(100, function ($users) {
                foreach ($users as $user) {
                    DB::table("users")
                        ->where("id", $user->id)
                        ->update(["active" => true]);
                }
            });


        /**
         * 聚合
         * count, max，min， avg，还有 sum
         */

        $res = DB::table("users")->count();
        $price = DB::table("orders")->max("price");
        DB::table("orders")->where("finalized", 1)
            ->avg("price");

        /**
         * 判断记录是否存在
         */
        DB::table("orders")->where("filnalzed", 1)->exists();
        DB::table("orders")->where("filnalized", 1)->doesntExist();


        /**
         * select 语句
         * select 查询语句来查询指定的字段
         */
        $res = DB::table("users")->select("name", "email as user_email")->get();
        // distinct 不重复
        $res = DB::table("users")->distinct()->get();

        /**
         * addSelect在现有的查询语句中加入一个字段
         */

        $res = DB::table("users")->select("name")->addSelect("age")->get();
        /**
         * 原生表达式
         */
        DB::table("user")
            ->select(DB::raw("count(*) as user_count,status"))
            ->where("status", "<>", 1)
            ->groupBy("status")
            ->get();

        /**
         * 原生方法
         */
        DB::table("order")
            ->selectRaw("price * ? as price_with_tax", [1.0825])
            ->get();

        /**
         * havingRaw / orHavingRaw
         */
        DB::table("orders")
            ->select("department", DB::raw("sum(price) as total_sales"))
            ->groupBy("department")
            ->havingRaw("SUM(price)>?", [2500])
            ->get();
        /**
         * orderByRaw
         */
        DB::table("orders")
            ->orderByRaw("updated_at - created_at DESC")
            ->get();

        /**
         * join
         */
        /**
         *
         * Inner Join 语句
         */
        DB::table("users")
            ->join("contact", "user.id", "=", "contacts.user_id")
            ->join("orders", "users.id", "=", "orders_user_id")
            ->select("users.*", "contacts.phone", "orders.price")
            ->get();


        /**
         * Left Join / Right Join 语句
         */


        DB::table("users")
            ->leftJoin("posts", "users.id", "=", "post.user_id")
            ->get();

        DB::table("users")
            ->rightJoin("posts", "users.id", "=", "posts.user_id")
            ->get();
        /**
         * Cross Join 语句
         */

    }


}

?>
















































