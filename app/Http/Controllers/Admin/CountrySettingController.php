<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CountrySettingController extends Controller
{
    public function index()
    {
        $countries = Country::latest()->get();
        return view('admin.settings.country_settings', compact('countries'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'country' => ['required', Rule::unique('countries', 'country')],

        ]);
        try {

            $country = DB::transaction(function () use ($request) {
                $country = Country::create([
                    'country' => $request->country,
                ]);

                return $country;
            });
            if ($country) {
                sweetalert()->addSuccess('Country created successfully');
                return back();
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}