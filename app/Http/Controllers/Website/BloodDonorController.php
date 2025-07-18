<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\BloodDonor;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BloodDonorController extends Controller
{
    public function index()
    {
        $states = State::get();
        $cities = City::get();
        return view('website.blood_donor', compact('states', 'cities'));
    }

    public function searchBloods()
    {
        $cities = City::get();
        $city_id = request()->query('city_id');
        $blood_group = request()->query('blood_group');

        $bloodDonors = BloodDonor::where('city_id', $city_id)->where('blood_group', $blood_group)->get();
        return view('website.search_blood', compact('cities', 'bloodDonors'));
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

            $donor = DB::transaction(function () use ($request) {
                $donor = BloodDonor::create([
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

                return $donor;
            });
            if ($donor) {
                sweetalert()->addSuccess('Donor has been registered successfully!');
                return back();
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}