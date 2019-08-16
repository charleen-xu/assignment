<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HouseController extends Controller
{
    public function index()
    {
        return House::all();                    //檢索所有資料
    }

    public function show(House $House)
    {
        return $House;                          //檢索單筆資料
    }

    public function store(Request $request)
    {
        $House = House::create($request->all());

        return response()->json($House, 201);   //資料新增，回傳201代表資料成功新增
    }

    public function update(Request $request, House $House)
    {
    //    print_r($request);;

        $House->update($request->all());

        return response()->json($House, 200);   //資料更新，回傳200代表OK
    }

    public function delete(House $House)
    {
        $House->delete();

        return response()->json(null, 204);    //資料刪除，回傳204代表動作成功執行不回傳內容
        
    }
}

