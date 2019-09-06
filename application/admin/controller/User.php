<?php
namespace app\admin\controller;
use think\Loader;
class User
{
    public function index()
    {
        return view('index');
    }


    public function add_user($user){
        $data = [
            'name'=>$user['name'],
            'password'=>$user['password']
        ];
        $validate = Loader::validate('User');
        if(!$validate->check($data)){
            dump($validate->getError());
        }
        db('user')->insert($data);


    }


}
