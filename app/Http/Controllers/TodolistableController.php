<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Todolist ;

class TodolistableController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nom' => 'bail|string|required|between:2, 50',
            'delai' => 'bail|date|required',
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()] , 401) ;
        }

        $data = $request->all() ;
        $data['status'] = 'non demarre';
        $task = Todolist::create($data) ;

        if($task->save())
            return response()->json($task, 200);

        return response()->json(['message'=>'Une erreur est survenue lors de l\'enregistrement'], 401);
    }

    public function read(){
        return response()->json(Todolist::all(), 200);
    }
}
