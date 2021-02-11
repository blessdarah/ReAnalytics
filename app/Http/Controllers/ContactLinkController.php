<?php

namespace App\Http\Controllers;

use App\Models\ContactLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ContactLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Config::set('app.page', 'contacts');
        return view('contact-links.index')->withLinks(ContactLink::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact-links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactLink  $contactLink
     * @return \Illuminate\Http\Response
     */
    public function show(ContactLink $contactLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactLink  $contactLink
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactLink $contactLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactLink  $contactLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactLink $contactLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactLink  $contactLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactLink $contactLink)
    {
        //
    }
}