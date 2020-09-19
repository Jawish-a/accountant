@extends('layouts.dashboard.master')

@section('page_css')

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                <h4 class="card-title">Ask Question</h4>
            </div>
            <div class="card-body ">
                <form method="post" action="{{action('ChatController@store')}}" class="form-horizontal">
                    @csrf
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Question Title</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input name="title" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Body</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <textarea class="form-control" name="body" id="" cols="30" rows="20"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-round">SEND</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_script')

@endsection
