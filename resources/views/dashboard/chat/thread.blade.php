@extends('layouts.dashboard.master')

@section('page_css')

@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card card-timeline card-plain">
            <div class="card-body">
                <ul class="timeline timeline-simple">
                    <li class="timeline-inverted">
                        <div class="timeline-badge info">
                            <i class="nc-icon nc-single-02"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>{{$thread->title}}</h3>
                                <span class="badge badge-pill badge-info">{{$thread->user->name}}</span>
                            </div>
                            <div class="timeline-body">
                                <p>{{$thread->body}}</p>
                                <hr>
                            </div>
                            <div class="timeline-footer float-right">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-round btn-info dropdown-toggle"
                                        data-toggle="dropdown">
                                        <i class="nc-icon nc-settings-gear-65"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @foreach ($thread->comments as $comment)
                    <li class="timeline-inverted">
                        @if (auth()->user() == $comment->user)
                        <div class="timeline-badge info">
                            <i class="nc-icon nc-single-02"></i>
                        </div>
                        @else
                        <div class="timeline-badge danger">
                            <i class="nc-icon nc-single-02"></i>
                        </div>
                        @endif

                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                @if (auth()->user() == $comment->user)
                                <span class="badge badge-pill badge-info">{{$comment->user->name}}</span>
                                @else
                                <span class="badge badge-pill badge-danger">{{$comment->user->name}}</span>
                                @endif
                            </div>
                            <div class="timeline-body">
                                <p>{{$comment->body}}</p>
                                <hr>
                            </div>
                            <div class="timeline-footer float-right">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-round btn-info dropdown-toggle"
                                        data-toggle="dropdown">
                                        <i class="nc-icon nc-settings-gear-65"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header ">
                <h4 class="card-title">Reply</h4>
            </div>
            <div class="card-body ">
                <form method="post" action="{{action("ChatController@store")}}">
                    @csrf
                    <label>Body</label>
                    <div class="form-group">
                        <input type="text" hidden name="thread" value="{{$thread->id}}">
                        <textarea name="body" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info btn-round float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_script')

@endsection
