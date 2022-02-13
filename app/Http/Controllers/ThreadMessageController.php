<?php

namespace App\Http\Controllers;

use App\Enums\UserTypes;
use App\Http\Requests\StoreThreadMessageRequest;
use App\Models\Thread;
use Illuminate\Support\Facades\Auth;

class ThreadMessageController extends AdminController
{
    public function saveMessage(StoreThreadMessageRequest $request, Thread $thread)
    {
        $fields = $request->safe()->only('message');

        if (Auth::user()->type === UserTypes::ADMIN) {
            $fields['user_id'] = 0;
        } else {
            $fields['user_id'] = Auth::user()->id;
        }

        $thread->messages()->create($fields);

        return redirect(route('thread.edit', ['thread' => $thread]));
    }
}
