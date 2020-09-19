@extends('layouts.dashboard.master')

@section('content')
<div class="row">
    {{-- New Files --}}
    <div class="col-lg-3 col-md-6 col-sm-6">
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
                            <p class="card-title">15</p>
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
    <div class="col-lg-3 col-md-6 col-sm-6">
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
    <div class="col-lg-3 col-md-6 col-sm-6">
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
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-favourite-28 text-primary"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Package Remaining</p>
                            <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="p mb-0 mr-3">50%</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-refresh"></i>
                    Update now
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="row pb-5">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">New Files</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">37</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Reports</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Package Remaining</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Files</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container pt-3">
    <div class="row">
        <div class="col-lg-4 col-md-6 mr-auto ml-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-header ">
                        <h3 class="header text-center">Upload Documents</h3>
                    </div>
                </div>
                <div class="card-body text-center">
                    <p style="font-size: 7rem"><i class="nc-icon nc-cloud-upload-94 text-muted"></i></p>
                </div>
                <div class="card-footer ">
                    <a href="{{route('files.create')}}" class="btn btn-info btn-round btn-block mb-3">Upload a
                        document</a>
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
                    <a href="javascript:;" class="btn btn-info btn-round btn-block mb-3">View Reports</a>
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
                    <a href="{{route('chat.create')}}" class="btn btn-info btn-round btn-block mb-3">Ask Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
