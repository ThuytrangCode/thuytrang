<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrangController extends Controller
{
    public function showSinhvien(){
        $data=[
            [
                'ma'=>'PH33054',
                'ten'=>'Nguyễn Thùy Trang',
                'diachi'=>'Hưng Yên',
                'class'=>'WD18315'
            ],
            [
                'ma'=>'PH32198',
                'ten'=>'Phạm Thị Lâm',
                'diachi'=>'Thái Bình',
                'class'=>'WD18315'
            ]
        ];
       return view('list-sinh-vien')->with([
        'thongtinsv'=>$data
       ]);
    }
}
