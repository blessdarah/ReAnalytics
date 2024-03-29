<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSiteInfoRequest;
use App\Http\Requests\UpdateSiteInfoRequest;
use App\Models\SiteInfo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class SiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('site-info.index')->with('siteInfo', SiteInfo::first());
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
     * @param  StoreSiteInfoRequest  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'logo' => 'image|max:2000|nullable',
            'address' => 'string|nullable',
            'about' => 'string|nullable',
            'email' => 'string|nullable'
        ]);
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->move('images');
        }
        SiteInfo::create($data);
        return redirect()->route('site-info.index');
    }

    /**
     * Display the specified resource.
     *
     * @param SiteInfo $siteInfo
     * @return Response
     */
    public function show(SiteInfo $siteInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SiteInfo $siteInfo
     * @return Response
     */
    public function edit(SiteInfo $siteInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateSiteInfoRequest  $request
     * @param SiteInfo $siteInfo
     * @return Response
     */
    public function update(Request $request, SiteInfo $siteInfo)
    {
        $data = $request->validate([
            'logo' => 'image|max:2000',
            'address' => 'string',
            'about' => 'string',
            'email' => 'string'
        ]);
        if ($request->hasFile('logo')) {
            Storage::delete($siteInfo->logo);
            $data['logo'] = $request->file('logo')->move('images');
        }
        $siteInfo->update($data);
        return redirect()->route('site-info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SiteInfo $siteInfo
     * @return Response
     */
    public function destroy(SiteInfo $siteInfo)
    {
        //
    }
}
