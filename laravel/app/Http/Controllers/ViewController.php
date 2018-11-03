<?php

namespace App\Http\Controllers;

// require_once 'resources/org/code/xxxx.php';
// $code = new Code;
// $code = new \Code;
// echo $code -> make();

class ViewController extends Controller
{
    public function index()
    {
        // 传值方式一
        // $name = 'Branton';
        // $age = 20;
        // return view('view')->with('name',$name)->with('age',$age);

        // 传值方式二
        // $data = [
        //     'name'=> 'Branton1',
        //     'age'=>'26'
        // ];
        // return view('view',$data);

        // 传值方式三
        // $data = [
        //     'name' => 'Branton1',
        //     'age' => '26',
        // ];
        // $title = '这是title测试+compact';
        // return view('view', compact('data', 'title'));

        $name = "<script>document.write('larvael')</script>";
        $date = "<script>document.write(new Date())</script>";
        $num = 20;
        $arrays = ['news1', 'news2', 'news3', 'news4', 'news5'];
        $arrays1 = [];

        return view('view', compact('name', 'date', 'num', 'arrays', 'arrays1'));

    }

    public function views()
    {
        return view('views');
    }

    public function layout()
    {
        return view('layout');
    }

    public function config()
    {
        // $pdo = DB::connection()->getPdo();
        // dd($pdo);
        // $user = DB::table('user_info')->where('user_id', '>', 1)->get();
        // dd($user);
        return view('config');
    }

    public function code()
    {

    }

    public function login()
    {
        $code = $_SESSION('code');
        if ($input = $request->all()) {
            if ($input['code'] !== $code) {
                return back()->with('msg', '验证码错误');
            }
        } else {

        }
    }

}
