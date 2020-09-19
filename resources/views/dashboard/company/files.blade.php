@extends('layouts.dashboard.master')

@section('page_css')
@endsection

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{$company->name}} Documents </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <tr>
                            <th class="text-center">
                                #
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Status
                            </th>
                            <th class="text-center">
                                Uploaded by
                            </th>
                            <th class="text-right">
                                Date
                            </th>
                            <th class="text-right">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($files); $i++) <tr>
                            <td class="text-center">
                                {{$i+1}}
                            </td>
                            <td>
                                {{$files[$i]->uuid}}
                            </td>
                            <td>
                                @if ($files[$i]->status == "new")
                                <span class="badge badge-pill badge-info">{{$files[$i]->status}}</span>
                                @endif
                                @if ($files[$i]->status == "pending")
                                <span class="badge badge-pill badge-warning">{{$files[$i]->status}}</span>
                                @endif
                                @if ($files[$i]->status == "error")
                                <span class="badge badge-pill badge-danger">{{$files[$i]->status}}</span>
                                @endif
                                @if ($files[$i]->status == "done")
                                <span class="badge badge-pill badge-success">{{$files[$i]->status}}</span>
                                @endif

                            </td>
                            <td class="text-center">
                                {{$files[$i]->user->name}}
                            </td>
                            <td class="text-right">
                                {{$files[$i]->created_at}}
                            </td>
                            <td class="text-right">
                                <a href="{{asset('storage/'.$files[$i]->url)}}" download rel="tooltip"
                                    class="btn btn-info btn-icon" data-original-title="" title="download">
                                    <i class="fa fa-arrow-down"></i>
                                </a>
                                <a  download rel="tooltip"
                                    class="btn btn-warning btn-icon" data-original-title="" title="">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a rel="tooltip" class="btn btn-success btn-icon" data-original-title=""
                                    title="Set Status">
                                    <i class="fa fa-check"></i>
                                </a>
                            </td>
                            </tr>
                            @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('page_script')

@endsection
