<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Webpatser\Uuid\Uuid;


class AccountantController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkadmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::where('role_id', 2)->get();
        return view('dashboard.accountant.index')->with('users', $users);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $role = 2;
        return view('dashboard.accountant.create')->with('role', $role);

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
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->mobile;
        // retrive company if exist
        $company = Company::where('name', '=', $request->company)->first();
        if ($company == null) {
            $company = new Company;
            $company->name = $request->company;
            $company->uuid = Uuid::generate();
            $company->save();
        }
        $user->company_id = $company->id;
        $user->role_id = 2;
        $user->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $companies = Company::all();
        $accountant = User::where('id', $id)->firstOrFail();
        return view('dashboard.accountant.edit')->with('companies', $companies)->with('accountant', $accountant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // return $request;
        $accountant = User::where('id', $id)->firstOrFail();
        $accountant->name = $request->name;
        $accountant->email = $request->email;
        if ($request->password != null) {
            $accountant->password = Hash::make($request->password);
        }
        $accountant->phone = $request->mobile;
        // return $request->companies;
        foreach ($request->companies as $c_id) {
            $company = Company::where('id', $c_id)->firstOrFail();
            // return $company;
            $company->accountant_id = $accountant->id;
            $company->save();
        }
        // $accountant->role_id = 2;
        $accountant->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
