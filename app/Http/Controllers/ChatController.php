<?php

namespace App\Http\Controllers;

use App\Chat;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $threads = Chat::where('user_id', auth()->user()->id)->where('parent_id', NULL)->orderBy('created_at', 'desc')->get();
        return view('dashboard.chat.index')->with('threads', $threads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.chat.ask');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $thread = new Chat;

        if ($request->title != '') {
            $thread->title = $request->title;
        } else {
            $thread->title = '';
        }

        $thread->body = $request->body;
        $thread->user_id = auth()->user()->id;
        $thread->parent_id = $request->thread;
        $thread->uuid = Uuid::generate();
        $thread->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(Chat $chat)
    {
        //
        $thread = $chat;
        return view("dashboard.chat.thread")->with('thread', $thread);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
