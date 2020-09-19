@extends('layouts.dashboard.master')

@section('content')
<div class="row">
    {{-- New Files --}}
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-globe text-warning"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">New Files</p>
                            <p class="card-title">{{count($company->files->where('status', 'new'))}}</p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-refresh"></i>
                    Update Now
                </div>
            </div>
        </div>
    </div>
    {{-- Reports --}}
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-money-coins text-success"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Reports</p>
                            <p class="card-title">7</p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-calendar-o"></i>
                    Last day
                </div>
            </div>
        </div>
    </div>
    {{-- Pending Files --}}
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-vector text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Pending files</p>
                            <p class="card-title">23</p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-clock-o"></i>
                    In the last hour
                </div>
            </div>
        </div>
    </div>
    {{-- Package --}}
</div>
<div class="container pt-3">
    <div class="row">
        <div class="col-lg-4 col-md-6 mr-auto ml-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-header ">
                        <h3 class="header text-center">Documents</h3>
                    </div>
                </div>
                <div class="card-body text-center">
                    <p style="font-size: 7rem"><i class="nc-icon nc-cloud-download-93 text-muted"></i></p>
                </div>
                <div class="card-footer ">
                    <a href="{{action('CompanyController@file', $company->uuid)}}" class="btn btn-info btn-round btn-block mb-3">Download
                        documents</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mr-auto ml-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-header ">
                        <h3 class="header text-center">Reports</h3>
                    </div>
                </div>
                <div class="card-body text-center">
                    <p style="font-size: 7rem"><i class="nc-icon nc-chart-pie-36 text-muted"></i></p>
                </div>
                <div class="card-footer ">
                    <a href="{{route('company.reports', $company->uuid)}}" class="btn btn-info btn-round btn-block mb-3">View Reports</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mr-auto ml-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-header ">
                        <h3 class="header text-center">Chat</h3>
                    </div>
                </div>
                <div class="card-body text-center">
                    <p style="font-size: 7rem"><i class="nc-icon nc-chat-33 text-muted"></i></p>
                </div>
                <div class="card-footer ">
                    <a href="{{route('chat.create')}}" class="btn btn-info btn-round btn-block mb-3">Chat Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
