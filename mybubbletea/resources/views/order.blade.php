@extends('layouts.default')
@section('main')
    @if($orders)
    <div>
        @foreach($orders as $order)
        <div class="container" style="width: 500px;">
        <a href="{{ route('order_details', $order->id) }}"><h1>Order #{{$order->id}}</h1></a>
            <table>
                    <tr>
                        <th>Date : </th>
                        <td>{{ $order->created_at }}</td>
                    </tr>
            </table>
            <br>
        </div>
        @endforeach
        <a href="{{ url('dashboard')}}" class="btn btn-default" style="margin: 2em;">Back</a>
    </div>
    @endif
@endsection