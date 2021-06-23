<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.user.index';
        $this->create = 'admin.user.create';
        $this->edit = 'admin.user.edit';
        $this->show = 'admin.user.show';
    }

    public function index()
    {
        $lists = User::get();
        return view($this->index,compact('lists'));
    }


    public function create()
    {
        return view($this->create);
    }

    public function store(Request $request){
        $v = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:App\User,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        dd($v);

        if ($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }

    }


    public function edit()
    {
        return view('admin.user.edit');
    }
}
