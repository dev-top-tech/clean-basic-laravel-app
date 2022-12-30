<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessProfile;

class BusinessController extends Controller
{
    public function store(Request $request){
        BusinessProfile::insert(request()->except(["_token"]));
        return view("business.profile");
    }
}
