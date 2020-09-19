@extends('layouts.dashboard.master')

@section('page_css')
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        <h1 class="h3 mb-0 text-gray-800">Reports</h1>
    </div>
    {{-- select year --}}
    <div class="col-md-2 ml-auto">
        <select class="selectpicker" data-size="5" data-style="btn btn-info btn-round" title="Selct Year" tabindex="0">
            <option value="2019">2019</option>
            <option selected value="2020">2020</option>
            <option value="2021">2021</option>
        </select>
    </div>
</div>
<div class="row container mx-auto">
    @foreach ($months as $month)
    <div class="col-md-3">
        <div class="card text-center">
            @if ($current_month == $month)
            <div class="card-header pt-0 bg-warning">
                <h5 class="card-title my-4 text-white">{{$month}}</h5>
            </div>

            @else
            <div class="card-header pt-0 bg-primary">
                <h5 class="card-title my-4 text-white">{{$month}}</h5>
            </div>

            @endif
            <div class="card-body py-auto">
                <a href="{{route('reports.month', $month)}}" class="btn btn-block btn-sm btn-round btn-success">View Reports</a>
            </div>
            <div class="card-footer">
                <hr class="p-0 m-0">
                <div class="stats mt-3">
                    <i class="fa fa-check"></i> Campaign sent 2 days ago
                </div>
            </div>
        </div>
    </div>

    @endforeach

</div>

@endsection

@section('page_script')

@endsection
