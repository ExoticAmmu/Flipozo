<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\AdminLoginRequest;

class AdminController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function store(AdminLoginRequest $request){
        // dd($request->all());
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::ADMIN_HOME);

    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
    }

    public function update(){
        $adminDetails = Admin::where ('email',Auth::guard('admin')->user()->email)->first()->toArray();
        return view('admin.auth.profile');
    }
}
