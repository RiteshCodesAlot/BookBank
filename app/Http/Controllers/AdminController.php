<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    //This will show admin login form
    public function adminLogin()
    {
        return view('admin.admin-login');
    }
    
    //This will authenticate admin
    // public function authenticateAdmin(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'admin_email' => 'required|email',
    //         'admin_password' => 'required'
    //     ]);

    //     if ($validator->passes()) {
    //         if (Auth::attempt(['admin_email' => $request->admin_email, 'admin_password' => $request->admin_password])) {
    //             return redirect()->route('admin.adminDashboard');
    //         } else {
    //             return redirect()->route('admin.adminlogin')->with('error', 'Either Email/Password is incorrect');
    //         }
    //     } else {
    //         return redirect()->route('admin.adminlogin')
    //             ->withErrors($validator)
    //             ->withInput($request->only('admin_email'));
    //     }
    // }

public function authenticateAdmin(Request $request)
{
    $validator = Validator::make($request->all(), [
        'admin_email' => 'required|email',
        'admin_password' => 'required'
    ]);

    if ($validator->passes()) {
        $credentials = $request->only('admin_email', 'admin_password');

        if (Auth::guard('admins')->attempt(['admin_email' => $request->admin_email, 'admin_password' => $request->admin_password])) {
            return redirect()->route('admin.adminDashboard');
        } else {
            return redirect()->route('admin.adminlogin')->with('error', 'Either Email/Password is incorrect');
        }
    } else {
        return redirect()->route('admin.adminlogin')
            ->withErrors($validator)
            ->withInput($request->only('admin_email'));
    }
}


    public function dashboard()
    {
        return view('admin.admin-dashboard');
    }
}
