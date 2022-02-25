@extends('layouts.app')
@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <h1 class="h2">Expenses</h1>
        <form action="" class="flex flex-col" method="post">
            @csrf
            
            <label for="description">Description</label>
            <input class="p-2 m-2" type="text" name="description" placeholder="Description" class="" />
            <label for="amount">Amount</label>
            <input class="p-2 m-2" type="number" name="amount" placeholder="Amount" class="" />
            <label for="cat">category</label>
            <select class="p-2 m-2" name="cat">
                @foreach ($cats as $cat)
                <option value="{{$cat}}">{{$cat}}</option>
                @endforeach
            </select>
            <label for="paymth">payment method</label>
            <select class="p-2 m-2" name="paymth">
                @foreach ($paymths as $paymth)
                <option value="{{$paymth}}">{{$paymth}}</option>
                @endforeach
            </select>
        </form>

    </div>
    <div class="col-lg-3"></div>
</div>
@endsection