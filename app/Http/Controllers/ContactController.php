<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        Config::set('app.page', 'settings');
        return view('contacts.index')->withContacts(Contact::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $link = $request->validate([
            'name' => 'required|string',
            'icon' => 'required|string',
            'link' => 'required|url',
        ]);

        Contact::create($link);

        session()->flash('toast_info', "$request->name has been added to your contact links");
        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Contact $contact
     * @return Response
     */
    public function show(Contact $contact)
    {
        return view('contacts.show')->withContact($contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Contact $contact
     * @return Response
     */
    public function edit(Contact $contact)
    {
        // dd($contact->show);
        return view('contacts.edit')->withContact($contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Contact $contact
     * @return Response
     */
    public function update(Request $request, Contact $contact)
    {
        $link = $request->validate([
            'name' => 'required|string',
            'icon' => 'required|string',
            'link' => 'required|url',
        ]);

        $contact->update($link);

        session()->flash('toast_info', "$request->name has been updated and added to your contact links");
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Contact $contact
     * @return Response
     */
    public function destroy(Contact $contact)
    {
        session()->flash('toast_info', "$contact->name has been deleted from your contact links");
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
