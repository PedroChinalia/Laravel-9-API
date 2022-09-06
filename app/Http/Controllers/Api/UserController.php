<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    //Get all users in the database
    public function index()
    {
        $user = User::all();

        return response()->json([
            'status' => true,
            'users' => $user
        ]);
    }

    //Get specific user
    public function show(User $user)
    {
        $user = User::find($user);
  
        if ($user) {
            return response()->json([
                'status' => true,
                'users' => $user
            ]);
        }
    }

    //Create new user
    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Usuário criado com sucesso!",
            'user' => $user
        ], 200);
    }
    
    //Update user
    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Usuário atualizado com sucesso!",
            'user' => $user
        ], 200);
    }

    //Delete user
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'status' => true,
            'message' => "Usuário deletado com sucesso!",
        ], 200);
    }
}
