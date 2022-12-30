<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessProfile;

class BusinessController extends Controller
{
    public function get(Request $request){
        $profiles = BusinessProfile::all();
        return view("business.profile", ["profiles"=>$profiles]);
    }

    public function store(Request $request){
        BusinessProfile::insert(request()->except(["_token"]));
        $profiles = BusinessProfile::all();
        return view("business.profile",["status"=>"Successfully Stored", 
                                        "profiles"=>$profiles]);
    }
}
