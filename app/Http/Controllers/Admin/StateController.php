<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StateController extends Controller
{
    public function index(){

        $states=State::with('country')->latest()->get();
        $countries=Country::get();
       
        return view('admin.settings.state_settings',compact('states','countries'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'country_id' => ['required'],
            'name'=>['required',Rule::unique('states','name')]

        ]);
        try {

            $states = DB::transaction(function () use ($request) {
                $states = State::create([
                    'country_id' => $request->country_id,
                    'name'=>$request->name
                ]);

                return $states;
            });
            if ($states) {
                sweetalert()->addSuccess('State created successfully');
                return back();
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}