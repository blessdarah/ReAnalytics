<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembersRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        Config::set('app.page', 'experts');
        return view('members.index')->with('members', Member::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
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
     * @param Member $member
     * @return Response
     */
    public function show(Member $member)
    {
        return view('members.create')->with('member', $member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Member $member
     * @return Response
     */
    public function edit(Member $member)
    {
        return view('members.edit')->with('member', $member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Member $member
     * @return Response
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
 * @param  Member  $member
     * @return Response
     */
    public function destroy(Member $member)
    {
        // Delete the member's image from database
        Storage::delete($member->image);
        $member->delete();

        return redirect()->route('members.index')->withToastSuccess('The member has been removed');
    }
}
