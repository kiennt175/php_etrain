<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function dangky(Request $request){
        $userDB = DB::table('user')->insert(
            ['username' => $request->username,
            'password' => $request->password,
            'fullname' => $request->fullname,
            ]
        );
        if ($userDB) {
            return redirect('/single-blog');
        } else {
            return 'Đăng kí thất bại';
        }
    }
   
    public function login(Request $req){
        $check = DB::table('user')->where([
            ['username', '=',$req->username],
            ['password', '=',$req->password],
        ])->first();
        if (!empty($check)) {
            Session::put('username',$req->username);
            $listword = DB::table('khotu')->where([['username', '=',$req->username],])->get();
            return view('single-blog',['listword'=>$listword]);
        }else{
            return  view('single-blog');
        }
    }

    public function logout(){
        Session::forget('username');
        return redirect('single-blog');
    }

    public function singleBlog(Request $req){
        if (Session::get('username')){
            $listword = DB::table('khotu')->where([['username', '=',Session::get('username')]])->get();
            return view('single-blog',['listword'=>$listword]);
        }
        return view('single-blog');
    }
}
