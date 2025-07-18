<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {

        $countContactUs = ContactUs::count();
        $contacts=ContactUs::latest()->get();
        return view('admin.contact_us.contact_us', compact('countContactUs','contacts'));
    }
}