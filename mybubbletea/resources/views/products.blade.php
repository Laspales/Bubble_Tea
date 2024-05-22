@extends('layouts.default')

@section('main')
<div style="height:80vh;display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; width: 95vw;">
    @foreach ($tastes as $taste)
        <div style="text-align: center; border: 1px solid black; display:flex; background-color:beige; padding:10px">
            <img src="{{ asset('storage/'.$taste->image) }}" alt="{{ $taste->name }}" style="width:300px; height:300px; padding:0px 20px 0px 0px;">
            <div style="display:flex; flex-direction:column; justify-content:space-between; width:100%; text-transform:uppercase;"><p>{{ $taste->taste }}</p>
            <p>{{ $taste->price }} €</p> 
            <a href="{{ route('product', $taste->id) }}" style="text-decoration:none; color:black"><button style=" background-color:rgba(233, 197, 136, 0.53);border:none; padding:10px; cursor:pointer;">Custom</button></a>
        </div>
            
</div>
    @endforeach
</div>
@endsection
