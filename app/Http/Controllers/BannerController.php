<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('banners.index')->withBanners(Banner::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(BannerRequest $request)
    {
        $data = $request->validated();

        Banner::creat($data);
        return redirect()->route('banners.index')->withToastSuccess('Banner has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param Banner $banner
     * @return Response
     */
    public function show(Banner $banner)
    {
        return view('banners.show')->withBanner($banner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Banner $banner
     * @return Response
     */
    public function edit(Banner $banner)
    {
        return view('banners.edit')->withBanner($banner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Banner $banner
     * @return Response
     */
    public function update(BannerRequest $request, Banner $banner)
    {
        $data = $request->validated();

        $banner->update($data);
        return redirect()->route('banners.index')->withToastSuccess('Banner has updated added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Banner $banner
     * @return Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('banners.index')->withToastSuccess('Banner has deleted added');
    }
}
