<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class TestingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function testing()
    {
        return view('testingsignup');
    }


    public function update(Request $request)
    {
    $existingUser = User::where('employee_id', $request->employee_code)->first();

        // Update the existing user's details
        $existingUser->email = $request->email;
        $existingUser->password = Hash::make($request->password);
        $existingUser->save();

        $user = User::create([
            'name' => $request->name,
            'employee_code' => $request->employee_code,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
    }
    public function update2(Request $request)
    {
        $existingUser = User::where('employee_id', $request->employee_code)->first();

        if ($existingUser) {
            $existingUser->email = $request->email;
            $existingUser->password = Hash::make($request->password);
            $existingUser->save();

            return response()->json(['message' => 'User details updated successfully'], 200);
        }

        return response()->json(['message' => 'User not found'], 404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
