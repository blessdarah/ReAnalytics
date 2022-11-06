<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactInfoRequest;
use App\Http\Requests\UpdateContactInfoRequest;
use App\Models\ContactInfo;
use Illuminate\Http\Response;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreContactInfoRequest $request
     * @return Response
     */
    public function store(StoreContactInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param ContactInfo $contactInfo
     * @return Response
     */
    public function show(ContactInfo $contactInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ContactInfo $contactInfo
     * @return Response
     */
    public function edit(ContactInfo $contactInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateContactInfoRequest $request
     * @param ContactInfo $contactInfo
     * @return Response
     */
    public function update(UpdateContactInfoRequest $request, ContactInfo $contactInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ContactInfo $contactInfo
     * @return Response
     */
    public function destroy(ContactInfo $contactInfo)
    {
        //
    }
}
