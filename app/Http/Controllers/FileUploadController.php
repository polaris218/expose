<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileUploadController extends Controller
{
    public function upload(Request $request) 
    { 
        $filename = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('upload',$filename);
        return back();
    }
}
