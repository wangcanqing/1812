<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserModel;
class UserController extends Controller
{
    public function add(){
        $data = [
            'u_name'  =>'张三',
            'u_email' =>'2974654616@qq.com'
        ];
        $uid = UserModel::insertGetId($data);
        var_dump($uid);
    }
}
