<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLinksRequest;
use App\Http\Requests\UpdateUserLinksRequest;
use App\Models\UserLinks;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class UserLinksController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = UserLinks::paginate(static::getPaginate());

        return view('admin.user_links.index', ['links' => $links]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user_links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserLinksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserLinksRequest $request)
    {
        $fields = $request->safe()->only(['title', 'status', 'user_id']);
        $link = UserLinks::create($fields);

        return redirect(route('user_link.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserLinks  $userLinks
     * @return \Illuminate\Http\Response
     */
    public function show(UserLinks $userLinks)
    {
        return view('admin.user_link.show', ['user_link' => $userLinks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserLinks  $userLinks
     * @return \Illuminate\Http\Response
     */
    public function edit(UserLinks $userLinks)
    {
        return view('admin.user_link.edit', ['user_link' => $userLinks]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserLinksRequest  $request
     * @param  \App\Models\UserLinks  $userLinks
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserLinksRequest $request, UserLinks $userLinks)
    {
        $fields = $request->safe()->only(['title', 'status', 'user_id']);
        $userLinks->update($fields);

        return redirect(route('user_link.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserLinks  $userLinks
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserLinks $userLinks)
    {
        $userLinks->delete();

        return redirect(route('user_link.index'));
    }
}
