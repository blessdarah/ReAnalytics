<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrganizationRequest;
use App\Http\Requests\UpdateOrganizationRequest;
use App\Models\Organization;
use Illuminate\Http\Response;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $organizations = Organization::orderBy('name')->get();
        return view('organizations.index')->with('organizations', $organizations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('organizations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreOrganizationRequest $request
     * @return Response
     */
    public function store(StoreOrganizationRequest $request)
    {
        $data = $request->validated();
        Organization::create($data);
        session()->flash('success', 'New organiztion added successfully');
        return redirect()->route('organizations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Organization $organization
     * @return Response
     */
    public function show(Organization $organization)
    {
        return view('organizations.show')->with('organiztion', $organization);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Organization $organization
     * @return Response
     */
    public function edit(Organization $organization)
    {
        return view('organizations.edit')->with('organization', $organization);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateOrganizationRequest $request
     * @param Organization $organization
     * @return Response
     */
    public function update(UpdateOrganizationRequest $request, Organization $organization)
    {
        $data = $request->validated();
        $organization->update($data);
        session()->flash('success', 'Organization updated successfully');
        return redirect()->route('organizations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Organization $organization
     * @return Response
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();
        session()->flash('success', 'Organization deleted successfully');
        return redirect()->back();
    }
}
