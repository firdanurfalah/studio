<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CategoriModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $data['category'] = CategoriModel::get();
        // return $data;
        return view('front.beranda', $data);
    }
}
