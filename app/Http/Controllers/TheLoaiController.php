<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;

class TheLoaiController extends Controller
{
    //
    public function getDanhsach()
    {
       	$theloai=TheLoai::all();
    	return view('admin.theloai.danhsach',['theloai'=>$theloai]);
    }

    public function getThem()
    {
    	return view('admin.theloai.them');
    }

    //--------Phuong thuc post them
    public function postThem(Request $request)
    {
        //echo $request->Ten;
        $this->validate($request,
            [
                'Ten'=> 'required|min:3|max:100'
            ],
            [
                'Ten.required'=>'Ban chua nhap ten the loai',
                'Ten.min'=>'Ten the loai phai tu 3 den 100 ki tu',
                'Ten.max'=>'Ten the loai phai tu 3 den 100 ki tu'
            ]);
           $theloai=new TheLoai;
        $theloai->Ten=$request->Ten;
        $theloai->TenKhongDau=changeTitle($request->Ten);
        //echo changeTitle($request->Ten);
        $theloai->save();
        return redirect('admin/theloai/them')->with('thongbao','Add successful!');
    }


    public function getSua()
    {
    	return view('admin.theloai.Sua');
    }
}
