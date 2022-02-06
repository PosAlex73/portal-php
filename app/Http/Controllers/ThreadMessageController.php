<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreThreadMessageRequest;
use App\Http\Requests\UpdateThreadMessageRequest;
use App\Models\Thread;
use App\Models\ThreadMessage;

class ThreadMessageController extends AdminController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreThreadMessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThreadMessageRequest $request)
    {
        $thread = Thread::find($request->get('thread_id'));
        $fields = $request->safe()->only(['thread_id', 'message', 'status']);
        ThreadMessage::create($fields);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThreadMessageRequest  $request
     * @param  \App\Models\ThreadMessage  $threadMessage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThreadMessageRequest $request, ThreadMessage $threadMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThreadMessage  $threadMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThreadMessage $threadMessage)
    {
        //
    }
}
