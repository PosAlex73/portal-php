<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserContactRequest;
use App\Http\Requests\UpdateUserContactRequest;
use App\Models\UserContact;

class UserContactController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = UserContact::create(static::getPaginate());

        return view('admin.contacts.index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserContactRequest $request)
    {
        $fields = $request->safe()->only(['title', 'contact', 'type', 'status', 'user_id']);
        UserContact::create($fields);

        return redirect(route('contacts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserContact  $userContact
     * @return \Illuminate\Http\Response
     */
    public function show(UserContact $userContact)
    {
        return view('admin.contacts.show', ['contact' => $userContact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserContact  $userContact
     * @return \Illuminate\Http\Response
     */
    public function edit(UserContact $userContact)
    {
        return view('admin.contacts.show', ['contact' => $userContact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserContactRequest  $request
     * @param  \App\Models\UserContact  $userContact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserContactRequest $request, UserContact $userContact)
    {
        $fields = $request->safe()->only(['title', 'contact', 'type', 'status', 'user_id']);
        $userContact->update($fields);

        return redirect(route('contact.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserContact  $userContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserContact $userContact)
    {
        $userContact->delete();

        return redirect(route('contact.index'));
    }
}
