<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function checkUserEmail(Request $request)
    {
        $email = $request->input('email');

        // Ensure the email is correctly formatted
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json(['error' => 'Invalid email format'], 400);
        }

        $count = DB::table('users')->where('email', $email)->count();

        return response()->json(['email_count' => $count]);
    }
}
