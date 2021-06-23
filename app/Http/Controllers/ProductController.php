<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.product.index';
        $this->create = 'admin.product.create';
        $this->edit = 'admin.product.edit';
        $this->show = 'admin.product.show';
    }

    public function index()
    {
    // {原本長這樣
    //     return view('admin.product.index');
    // }

    //用construct長這樣
        return view($this->index);
    }

}
