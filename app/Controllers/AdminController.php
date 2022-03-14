<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin_index');
    }

    public function type()
    {
        return view('admin_typePage');
    }
}