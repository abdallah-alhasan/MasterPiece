@extends('layouts.master')

@section('content')

<section class="user-profile section">
<div class="container">
    @if(session()->has('message'))
        <div class="alert alert-success ">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="row">
        
        <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
            <div class="sidebar">
                <!-- User Widget -->
                <div class="widget user-dashboard-profile">
                    <!-- User Image -->
                        <img src="/storage/{{$user->image}}" alt="" class="rounded-circle mb-3" width="150" height="150">
                    <!-- User Name -->
                    <h5 class="text-center">{{$user->name}}</h5>
                    <p>Joined {{$user->created_at}}</p>
                </div>
                <!-- Dashboard Links -->
                <div class="widget user-dashboard-menu">
                    <ul>
                        <li>
                            <a href="dashboard-my-ads.html"><i class="fa fa-user"></i> My Ads</a></li>
                        <li>
                            <a href="dashboard-favourite-ads.html"><i class="fa fa-bookmark-o"></i> Favourite Ads <span>5</span></a>
                        </li>
                        <li>
                            <a href="dashboard-archived-ads.html"><i class="fa fa-file-archive-o"></i>Archeved Ads <span>12</span></a>
                        </li>
                        <li>
                            <a href="dashboard-pending-ads.html"><i class="fa fa-bolt"></i> Pending Approval<span>23</span></a>
                        </li>
                        <li>
                            <a href="logout.html"><i class="fa fa-cog"></i> Logout</a>
                        </li>
                        <li>
                            <a href="delete-account.html"><i class="fa fa-power-off"></i>Delete Account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
            <!-- Edit Personal Info -->
            <div class="widget personal-info">
                <h3 class="widget-header user">Edit Personal Information</h3>
                <form action="{{route('update_profile', $user)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <!-- First Name -->
                    <div class="form-group">
                        <label for="first-name">Name</label>
                        <input type="text" class="form-control" name="name" id="first-name" value='{{$user->name}}'>
                    </div>
                    <!-- File chooser -->
                    <div class="form-group choose-file">
                        <i class="fa fa-user text-center"></i>
                        <input type="file" class="form-control-file d-inline" name='image' id="input-file">
                    </div>
                    <!-- phone_number  -->
                    <div class="form-group">
                        <label for="phone_number">Phone number</label>
                        <input type="text" class="form-control" name="phonenumber" id="phone_number" value="{{$user->phonenumber}}">
                    </div>
                    <!-- email  -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- Submit button -->
                    <button class="btn btn-transparent">Save My Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection