@extends('layouts.dashboard.master')

@section('page_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css">
@endsection

@section('content')

<div class="row">
    <div class="col-md-9">
        <div class="card ">
            <div class="card-header ">
                <h4 class="card-title">Edit accountant</h4>
            </div>
            <div class="card-body ">
                <form class="form-horizontal" id="create-user-form"
                    action="{{action('AccountantController@update', $accountant->id)}}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <label class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name"
                                    value="{{$accountant->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email"
                                    value="{{$accountant->email}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">Password</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <span> leave empty to keep the old one</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">Mobile</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="telephone" name="mobile" class="form-control" placeholder="Mobile"
                                    value="{{$accountant->phone}}">
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h4 class="card-title">Assign Companies</h4>
                    <div class="row">
                        <label class="col-md-3 col-form-label">Companies</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <select class="custom-select js-example-basic-multiple" multiple data-size="7"
                                    name="companies[]">
                                    <option disabled>Select one or more</option>
                                    @foreach ($companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                    @endforeach
                                </select>
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
        {{-- list of companies --}}
        <div class="card">
            <div class="card-body">
                <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                    <h4 class="card-title">Current Companies</h4>
                    @foreach ($accountant->companies as $company)
                    <div class="card card-plain">
                        <div class="card-header" role="tab" id="headingTwo">
                                {{$company->name}}
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>

@endsection
