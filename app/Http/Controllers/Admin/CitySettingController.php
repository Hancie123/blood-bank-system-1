<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CitySettingController extends Controller
{
    public function index()
    {

        $states = State::get();
        $cities=City::latest()->get();
        return view('admin.settings.city_settings', compact('states','cities'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'state_id' => ['required'],
            'name'=>['required',Rule::unique('cities','name')]

        ]);
        try {

            $city = DB::transaction(function () use ($request) {
                $city = City::create([
                    'state_id' => $request->state_id,
                    'name'=>$request->name
                ]);

                return $city;
            });
            if ($city) {
                sweetalert()->addSuccess('City created successfully');
                return back();
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}