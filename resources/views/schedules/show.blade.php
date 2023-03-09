@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('schedules.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="{{$schedule->title}}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" placeholder="{{$schedule->description}}" readonly></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
