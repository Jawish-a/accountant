@extends('layouts.dashboard.master')

@section('page_css')
@endsection

@section('content')

<div class="row">
    <div class="col-md-9">
        <div class="card ">
            <div class="card-header ">
                <h4 class="card-title">Create new user</h4>
            </div>
            <div class="card-body ">
                <form class="form-horizontal" id="create-user-form" action="{{action('UserController@store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <label class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">Password</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">Mobile</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="telephone" name="mobile" class="form-control" placeholder="Mobile">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">Company</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" name="company" class="form-control" placeholder="Company">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer ">

            </div>
        </div>
    </div>
    <div class="col-md-3 mx-auto">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Done ?</h6>
            </div>
            <div class="card-body">
                <button class="btn btn-block btn-success" type="submit" form="create-user-form">Save</button>
                <button class="btn btn-block btn-secondary">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_script')
@endsection
