<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function thongTinSV()
    {
        $data = [
            [
                'FullName' => 'HoXuanDang',
                'Birthday' => '01-05-3004',
                'Gender' => 'Male',
                'Address' => 'ThanhHoa',
                'Phone' => '0967365963',
                'Email' => 'hodang204@gmail.com',
            ]
        ];
        // return view('Introduction', compact('information'));
        return view('Introduction', compact('data'));
    }
}
