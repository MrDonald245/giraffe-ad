@extends('layout')

@section('title')
    home page
@endsection

@section('content')
    <div class="col-md-2"></div>
    <div class="col-md-8 ">
        @forelse($ads as $ad)
            <div id="postlist">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="text-center">
                            <div class="row">
                                <div class="col-sm-9">
                                    <a href="{{ route('ad.show', ['advertisement' => $ad]) }}">
                                        <h3 class="pull-left">
                                            {{ $ad->title }}</h3>
                                    </a>
                                </div>
                                <div class="col-sm-3">
                                    <h4 class="pull-right">
                                        <small><em>{{ $ad->created_at->toDateString() }}
                                                <br>{{ $ad->created_at->toTimeString() }}</em></small>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>{{ $ad->description }}</p>
                        <div class="pull-right">
                            <span><small>{{ $ad->user->name }}</small></span>
                        </div>
                    </div>
                    <div class="panel-footer">
                        @if($ad->user == Auth::user())
                            <a class="btn btn-warning"
                               href="{{ route('ad.edit', ['advertisement' => $ad]) }}">
                                Edit
                            </a>
                            <a class="btn btn-danger"
                               href="{{ route('ad.delete', ['advertisement' => $ad]) }}">
                                Delete
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <h2>There is no advertise at all</h2>
        @endforelse
        {{ $ads->links() }}
    </div>
@endsection