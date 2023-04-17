@php
/*
$layout_page = shop_profile
** Variables:**
- $customer
*/ 
@endphp

@extends($sc_templatePath.'.account.layout')

@section('block_main_profile')

    <div class="my-profile ">
        <div class="heading-wrapper">
            <div class="heading mb-0">My Profile</div>
            <a href="{{ sc_route('customer.change_infomation') }}" class="edit">Edit Profile</a>
        </div>
        <ul class="profile-detail">
            <li class="item">
                <div class="label">Full Name</div>
                <div class="text">{{$customer['name']}}</div>
            </li>
            <li class="item">
                <div class="label">Gender</div>
                <div class="text">{{$customer['sex']}}</div>
            </li>
            <li class="item">
                <div class="label">Date of Birth</div>
                <div class="text">{{$customer['birthday']}}</div>
            </li>
            <li class="item">
                <div class="label">Email Address</div>
                <div class="text">{{$customer['email']}}</div>
            </li>
            <li class="item">
                <div class="label">Phone Number</div>
                <div class="text">{{$customer['phone']}}</div>
            </li>
           
        </ul>
    </div>

@endsection