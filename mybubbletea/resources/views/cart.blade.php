@extends('layouts.default')

@section('title')

@endsection

@section('main') 
<style>
        table{
            border: 1px solid;
            border-radius: 5px;
        }
        td, th{
            padding: 7px;
            border: 1px solid #333;
            text-align: center;
            border-radius: 2px;
            position: relative;
        }
        span{
            position: absolute;
            right: 10px;
        }
        a{
            text-decoration: none;
        }
        #order{
            font-weight: bold;
            border: 1px solid  #E5C286;
            border-radius: 4px;
            padding: 5px;
            color: white;
            background-color: #E5C286;
        }
        #empty{
            font-weight: bold;
            border: 1px solid darkgray;
            border-radius: 4px;
            padding: 5px;
            color: white;
            background-color: darkgray;
        }
        #order:hover{
            color: #E5C286;
            background-color: white;
        }
        #empty:hover{
            color: darkgray;
            background-color: white;
        }
        #remove{
            color: #111;
        }
        #remove:hover{
            color: #D4A891;
        }
        h1{
            color: #444;
        }
    </style>

    <h1>Your order list <img src="panier.png" width="28px" height="28px"/></h1>
    <table>
        <thead>
            <tr>
                <th style="border: 1px solid #333;">Product</th>
                <th style="border: 1px solid #333;" colspan="3">Price</th>
                <th style="border: 1px solid #333;">Remove</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td align="left" style="border: 1px solid #333;">
                        {{ $item->taste }} with {{ $item->topping }} and 
                        @if ($item->sugar == 1)
                            No Sugar (0%)
                        @elseif ($item->sugar == 2)
                            Light (5-10%)
                        @elseif ($item->sugar == 3)
                            Moderate (25%)
                        @elseif ($item->sugar == 4)
                            Standard (50%)
                        @elseif ($item->sugar == 5)
                            Half Less (75%)
                        @else
                            Full (100%)
                        @endif
                    </td>
                    <td align="left" style="border: 1px solid #333;" colspan="3"> {{ $item->price }} € </td>
                    <td style="border: 1px solid #333;">
                        <a href="{{ route('cart_remove', $item->id) }}" id="remove"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach 
            <tr>
                <td style=" border-radius: 0; border-style: none; border-bottom: 1px solid #333; text-align: left; font-weight: bold;" colspan="5">TOTAL: <span> {{ $total }} €  </span></td>
                
            </tr>
        </tbody>
        <tfoot>
                <tr>
                   
                    <td align="center" style="border: none;" colspan="3"><a href="{{ route('cart_empty') }}" id="empty">Empty</a></td>
                    <td align="center" style="border: none" colspan="3"><a href="{{ route('order_add') }}" id="order">Order</a></td>
                </tr>
        </tfoot>
    </table>
    <a href="{{ url('products') }}" class="btn btn-default" style="margin-top:1em">Add Drink</a>
@endsection
