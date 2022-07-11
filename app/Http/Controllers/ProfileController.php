<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\Package;
use App\Models\Profile;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Validation\Rules\Unique;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
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
     * @param  \App\Http\Requests\StoreProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $profileInfo = User::find($user);
        $ads = new Package;
        $allAds = $ads->where('user_id' , $user)->paginate(5);
        $getCategory = function ($id){
            $cat = new Category;
            $getCat = $cat->where('id' , $id)->get();
            return $getCat[0];
        };
        $getLocation = function ($id){
            $city = new City;
            $getCity = $city->where('id' , $id)->get();
            return $getCity[0];
        };
        return view('profile.index', compact('profileInfo','allAds','getCategory', 'user', 'getLocation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('profile.edit-profile' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileRequest  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        $imagePath = request('image')->store('profile' , 'public');

            $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'unique:users'],
            'phonenumber' => 'required',
            'image' => 'image',
        ]);
        
        $user->update(array_merge($data , ['image' => $imagePath]));
        return redirect("/profile/edit-user=$user->id")->with('message', 'Information updated!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
