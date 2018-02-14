<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getUsers()
    {
        return User::all();
    }

    public function deleteUser(Request $request)
    {
        User::destroy($request->id);

        return ['status' => 'success', 'deleted' => $request->id];
    }
}
