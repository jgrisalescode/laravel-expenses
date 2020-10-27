@extends('layouts.base')
@section('content')
    <h1>Reports</h1>
    <a class="btn btn-primary" href={{route('expense_reports.create')}}>Create report</a>
    <table class="table">
        <thead>
            <tr>
                <th>Detalle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($expenses as $expense)
                <tr>
                    <td>{{$expense->title}}</td>
                    <td><a href="{{route('expense_reports.edit', [$expense->id])}}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
