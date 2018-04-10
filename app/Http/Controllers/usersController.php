<?php

namespace App\Http\Controllers;
use App\users;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller as BaseController;

class usersController extends BaseController
{
    public function users()
    {
        $results = Users::all();
        return response()->json($results, 200);
    }

    public function find($id)
    {
        $results = Users::find($id);
        return response()->json($results, 200);
    }

    public function create(Request $request)
    {
        $user = new users;
        $user ->name = $request->name;
        $user->save();
        return response()->json(['message'=>'Created !'], 201);
       
    }

    public function update(Request $request)
    {
        $user = Users::find($request->id);
        $user->name = $request->name;
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();
        return response()->json(['message'=>'Updated !'], 200);        
    }
}
