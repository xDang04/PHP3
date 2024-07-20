<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserController extends Controller
{
    public function listUser()
    {
        $data = DB::table('users')
            ->join('phongban', 'users.phongban_id', '=', 'phongban.id')
            ->select('users.name', 'users.email', 'phongban.ten_donvi', 'users.id', 'phongban.id as idPhongBan', 'users.tuoi')
            ->get();

        return view('users.list-user')->with([
            'listUsers' => $data
        ]);
    }
    public function addUser()
    {
        $phongBan = DB::table('phongban')
            ->select('id', 'ten_donvi')
            ->get();

        return view('users.add-user')
            ->with([
                'phongBan' => $phongBan
            ]);
    }

    public function addPostUser(Request $request)
    {
        $data = [
            // request -> name ~ $_POST['name']
            'name' => $request->name,
            'email' => $request->email,
            'phongban_id' => $request->phongban,
            'tuoi' => $request->age,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('users')->insert($data);

        return redirect()->route('users.listUser');
    }
    public function deleteUser($idUser)
    {
        DB::table('users')->where('id', $idUser)
            ->delete();
        return redirect()->route('users.deleteUser');
    }

    public function editUser($idUser)
    {
        $phongBan = DB::table('phongban')
            ->select('id', 'ten_donvi')
            ->get();
        $user = DB::table('users')->where('id', $idUser)
            ->first();
        return view('users.update-user')
            ->with([
                'user' => $user,
                'phongBan' => $phongBan
            ]);
    }

    public function updateUser(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phongban_id' => $request->phongban,
            'tuoi' => $request->age,
            // 'creat_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ];
        DB::table('users')->where('id', $request->idUser)
            ->update($data);

        return redirect()->route('users.listUser');
    }
}   
