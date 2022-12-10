<?php

namespace App\Http\Controllers;

use App\Enums\UserType;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('auth/registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(CreateUserRequest $request)
    {
        $img = $request->image;
        $imgRandName = md5(rand(1000, 10000));
        $extension = strtolower($img->getClientOriginalExtension());
        $imgName = $imgRandName . '.' . $extension;
        $img->move(public_path() . '/profilePic/', $imgName);


        $request->merge(['password' => Hash::make($request->input('password'))]);

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'institution' => $request->institution,
            'country' => $request->country,
            'type' => $request->type,
            'skill' => $request->skill,
            'image' => $imgName
        ]);

        //auth('web')->login($user);
        return redirect()->route('login.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
