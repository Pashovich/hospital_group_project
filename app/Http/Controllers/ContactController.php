<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['nullable', 'string', 'max:191'],
            'email' => ['nullable', 'string', 'max:191'],
            'phone' => ['nullable', 'string', 'max:191'],
            'massage' => ['nullable', 'string', 'max:191'],
        ]);

        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->massage = $request->massage;

        if (!$contact->save()) {
            return back()->withInput()->with('fail', __('Feedback request failed!'));
        }

        return back()->with('success', __('Thank you for your feedback'));
    }
}
