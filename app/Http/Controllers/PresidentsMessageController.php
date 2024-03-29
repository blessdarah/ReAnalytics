<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePresidentsMessageRequest;
use App\Http\Requests\UpdatePresidentsMessageRequest;
use Illuminate\Http\Request;
use App\Models\PresidentsMessage;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class PresidentsMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $author = request()->query('author', 'president');
        $message = PresidentsMessage::where('author', $author)->first();
        return view('presidents-message.index')->with('presidentsMessage', $message);
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
     * @param StorePresidentsMessageRequest $request
     * @return Response
     */
    public function store(StorePresidentsMessageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param PresidentsMessage $presidentsMessage
     * @return Response
     */
    public function show(PresidentsMessage $presidentsMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param PresidentsMessage $presidentsMessage
     * @return Response
     */
    public function edit(PresidentsMessage $presidentsMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePresidentsMessageRequest  $request
     * @param PresidentsMessage $presidentsMessage
     * @return Response
     */
    public function update(Request $request, int $id)
    {
        // dd($presidentsMessage);
        $data = $request->validate([
            'image' => 'image|max:2000|nullable',
            'body' => 'required',
            'author' => 'string'
        ]);

        $presidentsMessage = PresidentsMessage::findOrFail($id);

        if (request()->hasFile('image')) {
            Storage::delete($presidentsMessage->image);
            $data['image'] = request()->file('image')->move('images');
        }

        $presidentsMessage->update($data);
        return redirect()->back()->with('presidentsMessage', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param PresidentsMessage $presidentsMessage
     * @return Response
     */
    public function destroy(PresidentsMessage $presidentsMessage)
    {
        //
    }
}
