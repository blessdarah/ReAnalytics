<?php

namespace App\Http\Controllers;

use App\Models\ContactLink;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;

class ContactLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        Config::set('app.page', 'contacts');
        return view('contact-links.index')->withLinks(ContactLink::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('contact-links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param ContactLink $contactLink
     * @return Response
     */
    public function show(ContactLink $contactLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ContactLink $contactLink
     * @return Response
     */
    public function edit(ContactLink $contactLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ContactLink $contactLink
     * @return Response
     */
    public function update(Request $request, ContactLink $contactLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ContactLink $contactLink
     * @return Response
     */
    public function destroy(ContactLink $contactLink)
    {
        //
    }
}
