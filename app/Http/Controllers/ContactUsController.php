<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUs\ContactUsStoreRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    public function index(){
        return view('website.contact_us');
    }

    public function store(ContactUsStoreRequest $request)
    {
        try {

            $contactUs = DB::transaction(function () use ($request) {
                $contactUs = ContactUs::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'message' => $request->message,
                ]);
                return $contactUs;
            });
            if ($contactUs) {
                sweetalert()->success('Contact Message Has Been Send Successfully!');
                return back();
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}