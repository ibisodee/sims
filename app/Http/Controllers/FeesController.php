<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeesController extends Controller
{
    function index()
    {
        $data = array(
            'list'=>DB::table('fees')->get()
        );
        return view('fees', $data);
    }   
    
}
