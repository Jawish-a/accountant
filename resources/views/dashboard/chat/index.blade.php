@extends('layouts.dashboard.master')

@section('page_css')

@endsection

@section('content')
<div class="card">
    <div class="card-header ">
        <h4 class="card-title">Questions</h4>
    </div>
    <div class="card-body">
        <div class="table-full-width table-responsive">
            <table class="table">
                <tbody>
                    @foreach ($threads as $thread)
                    <tr>
                        <td>
                            <a class="btn btn-icon btn-round btn-twitter">
                                <i class="fa fa-question"></i>
                            </a>
                        </td>
                        <td class="text-left">{{$thread->title}}</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title=""
                                class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                data-original-title="Edit Task">
                                <i class="nc-icon nc-ruler-pencil"></i>
                            </button>
                            <button type="button" rel="tooltip" title=""
                                class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                data-original-title="Remove">
                                <i class="nc-icon nc-simple-remove"></i>
                            </button>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <hr>
        <div class="stats">
            <i class="fa fa-refresh spin"></i> Updated 3 minutes ago
        </div>
    </div>
</div>
@endsection

@section('page_script')

@endsection
