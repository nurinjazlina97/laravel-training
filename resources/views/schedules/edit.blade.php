@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Schedule') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('schedules.update', $schedule)}}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{$schedule->title}}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description">{{$schedule->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary">Save My Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
