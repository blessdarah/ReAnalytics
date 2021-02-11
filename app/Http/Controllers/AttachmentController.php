<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class AttachmentController extends Controller
{
    public function __construct()
    {
        Config::set('app.page', 'attachments');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Config::set('app.page', 'attachments');
        return view('attachments.index')->withAttachments(Attachment::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Config::set('app.page', 'attachments');
        return view('attachments.create');
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
            "name" => "required|string|max:200",
            "file" => "required|file|max:5000"
        ]);

        $data['file'] = request()->file('file')->move('uploads');

        Attachment::create($data);
        return redirect()->route('attachments.index')->withToastSuccess('Your file has be uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function show(Attachment $attachment)
    {
        return view('attachments.show')->withAttachment($attachment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function edit(Attachment $attachment)
    {
        return view('attachments.edit')->withAttachment($attachment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attachment $attachment)
    {
        $data = $request->validate([
            "name" => "required|string|max:200",
            "file" => "nullable|file|max:5000"
        ]);

        if ($request->hasFile('file')) {
            Storage::delete($attachment->file);
            $data['file'] = request()->file('file')->move('attachments');
        }

        $attachment->update($data);
        return redirect()->route('attachments.index')->withToastSuccess('Your file has be uploaded');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attachment $attachment)
    {
        Storage::delete($attachment->file);
        $attachment->delete();
        return redirect()->route('attachments.index')->withToastSuccess('File has been updated');
    }
}