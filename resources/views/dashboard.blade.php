@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-10 m-auto">
        <table class="table">
            <tr>
            <th>Id</th>
            <th>Description</th>
            <th>date</th>
            <th>amount</th>
            <th>category</th>
            <th>user_id</th>
            <th>payment_method</th>
            <th>Created_at</th>
            <th>updated_at</th>
            </tr>
            @foreach ($data as $ex)
            <tr>
                <td>{{$ex->id}}</th>
                <td>{{$ex->description}}</td>
                <td>{{$ex->date}}</td>
                <td>{{$ex->amount}}</td>
                <td>{{$ex->category}}</td>
                <td>{{$ex->user_id}}</td>
                <td>{{$ex->payment_method}}</td>
                <td>{{$ex->created_at}}</td>
                <td>{{$ex->updated_at}}</td>
                </tr>
            @endforeach
        </table>
        <div class="text-center">
            {{$data->links()}}
        </div>
       
    </div>
</div>
@endsection