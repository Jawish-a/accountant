@extends('layouts.dashboard.master')

@section('page_css')
@endsection

@section('content')
<div class="row">
    @foreach ($roles as $role)
    <div class="col-lg-3">
        <div class="card card-pricing">
            <div class="card-header">
                <div class="card-icon icon-primary ">
                    <i class="nc-icon nc-badge"></i>
                </div>
            </div>
            <div class="card-body">
                <h3 class="card-category">{{$role->name}}</h3>
                <h3 class="card-title">{{count($role->users)}}</h3>
                @if ($role->id == 3)
                <a href="{{action('UserController@create')}}" class="btn btn-round btn-primary btn-block my-2">Add {{$role->name}}</a>
                <a href="{{action('UserController@index')}}" class="btn btn-round btn-primary btn-block my-2">View {{$role->name}}s</a>
                @elseif ($role->id == 2)
                <a href="{{action('AccountantController@create')}}" class="btn btn-round btn-primary btn-block my-2">Add {{$role->name}}</a>
                <a href="{{action('AccountantController@index')}}" class="btn btn-round btn-primary btn-block my-2">View {{$role->name}}s</a>
                @elseif ($role->id == 1)
                <a href="{{action('AdminController@create')}}" class="btn btn-round btn-primary btn-block my-2">Add {{$role->name}}</a>
                <a href="{{action('AdminController@index')}}" class="btn btn-round btn-primary btn-block my-2">View {{$role->name}}s</a>
                @endif
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection

@section('page_script')

@endsection
