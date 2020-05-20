<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CrudController extends Controller
{
    public function addWord(){
        return view('addWord');
    }

    public function createWord(Request $req){
        $insertDB = DB::table('khotu')->insert(
            ['username'=>Session::get('username'),
            'word'=>$req->word,
            'phienam'=>$req->phienam,
            'loaitu'=>$req->loaitu,
            'nghia'=>$req->nghia,
            'vidu'=>$req->vidu    
            ]
        );
        if($insertDB){
            return redirect('single-blog');
        }else{
            return 'Thêm từ thất bại!';
        };
    }

    public function searchWord(Request $req){
        $DB=DB::table('khotu')->where([
            ['word','like','%'.$req->word.'%'],
            ['username','=',Session::get('username')]
        ])->get();
        return view('viewSearchWord',['search'=>$DB]);
    }

    public function editWord($id){
        $DB=DB::table('khotu')->where('id','=',$id)->first();
        return view('viewEditWord',['edit'=>$DB]);
    } 

    public function updateWord(Request $req){
        $update=DB::table('khotu')->where('id',$req->id)->update(
            ['word'=>$req->word,
            'phienam'=>$req->phienam,
            'loaitu'=>$req->loaitu,
            'nghia'=>$req->nghia,
            'vidu'=>$req->vidu]
        ); 
        if($update){
            return redirect('/single-blog');
        }else{
            return 'Cập nhật từ thất bại!';
        };                                                   
    }

    public function deleteWord($id){
        $DB=DB::table('khotu')->where('id',$id)->delete();
        if($DB){
            return redirect('single-blog');
        }else{
            return 'Xoá từ thất bại!';
        }
    }
}
