<?php

namespace App\Http\Controllers;

use App\Company;
use App\File;
use App\Report;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $current_month = date('F');
        return view('dashboard.report.index')->with([
            'months' => $months,
            'current_month' => $current_month,
        ]);
    }


    function upload(Request $request)
    {
        $com_uuid = $request->uuid;
        $company = Company::where('uuid', $com_uuid)->firstOrFail();
        if ($request->file('file')) {
            $file_name = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_FILENAME);
            $file_ext = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_EXTENSION);
            $file = $request->file('file')->store('public/reports/' . $company->uuid);
            // remove the public from the image string to store it in DB
            $file = str_replace('public/', '', $file);
            // store it to the database
            $document = new Report;
            $document->url = $file;
            $document->name = $file_name;
            $document->extension = $file_ext;
            $document->uuid = Uuid::generate();
            $document->user_id = auth()->user()->id;
            $document->company_id = $company->id;
            $document->save();
        }
        return response()->json(['success' => $file]);
    }
    public function view_month_reports($month)
    {
        //
        // return 'hit';
        // $company = Company::where('uuid', $uuid)->firstOrFail();
        $full_month = strtotime($month);
        $int_month = date('m', $full_month);

        $reports = auth()->user()->company->reports()->whereMonth('created_at', $int_month)->get();
        return view('dashboard.report.month')->with('reports', $reports)->with('month', $month);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
