<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function __construct()
    {
        Config::set('app.page', 'testimonial');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Config::set('app.page', 'testimonial');
        return view('testimonials.index')->withTestimonials(Testimonial::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonials.create');
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
            'image' => 'image|max:500',
            'body' => 'required',
            'author' => 'required'
        ]);

        if (request()->hasFile('image')) {
            $path = request()->file('image')->move('images');
            $data['image'] = $path;
        }
        Testimonial::create($data);

        return redirect()->route('testimonials.index')
            ->withToastSuccess('created testimonial successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('testimonials.edit')->withTestimonial($testimonial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'image' => 'image|max:500',
            'body' => 'required',
            'author' => 'required'
        ]);

        if (request()->hasFile('image')) {
            // delete old testimonial image
            if ($testimonial->image) {
                Storage::delete($testimonial->image);
            }
            $path = request()->file('image')->move('images');
            $data['image'] = $path;
        }

        $testimonial->update($data);
        return redirect()->route('testimonials.index')
            ->withToastSuccess('Testimonial has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        // delete old testimonial images
        if ($testimonial->image) {
            Storage::delete($testimonial->image);
        }

        $testimonial->delete();

        return redirect()->route('testimonials.index')->withToastSuccess('Testimonial has been deleted');
    }
}