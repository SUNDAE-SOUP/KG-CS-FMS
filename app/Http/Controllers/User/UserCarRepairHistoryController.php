<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserCarRepairHistoryController extends Controller
{
    public function index(){

        return view('components/user/section/user-car-repair-history');
    }
}
