@extends('layouts.base')
@section('content')
    <h1>Reports</h1>
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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
