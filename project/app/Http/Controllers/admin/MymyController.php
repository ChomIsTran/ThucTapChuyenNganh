<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Mymy;
use Illuminate\Http\Request;

class MymyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $list = Mymy::orderBy('id', 'desc')->get();
        view()->share(['mymy' => $list]);
    }

    public function index()
{
    $mymy = Mymy::orderBy('id', 'desc')->get();
    return view('admin.mymy.mymy-list', compact('mymy'));
}

}

