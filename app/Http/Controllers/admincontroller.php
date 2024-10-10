<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Tbladmin;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function view(){
        return view('form');
    }
    public function create(Request $request){
        if(isset($request->submit))
        {   
                $arr= Tbladmin::create([
                  'name'=>$request->name,
                  'gender'=>$request->gender,
                 'checkbox'=>$request->checkbox,
                 'city'=>$request->city,
              ]);
            }
            return redirect()->back();
    }
}
