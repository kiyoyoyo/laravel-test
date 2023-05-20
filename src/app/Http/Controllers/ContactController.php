<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['fullname','gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);

        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);

        Contact::create($contact);

        return view('thanks');
    }

    public function system(Request $request)
    {
        $contact = Contact::FullnameSearch($request->fullname)->get();
        $contact = Contact::all();

        return view('system', compact('contact'));
    }

    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/system')->with('message', 'データを削除しました');
    }

}
