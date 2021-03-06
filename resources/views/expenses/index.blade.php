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
                    <td><a href="{{route('expense_reports.show', $expense)}}">{{$expense->title}}</a></td>
                    <td><a class="text-primary" href="{{route('expense_reports.edit', [$expense->id])}}">Edit</a></td>
                    <td>
                        <a class="text-danger" href="{{route('expense_reports.confirmDelete', [$expense->id])}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
