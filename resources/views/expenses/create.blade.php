@extends('layouts.base')
@section('content')
    <h1>New Report</h1>
    <a class="btn btn-outline-secondary" href={{route('expense_reports.index')}}>Back</a>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('expense_reports.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Type a title" value="{{old('title')}}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
