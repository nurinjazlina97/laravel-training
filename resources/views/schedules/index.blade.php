@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Schedule Index') }}
                        
                        <div class="float-right">
                            <form action="" method="">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="keyword" value="{{ request()->get('keyword') }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedules as $schedule)
                                    <tr>
                                        <td>{{ $schedule->id }}</td>
                                        <td>{{ $schedule->title }}</td>
                                        <td>{{ $schedule->description }}</td>
                                        <td>
                                            <a href="{{ route('schedules.show', $schedule)}}" class="btn btn-info">Show</a>
                                            <a href="{{ route('schedules.edit', $schedule)}}" class="btn btn-secondary">Edit</a>
                                            <a href="{{ route('schedules.delete', $schedule)}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $schedules->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
