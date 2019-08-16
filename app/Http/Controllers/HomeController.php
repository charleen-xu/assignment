<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Messages;

class HomeController extends Controller
{
    public function index()
    {
        $data=[
            'name'=>'charleen',
            'mobile'=>'999999',
            'email'=>'123@gmail.com',
        ];
        return response()->json($data);
    }
    public function my_second_api()
    {
        echo "i am here";
    }

    /*public function index (Request $request)
    {
    return "controller is here";
    }*/
    public function store(Request $request)
    {
       
        $order=new Messages;
        $order->id=$request->input('id');
        $order->name=$request->input('name');
        $order->email=$request->input('email');
        $order->content=$request->input('content');
        $order->save();
        return $request->input();
        //print_r($request->input()->json($request));
    
    }


}
