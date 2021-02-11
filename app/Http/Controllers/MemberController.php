<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembersRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Config::set('app.page', 'experts');
        return view('members.index')->withMembers(Member::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MembersRequest $request)
    {
        $data = $request->validated();

        if (request()->hasFile('image')) {
            $path = request()->file('image')->move('images');
            $data['image'] = $path;
        }
        Member::create($data);

        return redirect()->route('members.index')
            ->withToastSuccess('New member has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('members.create')->withMember($member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('members.edit')->withMember($member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(MembersRequest $request, Member $member)
    {
        $data = $request->validated();

        if (request()->hasFile('image')) {
            $path = request()->file('image')->move('images');
            Storage::delete($member->image);
            $data['image'] = $path;
        }

        $member->update($data);

        return redirect()->route('members.index')
            ->withToastSuccess('Member profile updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        // Delete the member's image from database
        Storage::delete($member->image);
        $member->delete();

        return redirect()->route('members.index')->withToastSuccess('The member has been removed');
    }
}