@extends('layouts.base')
@section('content')
    <h1>New Report</h1>
    <a class="btn btn-secondary" href={{route('expense_reports.create')}}>Create report</a>
    <form action="{{route('expense_reports.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Type a title">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
