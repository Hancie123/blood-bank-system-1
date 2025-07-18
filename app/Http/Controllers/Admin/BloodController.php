<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BloodDonor;
use App\Models\RequestBlood;
use Illuminate\Http\Request;

class BloodController extends Controller
{
    public function bloodDonorIndex()
    {
        $bloodDonors = BloodDonor::with('city', 'state')->latest()->get();
        $countBloodDonor = BloodDonor::count();
        return view('admin.blood.blood_donor', compact('bloodDonors', 'countBloodDonor'));
    }


    public function requestBloodIndex()
    {

        $requestBloods = RequestBlood::with('city', 'state')->latest()->get();
        $requestBloodCount = RequestBlood::count();
        return view('admin.blood.request_blood', compact('requestBloods', 'requestBloodCount'));
    }

    public function toggleStatus($id)
    {
        $data = BloodDonor::findOrFail($id);

        $data->is_blood_donated = ($data->is_blood_donated === 'true') ? 'false' : 'true';
        $data->save();
        sweetalert()->addSuccess('Donation status updated.');
        return redirect()->back();
    }

    public function requestBloodToggleStatus($id)
    {
        $data = RequestBlood::findOrFail($id);

        $data->is_blood_received = ($data->is_blood_received === 'true') ? 'false' : 'true';
        $data->save();
        sweetalert()->addSuccess('Donation status updated.');
        return redirect()->back();
    }
}