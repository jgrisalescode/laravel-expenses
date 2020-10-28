@extends('layouts.base')
@section('content')
    <h1>Report: {{$report->title}}</h1>
    <a class="btn btn-outline-secondary" href={{route('expense_reports.index')}}>Back</a>
    <p>Details...</p>
@endsection
