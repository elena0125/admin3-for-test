<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class NewsController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.news.index';
        $this->create = 'admin.news.create';
        $this->edit = 'admin.news.edit';
        $this->show = 'admin.news.show';
    }

    public function index()
    {
       if (Gate::allows('admin')){
           return view('admin.news.index');
       } else {
           return '你不是管理員';
       }
    }
}
