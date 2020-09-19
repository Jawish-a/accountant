@extends('layouts.dashboard.master')

@section('page_css')
@endsection

@section('content')
<div class="row pb-5">
    <div class="col-md-3">
        <h1 class="h3 mb-0 text-gray-800">Reports of {{$month}}</h1>
    </div>
    {{-- select year --}}

</div>
<div class="row">
    @foreach ($reports as $report)
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-paper text-warning"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-title">{{$report->name}}</p>
                            <p class="card-category">{{$report->extension}}</p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <a href="" class="btn btn-sm btn-info btn-round btn-block text-title">Download</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection

@section('page_script')

@endsection
