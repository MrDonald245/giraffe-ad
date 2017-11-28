@extends('layout')

@section('title') new ad @endsection

@section('content')
    <form class="form-horizontal" action="{{ route('ad.save') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="col-lg-4 col-lg-offset-4">
                Title
                <input type="text" class="form-control" name="title"
                       value="{{ $ad->title or '' }}">
            </label>
        </div>
        <div class="form-group">
            <label class="col-lg-4 col-lg-offset-4">
                Description
                <textarea rows="6" class="form-control" name="description">{{ $ad->description or '' }}</textarea>
            </label>
        </div>
        <button type="submit" class="btn btn-success col-lg-offset-7">
            {{ isset($ad) ? 'Save' : 'Create' }}
        </button>
    </form>
@endsection