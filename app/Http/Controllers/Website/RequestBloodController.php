<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\RequestBlood;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestBloodController extends Controller
{
    public function index()
    {

        $states = State::get();
        $cities = City::get();

        return view('website.request_blood', compact('states', 'cities'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'mobile_no' => ['required'],
            'dob' => ['required']

        ]);


        try {

            $requestBlood = DB::transaction(function () use ($request) {
                $requestBlood = RequestBlood::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'mobile_no' => $request->mobile_no,
                    'dob' => $request->dob,
                    'gender' => $request->gender,
                    'blood_group' => $request->blood_group,
                    'state_id' => $request->state_id,
                    'city_id' => $request->city_id,
                    'current_location' => $request->current_location

                ]);

                return $requestBlood;
            });
            if ($requestBlood) {
                sweetalert()->addSuccess('Request blood has been registered successfully!');
                return back();
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}