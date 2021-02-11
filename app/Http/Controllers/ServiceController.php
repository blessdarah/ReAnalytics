<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function __construct()
    {
        Config::set('app.page', 'services');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Config::set('app.page', 'services');
        return view('services.index')->withServices(Service::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string|max:100",
            "detail" => "string|required",
            "icon" => "string|nullable",
            "image" => "nullable"
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->move('images');
        }

        Service::create($data);

        return redirect()->route('services.index')
            ->withToastSuccess('New service has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('services.show')->withService($service);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('services.edit')->withService($service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            "name" => "required|string|max:100",
            "detail" => "string|required",
            "icon" => "string|nullable",
        ]);

        if ($request->hasFile('image')) {
            Storage::delete($service->image);
            $data['image'] = $request->file('image')->move('images');
        }

        $service->update($data);

        return redirect()->route('services.index')
            ->withToastSuccess('Service has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        Storage::delete($service->image);
        $service->delete();

        return redirect()->route('services.index')
            ->withToastSuccess('Service has been deleted successfully');
    }
}