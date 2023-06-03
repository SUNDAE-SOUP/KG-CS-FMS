<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index(){

        return view('components/admin/section/admin-dashboard');
    }

    public function getdata() {

        $loggedInUserId = Auth::id(); // Get the ID of the currently logged-in user

        // $data = YourModelName::where('user_id', $loggedInUserId)->get();
        // $user = User::find($loggedInUserId);
    
        return view('your-view.blade.php', ['user' => $user]);
    }
}
