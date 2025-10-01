<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Buyer;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function store(Request $request)
    {

        $username = $request->input('username');
        $email = $request->input('email');
        $role = $request->input('role');
        $password = $request->input('password');

        $fullname = $request->input('fullname');
        $phone_number = $request->input('phone_number');

        $account = Account::create([
            'username' => $username,
            'email' => $email,
            'role' => $role,
            'password' => bcrypt($password),

        ]);

        Buyer::create([
            'phone_number' => $phone_number,
            'fullname' => $fullname,
            'account_id' => $account->id,
        ]);
        dd($request->all());

        return response()->json([
            'message' => 'Account & Buyer berhasil dibuat',
            'account' => $account,
        ], 200);

    }
}
