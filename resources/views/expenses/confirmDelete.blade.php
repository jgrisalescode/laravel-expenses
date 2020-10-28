@extends('layouts.base')
@section('content')
    <h1>Delete Report {{$report->id}}</h1>
    <a class="btn btn-outline-secondary" href={{route('expense_reports.index')}}>Back</a>
    <form action="{{route('expense_reports.destroy', $report)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
