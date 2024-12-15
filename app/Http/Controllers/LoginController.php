<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        // Check if email contains 'admin'
        if (strpos($request->username, 'admin') !== false) {
            return (new AdminController())->login($request);
        } else {
            return (new SiswaController())->login($request);
        }
    }
}
