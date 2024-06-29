<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
     public function login(Request $request)
    {
        // Validate the request data



        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid email or password'
            ], 401);
        }

        // Generate a token (simple example; you might want to create a more secure token)

        // Optionally, store the token somewhere if you want to keep track of active sessions
        // e.g., in a `personal_access_tokens` table

        return response()->json([
            'success' => true,
            'message' => 'Login successful',
            'user' => $user,
        ], 200);
    }
}
