<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $files = File::where('company_id','=', auth()->user()->company->id)->orderBy('created_at', "desc")->get();
        return view('dashboard.files.index')->with('files', $files);

    }


    function upload(Request $request)
    {
        if ($request->file('file')) {
            $file = $request->file('file')->store('public/files/'. auth()->user()->company->uuid);
            // remove the public from the image string to store it in DB
            $file = str_replace('public/', '', $file);
            // store it to the database
            $document = new File;
            $document->url = $file;
            $document->uuid = Uuid::generate();
            $document->status = 'new';
            $document->user_id = auth()->user()->id;
            $document->company_id = auth()->user()->company->id;
            $document->save();
        }
        return response()->json(['success' => $file]);


        // $image = $request->file('file');

        // $imageName = time() . '.' . $image->extension();

        // $image->move(public_path('images'), $imageName);

        // return response()->json(['success' => $imageName]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.files.create');

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
